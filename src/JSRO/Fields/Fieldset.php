<?php

namespace JSRO\Fields;


use JSRO\FieldAbstract;

class Fieldset extends FieldAbstract
{

    private $field;
    private $fields = [];
    private $id;
    private $name;

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

        return $this;
    }

    public function getField()
    {
        $this->field = '<fieldset id="' . $this->getId() . '" name="' . $this->getName() . '" >';

        foreach ($this->fields as $field){
            $this->field .= '<div class="form-group">';
            $this->field .= (isset($field['label'])) ? $field['label'] : null;
            $this->field .= $field['field'];
            $this->field .= '</div>';
        }

        $this->field .= '</fieldset>';
        return $this->field;
    }

} 