<?php

/* @CoreHome/_singleWidget.twig */
class __TwigTemplate_70bd945a48cf426e34619d0f2aa0237c756502da2a7579fbd8984f4ae3ef1248 extends Twig_Template
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
        echo "<div piwik-content-block content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html_attr");
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_singleWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div piwik-content-block content-title=\"{{ title|translate|e('html_attr') }}\">
    {{ content|raw }}
</div>";
    }
}
