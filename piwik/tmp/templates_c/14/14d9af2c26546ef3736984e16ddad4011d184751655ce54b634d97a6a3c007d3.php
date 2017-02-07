<?php

/* layout.twig */
class __TwigTemplate_a2bd0010bfc730bdb2c461f7b03c73d65cf1b95efb31876c192fa46ae503da48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageDescription' => array($this, 'block_pageDescription'),
            'meta' => array($this, 'block_meta'),
            'body' => array($this, 'block_body'),
            'root' => array($this, 'block_root'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ";
        // line 2
        if (array_key_exists("language", $context)) {
            echo "lang=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "\"";
        }
        echo " ng-app=\"piwikApp\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "    </head>
    <body id=\"";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("bodyId", $context)) ? (_twig_default_filter((isset($context["bodyId"]) ? $context["bodyId"] : $this->getContext($context, "bodyId")), "")) : ("")), "html", null, true);
        echo "\" ng-app=\"app\" class=\"";
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : ("")), "html", null, true);
        echo "\">

    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        $this->loadTemplate("@CoreHome/_adblockDetect.twig", "layout.twig", 48)->display($context);
        // line 49
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 7
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 12
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Piwik - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"";
        // line 16
        $this->displayBlock('pageDescription', $context, $blocks);
        echo "\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <meta name=\"google-play-app\" content=\"app-id=org.piwik.mobile2\">
            ";
        // line 19
        $this->displayBlock('meta', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->loadTemplate("@CoreHome/_favicon.twig", "layout.twig", 23)->display($context);
        // line 24
        echo "            ";
        $this->loadTemplate("@CoreHome/_applePinnedTabIcon.twig", "layout.twig", 24)->display($context);
        // line 25
        echo "            ";
        $this->loadTemplate("_jsGlobalVariables.twig", "layout.twig", 25)->display($context);
        // line 26
        echo "            ";
        $this->loadTemplate("_jsCssIncludes.twig", "layout.twig", 26)->display($context);
        // line 28
        if ( !(isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
            echo "<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\">";
        }
        // line 29
        echo "
        ";
    }

    // line 7
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 8
        if (array_key_exists("title", $context)) {
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo " - ";
        }
        // line 9
        if (array_key_exists("categoryTitle", $context)) {
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["categoryTitle"]) ? $context["categoryTitle"] : $this->getContext($context, "categoryTitle")), "html", null, true);
            echo " - ";
        }
        // line 10
        echo "                    Piwik";
    }

    // line 16
    public function block_pageDescription($context, array $blocks = array())
    {
    }

    // line 19
    public function block_meta($context, array $blocks = array())
    {
        // line 20
        echo "                <meta name=\"robots\" content=\"noindex,nofollow\">
            ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "
        ";
        // line 36
        $this->loadTemplate("_iframeBuster.twig", "layout.twig", 36)->display($context);
        // line 37
        echo "        ";
        $this->loadTemplate("@CoreHome/_javaScriptDisabled.twig", "layout.twig", 37)->display($context);
        // line 38
        echo "
        <div id=\"root\">
            ";
        // line 40
        $this->displayBlock('root', $context, $blocks);
        // line 42
        echo "        </div>

        <div piwik-popover-handler></div>

    ";
    }

    // line 40
    public function block_root($context, array $blocks = array())
    {
        // line 41
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 41,  162 => 40,  154 => 42,  152 => 40,  148 => 38,  145 => 37,  143 => 36,  140 => 35,  137 => 34,  132 => 20,  129 => 19,  124 => 16,  120 => 10,  115 => 9,  110 => 8,  107 => 7,  102 => 29,  98 => 28,  95 => 26,  92 => 25,  89 => 24,  87 => 23,  84 => 22,  82 => 19,  76 => 16,  70 => 12,  68 => 7,  65 => 5,  62 => 4,  56 => 49,  54 => 48,  51 => 47,  49 => 34,  42 => 32,  39 => 31,  37 => 4,  28 => 2,  25 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html id=\"ng-app\" {% if language is defined %}lang=\"{{ language }}\"{% endif %} ng-app=\"piwikApp\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <title>
                {%- block pageTitle -%}
                    {%- if title is defined %}{{ title }} - {% endif %}
                    {%- if categoryTitle is defined %}{{ categoryTitle }} - {% endif %}
                    Piwik
                {%- endblock -%}
            </title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Piwik - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"{% block pageDescription %}{% endblock %}\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <meta name=\"google-play-app\" content=\"app-id=org.piwik.mobile2\">
            {% block meta %}
                <meta name=\"robots\" content=\"noindex,nofollow\">
            {% endblock %}

            {% include \"@CoreHome/_favicon.twig\" %}
            {% include \"@CoreHome/_applePinnedTabIcon.twig\" %}
            {% include \"_jsGlobalVariables.twig\" %}
            {% include \"_jsCssIncludes.twig\" %}

            {%- if not isCustomLogo %}<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\">{% endif %}

        {% endblock %}
    </head>
    <body id=\"{{ bodyId|default('') }}\" ng-app=\"app\" class=\"{{ bodyClass|default('') }}\">

    {% block body %}

        {% include \"_iframeBuster.twig\" %}
        {% include \"@CoreHome/_javaScriptDisabled.twig\" %}

        <div id=\"root\">
            {% block root %}
            {% endblock %}
        </div>

        <div piwik-popover-handler></div>

    {% endblock %}

        {% include \"@CoreHome/_adblockDetect.twig\" %}
    </body>
</html>
";
    }
}
