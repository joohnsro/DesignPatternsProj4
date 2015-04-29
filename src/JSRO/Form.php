<?php

namespace JSRO;

class Form
{

    protected $action;
    protected $method;
    protected $fields;

    public function __construct($action = "#", $method = "get")
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function adicionarCampos($field, $params, $title = null)
    {
        $fieldData = array();

        if ($field == "input"){
            $fieldData['title'] = $title;
            $fieldData['field'] = $this->getFieldInput($params);
        }

        $this->fields[] = $fieldData;
        return $this->fields;
    }

    public function render()
    {
        echo "<form action='" . $this->action . "' method='" . $this->method . "'>";
        foreach ($this->fields as $field){
            if ($field['title'] !== null && $field['title'] !== ""){
                echo "<label for='" . $this->getParam("id", $field['field']) . "'>" . $field['title'] . "</label>";
            }

            echo $field['field'];
        }
        echo "</form>";
    }

    protected function getFieldInput($params){
        return "<input " . $params . ">";
    }

    protected function getFieldTextArea($params, $value = null){
        return "<textarea " . $params . " >" . $value . "</textarea>";
    }

    protected function getFieldButton($params, $value = null){
        return "<button " . $params . " >" . $value . "</button>";
    }

    protected function getParam($nameParam, $string)
    {
        if (!preg_match("/$nameParam=[(\'|\")](.*?)[(\'|\")]/", $string, $matches)){
            return null;
        }
        return $matches[1];
    }

}