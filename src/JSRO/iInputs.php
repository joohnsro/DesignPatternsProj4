<?php

namespace JSRO;


interface iInputs
{
    public function __construct(Campo $campo);
    public function getInput();
} 