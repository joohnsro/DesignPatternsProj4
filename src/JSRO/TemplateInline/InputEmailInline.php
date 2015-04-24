<?php

namespace JSRO\TemplateInline;

use JSRO\iInputs;
use JSRO\Campo;

class InputEmailInline implements iInputs
{

    protected $input;

    public function __construct(Campo $campo)
    {
        $this->input = '
        <div class="form-group">';

        if ($campo->getLabel() != "") {
            $this->input .= '
            <label for="' . $campo->getId() . '">' . $campo->getLabel() . '</label>';
        }

        $this->input .= '
            <input type="email" class="'.$campo->getClass().'" id="' . $campo->getId() . '" name="' . $campo->getName() . '" value="' . $campo->getValue() . '" placeholder="' . $campo->getPlaceholder() .'" required>
        </div>';
    }

    public function getInput()
    {
        return $this->input;
    }

} 