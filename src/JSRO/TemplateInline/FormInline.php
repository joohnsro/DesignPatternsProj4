<?php

namespace JSRO\TemplateInline;

use JSRO\FormTemplate;

class FormInline implements FormTemplate
{

    protected $header;
    protected $conteudo;
    protected $footer;

    public function ajusteHeader($action, $method)
    {
        $this->header = '
        <form action="' . $action . '" method="' . $method . '" class="form-inline">
        ';
        return $this->header;
    }

    public function ajusteCampos($campos)
    {
        $this->conteudo = $campos;
        return $this->conteudo;
    }

    public function ajusteFooter()
    {
        $this->footer = '
        </form>
        ';
        return $this->footer;
    }

    public function carregaTemplate()
    {
        return $this->header . $this->conteudo . $this->footer;
    }

} 