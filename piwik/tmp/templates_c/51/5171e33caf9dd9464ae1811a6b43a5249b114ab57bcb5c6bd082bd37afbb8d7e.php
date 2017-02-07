<?php

/* @CoreAdminHome/generalSettings.twig */
class __TwigTemplate_6081c263d13aff0f823423f40ac826f432a5fb9f602e7264dabe6c75b8015424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/generalSettings.twig", 1);
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
        echo "
    ";
        // line 7
        $context["piwik"] = $this->loadTemplate("macros.twig", "@CoreAdminHome/generalSettings.twig", 7);
        // line 8
        echo "    ";
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreAdminHome/generalSettings.twig", 8);
        // line 9
        echo "
    ";
        // line 10
        echo $context["ajax"]->geterrorDiv();
        echo "
    ";
        // line 11
        echo $context["ajax"]->getloadingDiv();
        echo "
<div piwik-content-block content-title=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ArchivingSettings")), "html_attr");
        echo "\">
    <div ng-controller=\"ArchivingController as archivingSettings\">
        ";
        // line 14
        if ((isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 15
            echo "            <div class=\"form-group row\">
                <h3 class=\"col s12\">";
            // line 16
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllowPiwikArchivingToTriggerBrowser")), "html", null, true);
            echo "</h3>
                <div class=\"col s12 m6\">
                    <p>
                        <input type=\"radio\" value=\"1\" id=\"enableBrowserTriggerArchiving1\"
                               name=\"enableBrowserTriggerArchiving\" ";
            // line 20
            if (((isset($context["enableBrowserTriggerArchiving"]) ? $context["enableBrowserTriggerArchiving"] : $this->getContext($context, "enableBrowserTriggerArchiving")) == 1)) {
                echo " checked=\"checked\"";
            }
            // line 21
            echo "                        />
                        <label for=\"enableBrowserTriggerArchiving1\">
                            ";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "
                            <span class=\"form-description\">";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
            echo "</span>
                        </label>
                    </p>

                    <p>
                    <input type=\"radio\" value=\"0\"
                           id=\"enableBrowserTriggerArchiving2\"
                           name=\"enableBrowserTriggerArchiving\"
                            ";
            // line 32
            if (((isset($context["enableBrowserTriggerArchiving"]) ? $context["enableBrowserTriggerArchiving"] : $this->getContext($context, "enableBrowserTriggerArchiving")) == 0)) {
                echo " checked=\"checked\"";
            }
            echo " />

                    <label for=\"enableBrowserTriggerArchiving2\">
                        ";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "
                        <span class=\"form-description\">";
            // line 36
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ArchivingTriggerDescription", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>"));
            echo "</span>
                    </label>
                    </p>
                </div><div class=\"col s12 m6\">
                    <div class=\"form-help\">
                        ";
            // line 41
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ArchivingInlineHelp")), "html", null, true);
            echo "
                        <br/>
                        ";
            // line 43
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SeeTheOfficialDocumentationForMoreInformation", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>"));
            echo "
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 48
            echo "            <div piwik-field uicontrol=\"radio\" name=\"mailUseSmtp\"
                 disabled=\"true\"
                 introduction=\"";
            // line 50
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllowPiwikArchivingToTriggerBrowser")), "html_attr");
            echo "\"
                 title=\"";
            // line 51
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html_attr");
            echo "\"
                 value=\"1\">
            </div>
        ";
        }
        // line 55
        echo "
        <div class=\"form-group row\">
            <h3 class=\"col s12\">
                ";
        // line 58
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReportsContainingTodayWillBeProcessedAtMostEvery")), "html", null, true);
        echo "
            </h3>
            <div class=\"input-field col s12 m6\">
                <input  type=\"text\" value='";
        // line 61
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["todayArchiveTimeToLive"]) ? $context["todayArchiveTimeToLive"] : $this->getContext($context, "todayArchiveTimeToLive")), "html", null, true);
        echo "' id='todayArchiveTimeToLive' ";
        if ( !(isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            echo "disabled=\"disabled\"";
        }
        echo " />
                <span class=\"form-description\">
                    ";
        // line 63
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RearchiveTimeIntervalOnlyForTodayReports")), "html", null, true);
        echo "
                </span>
            </div>
            <div class=\"col s12 m6\">
                ";
        // line 67
        if ((isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 68
            echo "                    <div class=\"form-help\">
                        ";
            // line 69
            if ((isset($context["showWarningCron"]) ? $context["showWarningCron"] : $this->getContext($context, "showWarningCron"))) {
                // line 70
                echo "                            <strong>
                                ";
                // line 71
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewReportsWillBeProcessedByCron")), "html", null, true);
                echo "<br/>
                                ";
                // line 72
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReportsWillBeProcessedAtMostEveryHour")), "html", null, true);
                echo "
                                ";
                // line 73
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_IfArchivingIsFastYouCanSetupCronRunMoreOften")), "html", null, true);
                echo "<br/>
                            </strong>
                        ";
            }
            // line 76
            echo "                        ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmallTrafficYouCanLeaveDefault", (isset($context["todayArchiveTimeToLiveDefault"]) ? $context["todayArchiveTimeToLiveDefault"] : $this->getContext($context, "todayArchiveTimeToLiveDefault")))), "html", null, true);
            echo "
                        <br/>
                        ";
            // line 78
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MediumToHighTrafficItIsRecommendedTo", 1800, 3600)), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 81
        echo "            </div>
        </div>

        <div onconfirm=\"archivingSettings.save()\" saving=\"archivingSettings.isLoading\" piwik-save-button></div>
    </div>
</div>
";
        // line 87
        if ((isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 88
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_EmailServerSettings")), "html_attr");
            echo "\">

        <div piwik-form ng-controller=\"MailSmtpController as mailSettings\">
            <div piwik-field uicontrol=\"checkbox\" name=\"mailUseSmtp\"
                 ng-model=\"mailSettings.enabled\"
                 title=\"";
            // line 93
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_UseSMTPServerForEmail")), "html_attr");
            echo "\"
                 value=\"";
            // line 94
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "transport", array()) == "smtp")) {
                echo "1";
            }
            echo "\"
                 inline-help=\"";
            // line 95
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SelectYesIfYouWantToSendEmailsViaServer")), "html_attr");
            echo "\">
            </div>

            <div id=\"smtpSettings\"
                 ng-show=\"mailSettings.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"mailHost\"
                     ng-model=\"mailSettings.mailHost\"
                     title=\"";
            // line 103
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpServerAddress")), "html_attr");
            echo "\"
                     value=\"";
            // line 104
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "host", array()), "html", null, true);
            echo "\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailPort\"
                     ng-model=\"mailSettings.mailPort\"
                     title=\"";
            // line 109
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpPort")), "html_attr");
            echo "\"
                     value=\"";
            // line 110
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "port", array()), "html", null, true);
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OptionalSmtpPort")), "html_attr");
            echo "\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailType\"
                     ng-model=\"mailSettings.mailType\"
                     title=\"";
            // line 115
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AuthenticationMethodSmtp")), "html_attr");
            echo "\"
                     options=\"";
            // line 116
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["mailTypes"]) ? $context["mailTypes"] : $this->getContext($context, "mailTypes"))), "html", null, true);
            echo "\"
                     value=\"";
            // line 117
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "port", array()), "html", null, true);
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyUsedIfUserPwdIsSet")), "html_attr");
            echo "\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailUsername\"
                     ng-model=\"mailSettings.mailUsername\"
                     title=\"";
            // line 122
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpUsername")), "html_attr");
            echo "\"
                     value=\"";
            // line 123
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "username", array()), "html", null, true);
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyEnterIfRequired")), "html_attr");
            echo "\">
                </div>

                ";
            // line 126
            ob_start();
            // line 127
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyEnterIfRequiredPassword")), "html", null, true);
            echo "<br/>
                    ";
            // line 128
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_WarningPasswordStored", "<strong>", "</strong>"));
            $context["help"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 130
            echo "
                <div piwik-field uicontrol=\"password\" name=\"mailPassword\"
                     ng-model=\"mailSettings.mailPassword\"
                     title=\"";
            // line 133
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpPassword")), "html_attr");
            echo "\"
                     value=\"";
            // line 134
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "password", array()), "html", null, true);
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html_attr");
            echo "\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailEncryption\"
                     ng-model=\"mailSettings.mailEncryption\"
                     title=\"";
            // line 139
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpEncryption")), "html_attr");
            echo "\"
                     options=\"";
            // line 140
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["mailEncryptions"]) ? $context["mailEncryptions"] : $this->getContext($context, "mailEncryptions"))), "html", null, true);
            echo "\"
                     value=\"";
            // line 141
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "encryption", array()), "html", null, true);
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EncryptedSmtpTransport")), "html_attr");
            echo "\">
                </div>
            </div>

            <div onconfirm=\"mailSettings.save()\" saving=\"mailSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
";
        }
        // line 149
        echo "<div piwik-content-block content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_BrandingSettings")), "html_attr");
        echo "\">

    <div piwik-form ng-controller=\"BrandingController as brandingSettings\">

        <p>";
        // line 153
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CustomLogoHelpText")), "html", null, true);
        echo "</p>

        ";
        // line 155
        ob_start();
        // line 156
        ob_start();
        echo "\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GiveUsYourFeedback")), "html", null, true);
        echo "\"";
        $context["giveUsFeedbackText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 157
        echo "            ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CustomLogoFeedbackInfo", (isset($context["giveUsFeedbackText"]) ? $context["giveUsFeedbackText"] : $this->getContext($context, "giveUsFeedbackText")), "<a href='?module=CorePluginsAdmin&action=plugins' rel='noreferrer' target='_blank'>", "</a>"));
        $context["help"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 159
        echo "
        <div piwik-field uicontrol=\"checkbox\" name=\"useCustomLogo\"
             ng-model=\"brandingSettings.enabled\"
             ng-change=\"brandingSettings.toggleCustomLogo()\"
             title=\"";
        // line 163
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_UseCustomLogo")), "html_attr");
        echo "\"
             value=\"";
        // line 164
        if (($this->getAttribute((isset($context["branding"]) ? $context["branding"] : $this->getContext($context, "branding")), "use_custom_logo", array()) == 1)) {
            echo "1";
        }
        echo "\" inline-help=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html_attr");
        echo "\">
        </div>

        <div id=\"logoSettings\" ng-show=\"brandingSettings.enabled\">
            <form id=\"logoUploadForm\" method=\"post\" enctype=\"multipart/form-data\" action=\"index.php?module=CoreAdminHome&format=json&action=uploadCustomLogo\">
                ";
        // line 169
        if ((isset($context["fileUploadEnabled"]) ? $context["fileUploadEnabled"] : $this->getContext($context, "fileUploadEnabled"))) {
            // line 170
            echo "                    <input type=\"hidden\" name=\"token_auth\" value=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
            echo "\"/>

                    ";
            // line 172
            if ((isset($context["logosWriteable"]) ? $context["logosWriteable"] : $this->getContext($context, "logosWriteable"))) {
                // line 173
                echo "                        <div class=\"alert alert-warning uploaderror\" style=\"display:none;\">
                            ";
                // line 174
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUploadFailed")), "html", null, true);
                echo "
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customLogo\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customLogo\"
                             title=\"";
                // line 180
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUpload")), "html_attr");
                echo "\"
                             inline-help=\"";
                // line 181
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUploadHelp", "JPG / PNG / GIF", 110)), "html_attr");
                echo "\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"";
                // line 186
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["pathUserLogo"]) ? $context["pathUserLogo"] : $this->getContext($context, "pathUserLogo")), "html", null, true);
                echo "\" data-src-exists=\"";
                echo (((isset($context["hasUserLogo"]) ? $context["hasUserLogo"] : $this->getContext($context, "hasUserLogo"))) ? ("1") : ("0"));
                echo "\"
                                     id=\"currentLogo\" style=\"max-height: 150px\"/>
                            </div>
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customFavicon\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customFavicon\"
                             title=\"";
                // line 194
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_FaviconUpload")), "html_attr");
                echo "\"
                             inline-help=\"";
                // line 195
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUploadHelp", "JPG / PNG / GIF", 16)), "html_attr");
                echo "\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"";
                // line 200
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["pathUserFavicon"]) ? $context["pathUserFavicon"] : $this->getContext($context, "pathUserFavicon")), "html", null, true);
                echo "\" data-src-exists=\"";
                echo (((isset($context["hasUserFavicon"]) ? $context["hasUserFavicon"] : $this->getContext($context, "hasUserFavicon"))) ? ("1") : ("0"));
                echo "\"
                                     id=\"currentFavicon\" width=\"16\" height=\"16\"/>
                            </div>
                        </div>

                    ";
            } else {
                // line 206
                echo "                        <div class=\"alert alert-warning\">
                            ";
                // line 207
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoNotWriteableInstruction", (("<code>" .                 // line 208
(isset($context["pathUserLogoDirectory"]) ? $context["pathUserLogoDirectory"] : $this->getContext($context, "pathUserLogoDirectory"))) . "</code><br/>"), ((((((isset($context["pathUserLogo"]) ? $context["pathUserLogo"] : $this->getContext($context, "pathUserLogo")) . ", ") . (isset($context["pathUserLogoSmall"]) ? $context["pathUserLogoSmall"] : $this->getContext($context, "pathUserLogoSmall"))) . ", ") . (isset($context["pathUserLogoSVG"]) ? $context["pathUserLogoSVG"] : $this->getContext($context, "pathUserLogoSVG"))) . "")));
                echo "
                        </div>
                    ";
            }
            // line 211
            echo "                ";
        } else {
            // line 212
            echo "                    <div class=\"alert alert-warning\">
                        ";
            // line 213
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_FileUploadDisabled", "file_uploads=1")), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 216
        echo "            </form>
        </div>

        <div onconfirm=\"brandingSettings.save()\" saving=\"brandingSettings.isLoading\" piwik-save-button></div>
    </div>
</div>

<div piwik-content-block content-title=\"";
        // line 223
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrustedHostSettings")), "html_attr");
        echo "\">
    <a name=\"trustedHostsSection\"></a>
    <div class=\"ui-confirm\" id=\"confirmTrustedHostChange\">
        <h2>";
        // line 226
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrustedHostConfirm")), "html", null, true);
        echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 227
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 228
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
    </div>
    <div id='trustedHostSettings' piwik-trusted-hosts-setting='";
        // line 230
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["trustedHosts"]) ? $context["trustedHosts"] : $this->getContext($context, "trustedHosts"))), "html", null, true);
        echo "'>

        ";
        // line 232
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@CoreAdminHome/generalSettings.twig", 232)->display($context);
        // line 233
        echo "
        ";
        // line 234
        if ( !(isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 235
            echo "            ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PiwikIsInstalledAt")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter((isset($context["trustedHosts"]) ? $context["trustedHosts"] : $this->getContext($context, "trustedHosts")), ", "), "html", null, true);
            echo "
        ";
        } else {
            // line 237
            echo "            <div class=\"form-group row\">
                <label>";
            // line 238
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ValidPiwikHostname")), "html", null, true);
            echo "</label>
            </div>
            <ul>
                <li ng-repeat=\"trustedHost in trustedHosts.hosts\">
                    <input ng-model=\"trustedHost.host\" type=\"text\"/>
                    <a href=\"javascript:;\" ng-click=\"trustedHosts.removeTrustedHost(\$index);\"
                       class=\"remove-trusted-host btn-flat btn-large\" title=\"";
            // line 244
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
            echo "\">
                        <span class=\"icon-minus\"></span>
                    </a>
                </li>
            </ul>

            <div class=\"add-trusted-host\">
                <input type=\"text\" ng-click=\"trustedHosts.addTrustedHost();\"
                       placeholder=\"";
            // line 252
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_AddNewTrustedHost")), "html_attr");
            echo "\" readonly/>

                <a href=\"#\" ng-click=\"trustedHosts.addTrustedHost();\"
                   class=\"btn-flat btn-large\" title=\"";
            // line 255
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Add")), "html", null, true);
            echo "\">
                    <span class=\"icon-add\"></span>
                </a>
            </div>

            <div onconfirm=\"trustedHosts.save()\" saving=\"trustedHosts.isLoading\" piwik-save-button></div>
        ";
        }
        // line 262
        echo "    </div>

</div>
";
        // line 265
        if ((isset($context["isDataPurgeSettingsEnabled"]) ? $context["isDataPurgeSettingsEnabled"] : $this->getContext($context, "isDataPurgeSettingsEnabled"))) {
            // line 266
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings")), "html_attr");
            echo "\">
        <p>";
            // line 267
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription2")), "html", null, true);
            echo "</p>
        <p>
            <a href='";
            // line 269
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "PrivacyManager", "action" => "privacySettings"))), "html", null, true);
            echo "#deleteLogsAnchor'>
                ";
            // line 270
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_ClickHereSettings", (("'" . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings"))) . "'"))), "html", null, true);
            echo "
            </a>
        </p>
    </div>
";
        }
        // line 275
        echo "
<div piwik-plugin-settings mode=\"admin\"></div>

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/generalSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 275,  600 => 270,  596 => 269,  589 => 267,  584 => 266,  582 => 265,  577 => 262,  567 => 255,  561 => 252,  550 => 244,  541 => 238,  538 => 237,  530 => 235,  528 => 234,  525 => 233,  523 => 232,  518 => 230,  513 => 228,  509 => 227,  505 => 226,  499 => 223,  490 => 216,  484 => 213,  481 => 212,  478 => 211,  472 => 208,  471 => 207,  468 => 206,  457 => 200,  449 => 195,  445 => 194,  432 => 186,  424 => 181,  420 => 180,  411 => 174,  408 => 173,  406 => 172,  400 => 170,  398 => 169,  386 => 164,  382 => 163,  376 => 159,  372 => 157,  366 => 156,  364 => 155,  359 => 153,  351 => 149,  338 => 141,  334 => 140,  330 => 139,  320 => 134,  316 => 133,  311 => 130,  308 => 128,  304 => 127,  302 => 126,  294 => 123,  290 => 122,  280 => 117,  276 => 116,  272 => 115,  262 => 110,  258 => 109,  250 => 104,  246 => 103,  235 => 95,  229 => 94,  225 => 93,  216 => 88,  214 => 87,  206 => 81,  200 => 78,  194 => 76,  188 => 73,  184 => 72,  180 => 71,  177 => 70,  175 => 69,  172 => 68,  170 => 67,  163 => 63,  154 => 61,  148 => 58,  143 => 55,  136 => 51,  132 => 50,  128 => 48,  120 => 43,  115 => 41,  107 => 36,  103 => 35,  95 => 32,  84 => 24,  80 => 23,  76 => 21,  72 => 20,  65 => 16,  62 => 15,  60 => 14,  55 => 12,  51 => 11,  47 => 10,  44 => 9,  41 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin.twig' %}

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}

    {% import 'macros.twig' as piwik %}
    {% import 'ajaxMacros.twig' as ajax %}

    {{ ajax.errorDiv() }}
    {{ ajax.loadingDiv() }}
<div piwik-content-block content-title=\"{{ 'CoreAdminHome_ArchivingSettings'|translate|e('html_attr') }}\">
    <div ng-controller=\"ArchivingController as archivingSettings\">
        {% if isGeneralSettingsAdminEnabled %}
            <div class=\"form-group row\">
                <h3 class=\"col s12\">{{ 'General_AllowPiwikArchivingToTriggerBrowser'|translate }}</h3>
                <div class=\"col s12 m6\">
                    <p>
                        <input type=\"radio\" value=\"1\" id=\"enableBrowserTriggerArchiving1\"
                               name=\"enableBrowserTriggerArchiving\" {% if enableBrowserTriggerArchiving==1 %} checked=\"checked\"{% endif %}
                        />
                        <label for=\"enableBrowserTriggerArchiving1\">
                            {{ 'General_Yes'|translate }}
                            <span class=\"form-description\">{{ 'General_Default'|translate }}</span>
                        </label>
                    </p>

                    <p>
                    <input type=\"radio\" value=\"0\"
                           id=\"enableBrowserTriggerArchiving2\"
                           name=\"enableBrowserTriggerArchiving\"
                            {% if enableBrowserTriggerArchiving==0 %} checked=\"checked\"{% endif %} />

                    <label for=\"enableBrowserTriggerArchiving2\">
                        {{ 'General_No'|translate }}
                        <span class=\"form-description\">{{ 'General_ArchivingTriggerDescription'|translate(\"<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>\",\"</a>\")|raw }}</span>
                    </label>
                    </p>
                </div><div class=\"col s12 m6\">
                    <div class=\"form-help\">
                        {{ 'General_ArchivingInlineHelp'|translate }}
                        <br/>
                        {{ 'General_SeeTheOfficialDocumentationForMoreInformation'|translate(\"<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>\",\"</a>\")|raw }}
                    </div>
                </div>
            </div>
        {% else %}
            <div piwik-field uicontrol=\"radio\" name=\"mailUseSmtp\"
                 disabled=\"true\"
                 introduction=\"{{ 'General_AllowPiwikArchivingToTriggerBrowser'|translate|e('html_attr') }}\"
                 title=\"{{ 'General_Yes'|translate|e('html_attr') }}\"
                 value=\"1\">
            </div>
        {% endif %}

        <div class=\"form-group row\">
            <h3 class=\"col s12\">
                {{ 'General_ReportsContainingTodayWillBeProcessedAtMostEvery'|translate }}
            </h3>
            <div class=\"input-field col s12 m6\">
                <input  type=\"text\" value='{{ todayArchiveTimeToLive  }}' id='todayArchiveTimeToLive' {% if not isGeneralSettingsAdminEnabled %}disabled=\"disabled\"{% endif %} />
                <span class=\"form-description\">
                    {{ 'General_RearchiveTimeIntervalOnlyForTodayReports'|translate }}
                </span>
            </div>
            <div class=\"col s12 m6\">
                {% if isGeneralSettingsAdminEnabled %}
                    <div class=\"form-help\">
                        {% if showWarningCron %}
                            <strong>
                                {{ 'General_NewReportsWillBeProcessedByCron'|translate }}<br/>
                                {{ 'General_ReportsWillBeProcessedAtMostEveryHour'|translate }}
                                {{ 'General_IfArchivingIsFastYouCanSetupCronRunMoreOften'|translate }}<br/>
                            </strong>
                        {% endif %}
                        {{ 'General_SmallTrafficYouCanLeaveDefault'|translate( todayArchiveTimeToLiveDefault ) }}
                        <br/>
                        {{ 'General_MediumToHighTrafficItIsRecommendedTo'|translate(1800,3600) }}
                    </div>
                {% endif %}
            </div>
        </div>

        <div onconfirm=\"archivingSettings.save()\" saving=\"archivingSettings.isLoading\" piwik-save-button></div>
    </div>
</div>
{% if isGeneralSettingsAdminEnabled %}
    <div piwik-content-block content-title=\"{{ 'CoreAdminHome_EmailServerSettings'|translate|e('html_attr') }}\">

        <div piwik-form ng-controller=\"MailSmtpController as mailSettings\">
            <div piwik-field uicontrol=\"checkbox\" name=\"mailUseSmtp\"
                 ng-model=\"mailSettings.enabled\"
                 title=\"{{ 'General_UseSMTPServerForEmail'|translate|e('html_attr') }}\"
                 value=\"{% if mail.transport == 'smtp' %}1{% endif %}\"
                 inline-help=\"{{ 'General_SelectYesIfYouWantToSendEmailsViaServer'|translate|e('html_attr') }}\">
            </div>

            <div id=\"smtpSettings\"
                 ng-show=\"mailSettings.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"mailHost\"
                     ng-model=\"mailSettings.mailHost\"
                     title=\"{{ 'General_SmtpServerAddress'|translate|e('html_attr') }}\"
                     value=\"{{ mail.host }}\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailPort\"
                     ng-model=\"mailSettings.mailPort\"
                     title=\"{{ 'General_SmtpPort'|translate|e('html_attr') }}\"
                     value=\"{{ mail.port }}\" inline-help=\"{{ 'General_OptionalSmtpPort'|translate|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailType\"
                     ng-model=\"mailSettings.mailType\"
                     title=\"{{ 'General_AuthenticationMethodSmtp'|translate|e('html_attr') }}\"
                     options=\"{{ mailTypes|json_encode }}\"
                     value=\"{{ mail.port }}\" inline-help=\"{{ 'General_OnlyUsedIfUserPwdIsSet'|translate|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailUsername\"
                     ng-model=\"mailSettings.mailUsername\"
                     title=\"{{ 'General_SmtpUsername'|translate|e('html_attr') }}\"
                     value=\"{{ mail.username }}\" inline-help=\"{{ 'General_OnlyEnterIfRequired'|translate|e('html_attr') }}\">
                </div>

                {% set help -%}
                    {{ 'General_OnlyEnterIfRequiredPassword'|translate }}<br/>
                    {{ 'General_WarningPasswordStored'|translate(\"<strong>\",\"</strong>\")|raw }}
                {%- endset %}

                <div piwik-field uicontrol=\"password\" name=\"mailPassword\"
                     ng-model=\"mailSettings.mailPassword\"
                     title=\"{{ 'General_SmtpPassword'|translate|e('html_attr') }}\"
                     value=\"{{ mail.password }}\" inline-help=\"{{ help|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailEncryption\"
                     ng-model=\"mailSettings.mailEncryption\"
                     title=\"{{ 'General_SmtpEncryption'|translate|e('html_attr') }}\"
                     options=\"{{ mailEncryptions|json_encode }}\"
                     value=\"{{ mail.encryption }}\" inline-help=\"{{ 'General_EncryptedSmtpTransport'|translate|e('html_attr') }}\">
                </div>
            </div>

            <div onconfirm=\"mailSettings.save()\" saving=\"mailSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
{% endif %}
<div piwik-content-block content-title=\"{{ 'CoreAdminHome_BrandingSettings'|translate|e('html_attr') }}\">

    <div piwik-form ng-controller=\"BrandingController as brandingSettings\">

        <p>{{ 'CoreAdminHome_CustomLogoHelpText'|translate }}</p>

        {% set help -%}
            {% set giveUsFeedbackText %}\"{{ 'General_GiveUsYourFeedback'|translate }}\"{% endset %}
            {{ 'CoreAdminHome_CustomLogoFeedbackInfo'|translate(giveUsFeedbackText,\"<a href='?module=CorePluginsAdmin&action=plugins' rel='noreferrer' target='_blank'>\",\"</a>\")|raw }}
        {%- endset %}

        <div piwik-field uicontrol=\"checkbox\" name=\"useCustomLogo\"
             ng-model=\"brandingSettings.enabled\"
             ng-change=\"brandingSettings.toggleCustomLogo()\"
             title=\"{{ 'CoreAdminHome_UseCustomLogo'|translate|e('html_attr') }}\"
             value=\"{% if branding.use_custom_logo == 1 %}1{% endif %}\" inline-help=\"{{ help|e('html_attr') }}\">
        </div>

        <div id=\"logoSettings\" ng-show=\"brandingSettings.enabled\">
            <form id=\"logoUploadForm\" method=\"post\" enctype=\"multipart/form-data\" action=\"index.php?module=CoreAdminHome&format=json&action=uploadCustomLogo\">
                {% if fileUploadEnabled %}
                    <input type=\"hidden\" name=\"token_auth\" value=\"{{ token_auth }}\"/>

                    {% if logosWriteable %}
                        <div class=\"alert alert-warning uploaderror\" style=\"display:none;\">
                            {{ 'CoreAdminHome_LogoUploadFailed'|translate }}
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customLogo\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customLogo\"
                             title=\"{{ 'CoreAdminHome_LogoUpload'|translate|e('html_attr') }}\"
                             inline-help=\"{{ 'CoreAdminHome_LogoUploadHelp'|translate(\"JPG / PNG / GIF\", 110)|e('html_attr') }}\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"{{ pathUserLogo }}\" data-src-exists=\"{{ hasUserLogo ? '1':'0' }}\"
                                     id=\"currentLogo\" style=\"max-height: 150px\"/>
                            </div>
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customFavicon\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customFavicon\"
                             title=\"{{ 'CoreAdminHome_FaviconUpload'|translate|e('html_attr') }}\"
                             inline-help=\"{{ 'CoreAdminHome_LogoUploadHelp'|translate(\"JPG / PNG / GIF\", 16)|e('html_attr') }}\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"{{ pathUserFavicon }}\" data-src-exists=\"{{ hasUserFavicon ? '1':'0' }}\"
                                     id=\"currentFavicon\" width=\"16\" height=\"16\"/>
                            </div>
                        </div>

                    {% else %}
                        <div class=\"alert alert-warning\">
                            {{ 'CoreAdminHome_LogoNotWriteableInstruction'
                                |translate(\"<code>\"~pathUserLogoDirectory~\"</code><br/>\", pathUserLogo ~\", \"~ pathUserLogoSmall ~\", \"~ pathUserLogoSVG ~\"\")|raw }}
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"alert alert-warning\">
                        {{ 'CoreAdminHome_FileUploadDisabled'|translate(\"file_uploads=1\") }}
                    </div>
                {% endif %}
            </form>
        </div>

        <div onconfirm=\"brandingSettings.save()\" saving=\"brandingSettings.isLoading\" piwik-save-button></div>
    </div>
</div>

<div piwik-content-block content-title=\"{{ 'CoreAdminHome_TrustedHostSettings'|translate|e('html_attr') }}\">
    <a name=\"trustedHostsSection\"></a>
    <div class=\"ui-confirm\" id=\"confirmTrustedHostChange\">
        <h2>{{ 'CoreAdminHome_TrustedHostConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>
    <div id='trustedHostSettings' piwik-trusted-hosts-setting='{{ trustedHosts|json_encode }}'>

        {% include \"@CoreHome/_warningInvalidHost.twig\" %}

        {% if not isGeneralSettingsAdminEnabled %}
            {{ 'CoreAdminHome_PiwikIsInstalledAt'|translate }}: {{ trustedHosts|join(\", \") }}
        {% else %}
            <div class=\"form-group row\">
                <label>{{ 'CoreAdminHome_ValidPiwikHostname'|translate }}</label>
            </div>
            <ul>
                <li ng-repeat=\"trustedHost in trustedHosts.hosts\">
                    <input ng-model=\"trustedHost.host\" type=\"text\"/>
                    <a href=\"javascript:;\" ng-click=\"trustedHosts.removeTrustedHost(\$index);\"
                       class=\"remove-trusted-host btn-flat btn-large\" title=\"{{ 'General_Delete'|translate }}\">
                        <span class=\"icon-minus\"></span>
                    </a>
                </li>
            </ul>

            <div class=\"add-trusted-host\">
                <input type=\"text\" ng-click=\"trustedHosts.addTrustedHost();\"
                       placeholder=\"{{ 'CoreAdminHome_AddNewTrustedHost'|translate|e('html_attr') }}\" readonly/>

                <a href=\"#\" ng-click=\"trustedHosts.addTrustedHost();\"
                   class=\"btn-flat btn-large\" title=\"{{ 'General_Add'|translate }}\">
                    <span class=\"icon-add\"></span>
                </a>
            </div>

            <div onconfirm=\"trustedHosts.save()\" saving=\"trustedHosts.isLoading\" piwik-save-button></div>
        {% endif %}
    </div>

</div>
{% if isDataPurgeSettingsEnabled %}
    <div piwik-content-block content-title=\"{{ 'PrivacyManager_DeleteDataSettings'|translate|e('html_attr') }}\">
        <p>{{ 'PrivacyManager_DeleteDataDescription'|translate }} {{ 'PrivacyManager_DeleteDataDescription2'|translate }}</p>
        <p>
            <a href='{{ linkTo({'module':\"PrivacyManager\", 'action':\"privacySettings\"}) }}#deleteLogsAnchor'>
                {{ 'PrivacyManager_ClickHereSettings'|translate(\"'\" ~ 'PrivacyManager_DeleteDataSettings'|translate ~ \"'\") }}
            </a>
        </p>
    </div>
{% endif %}

<div piwik-plugin-settings mode=\"admin\"></div>

{% endblock %}
";
    }
}
