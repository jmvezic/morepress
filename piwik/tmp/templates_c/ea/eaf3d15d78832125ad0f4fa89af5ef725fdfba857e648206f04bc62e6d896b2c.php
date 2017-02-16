<?php

/* @Login/login.twig */
class __TwigTemplate_6a34a046dbf83d2fe6f9aeab2dfdc449e2d107f5843cff77b5c1b990b0a6432a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Morpheus/layout.twig", "@Login/login.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'head' => array($this, 'block_head'),
            'pageDescription' => array($this, 'block_pageDescription'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Morpheus/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 23
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        $context["bodyId"] = "loginPage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "    <meta name=\"robots\" content=\"index,follow\">
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"libs/bower_components/jquery-placeholder/jquery.placeholder.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.smartbanner.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/stylesheets/jquery.smartbanner.css\" />

    <script type=\"text/javascript\">
        \$(function () {
            \$('#form_login').focus();
            \$('input').placeholder();
            \$.smartbanner({title: \"Piwik Mobile 2\", author: \"Piwik team\", hideOnInstall: false, layer: true, icon: \"plugins/CoreHome/images/googleplay.png\"});
        });
    </script>
";
    }

    // line 25
    public function block_pageDescription($context, array $blocks = array())
    {
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "
    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeTopBar", "login"));
        echo "
    ";
        // line 32
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "login"));
        echo "

    ";
        // line 34
        $this->loadTemplate("_iframeBuster.twig", "@Login/login.twig", 34)->display($context);
        // line 35
        echo "
    <div id=\"notificationContainer\">
    </div>
    <nav class=\"blue-grey darken-3\">
        <div class=\"nav-wrapper\">
            <span id=\"logo\" class=\"brand-logo center\">

                ";
        // line 42
        if (((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) == false)) {
            // line 43
            echo "                    <a href=\"http://piwik.org\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "\">
                ";
        }
        // line 45
        echo "                ";
        if ((isset($context["hasSVGLogo"]) ? $context["hasSVGLogo"] : $this->getContext($context, "hasSVGLogo"))) {
            // line 46
            echo "                    <img src='";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoSVG"]) ? $context["logoSVG"] : $this->getContext($context, "logoSVG")), "html", null, true);
            echo "' class=\"";
            if ( !(isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
                echo "default-piwik-logo";
            }
            echo "\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "\" alt=\"Piwik\"/>
                ";
        } else {
            // line 48
            echo "                    <img src='";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoLarge"]) ? $context["logoLarge"] : $this->getContext($context, "logoLarge")), "html", null, true);
            echo "' title=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "\" alt=\"Piwik\" />
                ";
        }
        // line 50
        echo "
                ";
        // line 51
        if (((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) == false)) {
            // line 52
            echo "                    </a>
                ";
        }
        // line 54
        echo "
            </span>
        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"col s12 m6 push-m3 l4 push-l4\">

        ";
        // line 63
        echo "        ";
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ((isset($context["isValidHost"]) ? $context["isValidHost"] : $this->getContext($context, "isValidHost")) == false))) {
            // line 64
            echo "            ";
            $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@Login/login.twig", 64)->display($context);
            // line 65
            echo "        ";
        } else {
            // line 66
            echo "            <div class=\"contentForm loginForm\">
                ";
            // line 67
            $this->loadTemplate("@Login/login.twig", "@Login/login.twig", 67, "1482918363")->display(array_merge($context, array("title" => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")))));
            // line 131
            echo "            </div>
            <div class=\"contentForm resetForm\" style=\"display:none;\">
                ";
            // line 133
            $this->loadTemplate("@Login/login.twig", "@Login/login.twig", 133, "647473369")->display(array_merge($context, array("title" => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_ChangeYourPassword")))));
            // line 185
            echo "            </div>
        ";
        }
        // line 187
        echo "
    </section>

";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 187,  170 => 185,  168 => 133,  164 => 131,  162 => 67,  159 => 66,  156 => 65,  153 => 64,  150 => 63,  140 => 54,  136 => 52,  134 => 51,  131 => 50,  123 => 48,  111 => 46,  108 => 45,  102 => 43,  100 => 42,  91 => 35,  89 => 34,  84 => 32,  80 => 31,  77 => 30,  74 => 29,  68 => 25,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  34 => 1,  32 => 27,  28 => 23,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Morpheus/layout.twig' %}

{% block meta %}
    <meta name=\"robots\" content=\"index,follow\">
{% endblock %}

{% block head %}
    {{ parent() }}

    <script type=\"text/javascript\" src=\"libs/bower_components/jquery-placeholder/jquery.placeholder.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.smartbanner.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/stylesheets/jquery.smartbanner.css\" />

    <script type=\"text/javascript\">
        \$(function () {
            \$('#form_login').focus();
            \$('input').placeholder();
            \$.smartbanner({title: \"Piwik Mobile 2\", author: \"Piwik team\", hideOnInstall: false, layer: true, icon: \"plugins/CoreHome/images/googleplay.png\"});
        });
    </script>
{% endblock %}

{% set title %}{{ 'Login_LogIn'|translate }}{% endset %}

{% block pageDescription %}{{ 'General_OpenSourceWebAnalytics'|translate }}{% endblock %}

{% set bodyId = 'loginPage' %}

{% block body %}

    {{ postEvent(\"Template.beforeTopBar\", \"login\") }}
    {{ postEvent(\"Template.beforeContent\", \"login\") }}

    {% include \"_iframeBuster.twig\" %}

    <div id=\"notificationContainer\">
    </div>
    <nav class=\"blue-grey darken-3\">
        <div class=\"nav-wrapper\">
            <span id=\"logo\" class=\"brand-logo center\">

                {% if isCustomLogo == false %}
                    <a href=\"http://piwik.org\" title=\"{{ linkTitle }}\">
                {% endif %}
                {% if hasSVGLogo %}
                    <img src='{{ logoSVG }}' class=\"{% if not isCustomLogo %}default-piwik-logo{% endif %}\" title=\"{{ linkTitle }}\" alt=\"Piwik\"/>
                {% else %}
                    <img src='{{ logoLarge }}' title=\"{{ linkTitle }}\" alt=\"Piwik\" />
                {% endif %}

                {% if isCustomLogo == false %}
                    </a>
                {% endif %}

            </span>
        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"col s12 m6 push-m3 l4 push-l4\">

        {# untrusted host warning #}
        {% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
            {% include '@CoreHome/_warningInvalidHost.twig' %}
        {% else %}
            <div class=\"contentForm loginForm\">
                {% embed 'contentBlock.twig' with {'title': 'Login_LogIn'|translate} %}
                {% block content %}

                    <div class=\"message_container\">

                        {{ include('@Login/_formErrors.twig', {formErrors: form_data.errors } )  }}

                        {% if AccessErrorString %}
                            <div piwik-notification
                                 noclear=\"true\"
                                 context=\"error\">
                                <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                            </div>
                        {% endif %}

                        {% if infoMessage %}
                            <p class=\"message\">{{ infoMessage|raw }}</p>
                        {% endif %}
                    </div>

                    <form {{ form_data.attributes|raw }} ng-non-bindable>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"10\" autofocus=\"autofocus\"/>
                                <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> {{ 'General_Username'|translate }}</label>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                                <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"20\" />
                                <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                            </div>
                        </div>

                        <div class=\"row actions\">
                            <div class=\"col s12\">
                                <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                       {% if form_data.form_rememberme.value %}checked=\"checked\" {% endif %}/>
                                <label for=\"login_form_rememberme\">{{ 'Login_RememberMe'|translate }}</label>
                                <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"{{ 'Login_LogIn'|translate }}\"
                                       tabindex=\"100\"/>
                            </div>
                        </div>

                    </form>
                    <p id=\"nav\">
                        {{ postEvent(\"Template.loginNav\", \"top\") }}
                        <a id=\"login_form_nav\" href=\"#\"
                           title=\"{{ 'Login_LostYourPassword'|translate }}\">{{ 'Login_LostYourPassword'|translate }}</a>
                        {{ postEvent(\"Template.loginNav\", \"bottom\") }}
                    </p>

                    {% if isCustomLogo %}
                        <p id=\"piwik\">
                            <i><a href=\"http://piwik.org/\" rel=\"noreferrer\"  target=\"_blank\">{{ linkTitle }}</a></i>
                        </p>
                    {% endif %}

                {% endblock %}
                {% endembed %}
            </div>
            <div class=\"contentForm resetForm\" style=\"display:none;\">
                {% embed 'contentBlock.twig' with {'title': 'Login_ChangeYourPassword'|translate} %}
                {% block content %}

                    <div class=\"message_container\">
                    </div>

                    <form id=\"reset_form\" ng-non-bindable>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"{{ nonce }}\"/>
                                <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"10\"/>
                                <label for=\"reset_form_login\">{{ 'Login_LoginOrEmail'|translate }}</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"20\" autocomplete=\"off\"/>
                                <label for=\"reset_form_password\">{{ 'Login_NewPassword'|translate }}</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                       size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                                <label for=\"reset_form_password_bis\">{{ 'Login_NewPasswordRepeat'|translate }}</label>
                            </div>
                        </div>

                        <div class=\"row actions\">
                            <div class=\"col s12\">
                                <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                       value=\"{{ 'General_ChangePassword'|translate }}\" tabindex=\"100\"/>

                                <span class=\"loadingPiwik\" style=\"display:none;\">
                                    <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                                </span>
                            </div>
                        </div>

                        <input type=\"hidden\" name=\"module\" value=\"{{ loginModule }}\"/>
                        <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                    </form>
                    <p id=\"nav\">
                        <a id=\"reset_form_nav\" href=\"#\"
                           title=\"{{ 'Mobile_NavigationBack'|translate }}\">{{ 'General_Cancel'|translate }}</a>
                        <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                           title=\"{{'Login_LogIn'|translate}}\">{{ 'Login_LogIn'|translate }}</a>
                    </p>
                {% endblock %}
                {% endembed %}
            </div>
        {% endif %}

    </section>

{% endblock %}
";
    }
}


/* @Login/login.twig */
class __TwigTemplate_6a34a046dbf83d2fe6f9aeab2dfdc449e2d107f5843cff77b5c1b990b0a6432a_1482918363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 67
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Login/login.twig", 67);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        // line 69
        echo "
                    <div class=\"message_container\">

                        ";
        // line 72
        echo twig_include($this->env, $context, "@Login/_formErrors.twig", array("formErrors" => $this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "errors", array())));
        echo "

                        ";
        // line 74
        if ((isset($context["AccessErrorString"]) ? $context["AccessErrorString"] : $this->getContext($context, "AccessErrorString"))) {
            // line 75
            echo "                            <div piwik-notification
                                 noclear=\"true\"
                                 context=\"error\">
                                <strong>";
            // line 78
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
            echo "</strong>: ";
            echo (isset($context["AccessErrorString"]) ? $context["AccessErrorString"] : $this->getContext($context, "AccessErrorString"));
            echo "<br/>
                            </div>
                        ";
        }
        // line 81
        echo "
                        ";
        // line 82
        if ((isset($context["infoMessage"]) ? $context["infoMessage"] : $this->getContext($context, "infoMessage"))) {
            // line 83
            echo "                            <p class=\"message\">";
            echo (isset($context["infoMessage"]) ? $context["infoMessage"] : $this->getContext($context, "infoMessage"));
            echo "</p>
                        ";
        }
        // line 85
        echo "                    </div>

                    <form ";
        // line 87
        echo $this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "attributes", array());
        echo " ng-non-bindable>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"10\" autofocus=\"autofocus\"/>
                                <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> ";
        // line 92
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
        echo "</label>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"";
        // line 98
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
        echo "\"/>
                                <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"20\" />
                                <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> ";
        // line 101
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
        echo "</label>
                            </div>
                        </div>

                        <div class=\"row actions\">
                            <div class=\"col s12\">
                                <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                       ";
        // line 108
        if ($this->getAttribute($this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "form_rememberme", array()), "value", array())) {
            echo "checked=\"checked\" ";
        }
        echo "/>
                                <label for=\"login_form_rememberme\">";
        // line 109
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_RememberMe")), "html", null, true);
        echo "</label>
                                <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"";
        // line 110
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
        echo "\"
                                       tabindex=\"100\"/>
                            </div>
                        </div>

                    </form>
                    <p id=\"nav\">
                        ";
        // line 117
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.loginNav", "top"));
        echo "
                        <a id=\"login_form_nav\" href=\"#\"
                           title=\"";
        // line 119
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
        echo "</a>
                        ";
        // line 120
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.loginNav", "bottom"));
        echo "
                    </p>

                    ";
        // line 123
        if ((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
            // line 124
            echo "                        <p id=\"piwik\">
                            <i><a href=\"http://piwik.org/\" rel=\"noreferrer\"  target=\"_blank\">";
            // line 125
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "</a></i>
                        </p>
                    ";
        }
        // line 128
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 128,  535 => 125,  532 => 124,  530 => 123,  524 => 120,  518 => 119,  513 => 117,  503 => 110,  499 => 109,  493 => 108,  483 => 101,  477 => 98,  468 => 92,  460 => 87,  456 => 85,  450 => 83,  448 => 82,  445 => 81,  437 => 78,  432 => 75,  430 => 74,  425 => 72,  420 => 69,  417 => 68,  400 => 67,  174 => 187,  170 => 185,  168 => 133,  164 => 131,  162 => 67,  159 => 66,  156 => 65,  153 => 64,  150 => 63,  140 => 54,  136 => 52,  134 => 51,  131 => 50,  123 => 48,  111 => 46,  108 => 45,  102 => 43,  100 => 42,  91 => 35,  89 => 34,  84 => 32,  80 => 31,  77 => 30,  74 => 29,  68 => 25,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  34 => 1,  32 => 27,  28 => 23,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Morpheus/layout.twig' %}

{% block meta %}
    <meta name=\"robots\" content=\"index,follow\">
{% endblock %}

{% block head %}
    {{ parent() }}

    <script type=\"text/javascript\" src=\"libs/bower_components/jquery-placeholder/jquery.placeholder.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.smartbanner.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/stylesheets/jquery.smartbanner.css\" />

    <script type=\"text/javascript\">
        \$(function () {
            \$('#form_login').focus();
            \$('input').placeholder();
            \$.smartbanner({title: \"Piwik Mobile 2\", author: \"Piwik team\", hideOnInstall: false, layer: true, icon: \"plugins/CoreHome/images/googleplay.png\"});
        });
    </script>
{% endblock %}

{% set title %}{{ 'Login_LogIn'|translate }}{% endset %}

{% block pageDescription %}{{ 'General_OpenSourceWebAnalytics'|translate }}{% endblock %}

{% set bodyId = 'loginPage' %}

{% block body %}

    {{ postEvent(\"Template.beforeTopBar\", \"login\") }}
    {{ postEvent(\"Template.beforeContent\", \"login\") }}

    {% include \"_iframeBuster.twig\" %}

    <div id=\"notificationContainer\">
    </div>
    <nav class=\"blue-grey darken-3\">
        <div class=\"nav-wrapper\">
            <span id=\"logo\" class=\"brand-logo center\">

                {% if isCustomLogo == false %}
                    <a href=\"http://piwik.org\" title=\"{{ linkTitle }}\">
                {% endif %}
                {% if hasSVGLogo %}
                    <img src='{{ logoSVG }}' class=\"{% if not isCustomLogo %}default-piwik-logo{% endif %}\" title=\"{{ linkTitle }}\" alt=\"Piwik\"/>
                {% else %}
                    <img src='{{ logoLarge }}' title=\"{{ linkTitle }}\" alt=\"Piwik\" />
                {% endif %}

                {% if isCustomLogo == false %}
                    </a>
                {% endif %}

            </span>
        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"col s12 m6 push-m3 l4 push-l4\">

        {# untrusted host warning #}
        {% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
            {% include '@CoreHome/_warningInvalidHost.twig' %}
        {% else %}
            <div class=\"contentForm loginForm\">
                {% embed 'contentBlock.twig' with {'title': 'Login_LogIn'|translate} %}
                {% block content %}

                    <div class=\"message_container\">

                        {{ include('@Login/_formErrors.twig', {formErrors: form_data.errors } )  }}

                        {% if AccessErrorString %}
                            <div piwik-notification
                                 noclear=\"true\"
                                 context=\"error\">
                                <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                            </div>
                        {% endif %}

                        {% if infoMessage %}
                            <p class=\"message\">{{ infoMessage|raw }}</p>
                        {% endif %}
                    </div>

                    <form {{ form_data.attributes|raw }} ng-non-bindable>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"10\" autofocus=\"autofocus\"/>
                                <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> {{ 'General_Username'|translate }}</label>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                                <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"20\" />
                                <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                            </div>
                        </div>

                        <div class=\"row actions\">
                            <div class=\"col s12\">
                                <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                       {% if form_data.form_rememberme.value %}checked=\"checked\" {% endif %}/>
                                <label for=\"login_form_rememberme\">{{ 'Login_RememberMe'|translate }}</label>
                                <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"{{ 'Login_LogIn'|translate }}\"
                                       tabindex=\"100\"/>
                            </div>
                        </div>

                    </form>
                    <p id=\"nav\">
                        {{ postEvent(\"Template.loginNav\", \"top\") }}
                        <a id=\"login_form_nav\" href=\"#\"
                           title=\"{{ 'Login_LostYourPassword'|translate }}\">{{ 'Login_LostYourPassword'|translate }}</a>
                        {{ postEvent(\"Template.loginNav\", \"bottom\") }}
                    </p>

                    {% if isCustomLogo %}
                        <p id=\"piwik\">
                            <i><a href=\"http://piwik.org/\" rel=\"noreferrer\"  target=\"_blank\">{{ linkTitle }}</a></i>
                        </p>
                    {% endif %}

                {% endblock %}
                {% endembed %}
            </div>
            <div class=\"contentForm resetForm\" style=\"display:none;\">
                {% embed 'contentBlock.twig' with {'title': 'Login_ChangeYourPassword'|translate} %}
                {% block content %}

                    <div class=\"message_container\">
                    </div>

                    <form id=\"reset_form\" ng-non-bindable>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"{{ nonce }}\"/>
                                <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"10\"/>
                                <label for=\"reset_form_login\">{{ 'Login_LoginOrEmail'|translate }}</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"20\" autocomplete=\"off\"/>
                                <label for=\"reset_form_password\">{{ 'Login_NewPassword'|translate }}</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                       size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                                <label for=\"reset_form_password_bis\">{{ 'Login_NewPasswordRepeat'|translate }}</label>
                            </div>
                        </div>

                        <div class=\"row actions\">
                            <div class=\"col s12\">
                                <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                       value=\"{{ 'General_ChangePassword'|translate }}\" tabindex=\"100\"/>

                                <span class=\"loadingPiwik\" style=\"display:none;\">
                                    <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                                </span>
                            </div>
                        </div>

                        <input type=\"hidden\" name=\"module\" value=\"{{ loginModule }}\"/>
                        <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                    </form>
                    <p id=\"nav\">
                        <a id=\"reset_form_nav\" href=\"#\"
                           title=\"{{ 'Mobile_NavigationBack'|translate }}\">{{ 'General_Cancel'|translate }}</a>
                        <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                           title=\"{{'Login_LogIn'|translate}}\">{{ 'Login_LogIn'|translate }}</a>
                    </p>
                {% endblock %}
                {% endembed %}
            </div>
        {% endif %}

    </section>

{% endblock %}
";
    }
}


/* @Login/login.twig */
class __TwigTemplate_6a34a046dbf83d2fe6f9aeab2dfdc449e2d107f5843cff77b5c1b990b0a6432a_647473369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 133
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Login/login.twig", 133);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 134
    public function block_content($context, array $blocks = array())
    {
        // line 135
        echo "
                    <div class=\"message_container\">
                    </div>

                    <form id=\"reset_form\" ng-non-bindable>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"";
        // line 142
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
        echo "\"/>
                                <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"10\"/>
                                <label for=\"reset_form_login\">";
        // line 145
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LoginOrEmail")), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"20\" autocomplete=\"off\"/>
                                <label for=\"reset_form_password\">";
        // line 152
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_NewPassword")), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                       size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                                <label for=\"reset_form_password_bis\">";
        // line 159
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_NewPasswordRepeat")), "html", null, true);
        echo "</label>
                            </div>
                        </div>

                        <div class=\"row actions\">
                            <div class=\"col s12\">
                                <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                       value=\"";
        // line 166
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
        echo "\" tabindex=\"100\"/>

                                <span class=\"loadingPiwik\" style=\"display:none;\">
                                    <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                                </span>
                            </div>
                        </div>

                        <input type=\"hidden\" name=\"module\" value=\"";
        // line 174
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["loginModule"]) ? $context["loginModule"] : $this->getContext($context, "loginModule")), "html", null, true);
        echo "\"/>
                        <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                    </form>
                    <p id=\"nav\">
                        <a id=\"reset_form_nav\" href=\"#\"
                           title=\"";
        // line 179
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_NavigationBack")), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Cancel")), "html", null, true);
        echo "</a>
                        <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                           title=\"";
        // line 181
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
        echo "</a>
                    </p>
                ";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  856 => 181,  849 => 179,  841 => 174,  830 => 166,  820 => 159,  810 => 152,  800 => 145,  794 => 142,  785 => 135,  782 => 134,  765 => 133,  541 => 128,  535 => 125,  532 => 124,  530 => 123,  524 => 120,  518 => 119,  513 => 117,  503 => 110,  499 => 109,  493 => 108,  483 => 101,  477 => 98,  468 => 92,  460 => 87,  456 => 85,  450 => 83,  448 => 82,  445 => 81,  437 => 78,  432 => 75,  430 => 74,  425 => 72,  420 => 69,  417 => 68,  400 => 67,  174 => 187,  170 => 185,  168 => 133,  164 => 131,  162 => 67,  159 => 66,  156 => 65,  153 => 64,  150 => 63,  140 => 54,  136 => 52,  134 => 51,  131 => 50,  123 => 48,  111 => 46,  108 => 45,  102 => 43,  100 => 42,  91 => 35,  89 => 34,  84 => 32,  80 => 31,  77 => 30,  74 => 29,  68 => 25,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  34 => 1,  32 => 27,  28 => 23,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Morpheus/layout.twig' %}

{% block meta %}
    <meta name=\"robots\" content=\"index,follow\">
{% endblock %}

{% block head %}
    {{ parent() }}

    <script type=\"text/javascript\" src=\"libs/bower_components/jquery-placeholder/jquery.placeholder.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.smartbanner.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/stylesheets/jquery.smartbanner.css\" />

    <script type=\"text/javascript\">
        \$(function () {
            \$('#form_login').focus();
            \$('input').placeholder();
            \$.smartbanner({title: \"Piwik Mobile 2\", author: \"Piwik team\", hideOnInstall: false, layer: true, icon: \"plugins/CoreHome/images/googleplay.png\"});
        });
    </script>
{% endblock %}

{% set title %}{{ 'Login_LogIn'|translate }}{% endset %}

{% block pageDescription %}{{ 'General_OpenSourceWebAnalytics'|translate }}{% endblock %}

{% set bodyId = 'loginPage' %}

{% block body %}

    {{ postEvent(\"Template.beforeTopBar\", \"login\") }}
    {{ postEvent(\"Template.beforeContent\", \"login\") }}

    {% include \"_iframeBuster.twig\" %}

    <div id=\"notificationContainer\">
    </div>
    <nav class=\"blue-grey darken-3\">
        <div class=\"nav-wrapper\">
            <span id=\"logo\" class=\"brand-logo center\">

                {% if isCustomLogo == false %}
                    <a href=\"http://piwik.org\" title=\"{{ linkTitle }}\">
                {% endif %}
                {% if hasSVGLogo %}
                    <img src='{{ logoSVG }}' class=\"{% if not isCustomLogo %}default-piwik-logo{% endif %}\" title=\"{{ linkTitle }}\" alt=\"Piwik\"/>
                {% else %}
                    <img src='{{ logoLarge }}' title=\"{{ linkTitle }}\" alt=\"Piwik\" />
                {% endif %}

                {% if isCustomLogo == false %}
                    </a>
                {% endif %}

            </span>
        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"col s12 m6 push-m3 l4 push-l4\">

        {# untrusted host warning #}
        {% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
            {% include '@CoreHome/_warningInvalidHost.twig' %}
        {% else %}
            <div class=\"contentForm loginForm\">
                {% embed 'contentBlock.twig' with {'title': 'Login_LogIn'|translate} %}
                {% block content %}

                    <div class=\"message_container\">

                        {{ include('@Login/_formErrors.twig', {formErrors: form_data.errors } )  }}

                        {% if AccessErrorString %}
                            <div piwik-notification
                                 noclear=\"true\"
                                 context=\"error\">
                                <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                            </div>
                        {% endif %}

                        {% if infoMessage %}
                            <p class=\"message\">{{ infoMessage|raw }}</p>
                        {% endif %}
                    </div>

                    <form {{ form_data.attributes|raw }} ng-non-bindable>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"10\" autofocus=\"autofocus\"/>
                                <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> {{ 'General_Username'|translate }}</label>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                                <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"20\" />
                                <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                            </div>
                        </div>

                        <div class=\"row actions\">
                            <div class=\"col s12\">
                                <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                       {% if form_data.form_rememberme.value %}checked=\"checked\" {% endif %}/>
                                <label for=\"login_form_rememberme\">{{ 'Login_RememberMe'|translate }}</label>
                                <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"{{ 'Login_LogIn'|translate }}\"
                                       tabindex=\"100\"/>
                            </div>
                        </div>

                    </form>
                    <p id=\"nav\">
                        {{ postEvent(\"Template.loginNav\", \"top\") }}
                        <a id=\"login_form_nav\" href=\"#\"
                           title=\"{{ 'Login_LostYourPassword'|translate }}\">{{ 'Login_LostYourPassword'|translate }}</a>
                        {{ postEvent(\"Template.loginNav\", \"bottom\") }}
                    </p>

                    {% if isCustomLogo %}
                        <p id=\"piwik\">
                            <i><a href=\"http://piwik.org/\" rel=\"noreferrer\"  target=\"_blank\">{{ linkTitle }}</a></i>
                        </p>
                    {% endif %}

                {% endblock %}
                {% endembed %}
            </div>
            <div class=\"contentForm resetForm\" style=\"display:none;\">
                {% embed 'contentBlock.twig' with {'title': 'Login_ChangeYourPassword'|translate} %}
                {% block content %}

                    <div class=\"message_container\">
                    </div>

                    <form id=\"reset_form\" ng-non-bindable>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"{{ nonce }}\"/>
                                <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"10\"/>
                                <label for=\"reset_form_login\">{{ 'Login_LoginOrEmail'|translate }}</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                       tabindex=\"20\" autocomplete=\"off\"/>
                                <label for=\"reset_form_password\">{{ 'Login_NewPassword'|translate }}</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s12 input-field\">
                                <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                       size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                                <label for=\"reset_form_password_bis\">{{ 'Login_NewPasswordRepeat'|translate }}</label>
                            </div>
                        </div>

                        <div class=\"row actions\">
                            <div class=\"col s12\">
                                <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                       value=\"{{ 'General_ChangePassword'|translate }}\" tabindex=\"100\"/>

                                <span class=\"loadingPiwik\" style=\"display:none;\">
                                    <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                                </span>
                            </div>
                        </div>

                        <input type=\"hidden\" name=\"module\" value=\"{{ loginModule }}\"/>
                        <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                    </form>
                    <p id=\"nav\">
                        <a id=\"reset_form_nav\" href=\"#\"
                           title=\"{{ 'Mobile_NavigationBack'|translate }}\">{{ 'General_Cancel'|translate }}</a>
                        <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                           title=\"{{'Login_LogIn'|translate}}\">{{ 'Login_LogIn'|translate }}</a>
                    </p>
                {% endblock %}
                {% endembed %}
            </div>
        {% endif %}

    </section>

{% endblock %}
";
    }
}
