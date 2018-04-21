<?php

namespace Harranali\Tfserving;

interface PredictMessageInterface
{
    public function setInputTensorName ($tensorName);
    public function setInputTensorType ($tensorType);
    public function setInputTensorValue ($tensorValue);
    public function getInputTensorName ();
    public function getInputTensorType ();
    public function getInputTensorValue ();
}
