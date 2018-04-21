<?php

namespace Harranali\Tfserving;

class PredictMessage implements PredictMessageInterface
{
	protected $tensorName;
	protected $tensorType;
	protected $tensorValue;

    /**
     *
     * @param $tensorName
     *
     * @return $this
     *
     * @author  Harran Modathir <harran.m@gmail.com>
     */
    public function setInputTensorName ($tensorName) {
    	$this->tensorName = $tensorName;

        return $this;
    }

    /**
     *
     * @param $tensorType
     *
     * @return $this
     *
     * @author  Harran Modathir <harran.m@gmail.com>
     */
    public function setInputTensorType ($tensorType) {
    	$this->tensorType = $tensorType;

        return $this;
    }

    /**
     *
     * @param $tensorValue
     *
     * @return $this
     *
     * @author  Harran Modathir <harran.m@gmail.com>
     */
    public function setInputTensorValue ($tensorValue) {
    	$this->tensorValue = $tensorValue;

        return $this;
    }

    /**
     *
     *
     * @return mixed
     *
     * @author  Harran Modathir <harran.m@gmail.com>
     */
    public function getInputTensorName () {
    	return $this->tensorName;
    }

    /**
     *
     *
     * @return mixed
     *
     * @author  Harran Modathir <harran.m@gmail.com>
     */
    public function getInputTensorType () {
    	return $this->tensorType;
    }

    /**
     *
     *
     * @return mixed
     *
     * @author  Harran Modathir <harran.m@gmail.com>
     */
    public function getInputTensorValue () {
    	return $this->tensorValue;
    }
}
