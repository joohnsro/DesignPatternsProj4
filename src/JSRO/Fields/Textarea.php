<?php

namespace JSRO\Fields;

use JSRO\FieldAbstract;

class Textarea extends FieldAbstract
{
    protected $id;
    protected $name;
    protected $value;
    protected $observers = [];
    protected $label;

    public function __construct($id, $name, $value)
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
    }

    public function setId($id){ $this->id = $id; }
    public function getId(){ return $this->id; }
    public function setName($name){ $this->name = $name; }
    public function getName(){ return $this->name; }
    public function setValue($value){ $this->value = $value; }
    public function getValue(){ return $this->value; }
    public function setLabel($label){ $this->label = $label;}
    public function getLabel(){ return $this->label; }

    public function adicionaLabel($label)
    {
        $this->label = "<label for='" . $this->getId() . "'>" . $label . "</label>";
    }

    public function getField(){
        echo "<textarea type='text' id='" . $this->getId() . "' name='" . $this->getName() . "' class='form-control' rows='3'>" . $this->getValue() . "</textarea>";
    }

}