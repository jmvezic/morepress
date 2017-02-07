<?php

/* @Installation/getSystemCheckWidget.twig */
class __TwigTemplate_2bb4decc70987bf5be2f4c1afd66eb5c9ef7e56059aac7b1fc7775ceafa7ac2c extends Twig_Template
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
        echo "<div class=\"widgetBody system-check\">
    ";
        // line 2
        if (( !(isset($context["numErrors"]) ? $context["numErrors"] : $this->getContext($context, "numErrors")) &&  !(isset($context["numWarnings"]) ? $context["numWarnings"] : $this->getContext($context, "numWarnings")))) {
            // line 3
            echo "        <p class=\"system-success\"><span class=\"icon-ok\"></span> ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SystemCheckNoErrorsOrWarnings")), "html", null, true);
            echo "</p>
    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["numErrors"]) ? $context["numErrors"] : $this->getContext($context, "numErrors"))) {
            // line 7
            echo "        <p class=\"system-errors\"><span class=\"icon-error\"></span> ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Errors")), "html", null, true);
            echo "</p>
        <ul>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                <li title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["error"], "getLongErrorMessage", array()), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["error"], "getLabel", array()), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ((isset($context["numWarnings"]) ? $context["numWarnings"] : $this->getContext($context, "numWarnings"))) {
            // line 16
            echo "
        <p class=\"system-warnings\">

            ";
            // line 19
            if ((isset($context["numErrors"]) ? $context["numErrors"] : $this->getContext($context, "numErrors"))) {
                // line 20
                echo "                <br />
            ";
            }
            // line 22
            echo "
            <span class=\"icon-warning\"></span> ";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Warnings")), "html", null, true);
            echo "
        </p>
        <ul>
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["warnings"]) ? $context["warnings"] : $this->getContext($context, "warnings")));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 27
                echo "                <li title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["warning"], "getLongErrorMessage", array()), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["warning"], "getLabel", array()), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </ul>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (((isset($context["numErrors"]) ? $context["numErrors"] : $this->getContext($context, "numErrors")) || (isset($context["numWarnings"]) ? $context["numWarnings"] : $this->getContext($context, "numWarnings")))) {
            // line 33
            echo "        <p>
            <br />
            <a href=\"";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "Installation", "action" => "systemCheckPage"))), "html", null, true);
            echo "\"
            >";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SystemCheckViewFullSystemCheck")), "html", null, true);
            echo "</a>
        </p>
    ";
        }
        // line 39
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Installation/getSystemCheckWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  117 => 36,  113 => 35,  109 => 33,  107 => 32,  104 => 31,  100 => 29,  89 => 27,  85 => 26,  79 => 23,  76 => 22,  72 => 20,  70 => 19,  65 => 16,  63 => 15,  60 => 14,  56 => 12,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"widgetBody system-check\">
    {% if not numErrors and not numWarnings %}
        <p class=\"system-success\"><span class=\"icon-ok\"></span> {{ 'Installation_SystemCheckNoErrorsOrWarnings'|translate }}</p>
    {% endif %}

    {% if numErrors %}
        <p class=\"system-errors\"><span class=\"icon-error\"></span> {{ 'General_Errors'|translate }}</p>
        <ul>
            {% for error in errors %}
                <li title=\"{{ error.getLongErrorMessage|e('html_attr') }}\">{{ error.getLabel }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if numWarnings %}

        <p class=\"system-warnings\">

            {% if numErrors %}
                <br />
            {% endif %}

            <span class=\"icon-warning\"></span> {{ 'General_Warnings'|translate }}
        </p>
        <ul>
            {% for warning in warnings %}
                <li title=\"{{ warning.getLongErrorMessage|e('html_attr') }}\">{{ warning.getLabel }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if numErrors or numWarnings %}
        <p>
            <br />
            <a href=\"{{ linkTo({'module': 'Installation', 'action': 'systemCheckPage'}) }}\"
            >{{ 'Installation_SystemCheckViewFullSystemCheck'|translate }}</a>
        </p>
    {% endif %}
</div>";
    }
}
