<?php

namespace JSRO;

class Form
{

    protected $fields = array();

    public function __construct(Validator $validator){}

    public function createField(FieldAbstract $field, $param)
    {
        $this->fields = $field->setField($param);
        return $field;
    }

    public function addField(FieldAbstract $field, $param)
    {
        $field->setField($param);
        $this->fields[] = $field->getField();
        return $this->fields;
    }

    public function render()
    {
        foreach ($this->fields as $field){
            echo $field;
        }
    }

}