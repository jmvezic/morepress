<?php

/* @CoreUpdater/runUpdaterAndExit_welcome.twig */
class __TwigTemplate_28eea1fec4a3d16d86a6f75349c11e410dbc47a539edc973cfcb223472aec7a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CoreUpdater/layout.twig", "@CoreUpdater/runUpdaterAndExit_welcome.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CoreUpdater/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"header\">
        <h1>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_DatabaseUpgradeRequired")), "html", null, true);
        echo "</h1>
        <p>";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YourDatabaseIsOutOfDate")), "html", null, true);
        echo "</p>
        ";
        // line 8
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.topBar"));
        echo "
    </div>

    <div class=\"content\" style=\"text-align:left;\">

        ";
        // line 13
        ob_start();
        // line 14
        echo "            ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageContent", "<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/faq/\">", "</a>", "</li><li>"));
        echo "
        ";
        $context["helpMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
        ";
        // line 17
        if ((isset($context["coreError"]) ? $context["coreError"] : $this->getContext($context, "coreError"))) {
            // line 18
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_CriticalErrorDuringTheUpgradeProcess")), "html", null, true);
            echo "
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                echo "                    <br/><strong>";
                echo $context["message"];
                echo "</strong>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </div>
            <p>";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenError")), "html", null, true);
            echo "</p>
            <ul>
                <li>";
            // line 26
            echo (isset($context["helpMessage"]) ? $context["helpMessage"] : $this->getContext($context, "helpMessage"));
            echo "</li>
            </ul>
        ";
        } else {
            // line 29
            echo "
            ";
            // line 30
            if ((((isset($context["coreToUpdate"]) ? $context["coreToUpdate"] : $this->getContext($context, "coreToUpdate")) || (twig_length_filter($this->env, (isset($context["pluginNamesToUpdate"]) ? $context["pluginNamesToUpdate"] : $this->getContext($context, "pluginNamesToUpdate"))) > 0)) || (twig_length_filter($this->env, (isset($context["dimensionsToUpdate"]) ? $context["dimensionsToUpdate"] : $this->getContext($context, "dimensionsToUpdate"))) > 0))) {
                // line 31
                echo "                ";
                if ((isset($context["coreToUpdate"]) ? $context["coreToUpdate"] : $this->getContext($context, "coreToUpdate"))) {
                    // line 32
                    echo "                    <p>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikWillBeUpgradedFromVersionXToVersionY", (isset($context["current_piwik_version"]) ? $context["current_piwik_version"] : $this->getContext($context, "current_piwik_version")), (isset($context["new_piwik_version"]) ? $context["new_piwik_version"] : $this->getContext($context, "new_piwik_version")))), "html", null, true);
                    echo "</p>
                ";
                }
                // line 34
                echo "
                ";
                // line 35
                if ((twig_length_filter($this->env, (isset($context["pluginNamesToUpdate"]) ? $context["pluginNamesToUpdate"] : $this->getContext($context, "pluginNamesToUpdate"))) > 0)) {
                    // line 36
                    echo "                    ";
                    $context["listOfPlugins"] = twig_join_filter((isset($context["pluginNamesToUpdate"]) ? $context["pluginNamesToUpdate"] : $this->getContext($context, "pluginNamesToUpdate")), ", ");
                    // line 37
                    echo "                    <p>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheFollowingPluginsWillBeUpgradedX", (isset($context["listOfPlugins"]) ? $context["listOfPlugins"] : $this->getContext($context, "listOfPlugins")))), "html", null, true);
                    echo "</p>
                ";
                }
                // line 39
                echo "
                ";
                // line 40
                if ((twig_length_filter($this->env, (isset($context["dimensionsToUpdate"]) ? $context["dimensionsToUpdate"] : $this->getContext($context, "dimensionsToUpdate"))) > 0)) {
                    // line 41
                    echo "                    ";
                    $context["listOfDimensions"] = twig_join_filter((isset($context["dimensionsToUpdate"]) ? $context["dimensionsToUpdate"] : $this->getContext($context, "dimensionsToUpdate")), ", ");
                    // line 42
                    echo "                    <p>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheFollowingDimensionsWillBeUpgradedX", (isset($context["listOfDimensions"]) ? $context["listOfDimensions"] : $this->getContext($context, "listOfDimensions")))), "html", null, true);
                    echo "</p>
                ";
                }
                // line 44
                echo "
                <h2>";
                // line 45
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_NoteForLargePiwikInstances")), "html", null, true);
                echo "</h2>
                ";
                // line 46
                if ((isset($context["isMajor"]) ? $context["isMajor"] : $this->getContext($context, "isMajor"))) {
                    // line 47
                    echo "                    <div class=\"alert alert-danger\">
                        ";
                    // line 48
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_MajorUpdateWarning1")), "html", null, true);
                    echo "
                        ";
                    // line 49
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_MajorUpdateWarning2")), "html", null, true);
                    echo "
                    </div>
                ";
                }
                // line 52
                echo "                <p>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheUpgradeProcessMayFailExecuteCommand", "")), "html", null, true);
                echo "</p>
                <pre>";
                // line 53
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["commandUpgradePiwik"]) ? $context["commandUpgradePiwik"] : $this->getContext($context, "commandUpgradePiwik")), "html", null, true);
                echo "</pre>
                <p>";
                // line 54
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HighTrafficPiwikServerEnableMaintenance", "<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http%3A%2F%2Fpiwik.org%2Ffaq%2Fhow-to%2F%23faq_111\">", "</a>"));
                echo "</p>

                ";
                // line 56
                if ( !twig_test_empty((isset($context["queries"]) ? $context["queries"] : $this->getContext($context, "queries")))) {
                    // line 57
                    echo "                    <p><a href=\"#\" id=\"showSql\">› ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ClickHereToViewSqlQueries")), "html", null, true);
                    echo "</a></p>
                    <div id=\"sqlQueries\" style=\"display:none;\">
                        <pre># ";
                    // line 59
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ListOfSqlQueriesFYI", (isset($context["piwik_version"]) ? $context["piwik_version"] : $this->getContext($context, "piwik_version")))), "html", null, true);
                    echo "<br/>";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["queries"]) ? $context["queries"] : $this->getContext($context, "queries")));
                    foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                        echo \Piwik\piwik_escape_filter($this->env, $context["query"], "html", null, true);
                        echo "<br/>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</pre>
                    </div>
                ";
                }
                // line 62
                echo "
                <h2>";
                // line 63
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_NeedHelpUpgrading")), "html", null, true);
                echo "</h2>
                <p>";
                // line 64
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_NeedHelpUpgradingText", "<a rel='noreferrer' target='_blank' href='https://piwik.org/support/upgrading-piwik/'>", "</a>"));
                echo "</p>

                <h2>";
                // line 66
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ReadyToGo")), "html", null, true);
                echo "</h2>
                <p>";
                // line 67
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheUpgradeProcessMayTakeAWhilePleaseBePatient")), "html", null, true);
                echo "</p>
            ";
            }
            // line 69
            echo "
            ";
            // line 70
            if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 0)) {
                // line 71
                echo "                <div class=\"alert alert-info\">
                    ";
                // line 72
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages")), 0, array(), "array"), "html", null, true);
                echo "
                    ";
                // line 73
                if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 1)) {
                    // line 74
                    echo "                        <button id=\"more-results\" class=\"ui-button ui-state-default ui-corner-all\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Details")), "html", null, true);
                    echo "</button>
                    ";
                }
                // line 76
                echo "                </div>
            ";
            }
            // line 78
            echo "
            ";
            // line 79
            if ((((isset($context["coreToUpdate"]) ? $context["coreToUpdate"] : $this->getContext($context, "coreToUpdate")) || (twig_length_filter($this->env, (isset($context["pluginNamesToUpdate"]) ? $context["pluginNamesToUpdate"] : $this->getContext($context, "pluginNamesToUpdate"))) > 0)) || (twig_length_filter($this->env, (isset($context["dimensionsToUpdate"]) ? $context["dimensionsToUpdate"] : $this->getContext($context, "dimensionsToUpdate"))) > 0))) {
                // line 80
                echo "                <form action=\"index.php\" id=\"upgradeCorePluginsForm\" class=\"clearfix\" data-updating=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_Updating")), "html", null, true);
                echo "...\">
                    <input type=\"hidden\" name=\"updateCorePlugins\" value=\"1\"/>
                    ";
                // line 82
                if ((twig_length_filter($this->env, (isset($context["queries"]) ? $context["queries"] : $this->getContext($context, "queries"))) == 1)) {
                    // line 83
                    echo "                        <input type=\"submit\" class=\"btn right\" value=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
                    echo "\"/>
                    ";
                } else {
                    // line 85
                    echo "                        <input type=\"submit\" class=\"btn right\" value=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpgradePiwik")), "html", null, true);
                    echo "\"/>
                    ";
                }
                // line 87
                echo "                </form>
            ";
            } else {
                // line 89
                echo "                ";
                if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) >= 0)) {
                    // line 90
                    echo "                    <div class=\"alert alert-success\">
                        ";
                    // line 91
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikHasBeenSuccessfullyUpgraded")), "html", null, true);
                    echo "
                    </div>
                ";
                }
                // line 94
                echo "                <form action=\"index.php\" class=\"clearfix\">
                    <input type=\"submit\" class=\"btn right\" value=\"";
                // line 95
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
                echo "\"/>
                </form>
            ";
            }
            // line 98
            echo "        ";
        }
        // line 99
        echo "
        ";
        // line 100
        $this->loadTemplate("@Installation/_integrityDetails.twig", "@CoreUpdater/runUpdaterAndExit_welcome.twig", 100)->display($context);
        // line 101
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/runUpdaterAndExit_welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 101,  301 => 100,  298 => 99,  295 => 98,  289 => 95,  286 => 94,  280 => 91,  277 => 90,  274 => 89,  270 => 87,  264 => 85,  258 => 83,  256 => 82,  250 => 80,  248 => 79,  245 => 78,  241 => 76,  235 => 74,  233 => 73,  229 => 72,  226 => 71,  224 => 70,  221 => 69,  216 => 67,  212 => 66,  207 => 64,  203 => 63,  200 => 62,  184 => 59,  178 => 57,  176 => 56,  171 => 54,  167 => 53,  162 => 52,  156 => 49,  152 => 48,  149 => 47,  147 => 46,  143 => 45,  140 => 44,  134 => 42,  131 => 41,  129 => 40,  126 => 39,  120 => 37,  117 => 36,  115 => 35,  112 => 34,  106 => 32,  103 => 31,  101 => 30,  98 => 29,  92 => 26,  87 => 24,  84 => 23,  75 => 21,  71 => 20,  67 => 19,  64 => 18,  62 => 17,  59 => 16,  53 => 14,  51 => 13,  43 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@CoreUpdater/layout.twig' %}

{% block content %}

    <div class=\"header\">
        <h1>{{ 'CoreUpdater_DatabaseUpgradeRequired'|translate }}</h1>
        <p>{{ 'CoreUpdater_YourDatabaseIsOutOfDate'|translate }}</p>
        {{ postEvent('Template.topBar')|raw }}
    </div>

    <div class=\"content\" style=\"text-align:left;\">

        {% set helpMessage %}
            {{ 'CoreUpdater_HelpMessageContent'|translate('<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/faq/\">','</a>','</li><li>')|raw }}
        {% endset %}

        {% if coreError %}
            <div class=\"alert alert-danger\">
                {{ 'CoreUpdater_CriticalErrorDuringTheUpgradeProcess'|translate }}
                {% for message in errorMessages %}
                    <br/><strong>{{ message|raw }}</strong>
                {% endfor %}
            </div>
            <p>{{ 'CoreUpdater_HelpMessageIntroductionWhenError'|translate }}</p>
            <ul>
                <li>{{ helpMessage|raw }}</li>
            </ul>
        {% else %}

            {% if coreToUpdate or pluginNamesToUpdate|length > 0 or dimensionsToUpdate|length > 0 %}
                {% if coreToUpdate %}
                    <p>{{ 'CoreUpdater_PiwikWillBeUpgradedFromVersionXToVersionY'|translate(current_piwik_version,new_piwik_version) }}</p>
                {% endif %}

                {% if pluginNamesToUpdate|length > 0 %}
                    {% set listOfPlugins=pluginNamesToUpdate|join(', ') %}
                    <p>{{ 'CoreUpdater_TheFollowingPluginsWillBeUpgradedX'|translate(listOfPlugins) }}</p>
                {% endif %}

                {% if dimensionsToUpdate|length > 0 %}
                    {% set listOfDimensions=dimensionsToUpdate|join(', ') %}
                    <p>{{ 'CoreUpdater_TheFollowingDimensionsWillBeUpgradedX'|translate(listOfDimensions) }}</p>
                {% endif %}

                <h2>{{ 'CoreUpdater_NoteForLargePiwikInstances'|translate }}</h2>
                {% if isMajor %}
                    <div class=\"alert alert-danger\">
                        {{ 'CoreUpdater_MajorUpdateWarning1'|translate }}
                        {{ 'CoreUpdater_MajorUpdateWarning2'|translate }}
                    </div>
                {% endif %}
                <p>{{ 'CoreUpdater_TheUpgradeProcessMayFailExecuteCommand'|translate('') }}</p>
                <pre>{{ commandUpgradePiwik }}</pre>
                <p>{{ 'CoreUpdater_HighTrafficPiwikServerEnableMaintenance'|translate('<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http%3A%2F%2Fpiwik.org%2Ffaq%2Fhow-to%2F%23faq_111\">', '</a>')|raw }}</p>

                {% if queries is not empty %}
                    <p><a href=\"#\" id=\"showSql\">› {{ 'CoreUpdater_ClickHereToViewSqlQueries'|translate }}</a></p>
                    <div id=\"sqlQueries\" style=\"display:none;\">
                        <pre># {{ 'CoreUpdater_ListOfSqlQueriesFYI'|translate(piwik_version) }}<br/>{% for query in queries %}{{ query }}<br/>{% endfor %}</pre>
                    </div>
                {% endif %}

                <h2>{{ 'CoreUpdater_NeedHelpUpgrading'|translate }}</h2>
                <p>{{ 'CoreUpdater_NeedHelpUpgradingText'|translate(\"<a rel='noreferrer' target='_blank' href='https://piwik.org/support/upgrading-piwik/'>\", \"</a>\")|raw }}</p>

                <h2>{{ 'CoreUpdater_ReadyToGo'|translate }}</h2>
                <p>{{ 'CoreUpdater_TheUpgradeProcessMayTakeAWhilePleaseBePatient'|translate }}</p>
            {% endif %}

            {% if warningMessages|length > 0 %}
                <div class=\"alert alert-info\">
                    {{ warningMessages[0] }}
                    {% if warningMessages|length > 1 %}
                        <button id=\"more-results\" class=\"ui-button ui-state-default ui-corner-all\">{{ 'General_Details'|translate }}</button>
                    {% endif %}
                </div>
            {% endif %}

            {% if coreToUpdate or pluginNamesToUpdate|length > 0 or dimensionsToUpdate|length > 0  %}
                <form action=\"index.php\" id=\"upgradeCorePluginsForm\" class=\"clearfix\" data-updating=\"{{ 'CoreUpdater_Updating'|translate }}...\">
                    <input type=\"hidden\" name=\"updateCorePlugins\" value=\"1\"/>
                    {% if queries|length == 1 %}
                        <input type=\"submit\" class=\"btn right\" value=\"{{ 'General_ContinueToPiwik'|translate }}\"/>
                    {% else %}
                        <input type=\"submit\" class=\"btn right\" value=\"{{ 'CoreUpdater_UpgradePiwik'|translate }}\"/>
                    {% endif %}
                </form>
            {% else %}
                {% if warningMessages|length >= 0 %}
                    <div class=\"alert alert-success\">
                        {{ 'CoreUpdater_PiwikHasBeenSuccessfullyUpgraded'|translate }}
                    </div>
                {% endif %}
                <form action=\"index.php\" class=\"clearfix\">
                    <input type=\"submit\" class=\"btn right\" value=\"{{ 'General_ContinueToPiwik'|translate }}\"/>
                </form>
            {% endif %}
        {% endif %}

        {% include \"@Installation/_integrityDetails.twig\" %}

    </div>

{% endblock %}
";
    }
}
