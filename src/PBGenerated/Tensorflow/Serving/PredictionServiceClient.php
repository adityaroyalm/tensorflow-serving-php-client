<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Tensorflow\Serving;

/**
 * PredictionService provides access to machine-learned models loaded by
 * model_servers.
 */
class PredictionServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Predict -- provides access to loaded TensorFlow model.
     * @param \Tensorflow\Serving\PredictRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Predict(\Tensorflow\Serving\PredictRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tensorflow.serving.PredictionService/Predict',
        $argument,
        ['\Tensorflow\Serving\PredictResponse', 'decode'],
        $metadata, $options);
    }

}
