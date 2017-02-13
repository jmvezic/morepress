<?php

/* @Marketplace/macros.twig */
class __TwigTemplate_5839bba2c0a96e774a2dedc9222e34bb15489905f062cd7f5e90a636cedb00c1 extends Twig_Template
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
        echo "
";
        // line 5
        echo "
";
        // line 12
        echo "
";
    }

    // line 2
    public function getpluginDeveloper($__owner__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "owner" => $__owner__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    ";
            if (("piwik" == (isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")))) {
                echo "<img title=\"Piwik\" alt=\"Piwik\" style=\"padding-bottom:2px;height:11px;\" src=\"plugins/Morpheus/images/logo-marketplace.png\"/>";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getfeaturedIcon($__align__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "align" => $__align__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    <img class=\"featuredIcon\"
         title=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_FeaturedPlugin")), "html", null, true);
            echo "\"
         src=\"plugins/Marketplace/images/rating_important.png\"
         align=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : $this->getContext($context, "align")), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getmissingRequirementsPleaseUpdateNotice($__plugin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "plugin" => $__plugin__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "    ";
            if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array()) && (0 < twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array()))))) {
                // line 15
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                    // line 16
                    echo "<div class=\"alert alert-danger\">
                ";
                    // line 17
                    $context["requirement"] = twig_capitalize_string_filter($this->env, $this->getAttribute($context["req"], "requirement", array()));
                    // line 18
                    echo "                ";
                    if (("Php" == (isset($context["requirement"]) ? $context["requirement"] : $this->getContext($context, "requirement")))) {
                        // line 19
                        echo "                    ";
                        $context["requirement"] = "PHP";
                        // line 20
                        echo "                ";
                    }
                    // line 21
                    echo "                ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_MissingRequirementsNotice", (isset($context["requirement"]) ? $context["requirement"] : $this->getContext($context, "requirement")), $this->getAttribute($context["req"], "actualVersion", array()), $this->getAttribute($context["req"], "requiredVersion", array()))), "html", null, true);
                    echo "
            </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@Marketplace/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 24,  133 => 21,  130 => 20,  127 => 19,  124 => 18,  122 => 17,  119 => 16,  114 => 15,  111 => 14,  99 => 13,  82 => 10,  77 => 8,  74 => 7,  62 => 6,  42 => 3,  30 => 2,  25 => 12,  22 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "
{% macro pluginDeveloper(owner) %}
    {% if 'piwik' == owner %}<img title=\"Piwik\" alt=\"Piwik\" style=\"padding-bottom:2px;height:11px;\" src=\"plugins/Morpheus/images/logo-marketplace.png\"/>{% else %}{{ owner }}{% endif %}
{% endmacro %}

{% macro featuredIcon(align='') %}
    <img class=\"featuredIcon\"
         title=\"{{ 'Marketplace_FeaturedPlugin'|translate }}\"
         src=\"plugins/Marketplace/images/rating_important.png\"
         align=\"{{ align }}\" />
{% endmacro %}

{% macro missingRequirementsPleaseUpdateNotice(plugin) %}
    {% if plugin.missingRequirements and 0 < plugin.missingRequirements|length %}
        {% for req in plugin.missingRequirements -%}
            <div class=\"alert alert-danger\">
                {% set requirement = req.requirement|capitalize %}
                {% if 'Php' == requirement %}
                    {% set requirement = 'PHP' %}
                {% endif %}
                {{ 'CorePluginsAdmin_MissingRequirementsNotice'|translate(requirement, req.actualVersion, req.requiredVersion) }}
            </div>
        {%- endfor %}
    {% endif %}
{% endmacro %}
";
    }
}
