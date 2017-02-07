<?php

/* @CoreUpdater/layout.twig */
class __TwigTemplate_248e0a8f09d6866b53e230cabcf5bc11cbb7343b570563f4caf2c423c3360482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <title>Piwik &rsaquo; ";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("pageTitle", $context)) ? (_twig_default_filter((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")))) : (call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")))), "html", null, true);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
    <meta name=\"viewport\" content=\"initial-scale=1.0\" />
    <meta name=\"robots\" content=\"noindex,nofollow\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=CoreUpdater&action=getUpdaterCss\"/>
    <script type=\"text/javascript\" src=\"index.php?module=CoreUpdater&action=getUpdaterJs\"></script>

    <script type=\"text/javascript\">";
        // line 13
        echo call_user_func_array($this->env->getFunction('getJavascriptTranslations')->getCallable(), array());
        echo "</script>

    ";
        // line 15
        $this->loadTemplate("@CoreHome/_favicon.twig", "@CoreUpdater/layout.twig", 15)->display($context);
        // line 16
        echo "    ";
        $this->loadTemplate("@CoreHome/_applePinnedTabIcon.twig", "@CoreUpdater/layout.twig", 16)->display($context);
        // line 17
        echo "</head>
<body id=\"simple\" ng-app=\"app\">

<div class=\"logo\">
    <img title=\"Piwik\" alt=\"Piwik\" src=\"";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoHeader"]) ? $context["logoHeader"] : $this->getContext($context, "logoHeader")), "html", null, true);
        echo "\"/>
    <br/>
    ";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "
</div>

<div class=\"box\">
    ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "</div>

</body>
</html>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  75 => 27,  67 => 29,  65 => 27,  58 => 23,  53 => 21,  47 => 17,  44 => 16,  42 => 15,  37 => 13,  26 => 5,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <title>Piwik &rsaquo; {{ pageTitle|default('CoreUpdater_UpdateTitle'|translate) }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
    <meta name=\"viewport\" content=\"initial-scale=1.0\" />
    <meta name=\"robots\" content=\"noindex,nofollow\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=CoreUpdater&action=getUpdaterCss\"/>
    <script type=\"text/javascript\" src=\"index.php?module=CoreUpdater&action=getUpdaterJs\"></script>

    <script type=\"text/javascript\">{{ getJavascriptTranslations()|raw }}</script>

    {% include \"@CoreHome/_favicon.twig\" %}
    {% include \"@CoreHome/_applePinnedTabIcon.twig\" %}
</head>
<body id=\"simple\" ng-app=\"app\">

<div class=\"logo\">
    <img title=\"Piwik\" alt=\"Piwik\" src=\"{{ logoHeader }}\"/>
    <br/>
    {{ 'General_OpenSourceWebAnalytics'|translate }}
</div>

<div class=\"box\">
    {% block content %}
    {% endblock %}
</div>

</body>
</html>
";
    }
}
