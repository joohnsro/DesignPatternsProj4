<?php

namespace JSRO\Fields;

use JSRO\FieldAbstract;

class InputField extends FieldAbstract
{

    public function getField()
    {
        return '<input type="' . $this->getType() . '" id="' . $this->getId() . '" name="' . $this->getName() . '" class="' . $this->getClass() . '" value="' . $this->getValue() . '" ' . $this->getRequired() . '>';
    }

    public function createField($type, $id, $name, $class, $value, $required)
    {
        echo '<input type="' . $type . '" id="' . $id . '" name="' . $name . '" class="' . $class . '" value="' . $value . '" ' . $required . '>';
    }

} 