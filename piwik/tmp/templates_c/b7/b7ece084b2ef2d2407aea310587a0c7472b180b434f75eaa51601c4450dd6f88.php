<?php

/* @CorePluginsAdmin/plugins.twig */
class __TwigTemplate_1912564ccfd6ce7c3188d3896598fef7ca87a80530781c98dd0a2f81b6275a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin.twig", "@CorePluginsAdmin/plugins.twig", 2);
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
        // line 4
        $context["plugins"] = $this->loadTemplate("@CorePluginsAdmin/macros.twig", "@CorePluginsAdmin/plugins.twig", 4);
        // line 6
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginsManagement")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
    <div piwik-content-intro>
        <h2 piwik-enriched-headline>
            ";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
        echo "
        </h2>

        <p>";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginsExtendPiwik")), "html", null, true);
        echo "
            ";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OncePluginIsInstalledYouMayActivateHere")), "html", null, true);
        echo "

            ";
        // line 18
        if ((isset($context["isMarketplaceEnabled"]) ? $context["isMarketplaceEnabled"] : $this->getContext($context, "isMarketplaceEnabled"))) {
            // line 19
            echo "                ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_TeaserExtendPiwikByPlugin", (("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browsePlugins", "sort" => "")))) . "\">"), "</a>"));
            echo "
            ";
        }
        // line 21
        echo "
            ";
        // line 22
        if ( !(isset($context["isPluginsAdminEnabled"]) ? $context["isPluginsAdminEnabled"] : $this->getContext($context, "isPluginsAdminEnabled"))) {
            // line 23
            echo "                <br/>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_DoMoreContactPiwikAdmins")), "html", null, true);
            echo "
            ";
        }
        // line 25
        echo "
            <br />
            ";
        // line 27
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ChangeLookByManageThemes", (("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "themes")))) . "\">"), "</a>"));
        echo "
        </p>
    </div>

    ";
        // line 31
        if (twig_length_filter($this->env, (isset($context["pluginsHavingUpdate"]) ? $context["pluginsHavingUpdate"] : $this->getContext($context, "pluginsHavingUpdate")))) {
            // line 32
            echo "        <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, (isset($context["pluginsHavingUpdate"]) ? $context["pluginsHavingUpdate"] : $this->getContext($context, "pluginsHavingUpdate"))), "html", null, true);
            echo " Update(s) available\">

            <p>";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InfoPluginUpdateIsRecommended")), "html", null, true);
            echo "</p>

            ";
            // line 36
            echo $context["plugins"]->gettablePluginUpdates((isset($context["pluginsHavingUpdate"]) ? $context["pluginsHavingUpdate"] : $this->getContext($context, "pluginsHavingUpdate")), (isset($context["updateNonce"]) ? $context["updateNonce"] : $this->getContext($context, "updateNonce")), (isset($context["isMultiServerEnvironment"]) ? $context["isMultiServerEnvironment"] : $this->getContext($context, "isMultiServerEnvironment")));
            echo "
        </div>
    ";
        }
        // line 39
        echo "
    <div piwik-content-block content-title=\"";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstalledPlugins")), "html_attr");
        echo "\"
         class=\"pluginsManagement\"
         piwik-plugin-management>

        ";
        // line 44
        echo $context["plugins"]->getpluginsFilter();
        echo "

        ";
        // line 46
        echo $context["plugins"]->gettablePlugins((isset($context["pluginsInfo"]) ? $context["pluginsInfo"] : $this->getContext($context, "pluginsInfo")), (isset($context["pluginNamesHavingSettings"]) ? $context["pluginNamesHavingSettings"] : $this->getContext($context, "pluginNamesHavingSettings")), (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce")), (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce")), (isset($context["uninstallNonce"]) ? $context["uninstallNonce"] : $this->getContext($context, "uninstallNonce")), false, (isset($context["marketplacePluginNames"]) ? $context["marketplacePluginNames"] : $this->getContext($context, "marketplacePluginNames")), (isset($context["isPluginsAdminEnabled"]) ? $context["isPluginsAdminEnabled"] : $this->getContext($context, "isPluginsAdminEnabled")));
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/plugins.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  117 => 44,  110 => 40,  107 => 39,  101 => 36,  96 => 34,  90 => 32,  88 => 31,  81 => 27,  77 => 25,  71 => 23,  69 => 22,  66 => 21,  60 => 19,  58 => 18,  53 => 16,  49 => 15,  43 => 12,  38 => 9,  35 => 8,  31 => 2,  27 => 6,  25 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends 'admin.twig' %}

{% import '@CorePluginsAdmin/macros.twig' as plugins %}

{% set title %}{{ 'CorePluginsAdmin_PluginsManagement'|translate }}{% endset %}

{% block content %}

    <div piwik-content-intro>
        <h2 piwik-enriched-headline>
            {{ title|e('html_attr') }}
        </h2>

        <p>{{ 'CorePluginsAdmin_PluginsExtendPiwik'|translate }}
            {{ 'CorePluginsAdmin_OncePluginIsInstalledYouMayActivateHere'|translate }}

            {% if isMarketplaceEnabled %}
                {{ 'CorePluginsAdmin_TeaserExtendPiwikByPlugin'|translate('<a href=\"' ~ linkTo({'action':'browsePlugins', 'sort': ''}) ~ '\">', '</a>')|raw }}
            {% endif %}

            {% if not isPluginsAdminEnabled %}
                <br/>{{ 'CorePluginsAdmin_DoMoreContactPiwikAdmins'|translate }}
            {% endif %}

            <br />
            {{ 'CorePluginsAdmin_ChangeLookByManageThemes'|translate('<a href=\"' ~ linkTo({'action': 'themes'}) ~'\">', '</a>')|raw }}
        </p>
    </div>

    {% if pluginsHavingUpdate|length %}
        <div piwik-content-block content-title=\"{{ pluginsHavingUpdate|length }} Update(s) available\">

            <p>{{ 'CorePluginsAdmin_InfoPluginUpdateIsRecommended'|translate }}</p>

            {{ plugins.tablePluginUpdates(pluginsHavingUpdate, updateNonce, isMultiServerEnvironment) }}
        </div>
    {% endif %}

    <div piwik-content-block content-title=\"{{ 'CorePluginsAdmin_InstalledPlugins'|translate|e('html_attr') }}\"
         class=\"pluginsManagement\"
         piwik-plugin-management>

        {{ plugins.pluginsFilter() }}

        {{ plugins.tablePlugins(pluginsInfo, pluginNamesHavingSettings, activateNonce, deactivateNonce, uninstallNonce, false, marketplacePluginNames, isPluginsAdminEnabled) }}

    </div>

{% endblock %}";
    }
}
