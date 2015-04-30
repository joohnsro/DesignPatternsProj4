<?php

namespace JSRO\Fields;

use JSRO\FieldAbstract;

class TextAreaField extends FieldAbstract
{

    public function getField()
    {
        return '<textarea type="' . $this->getType() . '" id="' . $this->getId() . '" name="' . $this->getName() . '" class="' . $this->getClass() . '" ' . $this->getRequired() . '>'. $this->getValue() .'</textarea>';
    }

    public function createField($id, $name, $class, $required, $value)
    {
        echo '<textarea id="' . $id . '" name="' . $name . '" class="' . $class . '" ' . $required . '>'. $value .'</textarea>';
    }

} 