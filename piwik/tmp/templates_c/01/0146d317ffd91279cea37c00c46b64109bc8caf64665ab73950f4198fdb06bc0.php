<?php

/* @UserCountry/_updaterManage.twig */
class __TwigTemplate_ff1b68748e8a8ecf0b1979c7f0e16948fa26028a3b9d526543d94c86a6db7d2c extends Twig_Template
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
        echo "<div ng-show=\"locationUpdater.geoipDatabaseInstalled\" id=\"geoipdb-update-info\">
    <p>
\t\t";
        // line 3
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoIPUpdaterInstructions", "<a href=\"http://www.maxmind.com/en/download_files?rId=piwik\" _target=\"blank\">", "</a>", "<a href=\"http://www.maxmind.com/?rId=piwik\">", "</a>"));
        // line 4
        echo "
        <br/><br/>
\t\t";
        // line 6
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoLiteCityLink", (("<a href='" . (isset($context["geoLiteUrl"]) ? $context["geoLiteUrl"] : $this->getContext($context, "geoLiteUrl"))) . "'>"), (isset($context["geoLiteUrl"]) ? $context["geoLiteUrl"] : $this->getContext($context, "geoLiteUrl")), "</a>"));
        echo "

\t\t<span ng-show=\"locationUpdater.geoipDatabaseInstalled\">
\t\t\t<br/><br/>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoIPUpdaterIntro")), "html", null, true);
        echo ":
\t\t</span>
\t</p>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-location-db\"
\t\t ng-model=\"locationUpdater.locationDbUrl\"
\t\t introduction=\"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_LocationDatabase")), "html_attr");
        echo "\"
\t\t title=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnDownloadURL")), "html_attr");
        echo "\"
\t\t value=\"";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["geoIPLocUrl"]) ? $context["geoIPLocUrl"] : $this->getContext($context, "geoIPLocUrl")), "html", null, true);
        echo "\"
\t\t inline-help=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_LocationDatabaseHint")), "html_attr");
        echo "\">
\t</div>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-isp-db\"
\t\t ng-model=\"locationUpdater.ispDbUrl\"
\t\t introduction=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_ISPDatabase")), "html_attr");
        echo "\"
\t\t title=\"";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnDownloadURL")), "html_attr");
        echo "\"
\t\t value=\"";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["geoIPIspUrl"]) ? $context["geoIPIspUrl"] : $this->getContext($context, "geoIPIspUrl")), "html", null, true);
        echo "\">
\t</div>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-org-db\"
\t\t ng-model=\"locationUpdater.orgDbUrl\"
\t\t introduction=\"";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_OrgDatabase")), "html_attr");
        echo "\"
\t\t title=\"";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnDownloadURL")), "html_attr");
        echo "\"
\t\t value=\"";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["geoIPOrgUrl"]) ? $context["geoIPOrgUrl"] : $this->getContext($context, "geoIPOrgUrl")), "html", null, true);
        echo "\">
\t</div>

\t<div id=\"locationProviderUpdatePeriodInlineHelp\" class=\"inline-help-node\">
\t\t";
        // line 36
        if ((array_key_exists("lastTimeUpdaterRun", $context) &&  !twig_test_empty((isset($context["lastTimeUpdaterRun"]) ? $context["lastTimeUpdaterRun"] : $this->getContext($context, "lastTimeUpdaterRun"))))) {
            // line 37
            echo "\t\t\t";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterWasLastRun", (isset($context["lastTimeUpdaterRun"]) ? $context["lastTimeUpdaterRun"] : $this->getContext($context, "lastTimeUpdaterRun"))));
            echo "
\t\t";
        } else {
            // line 39
            echo "\t\t\t";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterHasNotBeenRun")), "html", null, true);
            echo "
\t\t";
        }
        // line 41
        echo "\t\t<br/><br/>
\t\t<div id=\"geoip-updater-next-run-time\">
\t\t\t";
        // line 43
        $this->loadTemplate("@UserCountry/_updaterNextRunTime.twig", "@UserCountry/_updaterManage.twig", 43)->display($context);
        // line 44
        echo "\t\t</div>
\t</div>

\t<div piwik-field uicontrol=\"radio\" name=\"geoip-update-period\"
\t\t ng-model=\"locationUpdater.updatePeriod\"
\t\t introduction=\"";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_DownloadNewDatabasesEvery")), "html_attr");
        echo "\"
\t\t value=\"";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["geoIPUpdatePeriod"]) ? $context["geoIPUpdatePeriod"] : $this->getContext($context, "geoIPUpdatePeriod")), "html", null, true);
        echo "\"
\t\t options=\"";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["updatePeriodOptions"]) ? $context["updatePeriodOptions"] : $this->getContext($context, "updatePeriodOptions"))), "html", null, true);
        echo "\"
\t\t inline-help=\"#locationProviderUpdatePeriodInlineHelp\">
\t</div>

\t<input type=\"button\"
\t\t   class=\"btn\"
\t\t   ng-click=\"locationUpdater.saveGeoIpLinks()\"
\t\t   ng-value=\"locationUpdater.buttonUpdateSaveText\"/>

\t<div>
\t\t<div id=\"done-updating-updater\"></div>
\t\t<div id=\"geoipdb-update-info-error\"></div>
\t\t<div piwik-progressbar
\t\t\t progress=\"locationUpdater.progressUpdateDownload\"
\t\t\t label=\"locationUpdater.progressUpdateLabel\"
\t\t\t ng-show=\"locationUpdater.isUpdatingGeoIpDatabase\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@UserCountry/_updaterManage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 51,  126 => 50,  122 => 49,  115 => 44,  113 => 43,  109 => 41,  103 => 39,  97 => 37,  95 => 36,  88 => 32,  84 => 31,  80 => 30,  72 => 25,  68 => 24,  64 => 23,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  35 => 9,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div ng-show=\"locationUpdater.geoipDatabaseInstalled\" id=\"geoipdb-update-info\">
    <p>
\t\t{{ 'UserCountry_GeoIPUpdaterInstructions'|translate('<a href=\"http://www.maxmind.com/en/download_files?rId=piwik\" _target=\"blank\">','</a>',
        '<a href=\"http://www.maxmind.com/?rId=piwik\">','</a>')|raw }}
        <br/><br/>
\t\t{{ 'UserCountry_GeoLiteCityLink'|translate(\"<a href='\"~geoLiteUrl~\"'>\",geoLiteUrl,'</a>')|raw }}

\t\t<span ng-show=\"locationUpdater.geoipDatabaseInstalled\">
\t\t\t<br/><br/>{{ 'UserCountry_GeoIPUpdaterIntro'|translate }}:
\t\t</span>
\t</p>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-location-db\"
\t\t ng-model=\"locationUpdater.locationDbUrl\"
\t\t introduction=\"{{ 'UserCountry_LocationDatabase'|translate|e('html_attr') }}\"
\t\t title=\"{{ 'Actions_ColumnDownloadURL'|translate|e('html_attr') }}\"
\t\t value=\"{{ geoIPLocUrl }}\"
\t\t inline-help=\"{{ 'UserCountry_LocationDatabaseHint'|translate|e('html_attr') }}\">
\t</div>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-isp-db\"
\t\t ng-model=\"locationUpdater.ispDbUrl\"
\t\t introduction=\"{{ 'UserCountry_ISPDatabase'|translate|e('html_attr') }}\"
\t\t title=\"{{ 'Actions_ColumnDownloadURL'|translate|e('html_attr') }}\"
\t\t value=\"{{ geoIPIspUrl }}\">
\t</div>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-org-db\"
\t\t ng-model=\"locationUpdater.orgDbUrl\"
\t\t introduction=\"{{ 'UserCountry_OrgDatabase'|translate|e('html_attr') }}\"
\t\t title=\"{{ 'Actions_ColumnDownloadURL'|translate|e('html_attr') }}\"
\t\t value=\"{{ geoIPOrgUrl }}\">
\t</div>

\t<div id=\"locationProviderUpdatePeriodInlineHelp\" class=\"inline-help-node\">
\t\t{% if lastTimeUpdaterRun is defined and lastTimeUpdaterRun is not empty %}
\t\t\t{{ 'UserCountry_UpdaterWasLastRun'|translate(lastTimeUpdaterRun)|raw }}
\t\t{% else %}
\t\t\t{{ 'UserCountry_UpdaterHasNotBeenRun'|translate }}
\t\t{% endif %}
\t\t<br/><br/>
\t\t<div id=\"geoip-updater-next-run-time\">
\t\t\t{% include \"@UserCountry/_updaterNextRunTime.twig\" %}
\t\t</div>
\t</div>

\t<div piwik-field uicontrol=\"radio\" name=\"geoip-update-period\"
\t\t ng-model=\"locationUpdater.updatePeriod\"
\t\t introduction=\"{{ 'UserCountry_DownloadNewDatabasesEvery'|translate|e('html_attr') }}\"
\t\t value=\"{{ geoIPUpdatePeriod }}\"
\t\t options=\"{{ updatePeriodOptions|json_encode }}\"
\t\t inline-help=\"#locationProviderUpdatePeriodInlineHelp\">
\t</div>

\t<input type=\"button\"
\t\t   class=\"btn\"
\t\t   ng-click=\"locationUpdater.saveGeoIpLinks()\"
\t\t   ng-value=\"locationUpdater.buttonUpdateSaveText\"/>

\t<div>
\t\t<div id=\"done-updating-updater\"></div>
\t\t<div id=\"geoipdb-update-info-error\"></div>
\t\t<div piwik-progressbar
\t\t\t progress=\"locationUpdater.progressUpdateDownload\"
\t\t\t label=\"locationUpdater.progressUpdateLabel\"
\t\t\t ng-show=\"locationUpdater.isUpdatingGeoIpDatabase\"></div>
\t</div>
</div>
";
    }
}
