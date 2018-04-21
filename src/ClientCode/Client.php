<?php

namespace Harranali\Tfserving;

use Google\Protobuf\Int64Value;
use Grpc\ChannelCredentials;
use Tensorflow\TensorProto;
use Tensorflow\TensorShapeProto_Dim;
use Tensorflow\TensorShapeProto;
use Tensorflow\Serving\ModelSpec;
use Tensorflow\Serving\PredictionServiceClient;
use Tensorflow\Serving\PredictRequest;

class Client
{
    protected $hostAndPort;
	protected $modelName;
	protected $modelVersion;
	protected $predictionService;

    /**
     * Client constructor.
     *
     * @param $hostAndPort
     * @param $modelName
     * @param $modelVersion
     */
	public function __construct($hostAndPort, $modelName, $modelVersion) {
        $this->hostAndPort = $hostAndPort;
		$this->modelName = $modelName;
		$this->modelVersion = $modelVersion;

		$this->predictionService = new PredictionServiceClient($this->hostAndPort, [
										    'credentials' => ChannelCredentials::createInsecure(),
										]);
	}

    /**
     *
     * @param \Harranali\Tfserving\PredictMessageInterface $predictMessage
     *
     * @return array|null
     *
     * @author  Harran Modathir <harran.m@gmail.com>
     */
	public function predict(PredictMessageInterface $predictMessage) {
		$res = [];

		$predictRquest = $this->preparePredictRequest($predictMessage);
		list($response, $meta) = $this->predictionService->predict($predictRquest)->wait();

		if(is_null($response)) {
			return null;
		}

		foreach ($response->getOutputs() as $key => $tensor) {
			$res[$key] = $tensor->serializeToJsonString();
		}

		return $res;
	}

    /**
     *
     * @param \Harranali\Tfserving\PredictMessageInterface $predictMessage
     *
     * @return \Tensorflow\Serving\PredictRequest
     *
     * @author  Harran Modathir <harran.m@gmail.com>
     */
	protected function preparePredictRequest(PredictMessageInterface $predictMessage)
	{
		$modelSpec = new ModelSpec();
		$modelSpec->setName($this->modelName);
			$modelVersion = new Int64Value;
			$modelVersion->setValue($this->modelVersion);
		$modelSpec->setVersion($modelVersion);

		$dim = new TensorShapeProto_Dim;
		$dim->setSize(1);

		$shape = new TensorShapeProto;
		$shape->setUnknownRank(true);

		$tensor = new TensorProto;
		$tensor->setDtype($predictMessage->getInputTensorType());
		$tensor->setTensorShape($shape);

		$input = is_array($predictMessage->getInputTensorValue()) ? $predictMessage->getInputTensorValue() : [$predictMessage->getInputTensorValue()];
		$tensor->setIntVal($input);

		$predictRequest = new PredictRequest;
		$predictRequest->setModelSpec($modelSpec);

		return $predictRequest->setInputs([$predictMessage->getInputTensorName() => $tensor]);
	}
}
