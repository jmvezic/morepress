<?php

/* @MobileMessaging/macros.twig */
class __TwigTemplate_0df5d3a3451539567cd52f66fb34f3b3bb3355790cb2f1eee8fa7a90d96269f4 extends Twig_Template
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
        // line 52
        echo "
";
    }

    // line 1
    public function getmanageSmsApi($__credentialSupplied__ = null, $__creditLeft__ = null, $__smsProviderOptions__ = null, $__smsProviders__ = null, $__provider__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "credentialSupplied" => $__credentialSupplied__,
            "creditLeft" => $__creditLeft__,
            "smsProviderOptions" => $__smsProviderOptions__,
            "smsProviders" => $__smsProviders__,
            "provider" => $__provider__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div ng-controller=\"ManageSmsProviderController as manageProvider\">

    <div piwik-activity-indicator loading=\"manageProvider.isDeletingAccount\"></div>
    <div id=\"ajaxErrorManageSmsProviderSettings\"></div>

    ";
            // line 7
            if ((isset($context["credentialSupplied"]) ? $context["credentialSupplied"] : $this->getContext($context, "credentialSupplied"))) {
                // line 8
                echo "        <p>
            ";
                // line 9
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CredentialProvided", (isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")))), "html", null, true);
                echo "
            ";
                // line 10
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["creditLeft"]) ? $context["creditLeft"] : $this->getContext($context, "creditLeft")), "html", null, true);
                echo "
            <br/>
            ";
                // line 12
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_UpdateOrDeleteAccount", "<a ng-click=\"manageProvider.showUpdateAccount()\" id=\"displayAccountForm\">", "</a>", "<a ng-click=\"manageProvider.deleteAccount()\" id=\"deleteAccount\">", "</a>"));
                echo "
        </p>
    ";
            } else {
                // line 15
                echo "        <p>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PleaseSignUp")), "html", null, true);
                echo "</p>
    ";
            }
            // line 17
            echo "
    <div piwik-form id='accountForm' ";
            // line 18
            if ((isset($context["credentialSupplied"]) ? $context["credentialSupplied"] : $this->getContext($context, "credentialSupplied"))) {
                echo "ng-show=\"manageProvider.showAccountForm\"";
            }
            echo ">

        <div piwik-field uicontrol=\"select\" name=\"smsProviders\"
             options=\"";
            // line 21
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["smsProviderOptions"]) ? $context["smsProviderOptions"] : $this->getContext($context, "smsProviderOptions"))), "html", null, true);
            echo "\"
             ng-model=\"manageProvider.smsProvider\"
             ng-change=\"manageProvider.isUpdateAccountPossible()\"
             title=\"";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SMSProvider")), "html_attr");
            echo "\"
             value=\"";
            // line 25
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "html", null, true);
            echo "\">
        </div>

        <div piwik-field uicontrol=\"text\" name=\"apiKey\"
             ng-model=\"manageProvider.apiKey\"
             required=\"true\"
             ng-change=\"manageProvider.isUpdateAccountPossible()\"
             title=\"";
            // line 32
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_APIKey")), "html_attr");
            echo "\"
             value=\"\">
        </div>

        <div piwik-save-button id='apiAccountSubmit'
             disabled=\"!manageProvider.canBeUpdated\"
             saving=\"manageProvider.isUpdatingAccount\"
             onconfirm=\"manageProvider.updateAccount()\"></div>

        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["smsProviders"]) ? $context["smsProviders"] : $this->getContext($context, "smsProviders")));
            foreach ($context['_seq'] as $context["smsProvider"] => $context["description"]) {
                // line 42
                echo "            <div class='providerDescription'
                 ng-show=\"manageProvider.smsProvider == '";
                // line 43
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["smsProvider"], "js"), "html", null, true);
                echo "'\"
                 id='";
                // line 44
                echo \Piwik\piwik_escape_filter($this->env, $context["smsProvider"], "html", null, true);
                echo "'>
                ";
                // line 45
                echo $context["description"];
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['smsProvider'], $context['description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
    </div>
</div>
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

    // line 53
    public function getselectPhoneNumbers($__phoneNumbers__ = null, $__angularContext__ = null, $__value__ = null, $__withIntroduction__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "phoneNumbers" => $__phoneNumbers__,
            "angularContext" => $__angularContext__,
            "value" => $__value__,
            "withIntroduction" => $__withIntroduction__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    <div id=\"mobilePhoneNumbersHelp\" class=\"inline-help-node\">
        <span class=\"icon-info\"></span>

        ";
            // line 57
            if ((twig_length_filter($this->env, (isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : $this->getContext($context, "phoneNumbers"))) == 0)) {
                // line 58
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_MobileReport_NoPhoneNumbers")), "html", null, true);
                echo "
        ";
            } else {
                // line 60
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_MobileReport_AdditionalPhoneNumbers")), "html_attr");
                echo "
        ";
            }
            // line 62
            echo "        <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "MobileMessaging", "action" => "index", "updated" => null))), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_MobileReport_MobileMessagingSettingsLink")), "html", null, true);
            echo "</a>
    </div>

    <div class='mobile'
         piwik-field uicontrol=\"checkbox\"
         var-type=\"array\"
         name=\"phoneNumbers\"
         ng-model=\"";
            // line 69
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["angularContext"]) ? $context["angularContext"] : $this->getContext($context, "angularContext")), "html", null, true);
            echo ".report.phoneNumbers\"
         ";
            // line 70
            if ((isset($context["withIntroduction"]) ? $context["withIntroduction"] : $this->getContext($context, "withIntroduction"))) {
                // line 71
                echo "             introduction=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_SendReportTo")), "html_attr");
                echo "\"
         ";
            }
            // line 73
            echo "         title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_PhoneNumbers")), "html_attr");
            echo "\"
         ";
            // line 74
            if ((twig_length_filter($this->env, (isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : $this->getContext($context, "phoneNumbers"))) == 0)) {
                echo "disabled=\"true\"";
            }
            // line 75
            echo "         options=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : $this->getContext($context, "phoneNumbers"))), "html", null, true);
            echo "\"
         inline-help=\"#mobilePhoneNumbersHelp\"
         ";
            // line 77
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                echo "value=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                echo "\"";
            }
            echo ">
    </div>
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

    public function getTemplateName()
    {
        return "@MobileMessaging/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 77,  226 => 75,  222 => 74,  217 => 73,  211 => 71,  209 => 70,  205 => 69,  192 => 62,  186 => 60,  180 => 58,  178 => 57,  173 => 54,  158 => 53,  140 => 48,  131 => 45,  127 => 44,  123 => 43,  120 => 42,  116 => 41,  104 => 32,  94 => 25,  90 => 24,  84 => 21,  76 => 18,  73 => 17,  67 => 15,  61 => 12,  56 => 10,  52 => 9,  49 => 8,  47 => 7,  40 => 2,  24 => 1,  19 => 52,);
    }

    public function getSource()
    {
        return "{% macro manageSmsApi(credentialSupplied, creditLeft, smsProviderOptions, smsProviders, provider) %}
<div ng-controller=\"ManageSmsProviderController as manageProvider\">

    <div piwik-activity-indicator loading=\"manageProvider.isDeletingAccount\"></div>
    <div id=\"ajaxErrorManageSmsProviderSettings\"></div>

    {% if credentialSupplied %}
        <p>
            {{ 'MobileMessaging_Settings_CredentialProvided'|translate(provider) }}
            {{ creditLeft }}
            <br/>
            {{ 'MobileMessaging_Settings_UpdateOrDeleteAccount'|translate('<a ng-click=\"manageProvider.showUpdateAccount()\" id=\"displayAccountForm\">',\"</a>\",'<a ng-click=\"manageProvider.deleteAccount()\" id=\"deleteAccount\">',\"</a>\")|raw }}
        </p>
    {% else %}
        <p>{{ 'MobileMessaging_Settings_PleaseSignUp'|translate }}</p>
    {% endif %}

    <div piwik-form id='accountForm' {% if credentialSupplied %}ng-show=\"manageProvider.showAccountForm\"{% endif %}>

        <div piwik-field uicontrol=\"select\" name=\"smsProviders\"
             options=\"{{ smsProviderOptions|json_encode }}\"
             ng-model=\"manageProvider.smsProvider\"
             ng-change=\"manageProvider.isUpdateAccountPossible()\"
             title=\"{{ 'MobileMessaging_Settings_SMSProvider'|translate|e('html_attr') }}\"
             value=\"{{ provider }}\">
        </div>

        <div piwik-field uicontrol=\"text\" name=\"apiKey\"
             ng-model=\"manageProvider.apiKey\"
             required=\"true\"
             ng-change=\"manageProvider.isUpdateAccountPossible()\"
             title=\"{{ 'MobileMessaging_Settings_APIKey'|translate|e('html_attr') }}\"
             value=\"\">
        </div>

        <div piwik-save-button id='apiAccountSubmit'
             disabled=\"!manageProvider.canBeUpdated\"
             saving=\"manageProvider.isUpdatingAccount\"
             onconfirm=\"manageProvider.updateAccount()\"></div>

        {% for smsProvider, description in smsProviders %}
            <div class='providerDescription'
                 ng-show=\"manageProvider.smsProvider == '{{ smsProvider|e('js') }}'\"
                 id='{{ smsProvider }}'>
                {{ description|raw }}
            </div>
        {% endfor %}

    </div>
</div>
{% endmacro %}

{% macro selectPhoneNumbers(phoneNumbers, angularContext, value, withIntroduction) %}
    <div id=\"mobilePhoneNumbersHelp\" class=\"inline-help-node\">
        <span class=\"icon-info\"></span>

        {% if phoneNumbers|length == 0 %}
            {{ 'MobileMessaging_MobileReport_NoPhoneNumbers'|translate }}
        {% else %}
            {{ 'MobileMessaging_MobileReport_AdditionalPhoneNumbers'|translate|e('html_attr') }}
        {% endif %}
        <a href=\"{{ linkTo({'module':\"MobileMessaging\", 'action': 'index', 'updated':null}) }}\">{{ 'MobileMessaging_MobileReport_MobileMessagingSettingsLink'|translate }}</a>
    </div>

    <div class='mobile'
         piwik-field uicontrol=\"checkbox\"
         var-type=\"array\"
         name=\"phoneNumbers\"
         ng-model=\"{{ angularContext }}.report.phoneNumbers\"
         {% if withIntroduction %}
             introduction=\"{{ 'ScheduledReports_SendReportTo'|translate|e('html_attr') }}\"
         {% endif %}
         title=\"{{ 'MobileMessaging_PhoneNumbers'|translate|e('html_attr') }}\"
         {% if phoneNumbers|length == 0 %}disabled=\"true\"{% endif %}
         options=\"{{ phoneNumbers|json_encode }}\"
         inline-help=\"#mobilePhoneNumbersHelp\"
         {% if value %}value=\"{{ value|json_encode }}\"{% endif %}>
    </div>
{% endmacro %}";
    }
}
