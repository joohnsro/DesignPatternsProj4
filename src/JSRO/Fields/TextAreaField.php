<?php

namespace JSRO\Fields;

use JSRO\FieldAbstract;

class TextAreaField extends FieldAbstract
{

    public function setField($param)
    {
        if (isset($param['type'])) $this->setType($param['type']);
        if (isset($param['id'])) $this->setId($param['id']);
        if (isset($param['name'])) $this->setName($param['name']);
        if (isset($param['class'])) $this->setClass($param['class']);
        if (isset($param['value'])) $this->setValue($param['value']);
        if (isset($param['required'])) $this->setRequired($param['required']);
    }

    public function getField()
    {
        return '<textarea type="' . $this->getType() . '" id="' . $this->getId() . '" name="' . $this->getName() . '" class="' . $this->getClass() . '" ' . $this->getRequired() . '>'. $this->getValue() .'</textarea>';
    }

} 