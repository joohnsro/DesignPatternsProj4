<?php

namespace JSRO\TemplateInline;

use JSRO\iInputs;
use JSRO\Campo;

class InputSubmitInline implements iInputs
{

    protected $input;

    public function __construct(Campo $campo)
    {
        $this->input = '
        <input type="submit" class="'.$campo->getClass().'" id="' . $campo->getId() . '" name="' . $campo->getName() . '" value="' . $campo->getValue() . '">';
    }

    public function getInput()
    {
        return $this->input;
    }

} 