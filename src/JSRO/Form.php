<?php

namespace JSRO;

use JSRO\Fields\LabelField;

class Form
{

    protected $fields;

    public function __construct(Validator $validator){}

    public function adicionarCampos(FieldAbstract $field, LabelField $label = null)
    {
        if ($label !== null) { $this->fields[]["label"] = $label->getField(); }
        $this->fields[]["field"] = $field->getField();

        return $this->fields;
    }

    public function render()
    {
        foreach ($this->fields as $field){
            echo $field['label'];
            echo $field['field'];
        }
    }

}