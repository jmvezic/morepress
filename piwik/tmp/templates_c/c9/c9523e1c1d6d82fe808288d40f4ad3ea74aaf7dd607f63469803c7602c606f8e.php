<?php

/* @CoreHome/getSystemSummary.twig */
class __TwigTemplate_0c512d0645e87696ada4ef313f7204ece2ceaf7b09e80fb26aa53bf7c1e21ced extends Twig_Template
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
        echo "<div class=\"widgetBody systemSummary\">
    <div>
        <span class=\"icon icon-user\"></span>
          <a href=\"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "UsersManager", "action" => "index"))), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NUsers", (isset($context["numUsers"]) ? $context["numUsers"] : $this->getContext($context, "numUsers")))), "html", null, true);
        echo "</a>
    </div>
    <div>
        <span><span class=\"icon icon-segment\"></span> ";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_SystemSummaryNSegments", (isset($context["numSegments"]) ? $context["numSegments"] : $this->getContext($context, "numSegments")))), "html", null, true);
        echo "</span>
    </div>
    <div>
        <a href=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "SitesManager", "action" => "index"))), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_SystemSummaryNWebsites", (isset($context["numWebsites"]) ? $context["numWebsites"] : $this->getContext($context, "numWebsites")))), "html", null, true);
        echo "</a>
    </div>
    <div>
        <a href=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "CorePluginsAdmin", "action" => "plugins"))), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_SystemSummaryNActivatedPlugins", (isset($context["numPlugins"]) ? $context["numPlugins"] : $this->getContext($context, "numPlugins")))), "html", null, true);
        echo "</a>
    </div>
    <div>
        <span>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_SystemSummaryPiwikVersion")), "html", null, true);
        echo ":</span>
        <span class=\"piwik-version\">";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikVersion"]) ? $context["piwikVersion"] : $this->getContext($context, "piwikVersion")), "html", null, true);
        echo "</span>
    </div>
    <div>
        <span>";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_SystemSummaryMysqlVersion")), "html", null, true);
        echo ":</span>
        <span>";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["mySqlVersion"]) ? $context["mySqlVersion"] : $this->getContext($context, "mySqlVersion")), "html", null, true);
        echo "</span>
    </div>
    <div>
        <span>";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_SystemSummaryPhpVersion")), "html", null, true);
        echo ":</span>
        <span>";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["phpVersion"]) ? $context["phpVersion"] : $this->getContext($context, "phpVersion")), "html", null, true);
        echo "</span>
    </div>
    <br />
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getSystemSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  74 => 24,  68 => 21,  64 => 20,  58 => 17,  54 => 16,  46 => 13,  38 => 10,  32 => 7,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"widgetBody systemSummary\">
    <div>
        <span class=\"icon icon-user\"></span>
          <a href=\"{{ linkTo({'module': 'UsersManager', 'action': 'index'}) }}\">{{ 'General_NUsers'|translate(numUsers) }}</a>
    </div>
    <div>
        <span><span class=\"icon icon-segment\"></span> {{ 'CoreHome_SystemSummaryNSegments'|translate(numSegments) }}</span>
    </div>
    <div>
        <a href=\"{{ linkTo({'module': 'SitesManager', 'action': 'index'}) }}\">{{ 'CoreHome_SystemSummaryNWebsites'|translate(numWebsites) }}</a>
    </div>
    <div>
        <a href=\"{{ linkTo({'module': 'CorePluginsAdmin', 'action': 'plugins'}) }}\">{{ 'CoreHome_SystemSummaryNActivatedPlugins'|translate(numPlugins) }}</a>
    </div>
    <div>
        <span>{{ 'CoreHome_SystemSummaryPiwikVersion'|translate }}:</span>
        <span class=\"piwik-version\">{{ piwikVersion }}</span>
    </div>
    <div>
        <span>{{ 'CoreHome_SystemSummaryMysqlVersion'|translate }}:</span>
        <span>{{ mySqlVersion }}</span>
    </div>
    <div>
        <span>{{ 'CoreHome_SystemSummaryPhpVersion'|translate }}:</span>
        <span>{{ phpVersion }}</span>
    </div>
    <br />
</div>";
    }
}
