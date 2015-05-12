<?php

namespace JSRO;

use JSRO\Fields\LabelField;

class Form
{

    protected $action;
    protected $method;
    protected $field = array();
    protected $fields = array();

    public function __construct(Validator $validator){}

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    public function createField(FieldAbstract $field)
    {
        $this->field = $field->getField();
        return $this;
    }

    public function addField(FieldAbstract $field, LabelField $label = null)
    {
        if ($label !== null) {
            $this->fields[] = array(
                "label" => $label->getField(),
                "field" => $field->getField()
            );
        } else {
            $this->fields[] = array(
                "field" => $field->getField()
            );
        }

        return $this->fields;
    }

    public function render()
    {
        echo '<form action="' . $this->getAction() . '" method="' . $this->getMethod() . '" class="form-horizontal">';
        foreach ($this->fields as $field){
            echo ($field['label'] !== null) ? $field['label'] . $field['field'] : $field['field'];
        }
        echo '</form>';
    }

}