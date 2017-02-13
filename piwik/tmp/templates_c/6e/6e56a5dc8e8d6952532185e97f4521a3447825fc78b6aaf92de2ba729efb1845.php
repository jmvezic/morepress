<?php

/* @Marketplace/overview.twig */
class __TwigTemplate_3cc4b30d9e388596799ad2dce170ee645c62fab2c47d3b415ca87f7c90b15631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Marketplace/overview.twig", 1);
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
        // line 2
        $context["pluginsMacro"] = $this->loadTemplate("@CorePluginsAdmin/macros.twig", "@Marketplace/overview.twig", 2);
        // line 4
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_Marketplace")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"marketplace\" piwik-marketplace>

        <div piwik-content-intro>
            <h2 piwik-enriched-headline feature-name=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Marketplace")), "html", null, true);
        echo "\"
            >";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
        echo "</h2>
            <p>
                ";
        // line 14
        if ( !(isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 15
            echo "                    ";
            if ((isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
                // line 16
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_NotAllowedToBrowseMarketplaceThemes")), "html", null, true);
                echo "
                    ";
            } else {
                // line 18
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_NotAllowedToBrowseMarketplacePlugins")), "html", null, true);
                echo "
                    ";
            }
            // line 20
            echo "                ";
        } elseif ((isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
            // line 21
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ThemesDescription")), "html", null, true);
            echo "
                    ";
            // line 22
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_InstallingNewPluginViaMarketplaceOrUpload", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Themes")), "<a href=\"#\" class=\"uploadPlugin\">", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "</a>"));
            echo "
                ";
        } else {
            // line 24
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginsExtendPiwik")), "html", null, true);
            echo "
                    ";
            // line 25
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_InstallingNewPluginViaMarketplaceOrUpload", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins")), "<a href=\"#\" class=\"uploadPlugin\">", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "</a>"));
            echo "
                ";
        }
        // line 27
        echo "            </p>

            ";
        // line 29
        $this->loadTemplate("@Marketplace/licenseform.twig", "@Marketplace/overview.twig", 29)->display($context);
        // line 30
        echo "
            <div class=\"ui-confirm\" id=\"installPluginByUpload\">
                <h2>";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_TeaserExtendPiwikByUpload")), "html", null, true);
        echo "</h2>

                <p class=\"description\"> ";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_AllowedUploadFormats")), "html", null, true);
        echo " </p>

                <form enctype=\"multipart/form-data\" method=\"post\" id=\"uploadPluginForm\"
                      action=\"";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "CorePluginsAdmin", "action" => "uploadPlugin", "nonce" => (isset($context["installNonce"]) ? $context["installNonce"] : $this->getContext($context, "installNonce"))))), "html", null, true);
        echo "\">
                    <input type=\"file\" name=\"pluginZip\">
                    <br />
                    <input class=\"startUpload btn\" type=\"submit\" value=\"";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_UploadZipFile")), "html", null, true);
        echo "\">
                </form>
            </div>

            <div class=\"row marketplaceActions\" ng-controller=\"PiwikMarketplaceController as marketplace\">
                <div piwik-field uicontrol=\"select\" name=\"plugin_type\"
                     class=\"col s12 m6 l4\"
                     ng-model=\"marketplace.pluginType\"
                     ng-change=\"marketplace.changePluginType()\"
                     title=\"";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Show")), "html_attr");
        echo "\"
                     value=\"";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["pluginType"]) ? $context["pluginType"] : $this->getContext($context, "pluginType")), "html", null, true);
        echo "\"
                     full-width=\"true\"
                     options=\"";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["pluginTypeOptions"]) ? $context["pluginTypeOptions"] : $this->getContext($context, "pluginTypeOptions"))), "html", null, true);
        echo "\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"plugin_sort\"
                     title=\"";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Sort")), "html_attr");
        echo "\"
                     value=\"";
        // line 57
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "html", null, true);
        echo "\"
                     ng-model=\"marketplace.pluginSort\"
                     ng-change=\"marketplace.changePluginSort()\"
                     class=\"col s12 m6 l4\"
                     full-width=\"true\"
                     options=\"";
        // line 62
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["pluginSortOptions"]) ? $context["pluginSortOptions"] : $this->getContext($context, "pluginSortOptions"))), "html", null, true);
        echo "\">
                </div>

                ";
        // line 66
        echo "                ";
        if (((twig_length_filter($this->env, (isset($context["pluginsToShow"]) ? $context["pluginsToShow"] : $this->getContext($context, "pluginsToShow"))) > 20) || (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")))) {
            // line 67
            echo "                    <div class=\"col s12 m12 l4 \">
                        <form action=\"";
            // line 68
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("sort" => ""))), "html", null, true);
            echo "\" method=\"post\" class=\"plugin-search\">
                            <div piwik-field uicontrol=\"text\" name=\"query\"
                                 title=\"";
            // line 70
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["numAvailablePlugins"]) ? $context["numAvailablePlugins"] : $this->getContext($context, "numAvailablePlugins")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, lcfirst(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins"))), "html", null, true);
            echo "...\"
                                 value=\"";
            // line 71
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
            echo "\"
                                 full-width=\"true\">
                            </div>
                            <span class=\"icon-search\" onclick=\"\$('form.plugin-search').submit();\"></span>
                        </form>
                    </div>
                ";
        }
        // line 78
        echo "            </div>
        </div>

        ";
        // line 81
        $this->loadTemplate("@Marketplace/plugin-list.twig", "@Marketplace/overview.twig", 81)->display($context);
        // line 82
        echo "
        <div class=\"footer-message center\">
            ";
        // line 84
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_DevelopersLearnHowToDevelopPlugins", "<a href=\"?module=Proxy&action=redirect&url=http://developer.piwik.org/develop\" target=\"_blank\">", "</a>"));
        echo "
            <br />
            <br />
            <br />
            <a rel=\"noreferrer\" href=\"https://shop.piwik.org/faq/\" target=\"_blank\">FAQ</a> |
            <a rel=\"noreferrer\" href=\"https://shop.piwik.org/terms-conditions/\" target=\"_blank\">Terms</a> |
            <a rel=\"noreferrer\" href=\"https://piwik.org/privacy-policy/\" target=\"_blank\">Privacy</a> |
            <a rel=\"noreferrer\" href=\"https://piwik.org/contact/\" target=\"_blank\">Contact</a>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@Marketplace/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 84,  202 => 82,  200 => 81,  195 => 78,  185 => 71,  177 => 70,  172 => 68,  169 => 67,  166 => 66,  160 => 62,  152 => 57,  148 => 56,  141 => 52,  136 => 50,  132 => 49,  120 => 40,  114 => 37,  108 => 34,  103 => 32,  99 => 30,  97 => 29,  93 => 27,  88 => 25,  83 => 24,  78 => 22,  73 => 21,  70 => 20,  64 => 18,  58 => 16,  55 => 15,  53 => 14,  48 => 12,  44 => 11,  38 => 7,  35 => 6,  31 => 1,  27 => 4,  25 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"admin.twig\" %}
{% import '@CorePluginsAdmin/macros.twig' as pluginsMacro %}

{% set title %}{{ 'Marketplace_Marketplace'|translate }}{% endset %}

{% block content %}

    <div class=\"marketplace\" piwik-marketplace>

        <div piwik-content-intro>
            <h2 piwik-enriched-headline feature-name=\"{{ 'CorePluginsAdmin_Marketplace'|translate }}\"
            >{{ title|e('html_attr') }}</h2>
            <p>
                {% if not isSuperUser %}
                    {% if showThemes %}
                        {{ 'Marketplace_NotAllowedToBrowseMarketplaceThemes'|translate }}
                    {% else %}
                        {{ 'Marketplace_NotAllowedToBrowseMarketplacePlugins'|translate }}
                    {% endif %}
                {% elseif showThemes %}
                    {{ 'CorePluginsAdmin_ThemesDescription'|translate }}
                    {{ 'Marketplace_InstallingNewPluginViaMarketplaceOrUpload'|translate(('CorePluginsAdmin_Themes'|translate), '<a href=\"#\" class=\"uploadPlugin\">', ('CorePluginsAdmin_Theme'|translate), '</a>')|raw }}
                {% else %}
                    {{ 'CorePluginsAdmin_PluginsExtendPiwik'|translate }}
                    {{ 'Marketplace_InstallingNewPluginViaMarketplaceOrUpload'|translate(('General_Plugins'|translate), '<a href=\"#\" class=\"uploadPlugin\">', ('General_Plugin'|translate), '</a>')|raw }}
                {% endif %}
            </p>

            {% include '@Marketplace/licenseform.twig' %}

            <div class=\"ui-confirm\" id=\"installPluginByUpload\">
                <h2>{{ 'Marketplace_TeaserExtendPiwikByUpload'|translate }}</h2>

                <p class=\"description\"> {{ 'Marketplace_AllowedUploadFormats'|translate }} </p>

                <form enctype=\"multipart/form-data\" method=\"post\" id=\"uploadPluginForm\"
                      action=\"{{ linkTo({'module':'CorePluginsAdmin', 'action':'uploadPlugin', 'nonce': installNonce}) }}\">
                    <input type=\"file\" name=\"pluginZip\">
                    <br />
                    <input class=\"startUpload btn\" type=\"submit\" value=\"{{ 'Marketplace_UploadZipFile'|translate }}\">
                </form>
            </div>

            <div class=\"row marketplaceActions\" ng-controller=\"PiwikMarketplaceController as marketplace\">
                <div piwik-field uicontrol=\"select\" name=\"plugin_type\"
                     class=\"col s12 m6 l4\"
                     ng-model=\"marketplace.pluginType\"
                     ng-change=\"marketplace.changePluginType()\"
                     title=\"{{ 'Show'|translate|e('html_attr') }}\"
                     value=\"{{ pluginType }}\"
                     full-width=\"true\"
                     options=\"{{ pluginTypeOptions|json_encode }}\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"plugin_sort\"
                     title=\"{{ 'Sort'|translate|e('html_attr') }}\"
                     value=\"{{ sort }}\"
                     ng-model=\"marketplace.pluginSort\"
                     ng-change=\"marketplace.changePluginSort()\"
                     class=\"col s12 m6 l4\"
                     full-width=\"true\"
                     options=\"{{ pluginSortOptions|json_encode }}\">
                </div>

                {# Hide filters and search for themes because we don't have many of them #}
                {% if (pluginsToShow|length) > 20 or query %}
                    <div class=\"col s12 m12 l4 \">
                        <form action=\"{{ linkTo({'sort': ''}) }}\" method=\"post\" class=\"plugin-search\">
                            <div piwik-field uicontrol=\"text\" name=\"query\"
                                 title=\"{{ 'General_Search'|translate }} {{ numAvailablePlugins }} {{ 'General_Plugins'|translate|lcfirst }}...\"
                                 value=\"{{ query }}\"
                                 full-width=\"true\">
                            </div>
                            <span class=\"icon-search\" onclick=\"\$('form.plugin-search').submit();\"></span>
                        </form>
                    </div>
                {% endif %}
            </div>
        </div>

        {% include '@Marketplace/plugin-list.twig' %}

        <div class=\"footer-message center\">
            {{ 'Marketplace_DevelopersLearnHowToDevelopPlugins'|translate('<a href=\"?module=Proxy&action=redirect&url=http://developer.piwik.org/develop\" target=\"_blank\">', '</a>')|raw }}
            <br />
            <br />
            <br />
            <a rel=\"noreferrer\" href=\"https://shop.piwik.org/faq/\" target=\"_blank\">FAQ</a> |
            <a rel=\"noreferrer\" href=\"https://shop.piwik.org/terms-conditions/\" target=\"_blank\">Terms</a> |
            <a rel=\"noreferrer\" href=\"https://piwik.org/privacy-policy/\" target=\"_blank\">Privacy</a> |
            <a rel=\"noreferrer\" href=\"https://piwik.org/contact/\" target=\"_blank\">Contact</a>
        </div>

    </div>

{% endblock %}";
    }
}
