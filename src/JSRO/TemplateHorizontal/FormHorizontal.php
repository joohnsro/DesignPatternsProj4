<?php

namespace JSRO\TemplateHorizontal;

use JSRO\FormTemplate;

class FormHorizontal implements FormTemplate
{

    protected $header;
    protected $conteudo;
    protected $footer;

    public function ajusteHeader($action, $method)
    {
        $this->header = '<form action="' . $action . '" method="' . $method . '" class="form-horizontal">';
        return $this->header;
    }

    public function ajusteCampos($campos)
    {
        $this->conteudo = $campos;
        return $this->conteudo;
    }

    public function ajusteFooter()
    {
        $this->footer = '</form>';
        return $this->footer;
    }

    public function carregaTemplate()
    {
        return $this->header . $this->conteudo . $this->footer;
    }

} 