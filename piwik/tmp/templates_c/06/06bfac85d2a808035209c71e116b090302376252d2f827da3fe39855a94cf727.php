<?php

/* @CoreHome/_dataTableFooter.twig */
class __TwigTemplate_e3de09fcf73d0cf1fbb8d84b3bc2ff938f997f36280f5c56501e68e6579437b4 extends Twig_Template
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
        echo "<div class=\"dataTableFeatures\">
    <div class=\"dataTableFooterNavigation\">

        ";
        // line 4
        if (( !(isset($context["isDataTableEmpty"]) ? $context["isDataTableEmpty"] : $this->getContext($context, "isDataTableEmpty")) && ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_offset_information", array()) || $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_pagination_control", array())))) {
            // line 5
            echo "            <div class=\"row dataTablePaginationControl\">
                ";
            // line 6
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_pagination_control", array())) {
                // line 7
                echo "                    <span class=\"dataTablePrevious\">&lsaquo; ";
                if ($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : null), "dataTablePreviousIsFirst", array(), "any", true, true)) {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_First")), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Previous")), "html", null, true);
                }
                echo "</span>
                    &nbsp;
                ";
            }
            // line 10
            echo "                ";
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_offset_information", array())) {
                // line 11
                echo "                    <span class=\"dataTablePages\"></span>
                ";
            }
            // line 13
            echo "                ";
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_pagination_control", array())) {
                // line 14
                echo "                    &nbsp;<span class=\"dataTableNext\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Next")), "html", null, true);
                echo " &rsaquo;</span>
                ";
            }
            // line 16
            echo "            </div>
        ";
        }
        // line 18
        echo "
        <div class=\"row\">
            <div class=\"col s9 m9 dataTableControls\">
                ";
        // line 21
        $this->loadTemplate("@CoreHome/_dataTableActions.twig", "@CoreHome/_dataTableFooter.twig", 21)->display($context);
        // line 22
        echo "            </div>

            ";
        // line 24
        if ((($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_footer_icons", array()) && $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_pagination_control", array())) || $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_limit_control", array()))) {
            // line 25
            echo "                <div class=\"col s3 m3 limitSelection\"
                     title=\"";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RowsToDisplay")), "html", null, true);
            echo "\" alt=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RowsToDisplay")), "html", null, true);
            echo "\"
                     ></div>
            ";
        }
        // line 29
        echo "        </div>

        ";
        // line 31
        if (( !twig_test_empty($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "related_reports", array())) && $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_related_reports", array()))) {
            // line 32
            echo "            <div class=\"row datatableRelatedReports\">
                ";
            // line 33
            echo $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "related_reports_title", array());
            echo "
                <ul style=\"list-style:none;";
            // line 34
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "related_reports", array())) == 1)) {
                echo "display:inline-block;";
            }
            echo "}\">
                    <li><span href=\"";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "self_url", array()), "html", null, true);
            echo "\" style=\"display:none;\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "title", array()), "html", null, true);
            echo "</span></li>

                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "related_reports", array()));
            foreach ($context['_seq'] as $context["reportUrl"] => $context["reportTitle"]) {
                // line 38
                echo "                        <li><span href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["reportUrl"], "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $context["reportTitle"], "html", null, true);
                echo "</span></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reportUrl'], $context['reportTitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </ul>
            </div>
        ";
        }
        // line 43
        echo "    </div>

    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> ";
        // line 45
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
        echo "</span>

    ";
        // line 47
        if (($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "show_footer_message", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_footer_message", array())))) {
            // line 48
            echo "        <div class='datatableFooterMessage'>";
            echo $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_footer_message", array());
            echo "</div>
    ";
        }
        // line 50
        echo "
</div>

<span class=\"loadingPiwikBelow\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> ";
        // line 53
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
        echo "</span>

<div class=\"dataTableSpacer\"></div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableFooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 53,  149 => 50,  143 => 48,  141 => 47,  136 => 45,  132 => 43,  127 => 40,  116 => 38,  112 => 37,  105 => 35,  99 => 34,  95 => 33,  92 => 32,  90 => 31,  86 => 29,  78 => 26,  75 => 25,  73 => 24,  69 => 22,  67 => 21,  62 => 18,  58 => 16,  52 => 14,  49 => 13,  45 => 11,  42 => 10,  31 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"dataTableFeatures\">
    <div class=\"dataTableFooterNavigation\">

        {% if not isDataTableEmpty and (properties.show_offset_information or properties.show_pagination_control) %}
            <div class=\"row dataTablePaginationControl\">
                {% if properties.show_pagination_control %}
                    <span class=\"dataTablePrevious\">&lsaquo; {% if clientSideParameters.dataTablePreviousIsFirst is defined %}{{ 'General_First'|translate }}{% else %}{{ 'General_Previous'|translate }}{% endif %}</span>
                    &nbsp;
                {% endif %}
                {% if properties.show_offset_information %}
                    <span class=\"dataTablePages\"></span>
                {% endif %}
                {% if properties.show_pagination_control %}
                    &nbsp;<span class=\"dataTableNext\">{{ 'General_Next'|translate }} &rsaquo;</span>
                {% endif %}
            </div>
        {% endif %}

        <div class=\"row\">
            <div class=\"col s9 m9 dataTableControls\">
                {% include \"@CoreHome/_dataTableActions.twig\" %}
            </div>

            {% if properties.show_footer_icons and properties.show_pagination_control or properties.show_limit_control %}
                <div class=\"col s3 m3 limitSelection\"
                     title=\"{{ 'General_RowsToDisplay'|translate }}\" alt=\"{{ 'General_RowsToDisplay'|translate }}\"
                     ></div>
            {% endif %}
        </div>

        {% if (properties.related_reports is not empty) and properties.show_related_reports %}
            <div class=\"row datatableRelatedReports\">
                {{ properties.related_reports_title|raw }}
                <ul style=\"list-style:none;{% if properties.related_reports|length == 1 %}display:inline-block;{% endif %}}\">
                    <li><span href=\"{{ properties.self_url }}\" style=\"display:none;\">{{ properties.title }}</span></li>

                    {% for reportUrl,reportTitle in properties.related_reports %}
                        <li><span href=\"{{ reportUrl }}\">{{ reportTitle }}</span></li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}
    </div>

    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> {{ 'General_LoadingData'|translate }}</span>

    {% if properties.show_footer_message is defined and properties.show_footer_message is not empty %}
        <div class='datatableFooterMessage'>{{ properties.show_footer_message | raw }}</div>
    {% endif %}

</div>

<span class=\"loadingPiwikBelow\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> {{ 'General_LoadingData'|translate }}</span>

<div class=\"dataTableSpacer\"></div>
";
    }
}
