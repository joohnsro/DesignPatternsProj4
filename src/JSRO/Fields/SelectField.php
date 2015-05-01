<?php

namespace JSRO\Fields;

use JSRO\FieldAbstract;

class SelectField extends FieldAbstract
{
    public function setField($param)
    {
        if (isset($param['type'])) $this->setType($param['type']);
        if (isset($param['id'])) $this->setId($param['id']);
        if (isset($param['name'])) $this->setName($param['name']);
        if (isset($param['class'])) $this->setClass($param['class']);
        if (isset($param['value'])) $this->setValue($param['value']);
        if (isset($param['required'])) $this->setRequired($param['required']);
        if (isset($param['options'])) $this->setOptions($param['options']);
    }

    public function getField()
    {
        return '<select id="' . $this->getId() . '" name="' . $this->getName() . '" class="' . $this->getClass() . '" ' . $this->getRequired() . '>'. $this->optionsField($this->getOptions()) .'</select>';
    }

    protected function optionsField($options)
    {
        $optionsFields = "";

        foreach($options as $option){
            $optionsFields .= '<option value="' . $option['value'] . '">' . $option['name'] . '</option>';
        }

        return $optionsFields;
    }

} 