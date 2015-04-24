<?php

namespace JSRO;

class Form
{

    protected $action;
    protected $method;

    protected $campos;
    protected $template;

    protected $form;

    public function __construct(FormTemplate $template)
    {
        $this->template = $template;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    public function adicionarCampos(iInputs $input)
    {
        $this->campos .= $input->getInput();
        return $this->campos;
    }

    public function getTemplate()
    {
        $this->template->ajusteHeader($this->action, $this->method);
        $this->template->ajusteCampos($this->campos);
        $this->template->ajusteFooter();

        return $this->template->carregaTemplate();
    }

    public function render()
    {
        echo $this->getTemplate();
    }

}