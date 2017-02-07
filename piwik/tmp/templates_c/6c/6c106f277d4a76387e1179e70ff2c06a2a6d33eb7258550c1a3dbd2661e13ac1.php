<?php

/* @MobileMessaging/index.twig */
class __TwigTemplate_992ffeb02a934991d3426b1c9097905ab4e09327fbfc4565f06a4515a20a307f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@MobileMessaging/index.twig", 1);
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
        $context["macro"] = $this->loadTemplate("@MobileMessaging/macros.twig", "@MobileMessaging/index.twig", 3);
        // line 5
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_SettingsMenu")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"manageMobileMessagingSettings\">
    ";
        // line 9
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 10
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
            echo "\">
        <div ng-controller=\"DelegateMobileMessagingSettingsController as delegateManagement\">
            <div piwik-field uicontrol=\"radio\" name=\"delegatedManagement\"
                 options=\"";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["delegateManagementOptions"]) ? $context["delegateManagementOptions"] : $this->getContext($context, "delegateManagementOptions"))), "html", null, true);
            echo "\"
                 full-width=\"true\"
                 ng-model=\"delegateManagement.enabled\"
                 title=\"";
            // line 16
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_LetUsersManageAPICredential")), "html_attr");
            echo "\"
                 value=\"";
            // line 17
            if ((isset($context["delegatedManagement"]) ? $context["delegatedManagement"] : $this->getContext($context, "delegatedManagement"))) {
                echo "1";
            } else {
                echo "0";
            }
            echo "\">
            </div>
            <div piwik-save-button onconfirm=\"delegateManagement.save()\" saving=\"delegateManagement.isLoading\"></div>
        </div>
    </div>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ((isset($context["accountManagedByCurrentUser"]) ? $context["accountManagedByCurrentUser"] : $this->getContext($context, "accountManagedByCurrentUser"))) {
            // line 25
            echo "        <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SMSProvider")), "html_attr");
            echo "\" feature=\"true\">

            ";
            // line 27
            if (((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")) && (isset($context["delegatedManagement"]) ? $context["delegatedManagement"] : $this->getContext($context, "delegatedManagement")))) {
                // line 28
                echo "                <p>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_DelegatedSmsProviderOnlyAppliesToYou")), "html", null, true);
                echo "</p>
            ";
            }
            // line 30
            echo "
            ";
            // line 31
            echo $context["macro"]->getmanageSmsApi((isset($context["credentialSupplied"]) ? $context["credentialSupplied"] : $this->getContext($context, "credentialSupplied")), (isset($context["creditLeft"]) ? $context["creditLeft"] : $this->getContext($context, "creditLeft")), (isset($context["smsProviderOptions"]) ? $context["smsProviderOptions"] : $this->getContext($context, "smsProviderOptions")), (isset($context["smsProviders"]) ? $context["smsProviders"] : $this->getContext($context, "smsProviders")), (isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")));
            echo "
        </div>
    ";
        }
        // line 34
        echo "
    <div piwik-content-block content-title=\"";
        // line 35
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_PhoneNumbers")), "html_attr");
        echo "\">
        ";
        // line 36
        if ( !(isset($context["credentialSupplied"]) ? $context["credentialSupplied"] : $this->getContext($context, "credentialSupplied"))) {
            // line 37
            echo "            <p>
                ";
            // line 38
            if ((isset($context["accountManagedByCurrentUser"]) ? $context["accountManagedByCurrentUser"] : $this->getContext($context, "accountManagedByCurrentUser"))) {
                // line 39
                echo "                    ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CredentialNotProvided")), "html", null, true);
                echo "
                ";
            } else {
                // line 41
                echo "                    ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CredentialNotProvidedByAdmin")), "html", null, true);
                echo "
                ";
            }
            // line 43
            echo "            </p>
        ";
        } else {
            // line 45
            echo "            <div ng-controller=\"ManageMobilePhoneNumbersController as managePhoneNumber\">

                <p>";
            // line 47
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumbers_Help")), "html", null, true);
            echo "</p>

                ";
            // line 49
            if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
                // line 50
                echo "                    <p>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_DelegatedPhoneNumbersOnlyUsedByYou")), "html", null, true);
                echo "</p>
                ";
            }
            // line 52
            echo "
                <div class=\"row\">
                    <h3 class=\"col s12\">";
            // line 54
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumbers_Add")), "html", null, true);
            echo "</h3>
                </div>

                <div class=\"form-group row\">
                    <div class=\"col s12 m6\">
                        <div piwik-field uicontrol=\"select\" name=\"countryCodeSelect\"
                             value=\"";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultCallingCode"]) ? $context["defaultCallingCode"] : $this->getContext($context, "defaultCallingCode")), "html", null, true);
            echo "\"
                             ng-model=\"managePhoneNumber.countryCallingCode\"
                             full-width=\"true\"
                             title=\"";
            // line 63
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SelectCountry")), "html_attr");
            echo "\"
                             options='";
            // line 64
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries"))), "html", null, true);
            echo "'>
                        </div>
                    </div>
                    <div class=\"col s12 m6 form-help\">
                        ";
            // line 68
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumbers_CountryCode_Help")), "html", null, true);
            echo "
                    </div>
                </div>

                <div class=\"form-group row addPhoneNumber\">
                    <div class=\"col s12 m6\">

                        <div class=\"countryCode left\">
                            <span class=\"countryCodeSymbol\">+</span>
                            <div piwik-field uicontrol=\"text\" name=\"countryCallingCode\"
                                 full-width=\"true\"
                                 ng-model=\"managePhoneNumber.countryCallingCode\"
                                 maxlength=\"4\"
                                 title=\"";
            // line 81
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CountryCode")), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"phoneNumber left\">
                            <div piwik-field uicontrol=\"text\" name=\"newPhoneNumber\"
                                 ng-model=\"managePhoneNumber.newPhoneNumber\"
                                 ng-change=\"managePhoneNumber.validateNewPhoneNumberFormat()\"
                                 full-width=\"true\"
                                 maxlength=\"80\"
                                 title=\"";
            // line 90
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumber")), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"addNumber left valign-wrapper\">
                            <div piwik-save-button
                                 disabled=\"!managePhoneNumber.canAddNumber || managePhoneNumber.isAddingPhonenumber\"
                                 onconfirm=\"managePhoneNumber.addPhoneNumber()\"
                                 class=\"valign\" value='";
            // line 97
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Add")), "html", null, true);
            echo "'></div>
                        </div>

                        <div piwik-alert=\"warning\"
                             id=\"suspiciousPhoneNumber\"
                             ng-show=\"managePhoneNumber.showSuspiciousPhoneNumber\">
                        ";
            // line 103
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SuspiciousPhoneNumber", "54184032")), "html", null, true);
            echo "
                        </div>

                    </div>
                    <div class=\"col s12 m6 form-help\">
                        ";
            // line 108
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["strHelpAddPhone"]) ? $context["strHelpAddPhone"] : $this->getContext($context, "strHelpAddPhone")), "html", null, true);
            echo "
                    </div>
                </div>

                <div id=\"ajaxErrorAddPhoneNumber\"></div>
                <div piwik-activity-indicator loading=\"managePhoneNumber.isAddingPhonenumber\"></div>

                ";
            // line 115
            if ((twig_length_filter($this->env, (isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : $this->getContext($context, "phoneNumbers"))) > 0)) {
                // line 116
                echo "                    <div class=\"row\"><h3 class=\"col s12\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_ManagePhoneNumbers")), "html", null, true);
                echo "</h3></div>
                ";
            }
            // line 118
            echo "
                ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : $this->getContext($context, "phoneNumbers")));
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
            foreach ($context['_seq'] as $context["phoneNumber"] => $context["validated"]) {
                // line 120
                echo "                    <div class=\"form-group row\">
                        <div class=\"col s12 m6\">
                            <span class='phoneNumber'>";
                // line 122
                echo \Piwik\piwik_escape_filter($this->env, $context["phoneNumber"], "html", null, true);
                echo "</span>

                            ";
                // line 124
                if ( !$context["validated"]) {
                    // line 125
                    echo "                                <input type=\"text\"
                                       ng-hide=\"managePhoneNumber.isActivated[";
                    // line 126
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "]\"
                                       ng-model=\"managePhoneNumber.validationCode[";
                    // line 127
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "]\"
                                       class='verificationCode'
                                       placeholder=\"";
                    // line 129
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_EnterActivationCode")), "html_attr");
                    echo "\"/>
                                <div piwik-save-button
                                     ng-hide=\"managePhoneNumber.isActivated[";
                    // line 131
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "]\"
                                     value='";
                    // line 132
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_ValidatePhoneNumber")), "html", null, true);
                    echo "'
                                     disabled=\"!managePhoneNumber.validationCode[";
                    // line 133
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "] || managePhoneNumber.isChangingPhoneNumber\"
                                     onconfirm='managePhoneNumber.validateActivationCode(";
                    // line 134
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["phoneNumber"]), "html", null, true);
                    echo ", ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo ")'
                                     ></div>
                            ";
                }
                // line 137
                echo "
                            <div piwik-save-button
                                 value='";
                // line 139
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Remove")), "html", null, true);
                echo "'
                                 disabled=\"managePhoneNumber.isChangingPhoneNumber\"
                                 onconfirm=\"managePhoneNumber.removePhoneNumber(";
                // line 141
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["phoneNumber"]), "html", null, true);
                echo ")\"
                                 ></div>
                        </div>

                        ";
                // line 145
                if ( !$context["validated"]) {
                    // line 146
                    echo "                            <div class=\"form-help col s12 m6\">
                                <div ng-hide=\"managePhoneNumber.isActivated[";
                    // line 147
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "]\">
                                    ";
                    // line 148
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_VerificationCodeJustSent")), "html", null, true);
                    echo "
                                </div>
                                &nbsp;
                            </div>
                        ";
                }
                // line 153
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['phoneNumber'], $context['validated'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "
                ";
            // line 156
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax")), "errorDiv", array(0 => "invalidVerificationCodeAjaxError"), "method"), "html", null, true);
            echo "

                <div piwik-activity-indicator loading=\"managePhoneNumber.isChangingPhoneNumber\"></div>

            </div>

        ";
        }
        // line 163
        echo "    </div>


    <div class='ui-confirm' id='confirmDeleteAccount'>
        <h2>";
        // line 167
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_DeleteAccountConfirm")), "html", null, true);
        echo "</h2>
        <input role='yes' type='button' value='";
        // line 168
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "'/>
        <input role='no' type='button' value='";
        // line 169
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "'/>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@MobileMessaging/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 169,  390 => 168,  386 => 167,  380 => 163,  370 => 156,  367 => 155,  352 => 153,  344 => 148,  340 => 147,  337 => 146,  335 => 145,  328 => 141,  323 => 139,  319 => 137,  311 => 134,  307 => 133,  303 => 132,  299 => 131,  294 => 129,  289 => 127,  285 => 126,  282 => 125,  280 => 124,  275 => 122,  271 => 120,  254 => 119,  251 => 118,  245 => 116,  243 => 115,  233 => 108,  225 => 103,  216 => 97,  206 => 90,  194 => 81,  178 => 68,  171 => 64,  167 => 63,  161 => 60,  152 => 54,  148 => 52,  142 => 50,  140 => 49,  135 => 47,  131 => 45,  127 => 43,  121 => 41,  115 => 39,  113 => 38,  110 => 37,  108 => 36,  104 => 35,  101 => 34,  95 => 31,  92 => 30,  86 => 28,  84 => 27,  78 => 25,  76 => 24,  73 => 23,  60 => 17,  56 => 16,  50 => 13,  43 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin.twig' %}

{% import '@MobileMessaging/macros.twig' as macro %}

{% set title %}{{ 'MobileMessaging_SettingsMenu'|translate }}{% endset %}

{% block content %}
<div class=\"manageMobileMessagingSettings\">
    {% if isSuperUser %}
    <div piwik-content-block content-title=\"{{ title|e('html_attr') }}\">
        <div ng-controller=\"DelegateMobileMessagingSettingsController as delegateManagement\">
            <div piwik-field uicontrol=\"radio\" name=\"delegatedManagement\"
                 options=\"{{ delegateManagementOptions|json_encode }}\"
                 full-width=\"true\"
                 ng-model=\"delegateManagement.enabled\"
                 title=\"{{ 'MobileMessaging_Settings_LetUsersManageAPICredential'|translate|e('html_attr') }}\"
                 value=\"{% if delegatedManagement %}1{% else %}0{% endif %}\">
            </div>
            <div piwik-save-button onconfirm=\"delegateManagement.save()\" saving=\"delegateManagement.isLoading\"></div>
        </div>
    </div>
    {% endif %}

    {% if accountManagedByCurrentUser %}
        <div piwik-content-block content-title=\"{{ 'MobileMessaging_Settings_SMSProvider'|translate|e('html_attr') }}\" feature=\"true\">

            {% if isSuperUser and delegatedManagement %}
                <p>{{ 'MobileMessaging_Settings_DelegatedSmsProviderOnlyAppliesToYou'|translate }}</p>
            {% endif %}

            {{ macro.manageSmsApi(credentialSupplied, creditLeft, smsProviderOptions, smsProviders, provider) }}
        </div>
    {% endif %}

    <div piwik-content-block content-title=\"{{ 'MobileMessaging_PhoneNumbers'|translate|e('html_attr') }}\">
        {% if not credentialSupplied %}
            <p>
                {% if accountManagedByCurrentUser %}
                    {{ 'MobileMessaging_Settings_CredentialNotProvided'|translate }}
                {% else %}
                    {{ 'MobileMessaging_Settings_CredentialNotProvidedByAdmin'|translate }}
                {% endif %}
            </p>
        {% else %}
            <div ng-controller=\"ManageMobilePhoneNumbersController as managePhoneNumber\">

                <p>{{ 'MobileMessaging_Settings_PhoneNumbers_Help'|translate }}</p>

                {% if isSuperUser %}
                    <p>{{ 'MobileMessaging_Settings_DelegatedPhoneNumbersOnlyUsedByYou'|translate }}</p>
                {% endif %}

                <div class=\"row\">
                    <h3 class=\"col s12\">{{ 'MobileMessaging_Settings_PhoneNumbers_Add'|translate }}</h3>
                </div>

                <div class=\"form-group row\">
                    <div class=\"col s12 m6\">
                        <div piwik-field uicontrol=\"select\" name=\"countryCodeSelect\"
                             value=\"{{ defaultCallingCode }}\"
                             ng-model=\"managePhoneNumber.countryCallingCode\"
                             full-width=\"true\"
                             title=\"{{ 'MobileMessaging_Settings_SelectCountry'|translate|e('html_attr') }}\"
                             options='{{ countries|json_encode }}'>
                        </div>
                    </div>
                    <div class=\"col s12 m6 form-help\">
                        {{ 'MobileMessaging_Settings_PhoneNumbers_CountryCode_Help'|translate }}
                    </div>
                </div>

                <div class=\"form-group row addPhoneNumber\">
                    <div class=\"col s12 m6\">

                        <div class=\"countryCode left\">
                            <span class=\"countryCodeSymbol\">+</span>
                            <div piwik-field uicontrol=\"text\" name=\"countryCallingCode\"
                                 full-width=\"true\"
                                 ng-model=\"managePhoneNumber.countryCallingCode\"
                                 maxlength=\"4\"
                                 title=\"{{ 'MobileMessaging_Settings_CountryCode'|translate }}\">
                            </div>
                        </div>
                        <div class=\"phoneNumber left\">
                            <div piwik-field uicontrol=\"text\" name=\"newPhoneNumber\"
                                 ng-model=\"managePhoneNumber.newPhoneNumber\"
                                 ng-change=\"managePhoneNumber.validateNewPhoneNumberFormat()\"
                                 full-width=\"true\"
                                 maxlength=\"80\"
                                 title=\"{{ 'MobileMessaging_Settings_PhoneNumber'|translate }}\">
                            </div>
                        </div>
                        <div class=\"addNumber left valign-wrapper\">
                            <div piwik-save-button
                                 disabled=\"!managePhoneNumber.canAddNumber || managePhoneNumber.isAddingPhonenumber\"
                                 onconfirm=\"managePhoneNumber.addPhoneNumber()\"
                                 class=\"valign\" value='{{ 'General_Add'|translate }}'></div>
                        </div>

                        <div piwik-alert=\"warning\"
                             id=\"suspiciousPhoneNumber\"
                             ng-show=\"managePhoneNumber.showSuspiciousPhoneNumber\">
                        {{ 'MobileMessaging_Settings_SuspiciousPhoneNumber'|translate('54184032') }}
                        </div>

                    </div>
                    <div class=\"col s12 m6 form-help\">
                        {{ strHelpAddPhone }}
                    </div>
                </div>

                <div id=\"ajaxErrorAddPhoneNumber\"></div>
                <div piwik-activity-indicator loading=\"managePhoneNumber.isAddingPhonenumber\"></div>

                {% if phoneNumbers|length > 0 %}
                    <div class=\"row\"><h3 class=\"col s12\">{{ 'MobileMessaging_Settings_ManagePhoneNumbers'|translate }}</h3></div>
                {% endif %}

                {% for phoneNumber, validated in phoneNumbers %}
                    <div class=\"form-group row\">
                        <div class=\"col s12 m6\">
                            <span class='phoneNumber'>{{ phoneNumber }}</span>

                            {% if not validated %}
                                <input type=\"text\"
                                       ng-hide=\"managePhoneNumber.isActivated[{{ loop.index }}]\"
                                       ng-model=\"managePhoneNumber.validationCode[{{ loop.index }}]\"
                                       class='verificationCode'
                                       placeholder=\"{{ 'MobileMessaging_Settings_EnterActivationCode'|translate|e('html_attr') }}\"/>
                                <div piwik-save-button
                                     ng-hide=\"managePhoneNumber.isActivated[{{ loop.index }}]\"
                                     value='{{ 'MobileMessaging_Settings_ValidatePhoneNumber'|translate }}'
                                     disabled=\"!managePhoneNumber.validationCode[{{ loop.index }}] || managePhoneNumber.isChangingPhoneNumber\"
                                     onconfirm='managePhoneNumber.validateActivationCode({{ phoneNumber|json_encode }}, {{ loop.index }})'
                                     ></div>
                            {% endif %}

                            <div piwik-save-button
                                 value='{{ 'General_Remove'|translate }}'
                                 disabled=\"managePhoneNumber.isChangingPhoneNumber\"
                                 onconfirm=\"managePhoneNumber.removePhoneNumber({{ phoneNumber|json_encode }})\"
                                 ></div>
                        </div>

                        {% if not validated %}
                            <div class=\"form-help col s12 m6\">
                                <div ng-hide=\"managePhoneNumber.isActivated[{{ loop.index }}]\">
                                    {{ 'MobileMessaging_Settings_VerificationCodeJustSent'|translate }}
                                </div>
                                &nbsp;
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}

                {{ ajax.errorDiv('invalidVerificationCodeAjaxError') }}

                <div piwik-activity-indicator loading=\"managePhoneNumber.isChangingPhoneNumber\"></div>

            </div>

        {% endif %}
    </div>


    <div class='ui-confirm' id='confirmDeleteAccount'>
        <h2>{{ 'MobileMessaging_Settings_DeleteAccountConfirm'|translate }}</h2>
        <input role='yes' type='button' value='{{ 'General_Yes'|translate }}'/>
        <input role='no' type='button' value='{{ 'General_No'|translate }}'/>
    </div>
</div>
{% endblock %}
";
    }
}
