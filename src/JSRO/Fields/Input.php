<?php

namespace JSRO\Fields;


use JSRO\FieldAbstract;

class Input extends FieldAbstract
{
    protected $type;
    protected $id;
    protected $name;
    protected $value;
    protected $class;
    protected $label;

    public function __construct($type, $id, $name, $value, $class)
    {
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->class = $class;
    }

    public function setType($type){ $this->type = $type; }
    public function getType(){ return $this->type; }
    public function setId($id){ $this->id = $id; }
    public function getId(){ return $this->id; }
    public function setName($name){ $this->name = $name; }
    public function getName(){ return $this->name; }
    public function setValue($value){ $this->value = $value; }
    public function getValue(){ return $this->value; }
    public function setClass($class){ $this->class = $class; }
    public function getClass(){ return $this->class; }
    public function setLabel($label){ $this->label = $label;}
    public function getLabel(){ return $this->label; }

    public function adicionaLabel($label)
    {
        $this->label = "<label for='" . $this->getId() . "'>" . $label . "</label>";
    }

    public function getField(){
        echo "<input type='" . $this->getType() . "' id='" . $this->getId() . "' name='" . $this->getName() . "' value='" . $this->getValue() . "' class='form-control " . $this->getClass() . "'> ";
    }

}