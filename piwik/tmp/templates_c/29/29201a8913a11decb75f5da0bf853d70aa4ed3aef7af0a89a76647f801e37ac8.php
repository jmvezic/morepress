<?php

/* @CoreHome/checkForUpdates.twig */
class __TwigTemplate_e45e0dde11ac79929dd45993bb81af6ca3805615d70bf7bab21956691f02058d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("@CoreHome/_headerMessage.twig", "@CoreHome/checkForUpdates.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@CoreHome/checkForUpdates.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% include \"@CoreHome/_headerMessage.twig\" %}";
    }
}
