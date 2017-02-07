<?php

/* @UserCountry/adminIndex.twig */
class __TwigTemplate_64ebfeee921e1a1b13b2017edef52876c3ce559a11cf303d15003f884a56bdc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UserCountry/adminIndex.twig", 1);
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
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_Geolocation")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $context["piwik"] = $this->loadTemplate("macros.twig", "@UserCountry/adminIndex.twig", 6);
        // line 7
        echo "
<div piwik-content-intro>
    <h2 piwik-enriched-headline
        help-url=\"http://piwik.org/docs/geo-locate/\"
        id=\"location-providers\">";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
    <p>";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeolocationPageDesc")), "html", null, true);
        echo "</p>
</div>
<div piwik-content-block content-title=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_LocationProvider")), "html_attr");
        echo "\">
<div piwik-location-provider-selection=\"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["currentProviderId"]) ? $context["currentProviderId"] : $this->getContext($context, "currentProviderId")), "html_attr");
        echo "\">

    ";
        // line 17
        if ( !(isset($context["isThereWorkingProvider"]) ? $context["isThereWorkingProvider"] : $this->getContext($context, "isThereWorkingProvider"))) {
            // line 18
            echo "        <h3 style=\"margin-top:0;\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP")), "html", null, true);
            echo "</h3>
        <p>";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIPIntro")), "html", null, true);
            echo "</p>
        <ul style=\"list-style:disc !important;margin-left:2em;\">
            <li style=\"list-style-type: disc !important;\">";
            // line 21
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step1", "<a href=\"http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz\">", "</a>", "<a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.maxmind.com/?rId=piwik\">", "</a>"));
            echo "</li>
            <li style=\"list-style-type: disc !important;\">";
            // line 22
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step2", "'GeoLiteCity.dat'", "<strong>", "</strong>"));
            echo "</li>
            <li style=\"list-style-type: disc !important;\">";
            // line 23
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step3", "<strong>", "</strong>", "<span style=\"color:green\"><strong>", "</strong></span>"));
            echo "</li>
            <li style=\"list-style-type: disc !important;\">";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step4")), "html", null, true);
            echo "</li>
        </ul>
        <p>&nbsp;</p>
    ";
        }
        // line 28
        echo "
    <div class=\"row\">
        <div class=\"col s12 push-m9 m3\">";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_InfoFor", (isset($context["thisIP"]) ? $context["thisIP"] : $this->getContext($context, "thisIP")))), "html", null, true);
        echo "</div>
    </div>

    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locationProviders"]) ? $context["locationProviders"] : $this->getContext($context, "locationProviders")));
        foreach ($context['_seq'] as $context["id"] => $context["provider"]) {
            // line 34
            echo "    <div class=\"row form-group provider";
            echo \Piwik\piwik_escape_filter($this->env, $context["id"], "html_attr");
            echo "\">
        <div class=\"col s12 m4 l2\">
            <p>
                <input class=\"location-provider\"
                       name=\"location-provider\"
                       value=\"";
            // line 39
            echo \Piwik\piwik_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"
                       type=\"radio\"
                       ng-model=\"locationSelector.selectedProvider\"
                       id=\"provider_input_";
            // line 42
            echo \Piwik\piwik_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["provider"], "status", array()) != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
                <label for=\"provider_input_";
            // line 43
            echo \Piwik\piwik_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute($context["provider"], "title", array()))), "html", null, true);
            echo "</label>
            </p>
            <p class=\"loc-provider-status\">
                ";
            // line 46
            if (($this->getAttribute($context["provider"], "status", array()) == 0)) {
                // line 47
                echo "                    <span class=\"is-not-installed\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotInstalled")), "html", null, true);
                echo "</span>
                ";
            } elseif (($this->getAttribute(            // line 48
$context["provider"], "status", array()) == 1)) {
                // line 49
                echo "                    <span class=\"is-installed\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Installed")), "html", null, true);
                echo "</span>
                ";
            } elseif (($this->getAttribute(            // line 50
$context["provider"], "status", array()) == 2)) {
                // line 51
                echo "                    <span class=\"is-broken\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Broken")), "html", null, true);
                echo "</span>
                ";
            }
            // line 53
            echo "            </p>
        </div>
        <div class=\"col s12 m4 l6\">
            <p>";
            // line 56
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute($context["provider"], "description", array())));
            echo "</p>
            ";
            // line 57
            if ((($this->getAttribute($context["provider"], "status", array()) != 1) && $this->getAttribute($context["provider"], "install_docs", array(), "any", true, true))) {
                // line 58
                echo "                <p>";
                echo $this->getAttribute($context["provider"], "install_docs", array());
                echo "</p>
            ";
            }
            // line 60
            echo "        </div>
        <div class=\"col s12 m4 l4\">
            ";
            // line 62
            if (($this->getAttribute($context["provider"], "status", array()) == 1)) {
                // line 63
                echo "                <div class=\"form-help\">
                    ";
                // line 64
                if (((isset($context["thisIP"]) ? $context["thisIP"] : $this->getContext($context, "thisIP")) != "127.0.0.1")) {
                    // line 65
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CurrentLocationIntro")), "html", null, true);
                    echo ":
                        <div>
                            <br/>
                            <div style=\"position: absolute;\"
                                 piwik-activity-indicator
                                 loading='locationSelector.updateLoading[";
                    // line 70
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["id"]), "html", null, true);
                    echo "]'></div>
                            <span class=\"location\"><strong>";
                    // line 71
                    echo $this->getAttribute($context["provider"], "location", array());
                    echo "</strong></span>
                        </div>
                        <div class=\"text-right\">
                            <a href=\"javascript:;\"
                               ng-click='locationSelector.refreshProviderInfo(";
                    // line 75
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["id"]), "html", null, true);
                    echo ")'>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Refresh")), "html", null, true);
                    echo "</a>
                        </div>
                    ";
                } else {
                    // line 78
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CannotLocalizeLocalIP", (isset($context["thisIP"]) ? $context["thisIP"] : $this->getContext($context, "thisIP")))), "html", null, true);
                    echo "
                    ";
                }
                // line 80
                echo "                </div>
            ";
            }
            // line 82
            echo "            ";
            if (($this->getAttribute($context["provider"], "statusMessage", array(), "any", true, true) && $this->getAttribute($context["provider"], "statusMessage", array()))) {
                // line 83
                echo "                <div class=\"form-help\">
                    ";
                // line 84
                if (($this->getAttribute($context["provider"], "status", array()) == 2)) {
                    echo "<strong>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                    echo ":</strong> ";
                }
                echo $this->getAttribute($context["provider"], "statusMessage", array());
                echo "
                </div>
            ";
            }
            // line 87
            echo "            ";
            if (($this->getAttribute($context["provider"], "extra_message", array(), "any", true, true) && $this->getAttribute($context["provider"], "extra_message", array()))) {
                // line 88
                echo "                <div class=\"form-help\">
                    ";
                // line 89
                echo $this->getAttribute($context["provider"], "extra_message", array());
                echo "
                </div>
            ";
            }
            // line 92
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
    <div piwik-save-button onconfirm=\"locationSelector.save()\" saving=\"locationSelector.isLoading\"></div>

</div>
</div>
<div piwik-content-block
     content-title=\"";
        // line 101
        if ( !(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled"))) {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoIPDatabases")), "html_attr");
        } else {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_SetupAutomaticUpdatesOfGeoIP")), "html_attr");
        }
        echo "\"
     id=\"geoip-db-mangement\">

    <div piwik-location-provider-updater
         geoip-database-installed=\"";
        // line 105
        if ((isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled"))) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\">

        ";
        // line 107
        if ((isset($context["showGeoIPUpdateSection"]) ? $context["showGeoIPUpdateSection"] : $this->getContext($context, "showGeoIPUpdateSection"))) {
            // line 108
            echo "            ";
            if ( !(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled"))) {
                // line 109
                echo "                <div ng-show=\"!locationUpdater.geoipDatabaseInstalled\">
                    <div ng-show=\"locationUpdater.showPiwikNotManagingInfo\">
                        <h3>";
                // line 111
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_PiwikNotManagingGeoIPDBs")), "html_attr");
                echo "</h3>
                        <div id=\"manage-geoip-dbs\">
                            <div class=\"row\" id=\"geoipdb-screen1\">
                                <div class=\"geoipdb-column-1 col s6\">
                                    <p>";
                // line 115
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_IWantToDownloadFreeGeoIP"));
                echo "</p>
                                </div>
                                <div class=\"geoipdb-column-2 col s6\">
                                    <p>";
                // line 118
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_IPurchasedGeoIPDBs", "<a href=\"http://www.maxmind.com/en/geolocation_landing?rId=piwik\">", "</a>"));
                echo "</p>
                                </div>
                                <div class=\"geoipdb-column-1 col s6\">
                                    <input type=\"button\" class=\"btn\"
                                           ng-click=\"locationUpdater.startDownloadFreeGeoIp()\"
                                           value=\"";
                // line 123
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GetStarted")), "html", null, true);
                echo "...\"/>
                                </div>
                                <div class=\"geoipdb-column-2 col s6\">
                                    <input type=\"button\" class=\"btn\"
                                           ng-click=\"locationUpdater.startAutomaticUpdateGeoIp()\"
                                           value=\"";
                // line 128
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GetStarted")), "html", null, true);
                echo "...\" id=\"start-automatic-update-geoip\"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"geoipdb-screen2-download\" ng-show=\"locationUpdater.showFreeDownload\">
                        <div piwik-progressbar
                             label=\"";
                // line 135
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_DownloadingDb", (("<a href=\"" . (isset($context["geoLiteUrl"]) ? $context["geoLiteUrl"] : $this->getContext($context, "geoLiteUrl"))) . "\">GeoLiteCity.dat</a>"))) . "...")), "html", null, true);
                echo "\"
                             progress=\"locationUpdater.progressFreeDownload\">
                        </div>
                    </div>
                </div>
            ";
            }
            // line 141
            echo "
            ";
            // line 142
            $this->loadTemplate("@UserCountry/_updaterManage.twig", "@UserCountry/adminIndex.twig", 142)->display($context);
            // line 143
            echo "        ";
        } else {
            // line 144
            echo "            <p class=\"form-description\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CannotSetupGeoIPAutoUpdating")), "html", null, true);
            echo "</p>
        ";
        }
        // line 146
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@UserCountry/adminIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 146,  356 => 144,  353 => 143,  351 => 142,  348 => 141,  339 => 135,  329 => 128,  321 => 123,  313 => 118,  307 => 115,  300 => 111,  296 => 109,  293 => 108,  291 => 107,  282 => 105,  271 => 101,  263 => 95,  255 => 92,  249 => 89,  246 => 88,  243 => 87,  232 => 84,  229 => 83,  226 => 82,  222 => 80,  216 => 78,  208 => 75,  201 => 71,  197 => 70,  188 => 65,  186 => 64,  183 => 63,  181 => 62,  177 => 60,  171 => 58,  169 => 57,  165 => 56,  160 => 53,  154 => 51,  152 => 50,  147 => 49,  145 => 48,  140 => 47,  138 => 46,  130 => 43,  122 => 42,  116 => 39,  107 => 34,  103 => 33,  97 => 30,  93 => 28,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  69 => 19,  64 => 18,  62 => 17,  57 => 15,  53 => 14,  48 => 12,  44 => 11,  38 => 7,  36 => 6,  33 => 5,  29 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin.twig' %}

{% set title %}{{ 'UserCountry_Geolocation'|translate }}{% endset %}

{% block content %}
{% import 'macros.twig' as piwik %}

<div piwik-content-intro>
    <h2 piwik-enriched-headline
        help-url=\"http://piwik.org/docs/geo-locate/\"
        id=\"location-providers\">{{ title }}</h2>
    <p>{{ 'UserCountry_GeolocationPageDesc'|translate }}</p>
</div>
<div piwik-content-block content-title=\"{{ 'UserCountry_LocationProvider'|translate|e('html_attr') }}\">
<div piwik-location-provider-selection=\"{{ currentProviderId|e('html_attr') }}\">

    {% if not isThereWorkingProvider %}
        <h3 style=\"margin-top:0;\">{{ 'UserCountry_HowToSetupGeoIP'|translate }}</h3>
        <p>{{ 'UserCountry_HowToSetupGeoIPIntro'|translate }}</p>
        <ul style=\"list-style:disc !important;margin-left:2em;\">
            <li style=\"list-style-type: disc !important;\">{{ 'UserCountry_HowToSetupGeoIP_Step1'|translate('<a href=\"http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz\">','</a>','<a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.maxmind.com/?rId=piwik\">','</a>')|raw }}</li>
            <li style=\"list-style-type: disc !important;\">{{ 'UserCountry_HowToSetupGeoIP_Step2'|translate(\"'GeoLiteCity.dat'\",'<strong>','</strong>')|raw }}</li>
            <li style=\"list-style-type: disc !important;\">{{ 'UserCountry_HowToSetupGeoIP_Step3'|translate('<strong>','</strong>','<span style=\"color:green\"><strong>','</strong></span>')|raw }}</li>
            <li style=\"list-style-type: disc !important;\">{{ 'UserCountry_HowToSetupGeoIP_Step4'|translate }}</li>
        </ul>
        <p>&nbsp;</p>
    {% endif %}

    <div class=\"row\">
        <div class=\"col s12 push-m9 m3\">{{ 'General_InfoFor'|translate(thisIP) }}</div>
    </div>

    {% for id,provider in locationProviders %}
    <div class=\"row form-group provider{{ id|e('html_attr') }}\">
        <div class=\"col s12 m4 l2\">
            <p>
                <input class=\"location-provider\"
                       name=\"location-provider\"
                       value=\"{{ id }}\"
                       type=\"radio\"
                       ng-model=\"locationSelector.selectedProvider\"
                       id=\"provider_input_{{ id }}\" {% if provider.status != 1 %}disabled=\"disabled\"{% endif %}/>
                <label for=\"provider_input_{{ id }}\">{{ provider.title|translate }}</label>
            </p>
            <p class=\"loc-provider-status\">
                {% if provider.status == 0 %}
                    <span class=\"is-not-installed\">{{ 'General_NotInstalled'|translate}}</span>
                {% elseif provider.status == 1 %}
                    <span class=\"is-installed\">{{ 'General_Installed'|translate }}</span>
                {% elseif provider.status == 2 %}
                    <span class=\"is-broken\">{{ 'General_Broken'|translate }}</span>
                {% endif %}
            </p>
        </div>
        <div class=\"col s12 m4 l6\">
            <p>{{ provider.description|translate|raw }}</p>
            {% if provider.status != 1 and provider.install_docs is defined %}
                <p>{{ provider.install_docs|raw }}</p>
            {% endif %}
        </div>
        <div class=\"col s12 m4 l4\">
            {% if provider.status == 1 %}
                <div class=\"form-help\">
                    {% if thisIP != '127.0.0.1' %}
                        {{ 'UserCountry_CurrentLocationIntro'|translate }}:
                        <div>
                            <br/>
                            <div style=\"position: absolute;\"
                                 piwik-activity-indicator
                                 loading='locationSelector.updateLoading[{{ id|json_encode }}]'></div>
                            <span class=\"location\"><strong>{{ provider.location|raw }}</strong></span>
                        </div>
                        <div class=\"text-right\">
                            <a href=\"javascript:;\"
                               ng-click='locationSelector.refreshProviderInfo({{ id|json_encode }})'>{{ 'General_Refresh'|translate }}</a>
                        </div>
                    {% else %}
                        {{ 'UserCountry_CannotLocalizeLocalIP'|translate(thisIP) }}
                    {% endif %}
                </div>
            {% endif %}
            {% if provider.statusMessage is defined and provider.statusMessage %}
                <div class=\"form-help\">
                    {% if provider.status == 2 %}<strong>{{ 'General_Error'|translate }}:</strong> {% endif %}{{ provider.statusMessage|raw }}
                </div>
            {% endif %}
            {% if provider.extra_message is defined and provider.extra_message %}
                <div class=\"form-help\">
                    {{ provider.extra_message|raw }}
                </div>
            {% endif %}
        </div>
    </div>
    {% endfor %}

    <div piwik-save-button onconfirm=\"locationSelector.save()\" saving=\"locationSelector.isLoading\"></div>

</div>
</div>
<div piwik-content-block
     content-title=\"{% if not geoIPDatabasesInstalled %}{{ 'UserCountry_GeoIPDatabases'|translate|e('html_attr') }}{% else %}{{ 'UserCountry_SetupAutomaticUpdatesOfGeoIP'|translate|e('html_attr') }}{% endif %}\"
     id=\"geoip-db-mangement\">

    <div piwik-location-provider-updater
         geoip-database-installed=\"{% if geoIPDatabasesInstalled %}1{% else %}0{% endif %}\">

        {% if showGeoIPUpdateSection %}
            {% if not geoIPDatabasesInstalled %}
                <div ng-show=\"!locationUpdater.geoipDatabaseInstalled\">
                    <div ng-show=\"locationUpdater.showPiwikNotManagingInfo\">
                        <h3>{{ 'UserCountry_PiwikNotManagingGeoIPDBs'|translate|e('html_attr') }}</h3>
                        <div id=\"manage-geoip-dbs\">
                            <div class=\"row\" id=\"geoipdb-screen1\">
                                <div class=\"geoipdb-column-1 col s6\">
                                    <p>{{ 'UserCountry_IWantToDownloadFreeGeoIP'|translate|raw }}</p>
                                </div>
                                <div class=\"geoipdb-column-2 col s6\">
                                    <p>{{ 'UserCountry_IPurchasedGeoIPDBs'|translate('<a href=\"http://www.maxmind.com/en/geolocation_landing?rId=piwik\">','</a>')|raw }}</p>
                                </div>
                                <div class=\"geoipdb-column-1 col s6\">
                                    <input type=\"button\" class=\"btn\"
                                           ng-click=\"locationUpdater.startDownloadFreeGeoIp()\"
                                           value=\"{{ 'General_GetStarted'|translate }}...\"/>
                                </div>
                                <div class=\"geoipdb-column-2 col s6\">
                                    <input type=\"button\" class=\"btn\"
                                           ng-click=\"locationUpdater.startAutomaticUpdateGeoIp()\"
                                           value=\"{{ 'General_GetStarted'|translate }}...\" id=\"start-automatic-update-geoip\"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"geoipdb-screen2-download\" ng-show=\"locationUpdater.showFreeDownload\">
                        <div piwik-progressbar
                             label=\"{{ ('UserCountry_DownloadingDb'|translate('<a href=\"'~geoLiteUrl~'\">GeoLiteCity.dat</a>') ~ '...')|json_encode }}\"
                             progress=\"locationUpdater.progressFreeDownload\">
                        </div>
                    </div>
                </div>
            {% endif %}

            {% include \"@UserCountry/_updaterManage.twig\" %}
        {% else %}
            <p class=\"form-description\">{{ 'UserCountry_CannotSetupGeoIPAutoUpdating'|translate }}</p>
        {% endif %}
    </div>
</div>

{% endblock %}

";
    }
}
