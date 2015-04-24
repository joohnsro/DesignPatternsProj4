<?php

namespace JSRO\TemplateHorizontal;

use JSRO\iInputs;
use JSRO\Campo;

class InputSubmitHorizontal implements iInputs
{

    protected $input;

    public function __construct(Campo $campo)
    {
        $this->input = '
            <div class="form-group">
                <div class="col-md-12 text-right">
                  <input type="submit" class="'.$campo->getClass().'" id="' . $campo->getId() . '" name="' . $campo->getName() . '" value="' . $campo->getValue() . '" placeholder="' . $campo->getPlaceholder() .'">
                </div>
            </div>
            ';
    }

    public function getInput()
    {
        return $this->input;
    }

} 