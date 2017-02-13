<?php

/* @Marketplace/plugin-list.twig */
class __TwigTemplate_d8f35c98279b5309acaba4d22c7b662223270098b5f157a8eee41a8f6ac84dbd extends Twig_Template
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
        $context["marketplaceMacro"] = $this->loadTemplate("@Marketplace/macros.twig", "@Marketplace/plugin-list.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["pluginsToShow"]) ? $context["pluginsToShow"] : $this->getContext($context, "pluginsToShow"))) > 0)) {
            // line 4
            echo "    <div class=\"pluginListContainer row\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginsToShow"]) ? $context["pluginsToShow"] : $this->getContext($context, "pluginsToShow")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 6
                echo "            <div class=\"col s12 m6 l4\">
                ";
                // line 7
                $this->loadTemplate("@Marketplace/plugin-list.twig", "@Marketplace/plugin-list.twig", 7, "870442673")->display(array_merge($context, array("title" => "")));
                // line 150
                echo "            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "    </div>
";
        }
        // line 154
        echo "
";
        // line 155
        if ((twig_length_filter($this->env, (isset($context["pluginsToShow"]) ? $context["pluginsToShow"] : $this->getContext($context, "pluginsToShow"))) == 0)) {
            // line 156
            echo "    <div piwik-content-block>
        ";
            // line 157
            if ((isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
                // line 158
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_NoThemesFound")), "html", null, true);
                echo "
        ";
            } else {
                // line 160
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_NoPluginsFound")), "html", null, true);
                echo "
        ";
            }
            // line 162
            echo "    </div>
";
        }
        // line 164
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Marketplace/plugin-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 164,  92 => 162,  86 => 160,  80 => 158,  78 => 157,  75 => 156,  73 => 155,  70 => 154,  66 => 152,  51 => 150,  49 => 7,  46 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% import '@Marketplace/macros.twig' as marketplaceMacro %}

{% if pluginsToShow|length > 0 %}
    <div class=\"pluginListContainer row\">
        {% for plugin in pluginsToShow %}
            <div class=\"col s12 m6 l4\">
                {% embed 'contentBlock.twig' with {'title': ''} %}
                    {% block content %}
                        <div class=\"plugin\">
                            <h3 class=\"card-title\" title=\"{{ 'General_MoreDetails'|translate }}\">
                                <a href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\">{{ plugin.displayName }}</a>
                            </h3>

                            <p class=\"description\">
                                {{ plugin.description }}
                                <a class=\"more\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">
                                    &rsaquo; {{ 'General_MoreLowerCase'|translate }}</a>
                            </p>

                            {% if showThemes %}
                                {# Screenshot for themes #}
                                <a class=\"more\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\">
                                    <img title=\"{{ 'General_MoreDetails'|translate }}\"
                                         class=\"preview\" src=\"{{ plugin.screenshots|first }}?w=250&h=150\"/></a>
                            {% endif %}

                            <ul class=\"metadata\">
                                <li>
                                    {% if plugin.latestVersion %}
                                        {{ 'CorePluginsAdmin_Version'|translate }}: {{ plugin.latestVersion }}
                                    {% endif %}

                                    {% if plugin.canBeUpdated %}
                                        <a class=\"update-available\"
                                            {% if plugin.changelog is defined and plugin.changelog and plugin.changelog.url is defined and plugin.changelog.url %}
                                                target=\"_blank\" href=\"{{ plugin.changelog.url|e('html_attr') }}\"
                                            {% else %}
                                                href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\"
                                            {% endif %}
                                           title=\"{{ 'Marketplace_PluginUpdateAvailable'|translate(plugin.currentVersion, plugin.latestVersion) }}\">
                                            {{ 'Marketplace_NewVersion'|translate }}</a>
                                    {% endif %}
                                </li>
                                {% if plugin.lastUpdated %}
                                    <li>{{ 'Marketplace_Updated'|translate }}: {{ plugin.lastUpdated }}</li>
                                {% endif %}
                                {% if plugin.numDownloads %}
                                    <li>{{ 'General_Downloads'|translate }}: {{ plugin.numDownloads }}</li>
                                {% endif %}
                                <li>{{ 'Marketplace_Developer'|translate }}: {{ marketplaceMacro.pluginDeveloper(plugin.owner) }}</li>
                            </ul>

                            {% macro moreDetailsLink(plugin) %}
                                {% set canBePurchased = not plugin.isDownloadable and plugin.shop is defined and plugin.shop and plugin.shop.url %}
                                <a class=\"btn btn-block plugin-details {% if canBePurchased %}purchaseable{% endif %}\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">

                                    {% if canBePurchased and plugin.shop.variations %}
                                        {% set foundCheapest = 0 %}
                                        {% for variation in plugin.shop.variations %}
                                            {% if not foundCheapest and variation.cheapest is defined and variation.cheapest %}
                                                {% set foundCheapest = 1 %}
                                                {{ 'Marketplace_PriceFromPerPeriod'|translate(variation.prettyPrice, variation.period) }}
                                            {% endif %}
                                        {% endfor %}
                                        {% if not foundCheapest %}
                                            {{ 'Marketplace_PriceFromPerPeriod'|translate(plugin.shop.variations.0.prettyPrice, plugin.shop.variations.0.period) }}
                                        {% endif %}
                                    {% else %}
                                        {{ 'General_MoreDetails'|translate }}
                                    {% endif %}

                                </a>
                            {% endmacro %}


                            {% if isSuperUser %}
                                <div class=\"footer\">
                                    {% if plugin.isMissingLicense is defined and plugin.isMissingLicense %}

                                        <div class=\"alert alert-danger\" >
                                            {{ 'Marketplace_LicenseMissing'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>)</span>
                                        </div>

                                    {% elseif plugin.hasExceededLicense is defined and plugin.hasExceededLicense %}

                                        <div class=\"alert alert-danger\">
                                            {{ 'Marketplace_LicenseExceeded'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>)</span>
                                        </div>

                                    {% elseif plugin.canBeUpdated and 0 == plugin.missingRequirements|length and isAutoUpdatePossible %}
                                        <a class=\"btn btn-block\"
                                           href=\"{{ linkTo({'module': 'Marketplace', 'action':'updatePlugin', 'pluginName': plugin.name, 'nonce': updateNonce}) }}\">
                                            {{ 'CoreUpdater_UpdateTitle'|translate }}
                                        </a>
                                    {% elseif plugin.missingRequirements|length > 0 or not isAutoUpdatePossible %}

                                        {% macro downloadButton(showOr, plugin, isAutoUpdatePossible, showBrackets = false) -%}
                                            {%- if plugin.missingRequirements|length == 0 and plugin.isDownloadable and not isAutoUpdatePossible -%}
                                                {% if showBrackets %}({% endif %}<span onclick=\"\$(this).css('display', 'none')\">
                                                {%- if showOr %} {{ 'General_Or'|translate }} {% endif -%}
                                                <a class=\"plugin-details download\"
                                                   href=\"{{ linkTo({'module': 'Marketplace', 'action': 'download', 'pluginName': plugin.name, 'nonce': (plugin.name|nonce)}) }}\"
                                                >{{ 'General_Download'|translate }}</a></span>{% if showBrackets %}){% endif %}
                                            {%- endif -%}
                                        {%- endmacro %}

                                        {% if plugin.canBeUpdated and 0 == plugin.missingRequirements|length %}
                                            {{ 'Marketplace_CannotUpdate'|translate }}
                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>{{ _self.downloadButton(true, plugin, isAutoUpdatePossible)|raw }})</span>
                                        {% elseif plugin.isInstalled %}
                                            {{ 'General_Installed'|translate }}
                                            {{ _self.downloadButton(false, plugin, isAutoUpdatePossible, true)|raw }}
                                        {% elseif not plugin.isDownloadable %}
                                            {{ _self.moreDetailsLink(plugin)|raw }}
                                        {% else %}
                                            {{ 'Marketplace_CannotInstall'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>{{ _self.downloadButton(true, plugin, isAutoUpdatePossible)|raw }})</span>
                                        {% endif %}

                                    {% elseif plugin.isInstalled %}
                                        {{ 'General_Installed'|translate }}

                                        {% if not plugin.isInvalid and not isMultiServerEnvironment and isPluginsAdminEnabled %}
                                            ({{ pluginsMacro.pluginActivateDeactivateAction(plugin.name, plugin.isActivated, plugin.missingRequirements, deactivateNonce, activateNonce) }})
                                        {% endif %}

                                    {% elseif plugin.isPaid and not plugin.isDownloadable %}
                                        {{ _self.moreDetailsLink(plugin)|raw }}
                                    {% else %}
                                        <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'installPlugin', 'pluginName': plugin.name, 'nonce': installNonce}) }}\"
                                           class=\"btn\">
                                            {{ 'Marketplace_ActionInstall'|translate }}
                                        </a>
                                    {% endif %}
                                </div>
                            {% else %}
                                <div class=\"footer\">
                                    {{ _self.moreDetailsLink(plugin)|raw }}
                                </div>
                            {% endif %}

                        </div>
                    {% endblock %}
                {% endembed %}
            </div>
        {% endfor %}
    </div>
{% endif %}

{% if pluginsToShow|length == 0 %}
    <div piwik-content-block>
        {% if showThemes %}
            {{ 'Marketplace_NoThemesFound'|translate }}
        {% else %}
            {{ 'Marketplace_NoPluginsFound'|translate }}
        {% endif %}
    </div>
{% endif %}

";
    }
}


/* @Marketplace/plugin-list.twig */
class __TwigTemplate_d8f35c98279b5309acaba4d22c7b662223270098b5f157a8eee41a8f6ac84dbd_870442673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Marketplace/plugin-list.twig", 7);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "                        <div class=\"plugin\">
                            <h3 class=\"card-title\" title=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
        echo "\">
                                <a href=\"#\" piwik-plugin-name=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "displayName", array()), "html", null, true);
        echo "</a>
                            </h3>

                            <p class=\"description\">
                                ";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "description", array()), "html", null, true);
        echo "
                                <a class=\"more\" href=\"#\" piwik-plugin-name=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
        echo "\" title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
        echo "\">
                                    &rsaquo; ";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreLowerCase")), "html", null, true);
        echo "</a>
                            </p>

                            ";
        // line 20
        if ((isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
            // line 21
            echo "                                ";
            // line 22
            echo "                                <a class=\"more\" href=\"#\" piwik-plugin-name=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
            echo "\">
                                    <img title=\"";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
            echo "\"
                                         class=\"preview\" src=\"";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, twig_first($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "screenshots", array())), "html", null, true);
            echo "?w=250&h=150\"/></a>
                            ";
        }
        // line 26
        echo "
                            <ul class=\"metadata\">
                                <li>
                                    ";
        // line 29
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "latestVersion", array())) {
            // line 30
            echo "                                        ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "latestVersion", array()), "html", null, true);
            echo "
                                    ";
        }
        // line 32
        echo "
                                    ";
        // line 33
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "canBeUpdated", array())) {
            // line 34
            echo "                                        <a class=\"update-available\"
                                            ";
            // line 35
            if (((($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "changelog", array(), "any", true, true) && $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "changelog", array())) && $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "changelog", array(), "any", false, true), "url", array(), "any", true, true)) && $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "changelog", array()), "url", array()))) {
                // line 36
                echo "                                                target=\"_blank\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "changelog", array()), "url", array()), "html_attr");
                echo "\"
                                            ";
            } else {
                // line 38
                echo "                                                href=\"#\" piwik-plugin-name=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
                echo "\"
                                            ";
            }
            // line 40
            echo "                                           title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_PluginUpdateAvailable", $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "currentVersion", array()), $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "latestVersion", array()))), "html", null, true);
            echo "\">
                                            ";
            // line 41
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_NewVersion")), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 43
        echo "                                </li>
                                ";
        // line 44
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "lastUpdated", array())) {
            // line 45
            echo "                                    <li>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_Updated")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "lastUpdated", array()), "html", null, true);
            echo "</li>
                                ";
        }
        // line 47
        echo "                                ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "numDownloads", array())) {
            // line 48
            echo "                                    <li>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Downloads")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "numDownloads", array()), "html", null, true);
            echo "</li>
                                ";
        }
        // line 50
        echo "                                <li>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_Developer")), "html", null, true);
        echo ": ";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["marketplaceMacro"]) ? $context["marketplaceMacro"] : $this->getContext($context, "marketplaceMacro")), "pluginDeveloper", array(0 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "owner", array())), "method"), "html", null, true);
        echo "</li>
                            </ul>

                            ";
        // line 74
        echo "

                            ";
        // line 76
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 77
            echo "                                <div class=\"footer\">
                                    ";
            // line 78
            if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "isMissingLicense", array(), "any", true, true) && $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isMissingLicense", array()))) {
                // line 79
                echo "
                                        <div class=\"alert alert-danger\" >
                                            ";
                // line 81
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_LicenseMissing")), "html", null, true);
                echo "

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"";
                // line 83
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
                echo "\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Help")), "html", null, true);
                echo "</a>)</span>
                                        </div>

                                    ";
            } elseif (($this->getAttribute(            // line 86
(isset($context["plugin"]) ? $context["plugin"] : null), "hasExceededLicense", array(), "any", true, true) && $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "hasExceededLicense", array()))) {
                // line 87
                echo "
                                        <div class=\"alert alert-danger\">
                                            ";
                // line 89
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_LicenseExceeded")), "html", null, true);
                echo "

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"";
                // line 91
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
                echo "\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Help")), "html", null, true);
                echo "</a>)</span>
                                        </div>

                                    ";
            } elseif ((($this->getAttribute(            // line 94
(isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "canBeUpdated", array()) && (0 == twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array())))) && (isset($context["isAutoUpdatePossible"]) ? $context["isAutoUpdatePossible"] : $this->getContext($context, "isAutoUpdatePossible")))) {
                // line 95
                echo "                                        <a class=\"btn btn-block\"
                                           href=\"";
                // line 96
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "Marketplace", "action" => "updatePlugin", "pluginName" => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "nonce" => (isset($context["updateNonce"]) ? $context["updateNonce"] : $this->getContext($context, "updateNonce"))))), "html", null, true);
                echo "\">
                                            ";
                // line 97
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")), "html", null, true);
                echo "
                                        </a>
                                    ";
            } elseif (((twig_length_filter($this->env, $this->getAttribute(            // line 99
(isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array())) > 0) ||  !(isset($context["isAutoUpdatePossible"]) ? $context["isAutoUpdatePossible"] : $this->getContext($context, "isAutoUpdatePossible")))) {
                // line 100
                echo "
                                        ";
                // line 110
                echo "
                                        ";
                // line 111
                if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "canBeUpdated", array()) && (0 == twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array()))))) {
                    // line 112
                    echo "                                            ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_CannotUpdate")), "html", null, true);
                    echo "
                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"";
                    // line 113
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
                    echo "\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Help")), "html", null, true);
                    echo "</a>";
                    echo $this->getAttribute($this, "downloadButton", array(0 => true, 1 => (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), 2 => (isset($context["isAutoUpdatePossible"]) ? $context["isAutoUpdatePossible"] : $this->getContext($context, "isAutoUpdatePossible"))), "method");
                    echo ")</span>
                                        ";
                } elseif ($this->getAttribute(                // line 114
(isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isInstalled", array())) {
                    // line 115
                    echo "                                            ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Installed")), "html", null, true);
                    echo "
                                            ";
                    // line 116
                    echo $this->getAttribute($this, "downloadButton", array(0 => false, 1 => (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), 2 => (isset($context["isAutoUpdatePossible"]) ? $context["isAutoUpdatePossible"] : $this->getContext($context, "isAutoUpdatePossible")), 3 => true), "method");
                    echo "
                                        ";
                } elseif ( !$this->getAttribute(                // line 117
(isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isDownloadable", array())) {
                    // line 118
                    echo "                                            ";
                    echo $this->getAttribute($this, "moreDetailsLink", array(0 => (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin"))), "method");
                    echo "
                                        ";
                } else {
                    // line 120
                    echo "                                            ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_CannotInstall")), "html", null, true);
                    echo "

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"";
                    // line 122
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
                    echo "\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Help")), "html", null, true);
                    echo "</a>";
                    echo $this->getAttribute($this, "downloadButton", array(0 => true, 1 => (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), 2 => (isset($context["isAutoUpdatePossible"]) ? $context["isAutoUpdatePossible"] : $this->getContext($context, "isAutoUpdatePossible"))), "method");
                    echo ")</span>
                                        ";
                }
                // line 124
                echo "
                                    ";
            } elseif ($this->getAttribute(            // line 125
(isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isInstalled", array())) {
                // line 126
                echo "                                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Installed")), "html", null, true);
                echo "

                                        ";
                // line 128
                if ((( !$this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isInvalid", array()) &&  !(isset($context["isMultiServerEnvironment"]) ? $context["isMultiServerEnvironment"] : $this->getContext($context, "isMultiServerEnvironment"))) && (isset($context["isPluginsAdminEnabled"]) ? $context["isPluginsAdminEnabled"] : $this->getContext($context, "isPluginsAdminEnabled")))) {
                    // line 129
                    echo "                                            (";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["pluginsMacro"]) ? $context["pluginsMacro"] : $this->getContext($context, "pluginsMacro")), "pluginActivateDeactivateAction", array(0 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), 1 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isActivated", array()), 2 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array()), 3 => (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce")), 4 => (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce"))), "method"), "html", null, true);
                    echo ")
                                        ";
                }
                // line 131
                echo "
                                    ";
            } elseif (($this->getAttribute(            // line 132
(isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isPaid", array()) &&  !$this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isDownloadable", array()))) {
                // line 133
                echo "                                        ";
                echo $this->getAttribute($this, "moreDetailsLink", array(0 => (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin"))), "method");
                echo "
                                    ";
            } else {
                // line 135
                echo "                                        <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "Marketplace", "action" => "installPlugin", "pluginName" => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "nonce" => (isset($context["installNonce"]) ? $context["installNonce"] : $this->getContext($context, "installNonce"))))), "html", null, true);
                echo "\"
                                           class=\"btn\">
                                            ";
                // line 137
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_ActionInstall")), "html", null, true);
                echo "
                                        </a>
                                    ";
            }
            // line 140
            echo "                                </div>
                            ";
        } else {
            // line 142
            echo "                                <div class=\"footer\">
                                    ";
            // line 143
            echo $this->getAttribute($this, "moreDetailsLink", array(0 => (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin"))), "method");
            echo "
                                </div>
                            ";
        }
        // line 146
        echo "
                        </div>
                    ";
    }

    // line 53
    public function getmoreDetailsLink($__plugin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "plugin" => $__plugin__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "                                ";
            $context["canBePurchased"] = ((( !$this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isDownloadable", array()) && $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "shop", array(), "any", true, true)) && $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "shop", array())) && $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "shop", array()), "url", array()));
            // line 55
            echo "                                <a class=\"btn btn-block plugin-details ";
            if ((isset($context["canBePurchased"]) ? $context["canBePurchased"] : $this->getContext($context, "canBePurchased"))) {
                echo "purchaseable";
            }
            echo "\" href=\"#\" piwik-plugin-name=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
            echo "\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
            echo "\">

                                    ";
            // line 57
            if (((isset($context["canBePurchased"]) ? $context["canBePurchased"] : $this->getContext($context, "canBePurchased")) && $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "shop", array()), "variations", array()))) {
                // line 58
                echo "                                        ";
                $context["foundCheapest"] = 0;
                // line 59
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "shop", array()), "variations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                    // line 60
                    echo "                                            ";
                    if ((( !(isset($context["foundCheapest"]) ? $context["foundCheapest"] : $this->getContext($context, "foundCheapest")) && $this->getAttribute($context["variation"], "cheapest", array(), "any", true, true)) && $this->getAttribute($context["variation"], "cheapest", array()))) {
                        // line 61
                        echo "                                                ";
                        $context["foundCheapest"] = 1;
                        // line 62
                        echo "                                                ";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_PriceFromPerPeriod", $this->getAttribute($context["variation"], "prettyPrice", array()), $this->getAttribute($context["variation"], "period", array()))), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 64
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                                        ";
                if ( !(isset($context["foundCheapest"]) ? $context["foundCheapest"] : $this->getContext($context, "foundCheapest"))) {
                    // line 66
                    echo "                                            ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Marketplace_PriceFromPerPeriod", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "shop", array()), "variations", array()), 0, array()), "prettyPrice", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "shop", array()), "variations", array()), 0, array()), "period", array()))), "html", null, true);
                    echo "
                                        ";
                }
                // line 68
                echo "                                    ";
            } else {
                // line 69
                echo "                                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
                echo "
                                    ";
            }
            // line 71
            echo "
                                </a>
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

    // line 101
    public function getdownloadButton($__showOr__ = null, $__plugin__ = null, $__isAutoUpdatePossible__ = null, $__showBrackets__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "showOr" => $__showOr__,
            "plugin" => $__plugin__,
            "isAutoUpdatePossible" => $__isAutoUpdatePossible__,
            "showBrackets" => $__showBrackets__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 102
            if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array())) == 0) && $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isDownloadable", array())) &&  !(isset($context["isAutoUpdatePossible"]) ? $context["isAutoUpdatePossible"] : $this->getContext($context, "isAutoUpdatePossible")))) {
                // line 103
                if ((isset($context["showBrackets"]) ? $context["showBrackets"] : $this->getContext($context, "showBrackets"))) {
                    echo "(";
                }
                echo "<span onclick=\"\$(this).css('display', 'none')\">";
                // line 104
                if ((isset($context["showOr"]) ? $context["showOr"] : $this->getContext($context, "showOr"))) {
                    echo " ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Or")), "html", null, true);
                    echo " ";
                }
                // line 105
                echo "<a class=\"plugin-details download\"
                                                   href=\"";
                // line 106
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "Marketplace", "action" => "download", "pluginName" => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "nonce" => call_user_func_array($this->env->getFilter('nonce')->getCallable(), array($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array())))))), "html", null, true);
                echo "\"
                                                >";
                // line 107
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Download")), "html", null, true);
                echo "</a></span>";
                if ((isset($context["showBrackets"]) ? $context["showBrackets"] : $this->getContext($context, "showBrackets"))) {
                    echo ")";
                }
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
        return "@Marketplace/plugin-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  756 => 107,  752 => 106,  749 => 105,  743 => 104,  738 => 103,  736 => 102,  721 => 101,  704 => 71,  698 => 69,  695 => 68,  689 => 66,  686 => 65,  680 => 64,  674 => 62,  671 => 61,  668 => 60,  663 => 59,  660 => 58,  658 => 57,  646 => 55,  643 => 54,  631 => 53,  625 => 146,  619 => 143,  616 => 142,  612 => 140,  606 => 137,  600 => 135,  594 => 133,  592 => 132,  589 => 131,  583 => 129,  581 => 128,  575 => 126,  573 => 125,  570 => 124,  559 => 122,  553 => 120,  547 => 118,  545 => 117,  541 => 116,  536 => 115,  534 => 114,  524 => 113,  519 => 112,  517 => 111,  514 => 110,  511 => 100,  509 => 99,  504 => 97,  500 => 96,  497 => 95,  495 => 94,  485 => 91,  480 => 89,  476 => 87,  474 => 86,  464 => 83,  459 => 81,  455 => 79,  453 => 78,  450 => 77,  448 => 76,  444 => 74,  435 => 50,  427 => 48,  424 => 47,  416 => 45,  414 => 44,  411 => 43,  406 => 41,  401 => 40,  395 => 38,  389 => 36,  387 => 35,  384 => 34,  382 => 33,  379 => 32,  371 => 30,  369 => 29,  364 => 26,  359 => 24,  355 => 23,  350 => 22,  348 => 21,  346 => 20,  340 => 17,  334 => 16,  330 => 15,  321 => 11,  317 => 10,  314 => 9,  311 => 8,  294 => 7,  96 => 164,  92 => 162,  86 => 160,  80 => 158,  78 => 157,  75 => 156,  73 => 155,  70 => 154,  66 => 152,  51 => 150,  49 => 7,  46 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% import '@Marketplace/macros.twig' as marketplaceMacro %}

{% if pluginsToShow|length > 0 %}
    <div class=\"pluginListContainer row\">
        {% for plugin in pluginsToShow %}
            <div class=\"col s12 m6 l4\">
                {% embed 'contentBlock.twig' with {'title': ''} %}
                    {% block content %}
                        <div class=\"plugin\">
                            <h3 class=\"card-title\" title=\"{{ 'General_MoreDetails'|translate }}\">
                                <a href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\">{{ plugin.displayName }}</a>
                            </h3>

                            <p class=\"description\">
                                {{ plugin.description }}
                                <a class=\"more\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">
                                    &rsaquo; {{ 'General_MoreLowerCase'|translate }}</a>
                            </p>

                            {% if showThemes %}
                                {# Screenshot for themes #}
                                <a class=\"more\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\">
                                    <img title=\"{{ 'General_MoreDetails'|translate }}\"
                                         class=\"preview\" src=\"{{ plugin.screenshots|first }}?w=250&h=150\"/></a>
                            {% endif %}

                            <ul class=\"metadata\">
                                <li>
                                    {% if plugin.latestVersion %}
                                        {{ 'CorePluginsAdmin_Version'|translate }}: {{ plugin.latestVersion }}
                                    {% endif %}

                                    {% if plugin.canBeUpdated %}
                                        <a class=\"update-available\"
                                            {% if plugin.changelog is defined and plugin.changelog and plugin.changelog.url is defined and plugin.changelog.url %}
                                                target=\"_blank\" href=\"{{ plugin.changelog.url|e('html_attr') }}\"
                                            {% else %}
                                                href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\"
                                            {% endif %}
                                           title=\"{{ 'Marketplace_PluginUpdateAvailable'|translate(plugin.currentVersion, plugin.latestVersion) }}\">
                                            {{ 'Marketplace_NewVersion'|translate }}</a>
                                    {% endif %}
                                </li>
                                {% if plugin.lastUpdated %}
                                    <li>{{ 'Marketplace_Updated'|translate }}: {{ plugin.lastUpdated }}</li>
                                {% endif %}
                                {% if plugin.numDownloads %}
                                    <li>{{ 'General_Downloads'|translate }}: {{ plugin.numDownloads }}</li>
                                {% endif %}
                                <li>{{ 'Marketplace_Developer'|translate }}: {{ marketplaceMacro.pluginDeveloper(plugin.owner) }}</li>
                            </ul>

                            {% macro moreDetailsLink(plugin) %}
                                {% set canBePurchased = not plugin.isDownloadable and plugin.shop is defined and plugin.shop and plugin.shop.url %}
                                <a class=\"btn btn-block plugin-details {% if canBePurchased %}purchaseable{% endif %}\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">

                                    {% if canBePurchased and plugin.shop.variations %}
                                        {% set foundCheapest = 0 %}
                                        {% for variation in plugin.shop.variations %}
                                            {% if not foundCheapest and variation.cheapest is defined and variation.cheapest %}
                                                {% set foundCheapest = 1 %}
                                                {{ 'Marketplace_PriceFromPerPeriod'|translate(variation.prettyPrice, variation.period) }}
                                            {% endif %}
                                        {% endfor %}
                                        {% if not foundCheapest %}
                                            {{ 'Marketplace_PriceFromPerPeriod'|translate(plugin.shop.variations.0.prettyPrice, plugin.shop.variations.0.period) }}
                                        {% endif %}
                                    {% else %}
                                        {{ 'General_MoreDetails'|translate }}
                                    {% endif %}

                                </a>
                            {% endmacro %}


                            {% if isSuperUser %}
                                <div class=\"footer\">
                                    {% if plugin.isMissingLicense is defined and plugin.isMissingLicense %}

                                        <div class=\"alert alert-danger\" >
                                            {{ 'Marketplace_LicenseMissing'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>)</span>
                                        </div>

                                    {% elseif plugin.hasExceededLicense is defined and plugin.hasExceededLicense %}

                                        <div class=\"alert alert-danger\">
                                            {{ 'Marketplace_LicenseExceeded'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>)</span>
                                        </div>

                                    {% elseif plugin.canBeUpdated and 0 == plugin.missingRequirements|length and isAutoUpdatePossible %}
                                        <a class=\"btn btn-block\"
                                           href=\"{{ linkTo({'module': 'Marketplace', 'action':'updatePlugin', 'pluginName': plugin.name, 'nonce': updateNonce}) }}\">
                                            {{ 'CoreUpdater_UpdateTitle'|translate }}
                                        </a>
                                    {% elseif plugin.missingRequirements|length > 0 or not isAutoUpdatePossible %}

                                        {% macro downloadButton(showOr, plugin, isAutoUpdatePossible, showBrackets = false) -%}
                                            {%- if plugin.missingRequirements|length == 0 and plugin.isDownloadable and not isAutoUpdatePossible -%}
                                                {% if showBrackets %}({% endif %}<span onclick=\"\$(this).css('display', 'none')\">
                                                {%- if showOr %} {{ 'General_Or'|translate }} {% endif -%}
                                                <a class=\"plugin-details download\"
                                                   href=\"{{ linkTo({'module': 'Marketplace', 'action': 'download', 'pluginName': plugin.name, 'nonce': (plugin.name|nonce)}) }}\"
                                                >{{ 'General_Download'|translate }}</a></span>{% if showBrackets %}){% endif %}
                                            {%- endif -%}
                                        {%- endmacro %}

                                        {% if plugin.canBeUpdated and 0 == plugin.missingRequirements|length %}
                                            {{ 'Marketplace_CannotUpdate'|translate }}
                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>{{ _self.downloadButton(true, plugin, isAutoUpdatePossible)|raw }})</span>
                                        {% elseif plugin.isInstalled %}
                                            {{ 'General_Installed'|translate }}
                                            {{ _self.downloadButton(false, plugin, isAutoUpdatePossible, true)|raw }}
                                        {% elseif not plugin.isDownloadable %}
                                            {{ _self.moreDetailsLink(plugin)|raw }}
                                        {% else %}
                                            {{ 'Marketplace_CannotInstall'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" piwik-plugin-name=\"{{ plugin.name }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>{{ _self.downloadButton(true, plugin, isAutoUpdatePossible)|raw }})</span>
                                        {% endif %}

                                    {% elseif plugin.isInstalled %}
                                        {{ 'General_Installed'|translate }}

                                        {% if not plugin.isInvalid and not isMultiServerEnvironment and isPluginsAdminEnabled %}
                                            ({{ pluginsMacro.pluginActivateDeactivateAction(plugin.name, plugin.isActivated, plugin.missingRequirements, deactivateNonce, activateNonce) }})
                                        {% endif %}

                                    {% elseif plugin.isPaid and not plugin.isDownloadable %}
                                        {{ _self.moreDetailsLink(plugin)|raw }}
                                    {% else %}
                                        <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'installPlugin', 'pluginName': plugin.name, 'nonce': installNonce}) }}\"
                                           class=\"btn\">
                                            {{ 'Marketplace_ActionInstall'|translate }}
                                        </a>
                                    {% endif %}
                                </div>
                            {% else %}
                                <div class=\"footer\">
                                    {{ _self.moreDetailsLink(plugin)|raw }}
                                </div>
                            {% endif %}

                        </div>
                    {% endblock %}
                {% endembed %}
            </div>
        {% endfor %}
    </div>
{% endif %}

{% if pluginsToShow|length == 0 %}
    <div piwik-content-block>
        {% if showThemes %}
            {{ 'Marketplace_NoThemesFound'|translate }}
        {% else %}
            {{ 'Marketplace_NoPluginsFound'|translate }}
        {% endif %}
    </div>
{% endif %}

";
    }
}
