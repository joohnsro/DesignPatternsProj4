<?php

namespace JSRO\Fields;

use JSRO\FieldAbstract;

class LabelField extends FieldAbstract
{

    private $field;
    private $id;
    private $title;

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

    public function getField()
    {
        $this->field = '<label for="' . $this->getId() . '">' . $this->getTitle() . '</label>';
        return $this->field;
    }

}