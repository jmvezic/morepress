<?php

/* @UserCountry/getDistinctCountries.twig */
class __TwigTemplate_8299a92e492e22b63d8139f09ef688991320aefef8cd4d50e1804224ad88a4b3 extends Twig_Template
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
        echo "<div piwik-content-block>
    <div class=\"sparkline\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineCountries"]) ? $context["urlSparklineCountries"] : $this->getContext($context, "urlSparklineCountries"))));
        echo "
        ";
        // line 4
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_DistinctCountries", (("<strong>" . call_user_func_array($this->env->getFilter('number')->getCallable(), array((isset($context["numberDistinctCountries"]) ? $context["numberDistinctCountries"] : $this->getContext($context, "numberDistinctCountries"))))) . "</strong>")));
        echo "
    </div>
    <br style=\"clear:left\"/>
</div>";
    }

    public function getTemplateName()
    {
        return "@UserCountry/getDistinctCountries.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div piwik-content-block>
    <div class=\"sparkline\">
        {{ sparkline(urlSparklineCountries) }}
        {{ 'UserCountry_DistinctCountries'|translate(\"<strong>\"~numberDistinctCountries|number~\"</strong>\")|raw }}
    </div>
    <br style=\"clear:left\"/>
</div>";
    }
}
