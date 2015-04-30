<?php

namespace JSRO\Fields;

use JSRO\FieldAbstract;

class LabelField extends FieldAbstract
{

    public function getField()
    {
        return '<label for="' . $this->getId() . '">' . $this->getTitle() . '</label>';
    }

    public function createField($id, $title)
    {
        echo '<label for="' . $id . '">' . $title . '</label>';
    }

} 