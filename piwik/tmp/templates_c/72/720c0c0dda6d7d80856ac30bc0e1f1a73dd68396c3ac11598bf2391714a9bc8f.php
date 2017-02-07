<?php

/* @UserCountry/_updaterNextRunTime.twig */
class __TwigTemplate_ef148092d198226014a01de1bf401d372a336d9a6e90644ba33a707d184bb82b extends Twig_Template
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
        if ( !twig_test_empty(((array_key_exists("nextRunTime", $context)) ? (_twig_default_filter((isset($context["nextRunTime"]) ? $context["nextRunTime"] : $this->getContext($context, "nextRunTime")))) : ("")))) {
            // line 2
            echo "  ";
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["nextRunTime"]) ? $context["nextRunTime"] : $this->getContext($context, "nextRunTime")), "getTimestamp", array(), "method")) <= twig_date_converter($this->env))) {
                // line 3
                echo "      ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterScheduledForNextRun")), "html", null, true);
                echo "
  ";
            } else {
                // line 5
                echo "      ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterWillRunNext", (("<strong>" . $this->getAttribute((isset($context["nextRunTime"]) ? $context["nextRunTime"] : $this->getContext($context, "nextRunTime")), "toString", array(), "method")) . "</strong>")));
                echo "
  ";
            }
        } else {
            // line 8
            echo "  ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterIsNotScheduledToRun")), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@UserCountry/_updaterNextRunTime.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  30 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% if nextRunTime|default is not empty %}
  {% if date(nextRunTime.getTimestamp()) <= date() %}
      {{ 'UserCountry_UpdaterScheduledForNextRun'|translate }}
  {% else %}
      {{ 'UserCountry_UpdaterWillRunNext'|translate('<strong>' ~ nextRunTime.toString() ~ '</strong>')|raw }}
  {% endif %}
{% else %}
  {{ 'UserCountry_UpdaterIsNotScheduledToRun'|translate }}
{% endif %}";
    }
}
