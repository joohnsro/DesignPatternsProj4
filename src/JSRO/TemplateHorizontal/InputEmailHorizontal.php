<?php

namespace JSRO\TemplateHorizontal;

use JSRO\iInputs;
use JSRO\Campo;

class InputEmailHorizontal implements iInputs
{

    protected $input;

    public function __construct(Campo $campo)
    {
        $this->input = '
            <div class="form-group">
                <label for="' . $campo->getId() . '" class="' . $campo->getLabelCol() . ' control-label">' . $campo->getTitle() . '</label>
                <div class="' . $campo->getCampoCol() . '">
                  <input type="email" class="' . $campo->getClass() . '" id="' . $campo->getId() . '" name="' . $campo->getName() . '" value="' . $campo->getValue() . '" placeholder="' . $campo->getPlaceholder() .'" required>
                </div>
            </div>';
    }

    public function getInput()
    {
        return $this->input;
    }

} 