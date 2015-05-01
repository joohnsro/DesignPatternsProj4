<?php

namespace JSRO\Fields;

use JSRO\FieldAbstract;

class LabelField extends FieldAbstract
{

    public function setField($param)
    {
        if (isset($param['id'])) $this->setId($param['id']);
        if (isset($param['title'])) $this->setTitle($param['title']);
    }

    public function getField()
    {
        echo '<label for="' . $this->getId() . '">' . $this->getTitle() . '</label>';
    }

}