<?php

/* @CoreAdminHome/home.twig */
class __TwigTemplate_09812d1507bffc6d32d258361a0cf1020bb4e1e83f489a1014af4eb55fcd4bd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/home.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_MenuGeneralSettings")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        <div piwik-content-block content-title=\"Need help?\">
            <div>
                There are different ways you can get help. There is free support via the Piwik Community and paid support
                provided by the Piwik team and partners of Piwik. Or maybe do you have a bug to report or want to suggest a new
                feature?
                <br />
                <br />
                <a href=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "Feedback", "action" => "index"))), "html", null, true);
        echo "\">Learn more</a>
            </div>
        </div>
    ";
        $context["feedbackHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
    ";
        // line 19
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 20
            echo "        <div class=\"row\">
            <div class=\"col s12 ";
            // line 21
            if ((isset($context["isFeedbackEnabled"]) ? $context["isFeedbackEnabled"] : $this->getContext($context, "isFeedbackEnabled"))) {
                echo "m4";
            } else {
                echo "m6";
            }
            echo "\">
                <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>
            </div>
            <div class=\"col s12 ";
            // line 24
            if ((isset($context["isFeedbackEnabled"]) ? $context["isFeedbackEnabled"] : $this->getContext($context, "isFeedbackEnabled"))) {
                echo "m4";
            } else {
                echo "m6";
            }
            echo "\">
                <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
            </div>
            ";
            // line 27
            if ((isset($context["isFeedbackEnabled"]) ? $context["isFeedbackEnabled"] : $this->getContext($context, "isFeedbackEnabled"))) {
                // line 28
                echo "                <div class=\"col s12 m4\">
                    ";
                // line 29
                echo (isset($context["feedbackHelp"]) ? $context["feedbackHelp"] : $this->getContext($context, "feedbackHelp"));
                echo "
                </div>
            ";
            }
            // line 32
            echo "        </div>
    ";
        } else {
            // line 34
            echo "        ";
            echo (isset($context["feedbackHelp"]) ? $context["feedbackHelp"] : $this->getContext($context, "feedbackHelp"));
            echo "
    ";
        }
        // line 36
        echo "
    ";
        // line 37
        if ((isset($context["isMarketplaceEnabled"]) ? $context["isMarketplaceEnabled"] : $this->getContext($context, "isMarketplaceEnabled"))) {
            // line 38
            echo "        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.adminHome"));
        echo "

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    ";
        // line 55
        if (((isset($context["hasDonateForm"]) ? $context["hasDonateForm"] : $this->getContext($context, "hasDonateForm")) || (isset($context["hasPiwikBlog"]) ? $context["hasPiwikBlog"] : $this->getContext($context, "hasPiwikBlog")))) {
            // line 56
            echo "        <div class=\"row\">
            ";
            // line 57
            if ((isset($context["hasDonateForm"]) ? $context["hasDonateForm"] : $this->getContext($context, "hasDonateForm"))) {
                // line 58
                echo "                <div class=\"col s12 ";
                if ((isset($context["hasPiwikBlog"]) ? $context["hasPiwikBlog"] : $this->getContext($context, "hasPiwikBlog"))) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            ";
            }
            // line 62
            echo "            ";
            if ((isset($context["hasPiwikBlog"]) ? $context["hasPiwikBlog"] : $this->getContext($context, "hasPiwikBlog"))) {
                // line 63
                echo "                <div class=\"col s12 ";
                if ((isset($context["hasDonateForm"]) ? $context["hasDonateForm"] : $this->getContext($context, "hasDonateForm"))) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            ";
            }
            // line 67
            echo "        </div>
    ";
        }
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 69,  163 => 67,  153 => 63,  150 => 62,  140 => 58,  138 => 57,  135 => 56,  133 => 55,  117 => 42,  114 => 41,  109 => 38,  107 => 37,  104 => 36,  98 => 34,  94 => 32,  88 => 29,  85 => 28,  83 => 27,  73 => 24,  63 => 21,  60 => 20,  58 => 19,  55 => 18,  48 => 14,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin.twig' %}

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}
    {% set feedbackHelp %}
        <div piwik-content-block content-title=\"Need help?\">
            <div>
                There are different ways you can get help. There is free support via the Piwik Community and paid support
                provided by the Piwik team and partners of Piwik. Or maybe do you have a bug to report or want to suggest a new
                feature?
                <br />
                <br />
                <a href=\"{{ linkTo({'module': 'Feedback', 'action': 'index'}) }}\">Learn more</a>
            </div>
        </div>
    {% endset %}

    {% if isSuperUser %}
        <div class=\"row\">
            <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>
            </div>
            <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
            </div>
            {% if isFeedbackEnabled %}
                <div class=\"col s12 m4\">
                    {{ feedbackHelp|raw }}
                </div>
            {% endif %}
        </div>
    {% else %}
        {{ feedbackHelp|raw }}
    {% endif %}

    {% if isMarketplaceEnabled %}
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    {% endif %}

    {{ postEvent('Template.adminHome') }}

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    {% if hasDonateForm or hasPiwikBlog %}
        <div class=\"row\">
            {% if hasDonateForm %}
                <div class=\"col s12 {% if hasPiwikBlog %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            {% endif %}
            {% if hasPiwikBlog %}
                <div class=\"col s12 {% if hasDonateForm %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            {% endif %}
        </div>
    {% endif %}

{% endblock %}
";
    }
}
