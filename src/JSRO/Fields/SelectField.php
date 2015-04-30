<?php

namespace JSRO\Fields;

use JSRO\FieldAbstract;

class SelectField extends FieldAbstract
{
    public function getField()
    {
        return '<select id="' . $this->getId() . '" name="' . $this->getName() . '" class="' . $this->getClass() . '" ' . $this->getRequired() . '>'. $this->optionsField($this->getOptions()) .'</select>';
    }

    public function createField($id, $name, $class, $required, $options)
    {
        echo '<select id="' . $id . '" name="' . $name . '" class="' . $class . '" ' . $required . '>'. $this->optionsField($options) .'</select>';
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