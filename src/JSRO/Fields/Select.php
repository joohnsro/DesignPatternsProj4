<?php

namespace JSRO\Fields;


use JSRO\FieldAbstract;

class Select extends FieldAbstract
{
    protected $id;
    protected $name;
    protected $options;
    protected $class;
    protected $label;

    public function __construct($id, $name, $options, $class)
    {
        $this->id = $id;
        $this->name = $name;
        $this->options = $options;
        $this->class = $class;
    }

    public function setId($id){ $this->id = $id; }
    public function getId(){ return $this->id; }
    public function setName($name){ $this->name = $name; }
    public function getName(){ return $this->name; }
    public function setOptions($options){ $this->options = $options; }
    public function getOptions(){ return $this->options; }
    public function setClass($class){ $this->class = $class; }
    public function getClass(){ return $this->class; }
    public function setLabel($label){ $this->label = $label;}
    public function getLabel(){ return $this->label; }

    public function adicionaLabel($label)
    {
        $this->label = "<label for='" . $this->getId() . "'>" . $label . "</label>";
    }

    public function getField(){
        echo "<select id='" . $this->getId() . "' name='" . $this->getName() . "' class='form-control " . $this->getClass() . "'>";
        foreach($this->getOptions() as $option){
            echo "<option value='" . $option["value"] . "'>" . $option["name"] . "</option>";
        }
        echo "</select>";
    }

}