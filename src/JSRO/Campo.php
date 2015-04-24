<?php

namespace JSRO;


class Campo
{

    protected $id;
    protected $name;
    protected $class;
    protected $title;
    protected $value;
    protected $placeholder;
    protected $label;
    protected $labelCol;
    protected $campoCol;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $campoCol
     */
    public function setCampoCol($campoCol)
    {
        $this->campoCol = $campoCol;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCampoCol()
    {
        return $this->campoCol;
    }

    /**
     * @param mixed $labelCol
     */
    public function setLabelCol($labelCol)
    {
        $this->labelCol = $labelCol;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabelCol()
    {
        return $this->labelCol;
    }

}