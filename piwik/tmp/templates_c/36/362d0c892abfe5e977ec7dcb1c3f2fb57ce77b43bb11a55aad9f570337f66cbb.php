<?php

/* @PrivacyManager/privacySettings.twig */
class __TwigTemplate_4ffadae4b6121fe91d0908375b96952cf64d4e378d88a77e68a86c4b302b60fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@PrivacyManager/privacySettings.twig", 1);
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
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_TeaserHeadline")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $context["piwik"] = $this->loadTemplate("macros.twig", "@PrivacyManager/privacySettings.twig", 6);
        // line 7
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 8
            echo "
<div piwik-content-intro>
    <h2 piwik-enriched-headline help-url=\"http://piwik.org/docs/privacy/\">";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h2>

    <p>";
            // line 12
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_Teaser", "<a href=\"#anonymizeIPAnchor\">", "</a>", "<a href=\"#deleteLogsAnchor\">", "</a>", "<a href=\"#optOutAnchor\">", "</a>"));
            echo "
        ";
            // line 13
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_SeeAlsoOurOfficialGuidePrivacy", "<a href=\"http://piwik.org/privacy/\" rel=\"noreferrer\"  target=\"_blank\">", "</a>"));
            echo "</p>
</div>

<div piwik-content-block
     id=\"anonymizeIPAnchor\"
     content-title=\"";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizeIp")), "html_attr");
            echo "\">
    <div piwik-form ng-controller=\"AnonymizeIpController as anonymizeIp\">

        <div piwik-field uicontrol=\"checkbox\" name=\"anonymizeIpSettings\"
             ng-model=\"anonymizeIp.enabled\"
             title=\"";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizeIp")), "html_attr");
            echo "\"
             value=\"";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "enabled", array()), "html", null, true);
            echo "\"
             inline-help=\"";
            // line 25
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpInlineHelp")), "html_attr");
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpDescription")), "html_attr");
            echo "\">
        </div>

        <div ng-show=\"anonymizeIp.enabled\">
            <div piwik-field uicontrol=\"radio\" name=\"maskLength\"
                 ng-model=\"anonymizeIp.maskLength\"
                 title=\"";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpMaskLengtDescription")), "html_attr");
            echo "\"
                 value=\"";
            // line 32
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "maskLength", array()), "html", null, true);
            echo "\"
                 options=\"";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["maskLengthOptions"]) ? $context["maskLengthOptions"] : $this->getContext($context, "maskLengthOptions"))), "html", null, true);
            echo "\"
                 inline-help=\"";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_GeolocationAnonymizeIpNote")), "html_attr");
            echo "\">
            </div>

            <div piwik-field uicontrol=\"radio\" name=\"useAnonymizedIpForVisitEnrichment\"
                 ng-model=\"anonymizeIp.useAnonymizedIpForVisitEnrichment\"
                 title=\"";
            // line 39
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizedIpForVisitEnrichment")), "html_attr");
            echo "\"
                 value=\"";
            // line 40
            if ($this->getAttribute((isset($context["anonymizeIP"]) ? $context["anonymizeIP"] : $this->getContext($context, "anonymizeIP")), "useAnonymizedIpForVisitEnrichment", array())) {
                echo "1";
            } else {
                echo "0";
            }
            echo "\"
                 options=\"";
            // line 41
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["useAnonymizedIpForVisitEnrichmentOptions"]) ? $context["useAnonymizedIpForVisitEnrichmentOptions"] : $this->getContext($context, "useAnonymizedIpForVisitEnrichmentOptions"))), "html", null, true);
            echo "\"
                 inline-help=\"";
            // line 42
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizedIpForVisitEnrichmentNote")), "html_attr");
            echo "\">
            </div>
        </div>

        <div piwik-save-button onconfirm=\"anonymizeIp.save()\" saving=\"anonymizeIp.isLoading\"></div>
    </div>
</div>

";
            // line 50
            if ((isset($context["isDataPurgeSettingsEnabled"]) ? $context["isDataPurgeSettingsEnabled"] : $this->getContext($context, "isDataPurgeSettingsEnabled"))) {
                // line 51
                echo "    <div piwik-content-block id=\"deleteLogsAnchor\"
         content-title=\"";
                // line 52
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteOldVisitorLogs")), "html_attr");
                echo "\">
        <div class=\"ui-confirm\" id=\"confirmDeleteSettings\">
            <h2 id=\"deleteLogsConfirm\">";
                // line 54
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogsConfirm")), "html", null, true);
                echo "</h2>

            <h2 id=\"deleteReportsConfirm\">";
                // line 56
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsConfirm")), "html", null, true);
                echo "</h2>

            <h2 id=\"deleteBothConfirm\">";
                // line 58
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteBothConfirm")), "html", null, true);
                echo "</h2>
            <input role=\"yes\" type=\"button\" value=\"";
                // line 59
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "\"/>
            <input role=\"no\" type=\"button\" value=\"";
                // line 60
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "\"/>
        </div>
        <div class=\"ui-confirm\" id=\"saveSettingsBeforePurge\">
            <h2>";
                // line 63
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_SaveSettingsBeforePurge")), "html", null, true);
                echo "</h2>
            <input role=\"yes\" type=\"button\" value=\"";
                // line 64
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
                echo "\"/>
        </div>
        <div class=\"ui-confirm\" id=\"confirmPurgeNow\">
            <h2>";
                // line 67
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_PurgeNowConfirm")), "html", null, true);
                echo "</h2>
            <input role=\"yes\" type=\"button\" value=\"";
                // line 68
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "\"/>
            <input role=\"no\" type=\"button\" value=\"";
                // line 69
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "\"/>
        </div>

        <p>";
                // line 72
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription2")), "html", null, true);
                echo "</p>

        <div piwik-form
             ng-controller=\"DeleteOldLogsController as deleteOldLogs\"
             id=\"formDeleteSettings\">
            <div id=\"deleteLogSettingEnabled\">

                <div id=\"deleteLogInfoInlineHelp\" class=\"inline-help-node\">
                    ";
                // line 80
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogInfo", $this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "deleteTables", array())));
                echo "
                    ";
                // line 81
                if ( !(isset($context["canDeleteLogActions"]) ? $context["canDeleteLogActions"] : $this->getContext($context, "canDeleteLogActions"))) {
                    // line 82
                    echo "                        <br/><br/>
                        ";
                    // line 83
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_CannotLockSoDeleteLogActions", (isset($context["dbUser"]) ? $context["dbUser"] : $this->getContext($context, "dbUser")))), "html", null, true);
                    echo "
                    ";
                }
                // line 85
                echo "                </div>

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteEnable\"
                     ng-model=\"deleteOldLogs.enabled\"
                     ng-change=\"deleteOldLogs.reloadDbStats()\"
                     title=\"";
                // line 90
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseDeleteLog")), "html_attr");
                echo "\"
                     value=\"";
                // line 91
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_logs_enable", array()), "html", null, true);
                echo "\"
                     inline-help=\"#deleteLogInfoInlineHelp\">
                </div>

                <div class=\"alert alert-warning\" style=\"width: 50%;\">
                    ";
                // line 96
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogDescription2"));
                echo "
                    <a href=\"http://piwik.org/faq/general/#faq_125\" rel=\"noreferrer\"  target=\"_blank\">
                        ";
                // line 98
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ClickHere")), "html", null, true);
                echo "
                    </a>
                </div>
            </div>

            <div id=\"deleteLogSettings\" ng-show=\"deleteOldLogs.enabled\">
                <div piwik-field uicontrol=\"text\" name=\"deleteOlderThan\"
                     ng-model=\"deleteOldLogs.deleteOlderThan\"
                     ng-change=\"deleteOldLogs.reloadDbStats()\"
                     title=\"";
                // line 107
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogsOlderThan")), "html_attr");
                echo " (";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Intl_PeriodDays")), "html", null, true);
                echo ")\"
                     value=\"";
                // line 108
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_logs_older_than", array()), "html", null, true);
                echo "\"
                     inline-help=\"";
                // line 109
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_LeastDaysInput", "1")), "html_attr");
                echo "\">
                </div>
            </div>

            <div piwik-save-button onconfirm=\"deleteOldLogs.save()\" saving=\"deleteOldLogs.isLoading\"></div>
        </div>
    </div>

    <div piwik-content-block id=\"deleteReportsAnchor\"
            content-title=\"";
                // line 118
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteOldArchivedReports")), "html_attr");
                echo "\">

        <div piwik-form
             ng-controller=\"DeleteOldReportsController as deleteReports\" 
             id=\"formDeleteSettings\">

            <div id=\"deleteReportsSettingEnabled\">

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsEnable\"
                     ng-model=\"deleteReports.enabled\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     title=\"";
                // line 129
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseDeleteReports")), "html_attr");
                echo "\"
                     value=\"";
                // line 130
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_reports_enable", array()), "html", null, true);
                echo "\"
                     inline-help=\"";
                // line 131
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsDetailedInfo", "archive_numeric_*", "archive_blob_*")), "html_attr");
                echo "\">
                </div>

                <div class=\"alert alert-warning\" style=\"width: 50%;\">
                    ";
                // line 135
                ob_start();
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseDeleteLog")), "html", null, true);
                $context["deleteOldLogs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 136
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsInfo", "", ""));
                echo "
                    <span ng-show=\"deleteReports.enabled\">
                        <br/><br/>
                        ";
                // line 139
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsInfo2", (isset($context["deleteOldLogs"]) ? $context["deleteOldLogs"] : $this->getContext($context, "deleteOldLogs")))), "html", null, true);
                echo "<br/><br/>
                        ";
                // line 140
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsInfo3", (isset($context["deleteOldLogs"]) ? $context["deleteOldLogs"] : $this->getContext($context, "deleteOldLogs")))), "html", null, true);
                echo "
                    </span>
                </div>

            </div>

            <div id=\"deleteReportsSettings\" ng-show=\"deleteReports.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"deleteReportsOlderThan\"
                     ng-model=\"deleteReports.deleteOlderThan\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     title=\"";
                // line 151
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsOlderThan")), "html_attr");
                echo " (";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Intl_PeriodMonths")), "html", null, true);
                echo ")\"
                     value=\"";
                // line 152
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_reports_older_than", array()), "html", null, true);
                echo "\"
                     inline-help=\"";
                // line 153
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_LeastMonthsInput", "3")), "html_attr");
                echo "\">
                </div>

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepBasic\"
                     ng-model=\"deleteReports.keepBasic\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     title=\"";
                // line 159
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_KeepBasicMetrics")), "html_attr");
                echo " (";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html_attr");
                echo ")\"
                     value=\"";
                // line 160
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_reports_keep_basic_metrics", array()), "html", null, true);
                echo "\"
                     inline-help=\"";
                // line 161
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsDetailedInfo", "archive_numeric_*", "archive_blob_*")), "html_attr");
                echo "\">
                </div>

                <h3>
                    ";
                // line 165
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_KeepDataFor")), "html", null, true);
                echo "
                </h3>
                <div>

                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepDay\"
                         ng-model=\"deleteReports.keepDataForDay\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"";
                // line 172
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DailyReports")), "html_attr");
                echo "\"
                         value=\"";
                // line 173
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_reports_keep_day_reports", array()), "html", null, true);
                echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepWeek\"
                         ng-model=\"deleteReports.keepDataForWeek\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"";
                // line 178
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_WeeklyReports")), "html_attr");
                echo "\"
                         value=\"";
                // line 179
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_reports_keep_week_reports", array()), "html", null, true);
                echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepMonth\"
                         ng-model=\"deleteReports.keepDataForMonth\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"";
                // line 184
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MonthlyReports")), "html_attr");
                echo " (";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html_attr");
                echo ")\"
                         value=\"";
                // line 185
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_reports_keep_month_reports", array()), "html", null, true);
                echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepYear\"
                         ng-model=\"deleteReports.keepDataForYear\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"";
                // line 190
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YearlyReports")), "html_attr");
                echo " (";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html_attr");
                echo ")\"
                         value=\"";
                // line 191
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_reports_keep_year_reports", array()), "html", null, true);
                echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepRange\"
                         ng-model=\"deleteReports.keepDataForRange\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"";
                // line 196
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RangeReports")), "html_attr");
                echo "\"
                         value=\"";
                // line 197
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_reports_keep_range_reports", array()), "html", null, true);
                echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepSegments\"
                         ng-model=\"deleteReports.keepDataForSegments\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"";
                // line 202
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_KeepReportSegments")), "html_attr");
                echo "\"
                         value=\"";
                // line 203
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_reports_keep_segment_reports", array()), "html", null, true);
                echo "\">
                    </div>
                </div>
            </div>

            <div piwik-save-button onconfirm=\"deleteReports.save()\" saving=\"deleteReports.isLoading\"></div>
        </div>
    </div>

    <div piwik-form
         ng-controller=\"ScheduleReportDeletionController as reportDeletionSchedule\"
         id=\"formDeleteSettings\">

        <div piwik-content-block id=\"scheduleSettingsHeadline\"
             ng-show=\"reportDeletionSchedule.model.isEitherDeleteSectionEnabled()\"
             content-title=\"";
                // line 218
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteSchedulingSettings")), "html_attr");
                echo "\">

            <div id=\"deleteSchedulingSettings\">
                <div id=\"deleteSchedulingSettingsInlineHelp\" class=\"inline-help-node\">
                    ";
                // line 222
                if ($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "lastRun", array())) {
                    echo "<strong>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_LastDelete")), "html", null, true);
                    echo ":</strong>
                        ";
                    // line 223
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "lastRunPretty", array()), "html", null, true);
                    echo "
                        <br/>
                        <br/>
                    ";
                }
                // line 227
                echo "                    <strong>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_NextDelete")), "html", null, true);
                echo ":</strong>
                    ";
                // line 228
                echo $this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "nextRunPretty", array());
                echo "
                    <br/>
                    <br/>
                    <a id=\"purgeDataNowLink\" href=\"#\"
                           ng-show=\"reportDeletionSchedule.showPurgeNowLink\"
                           ng-click=\"reportDeletionSchedule.executeDataPurgeNow()\">";
                // line 233
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_PurgeNow")), "html", null, true);
                echo "</a>

                        <div piwik-activity-indicator
                             loading-message=\"'";
                // line 236
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_PurgingData")), "html_attr");
                echo "'\"
                             loading=\"reportDeletionSchedule.loadingDataPurge\"></div>
                    <span id=\"db-purged-message\"
                          ng-show=\"reportDeletionSchedule.dataWasPurged\"
                    >";
                // line 240
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DBPurged")), "html", null, true);
                echo "</span>
                </div>

                <div piwik-field uicontrol=\"select\" name=\"deleteLowestInterval\"
                     ng-model=\"reportDeletionSchedule.deleteLowestInterval\"
                     options=\"";
                // line 245
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["scheduleDeletionOptions"]) ? $context["scheduleDeletionOptions"] : $this->getContext($context, "scheduleDeletionOptions"))), "html", null, true);
                echo "\"
                     title=\"";
                // line 246
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataInterval")), "html_attr");
                echo "\"
                     value=\"";
                // line 247
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "delete_logs_schedule_lowest_interval", array()), "html", null, true);
                echo "\"
                     inline-help=\"#deleteSchedulingSettingsInlineHelp\">
                </div>
            </div>

            <div id=\"deleteDataEstimateSect\" class=\"form-group row\">

                <h3 class=\"col s12\" id=\"databaseSizeHeadline\">
                    ";
                // line 255
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_ReportsDataSavedEstimate")), "html", null, true);
                echo "
                </h3>
                <div class=\"col s12 m6\">
                    <div id=\"deleteDataEstimate\" ng-show=\"reportDeletionSchedule.model.showEstimate\"
                          ng-bind-html=\"reportDeletionSchedule.model.estimation\"></div>
                    &nbsp;
                    <div piwik-activity-indicator loading=\"reportDeletionSchedule.model.loadingEstimation\"></div>
                </div>
                <div class=\"col s12 m6\">
                    ";
                // line 264
                if (($this->getAttribute($this->getAttribute((isset($context["deleteData"]) ? $context["deleteData"] : $this->getContext($context, "deleteData")), "config", array()), "enable_auto_database_size_estimate", array()) == "0")) {
                    // line 265
                    echo "                    <div class=\"form-help\">
                        <a id=\"getPurgeEstimateLink\"
                           ng-click=\"reportDeletionSchedule.model.reloadDbStats(true)\"
                           href=\"#\">";
                    // line 268
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_GetPurgeEstimate")), "html", null, true);
                    echo "</a>
                    </div>
                    ";
                }
                // line 271
                echo "                </div>
            </div>

            <div piwik-save-button onconfirm=\"reportDeletionSchedule.save()\" saving=\"reportDeletionSchedule.isLoading\"></div>

        </div>
    ";
            }
            // line 278
            echo "</div>
<div piwik-content-block
    id=\"DNT\"
    content-title=\"";
            // line 281
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_SupportDNTPreference")), "html_attr");
            echo "\">
    <p>
        ";
            // line 283
            if ((isset($context["dntSupport"]) ? $context["dntSupport"] : $this->getContext($context, "dntSupport"))) {
                // line 284
                echo "            <strong>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Enabled")), "html", null, true);
                echo "</strong>
            <br/>
            ";
                // line 286
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_EnabledMoreInfo")), "html", null, true);
                echo "
        ";
            } else {
                // line 288
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Disabled")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_DisabledMoreInfo")), "html", null, true);
                echo "
        ";
            }
            // line 290
            echo "    </p>

    <div piwik-form ng-controller=\"DoNotTrackPreferenceController as doNotTrack\">

        ";
            // line 295
            echo "        <div piwik-field uicontrol=\"radio\" name=\"doNotTrack\"
             ng-model=\"doNotTrack.enabled\"
             options=\"";
            // line 297
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["doNotTrackOptions"]) ? $context["doNotTrackOptions"] : $this->getContext($context, "doNotTrackOptions"))), "html", null, true);
            echo "\"
             value=\"";
            // line 298
            if ((isset($context["dntSupport"]) ? $context["dntSupport"] : $this->getContext($context, "dntSupport"))) {
                echo "1";
            } else {
                echo "0";
            }
            echo "\"
             inline-help=\"";
            // line 299
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Description")), "html_attr");
            echo "\">
        </div>

        <div piwik-save-button onconfirm=\"doNotTrack.save()\" saving=\"doNotTrack.isLoading\"></div>

    </div>


";
        }
        // line 308
        echo "</div>
<div piwik-content-block
     id=\"optOutAnchor\"
     content-title=\"";
        // line 311
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutForYourVisitors")), "html_attr");
        echo "\">
    <p>
        ";
        // line 313
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutExplanation")), "html", null, true);
        echo "
        ";
        // line 314
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")), "html", null, true);
        echo "index.php?module=CoreAdminHome&action=optOut&language=";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
        $context["optOutUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 315
        echo "        ";
        ob_start();
        echo "<iframe style=\"border: 0; height: 200px; width: 600px;\" src=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["optOutUrl"]) ? $context["optOutUrl"] : $this->getContext($context, "optOutUrl")), "html", null, true);
        echo "\"></iframe>";
        $context["iframeOptOut"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 316
        echo "    </p>
    <pre piwik-select-on-focus>";
        // line 317
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["iframeOptOut"]) ? $context["iframeOptOut"] : $this->getContext($context, "iframeOptOut")), "html");
        echo "</pre>
    <p>
        ";
        // line 319
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutExplanationBis", (("<a href='" . (isset($context["optOutUrl"]) ? $context["optOutUrl"] : $this->getContext($context, "optOutUrl"))) . "' rel='noreferrer' target='_blank'>"), "</a>"));
        echo "
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrivacyManager/privacySettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 319,  670 => 317,  667 => 316,  660 => 315,  654 => 314,  650 => 313,  645 => 311,  640 => 308,  628 => 299,  620 => 298,  616 => 297,  612 => 295,  606 => 290,  598 => 288,  593 => 286,  587 => 284,  585 => 283,  580 => 281,  575 => 278,  566 => 271,  560 => 268,  555 => 265,  553 => 264,  541 => 255,  530 => 247,  526 => 246,  522 => 245,  514 => 240,  507 => 236,  501 => 233,  493 => 228,  488 => 227,  481 => 223,  475 => 222,  468 => 218,  450 => 203,  446 => 202,  438 => 197,  434 => 196,  426 => 191,  420 => 190,  412 => 185,  406 => 184,  398 => 179,  394 => 178,  386 => 173,  382 => 172,  372 => 165,  365 => 161,  361 => 160,  355 => 159,  346 => 153,  342 => 152,  336 => 151,  322 => 140,  318 => 139,  311 => 136,  307 => 135,  300 => 131,  296 => 130,  292 => 129,  278 => 118,  266 => 109,  262 => 108,  256 => 107,  244 => 98,  239 => 96,  231 => 91,  227 => 90,  220 => 85,  215 => 83,  212 => 82,  210 => 81,  206 => 80,  193 => 72,  187 => 69,  183 => 68,  179 => 67,  173 => 64,  169 => 63,  163 => 60,  159 => 59,  155 => 58,  150 => 56,  145 => 54,  140 => 52,  137 => 51,  135 => 50,  124 => 42,  120 => 41,  112 => 40,  108 => 39,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  77 => 25,  73 => 24,  69 => 23,  61 => 18,  53 => 13,  49 => 12,  44 => 10,  40 => 8,  38 => 7,  36 => 6,  33 => 5,  29 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin.twig' %}

{% set title %}{{ 'PrivacyManager_TeaserHeadline'|translate }}{% endset %}

{% block content %}
{% import 'macros.twig' as piwik %}
{% if isSuperUser %}

<div piwik-content-intro>
    <h2 piwik-enriched-headline help-url=\"http://piwik.org/docs/privacy/\">{{ title }}</h2>

    <p>{{ 'PrivacyManager_Teaser'|translate('<a href=\"#anonymizeIPAnchor\">',\"</a>\",'<a href=\"#deleteLogsAnchor\">',\"</a>\",'<a href=\"#optOutAnchor\">',\"</a>\")|raw }}
        {{'PrivacyManager_SeeAlsoOurOfficialGuidePrivacy'|translate('<a href=\"http://piwik.org/privacy/\" rel=\"noreferrer\"  target=\"_blank\">','</a>')|raw }}</p>
</div>

<div piwik-content-block
     id=\"anonymizeIPAnchor\"
     content-title=\"{{ 'PrivacyManager_UseAnonymizeIp'|translate|e('html_attr') }}\">
    <div piwik-form ng-controller=\"AnonymizeIpController as anonymizeIp\">

        <div piwik-field uicontrol=\"checkbox\" name=\"anonymizeIpSettings\"
             ng-model=\"anonymizeIp.enabled\"
             title=\"{{ 'PrivacyManager_UseAnonymizeIp'|translate|e('html_attr') }}\"
             value=\"{{ anonymizeIP.enabled }}\"
             inline-help=\"{{ 'PrivacyManager_AnonymizeIpInlineHelp'|translate|e('html_attr') }} {{ 'PrivacyManager_AnonymizeIpDescription'|translate|e('html_attr') }}\">
        </div>

        <div ng-show=\"anonymizeIp.enabled\">
            <div piwik-field uicontrol=\"radio\" name=\"maskLength\"
                 ng-model=\"anonymizeIp.maskLength\"
                 title=\"{{ 'PrivacyManager_AnonymizeIpMaskLengtDescription'|translate|e('html_attr') }}\"
                 value=\"{{ anonymizeIP.maskLength }}\"
                 options=\"{{ maskLengthOptions|json_encode }}\"
                 inline-help=\"{{ 'PrivacyManager_GeolocationAnonymizeIpNote'|translate|e('html_attr') }}\">
            </div>

            <div piwik-field uicontrol=\"radio\" name=\"useAnonymizedIpForVisitEnrichment\"
                 ng-model=\"anonymizeIp.useAnonymizedIpForVisitEnrichment\"
                 title=\"{{ 'PrivacyManager_UseAnonymizedIpForVisitEnrichment'|translate|e('html_attr') }}\"
                 value=\"{% if anonymizeIP.useAnonymizedIpForVisitEnrichment %}1{% else %}0{% endif %}\"
                 options=\"{{ useAnonymizedIpForVisitEnrichmentOptions|json_encode }}\"
                 inline-help=\"{{ 'PrivacyManager_UseAnonymizedIpForVisitEnrichmentNote'|translate|e('html_attr') }}\">
            </div>
        </div>

        <div piwik-save-button onconfirm=\"anonymizeIp.save()\" saving=\"anonymizeIp.isLoading\"></div>
    </div>
</div>

{% if isDataPurgeSettingsEnabled %}
    <div piwik-content-block id=\"deleteLogsAnchor\"
         content-title=\"{{ 'PrivacyManager_DeleteOldVisitorLogs'|translate|e('html_attr') }}\">
        <div class=\"ui-confirm\" id=\"confirmDeleteSettings\">
            <h2 id=\"deleteLogsConfirm\">{{ 'PrivacyManager_DeleteLogsConfirm'|translate }}</h2>

            <h2 id=\"deleteReportsConfirm\">{{ 'PrivacyManager_DeleteReportsConfirm'|translate }}</h2>

            <h2 id=\"deleteBothConfirm\">{{ 'PrivacyManager_DeleteBothConfirm'|translate }}</h2>
            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
            <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
        </div>
        <div class=\"ui-confirm\" id=\"saveSettingsBeforePurge\">
            <h2>{{ 'PrivacyManager_SaveSettingsBeforePurge'|translate }}</h2>
            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
        </div>
        <div class=\"ui-confirm\" id=\"confirmPurgeNow\">
            <h2>{{ 'PrivacyManager_PurgeNowConfirm'|translate }}</h2>
            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
            <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
        </div>

        <p>{{ 'PrivacyManager_DeleteDataDescription'|translate }} {{ 'PrivacyManager_DeleteDataDescription2'|translate }}</p>

        <div piwik-form
             ng-controller=\"DeleteOldLogsController as deleteOldLogs\"
             id=\"formDeleteSettings\">
            <div id=\"deleteLogSettingEnabled\">

                <div id=\"deleteLogInfoInlineHelp\" class=\"inline-help-node\">
                    {{ 'PrivacyManager_DeleteLogInfo'|translate(deleteData.deleteTables)|raw }}
                    {% if not canDeleteLogActions %}
                        <br/><br/>
                        {{ 'PrivacyManager_CannotLockSoDeleteLogActions'|translate(dbUser) }}
                    {% endif %}
                </div>

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteEnable\"
                     ng-model=\"deleteOldLogs.enabled\"
                     ng-change=\"deleteOldLogs.reloadDbStats()\"
                     title=\"{{ 'PrivacyManager_UseDeleteLog'|translate|e('html_attr') }}\"
                     value=\"{{ deleteData.config.delete_logs_enable }}\"
                     inline-help=\"#deleteLogInfoInlineHelp\">
                </div>

                <div class=\"alert alert-warning\" style=\"width: 50%;\">
                    {{ 'PrivacyManager_DeleteLogDescription2'|translate|raw }}
                    <a href=\"http://piwik.org/faq/general/#faq_125\" rel=\"noreferrer\"  target=\"_blank\">
                        {{ 'General_ClickHere'|translate }}
                    </a>
                </div>
            </div>

            <div id=\"deleteLogSettings\" ng-show=\"deleteOldLogs.enabled\">
                <div piwik-field uicontrol=\"text\" name=\"deleteOlderThan\"
                     ng-model=\"deleteOldLogs.deleteOlderThan\"
                     ng-change=\"deleteOldLogs.reloadDbStats()\"
                     title=\"{{ 'PrivacyManager_DeleteLogsOlderThan'|translate|e('html_attr') }} ({{ 'Intl_PeriodDays'|translate }})\"
                     value=\"{{ deleteData.config.delete_logs_older_than }}\"
                     inline-help=\"{{ 'PrivacyManager_LeastDaysInput'|translate(\"1\")|e('html_attr') }}\">
                </div>
            </div>

            <div piwik-save-button onconfirm=\"deleteOldLogs.save()\" saving=\"deleteOldLogs.isLoading\"></div>
        </div>
    </div>

    <div piwik-content-block id=\"deleteReportsAnchor\"
            content-title=\"{{ 'PrivacyManager_DeleteOldArchivedReports'|translate|e('html_attr') }}\">

        <div piwik-form
             ng-controller=\"DeleteOldReportsController as deleteReports\" 
             id=\"formDeleteSettings\">

            <div id=\"deleteReportsSettingEnabled\">

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsEnable\"
                     ng-model=\"deleteReports.enabled\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     title=\"{{ 'PrivacyManager_UseDeleteReports'|translate|e('html_attr') }}\"
                     value=\"{{ deleteData.config.delete_reports_enable }}\"
                     inline-help=\"{{ 'PrivacyManager_DeleteReportsDetailedInfo'|translate('archive_numeric_*','archive_blob_*')|e('html_attr') }}\">
                </div>

                <div class=\"alert alert-warning\" style=\"width: 50%;\">
                    {% set deleteOldLogs %}{{ 'PrivacyManager_UseDeleteLog'|translate }}{% endset %}
                    {{ 'PrivacyManager_DeleteReportsInfo'|translate('','')|raw }}
                    <span ng-show=\"deleteReports.enabled\">
                        <br/><br/>
                        {{ 'PrivacyManager_DeleteReportsInfo2'|translate(deleteOldLogs) }}<br/><br/>
                        {{ 'PrivacyManager_DeleteReportsInfo3'|translate(deleteOldLogs) }}
                    </span>
                </div>

            </div>

            <div id=\"deleteReportsSettings\" ng-show=\"deleteReports.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"deleteReportsOlderThan\"
                     ng-model=\"deleteReports.deleteOlderThan\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     title=\"{{ 'PrivacyManager_DeleteReportsOlderThan'|translate|e('html_attr') }} ({{ 'Intl_PeriodMonths'|translate }})\"
                     value=\"{{ deleteData.config.delete_reports_older_than }}\"
                     inline-help=\"{{ 'PrivacyManager_LeastMonthsInput'|translate(\"3\")|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepBasic\"
                     ng-model=\"deleteReports.keepBasic\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     title=\"{{ 'PrivacyManager_KeepBasicMetrics'|translate|e('html_attr') }} ({{ 'General_Recommended'|translate|e('html_attr') }})\"
                     value=\"{{ deleteData.config.delete_reports_keep_basic_metrics }}\"
                     inline-help=\"{{ 'PrivacyManager_DeleteReportsDetailedInfo'|translate('archive_numeric_*','archive_blob_*')|e('html_attr') }}\">
                </div>

                <h3>
                    {{ 'PrivacyManager_KeepDataFor'|translate }}
                </h3>
                <div>

                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepDay\"
                         ng-model=\"deleteReports.keepDataForDay\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"{{ 'General_DailyReports'|translate|e('html_attr') }}\"
                         value=\"{{ deleteData.config.delete_reports_keep_day_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepWeek\"
                         ng-model=\"deleteReports.keepDataForWeek\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"{{ 'General_WeeklyReports'|translate|e('html_attr') }}\"
                         value=\"{{ deleteData.config.delete_reports_keep_week_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepMonth\"
                         ng-model=\"deleteReports.keepDataForMonth\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"{{ 'General_MonthlyReports'|translate|e('html_attr') }} ({{ 'General_Recommended'|translate|e('html_attr') }})\"
                         value=\"{{ deleteData.config.delete_reports_keep_month_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepYear\"
                         ng-model=\"deleteReports.keepDataForYear\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"{{ 'General_YearlyReports'|translate|e('html_attr') }} ({{ 'General_Recommended'|translate|e('html_attr') }})\"
                         value=\"{{ deleteData.config.delete_reports_keep_year_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepRange\"
                         ng-model=\"deleteReports.keepDataForRange\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"{{ 'General_RangeReports'|translate|e('html_attr') }}\"
                         value=\"{{ deleteData.config.delete_reports_keep_range_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepSegments\"
                         ng-model=\"deleteReports.keepDataForSegments\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"{{ 'PrivacyManager_KeepReportSegments'|translate|e('html_attr') }}\"
                         value=\"{{ deleteData.config.delete_reports_keep_segment_reports }}\">
                    </div>
                </div>
            </div>

            <div piwik-save-button onconfirm=\"deleteReports.save()\" saving=\"deleteReports.isLoading\"></div>
        </div>
    </div>

    <div piwik-form
         ng-controller=\"ScheduleReportDeletionController as reportDeletionSchedule\"
         id=\"formDeleteSettings\">

        <div piwik-content-block id=\"scheduleSettingsHeadline\"
             ng-show=\"reportDeletionSchedule.model.isEitherDeleteSectionEnabled()\"
             content-title=\"{{ 'PrivacyManager_DeleteSchedulingSettings'|translate|e('html_attr') }}\">

            <div id=\"deleteSchedulingSettings\">
                <div id=\"deleteSchedulingSettingsInlineHelp\" class=\"inline-help-node\">
                    {% if deleteData.lastRun %}<strong>{{ 'PrivacyManager_LastDelete'|translate }}:</strong>
                        {{ deleteData.lastRunPretty }}
                        <br/>
                        <br/>
                    {% endif %}
                    <strong>{{ 'PrivacyManager_NextDelete'|translate }}:</strong>
                    {{ deleteData.nextRunPretty|raw }}
                    <br/>
                    <br/>
                    <a id=\"purgeDataNowLink\" href=\"#\"
                           ng-show=\"reportDeletionSchedule.showPurgeNowLink\"
                           ng-click=\"reportDeletionSchedule.executeDataPurgeNow()\">{{ 'PrivacyManager_PurgeNow'|translate }}</a>

                        <div piwik-activity-indicator
                             loading-message=\"'{{ 'PrivacyManager_PurgingData'|translate|e('html_attr') }}'\"
                             loading=\"reportDeletionSchedule.loadingDataPurge\"></div>
                    <span id=\"db-purged-message\"
                          ng-show=\"reportDeletionSchedule.dataWasPurged\"
                    >{{ 'PrivacyManager_DBPurged'|translate }}</span>
                </div>

                <div piwik-field uicontrol=\"select\" name=\"deleteLowestInterval\"
                     ng-model=\"reportDeletionSchedule.deleteLowestInterval\"
                     options=\"{{ scheduleDeletionOptions|json_encode }}\"
                     title=\"{{ 'PrivacyManager_DeleteDataInterval'|translate|e('html_attr') }}\"
                     value=\"{{ deleteData.config.delete_logs_schedule_lowest_interval }}\"
                     inline-help=\"#deleteSchedulingSettingsInlineHelp\">
                </div>
            </div>

            <div id=\"deleteDataEstimateSect\" class=\"form-group row\">

                <h3 class=\"col s12\" id=\"databaseSizeHeadline\">
                    {{ 'PrivacyManager_ReportsDataSavedEstimate'|translate }}
                </h3>
                <div class=\"col s12 m6\">
                    <div id=\"deleteDataEstimate\" ng-show=\"reportDeletionSchedule.model.showEstimate\"
                          ng-bind-html=\"reportDeletionSchedule.model.estimation\"></div>
                    &nbsp;
                    <div piwik-activity-indicator loading=\"reportDeletionSchedule.model.loadingEstimation\"></div>
                </div>
                <div class=\"col s12 m6\">
                    {% if deleteData.config.enable_auto_database_size_estimate == '0' %}
                    <div class=\"form-help\">
                        <a id=\"getPurgeEstimateLink\"
                           ng-click=\"reportDeletionSchedule.model.reloadDbStats(true)\"
                           href=\"#\">{{ 'PrivacyManager_GetPurgeEstimate'|translate }}</a>
                    </div>
                    {% endif %}
                </div>
            </div>

            <div piwik-save-button onconfirm=\"reportDeletionSchedule.save()\" saving=\"reportDeletionSchedule.isLoading\"></div>

        </div>
    {% endif %}
</div>
<div piwik-content-block
    id=\"DNT\"
    content-title=\"{{ 'PrivacyManager_DoNotTrack_SupportDNTPreference'|translate|e('html_attr') }}\">
    <p>
        {% if dntSupport %}
            <strong>{{ 'PrivacyManager_DoNotTrack_Enabled'|translate }}</strong>
            <br/>
            {{ 'PrivacyManager_DoNotTrack_EnabledMoreInfo'|translate }}
        {% else %}
            {{ 'PrivacyManager_DoNotTrack_Disabled'|translate }} {{ 'PrivacyManager_DoNotTrack_DisabledMoreInfo'|translate }}
        {% endif %}
    </p>

    <div piwik-form ng-controller=\"DoNotTrackPreferenceController as doNotTrack\">

        {# {{ {'module':'PrivacyManager','nonce':nonce,'action':action} | urlRewriteWithParameters }}#DNT #}
        <div piwik-field uicontrol=\"radio\" name=\"doNotTrack\"
             ng-model=\"doNotTrack.enabled\"
             options=\"{{ doNotTrackOptions|json_encode }}\"
             value=\"{% if dntSupport %}1{% else %}0{% endif %}\"
             inline-help=\"{{ 'PrivacyManager_DoNotTrack_Description'|translate|e('html_attr') }}\">
        </div>

        <div piwik-save-button onconfirm=\"doNotTrack.save()\" saving=\"doNotTrack.isLoading\"></div>

    </div>


{% endif %}
</div>
<div piwik-content-block
     id=\"optOutAnchor\"
     content-title=\"{{ 'CoreAdminHome_OptOutForYourVisitors'|translate|e('html_attr') }}\">
    <p>
        {{ 'CoreAdminHome_OptOutExplanation'|translate }}
        {% set optOutUrl %}{{ piwikUrl }}index.php?module=CoreAdminHome&action=optOut&language={{ language }}{% endset %}
        {% set iframeOptOut %}<iframe style=\"border: 0; height: 200px; width: 600px;\" src=\"{{ optOutUrl }}\"></iframe>{% endset %}
    </p>
    <pre piwik-select-on-focus>{{ iframeOptOut|e('html') }}</pre>
    <p>
        {{ 'CoreAdminHome_OptOutExplanationBis'|translate(\"<a href='\" ~ optOutUrl ~ \"' rel='noreferrer' target='_blank'>\",\"</a>\")|raw }}
    </p>
</div>
{% endblock %}
";
    }
}
