<?php

namespace JSRO;


interface FormTemplate
{
    public function ajusteHeader($action, $method);
    public function ajusteCampos($campos);
    public function ajusteFooter();
    public function carregaTemplate();
} 