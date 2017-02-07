<?php

/* @CorePluginsAdmin/macros.twig */
class __TwigTemplate_fbac31fd946c52d394024d0509f6ce2c47da07f2840b48b9bd5ac71d05364d67 extends Twig_Template
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
        echo "
";
        // line 61
        echo "
";
        // line 71
        echo "
";
        // line 91
        echo "
";
    }

    // line 2
    public function gettablePluginUpdates($__pluginsHavingUpdate__ = null, $__updateNonce__ = null, $__isMultiServerEnvironment__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsHavingUpdate" => $__pluginsHavingUpdate__,
            "updateNonce" => $__updateNonce__,
            "isMultiServerEnvironment" => $__isMultiServerEnvironment__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    ";
            $context["marketplaceMacro"] = $this->loadTemplate("@Marketplace/macros.twig", "@CorePluginsAdmin/macros.twig", 3);
            // line 4
            echo "
    <table piwik-content-table>
        <thead>
        <tr>
            <th>";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            echo "</th>
            <th class=\"num\">";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
            echo "</th>
            <th>";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
            <th class=\"status\">";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
            <th class=\"action-links\">";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody id=\"plugins\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginsHavingUpdate"]) ? $context["pluginsHavingUpdate"] : $this->getContext($context, "pluginsHavingUpdate")));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 17
                echo "            <tr ";
                if ((($this->getAttribute($context["plugin"], "isActivated", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["plugin"], "isActivated", array()), false)) : (false))) {
                    echo "class=\"active-plugin\"";
                } else {
                    echo "class=\"inactive-plugin\"";
                }
                echo ">
                <td class=\"name\">
                    <a href=\"javascript:void(0);\" piwik-plugin-name=\"";
                // line 19
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html_attr");
                echo "\" class=\"plugin-details\">
                        ";
                // line 20
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"vers\">
                    ";
                // line 24
                if (((($this->getAttribute($context["plugin"], "changelog", array(), "any", true, true) && $this->getAttribute($context["plugin"], "changelog", array())) && $this->getAttribute($this->getAttribute($context["plugin"], "changelog", array(), "any", false, true), "url", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($context["plugin"], "changelog", array()), "url", array()))) {
                    // line 25
                    echo "                        <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "changelog", array()), "url", array()), "html_attr");
                    echo "\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Changelog")), "html", null, true);
                    echo "\"
                           target=\"_blank\" rel=\"noreferrer\"
                        >";
                    // line 27
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "currentVersion", array()), "html", null, true);
                    echo " => ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "latestVersion", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 29
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "currentVersion", array()), "html", null, true);
                    echo " => ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "latestVersion", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 31
                echo "                </td>
                <td class=\"desc\">
                    ";
                // line 33
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", array()), "html", null, true);
                echo "
                    ";
                // line 34
                echo $context["marketplaceMacro"]->getmissingRequirementsPleaseUpdateNotice($context["plugin"]);
                echo "
                </td>
                <td class=\"status\">
                    ";
                // line 37
                if ($this->getAttribute($context["plugin"], "isActivated", array())) {
                    // line 38
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 40
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                    echo "
                    ";
                }
                // line 42
                echo "                </td>
                <td class=\"togl action-links\">
                    ";
                // line 44
                if (($this->getAttribute($context["plugin"], "isDownloadable", array(), "any", true, true) &&  !$this->getAttribute($context["plugin"], "isDownloadable", array()))) {
                    // line 45
                    echo "                        <span title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginNotDownloadable")), "html_attr");
                    echo " ";
                    if ($this->getAttribute($context["plugin"], "isPaid", array())) {
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginNotDownloadablePaidReason")), "html_attr");
                    }
                    echo "\"
                          >";
                    // line 46
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NotDownloadable")), "html_attr");
                    echo "</span>
                    ";
                } elseif (                // line 47
(isset($context["isMultiServerEnvironment"]) ? $context["isMultiServerEnvironment"] : $this->getContext($context, "isMultiServerEnvironment"))) {
                    // line 48
                    echo "                        <a onclick=\"\$(this).css('display', 'none')\" href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "download", "module" => "Marketplace", "pluginName" => $this->getAttribute($context["plugin"], "name", array()), "nonce" => call_user_func_array($this->env->getFilter('nonce')->getCallable(), array($this->getAttribute($context["plugin"], "name", array())))))), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Download")), "html", null, true);
                    echo "</a>
                    ";
                } elseif ((0 == twig_length_filter($this->env, $this->getAttribute(                // line 49
$context["plugin"], "missingRequirements", array())))) {
                    // line 50
                    echo "                        <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "updatePlugin", "module" => "Marketplace", "pluginName" => $this->getAttribute($context["plugin"], "name", array()), "nonce" => (isset($context["updateNonce"]) ? $context["updateNonce"] : $this->getContext($context, "updateNonce"))))), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 52
                    echo "                        -
                    ";
                }
                // line 54
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </tbody>
    </table>

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

    // line 62
    public function getpluginActivateDeactivateAction($__name__ = null, $__isActivated__ = null, $__missingRequirements__ = null, $__deactivateNonce__ = null, $__activateNonce__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "isActivated" => $__isActivated__,
            "missingRequirements" => $__missingRequirements__,
            "deactivateNonce" => $__deactivateNonce__,
            "activateNonce" => $__activateNonce__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            if ((isset($context["isActivated"]) ? $context["isActivated"] : $this->getContext($context, "isActivated"))) {
                // line 64
                echo "<a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "&nonce=";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce")), "html", null, true);
                echo "&redirectTo=referrer'>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Deactivate")), "html", null, true);
                echo "</a>";
            } elseif (            // line 65
(isset($context["missingRequirements"]) ? $context["missingRequirements"] : $this->getContext($context, "missingRequirements"))) {
                // line 66
                echo "        -
    ";
            } else {
                // line 68
                echo "<a href='index.php?module=CorePluginsAdmin&action=activate&pluginName=";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "&nonce=";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce")), "html", null, true);
                echo "&redirectTo=referrer'>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Activate")), "html", null, true);
                echo "</a>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 72
    public function getpluginsFilter(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 73
            echo "
    <p class=\"row pluginsFilter\" piwik-plugin-filter>
        <span class=\"origin\">
            <strong>";
            // line 76
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Origin")), "html", null, true);
            echo "</strong>
            <a data-filter-origin=\"all\" href=\"#\" class=\"active\">";
            // line 77
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"core\" href=\"#\">";
            // line 78
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"noncore\" href=\"#\">";
            // line 79
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginThirdParty")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        <span class=\"status\">
            <strong>";
            // line 83
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</strong>
            <a data-filter-status=\"all\" href=\"#\" class=\"active\">";
            // line 84
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"active\" href=\"#\">";
            // line 85
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"inactive\" href=\"#\">";
            // line 86
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>
    </p>

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

    // line 92
    public function gettablePlugins($__pluginsInfo__ = null, $__pluginNamesHavingSettings__ = null, $__activateNonce__ = null, $__deactivateNonce__ = null, $__uninstallNonce__ = null, $__isTheme__ = null, $__marketplacePluginNames__ = null, $__displayAdminLinks__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsInfo" => $__pluginsInfo__,
            "pluginNamesHavingSettings" => $__pluginNamesHavingSettings__,
            "activateNonce" => $__activateNonce__,
            "deactivateNonce" => $__deactivateNonce__,
            "uninstallNonce" => $__uninstallNonce__,
            "isTheme" => $__isTheme__,
            "marketplacePluginNames" => $__marketplacePluginNames__,
            "displayAdminLinks" => $__displayAdminLinks__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "
    <div id=\"confirmUninstallPlugin\" class=\"ui-confirm\">

        <h2 id=\"uninstallPluginConfirm\">";
            // line 96
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UninstallConfirm")), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 97
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 98
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>

    </div>

    <table piwik-content-table>
        <thead>
        <tr>
            <th>";
            // line 105
            if ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "html", null, true);
            } else {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            }
            echo "</th>
            <th>";
            // line 106
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
            <th class=\"status\">";
            // line 107
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
            ";
            // line 108
            if ((isset($context["displayAdminLinks"]) ? $context["displayAdminLinks"] : $this->getContext($context, "displayAdminLinks"))) {
                // line 109
                echo "                <th class=\"action-links\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
                echo "</th>
            ";
            }
            // line 111
            echo "        </tr>
        </thead>
        <tbody id=\"plugins\">
        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginsInfo"]) ? $context["pluginsInfo"] : $this->getContext($context, "pluginsInfo")));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 115
                echo "            ";
                $context["isDefaultTheme"] = ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme")) && ($context["name"] == "Morpheus"));
                // line 116
                echo "            ";
                if ((($this->getAttribute($context["plugin"], "alwaysActivated", array(), "any", true, true) &&  !$this->getAttribute($context["plugin"], "alwaysActivated", array())) || (isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme")))) {
                    // line 117
                    echo "                <tr ";
                    if ($this->getAttribute($context["plugin"], "activated", array())) {
                        echo "class=\"active-plugin\"";
                    } else {
                        echo "class=\"inactive-plugin\"";
                    }
                    echo " data-filter-status=\"";
                    if ($this->getAttribute($context["plugin"], "activated", array())) {
                        echo "active";
                    } else {
                        echo "inactive";
                    }
                    echo "\" data-filter-origin=\"";
                    if ($this->getAttribute($context["plugin"], "isCorePlugin", array())) {
                        echo "core";
                    } else {
                        echo "noncore";
                    }
                    echo "\">
                    <td class=\"name\">
                        <a name=\"";
                    // line 119
                    echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                    echo "\"></a>
                        ";
                    // line 120
                    if (( !$this->getAttribute($context["plugin"], "isCorePlugin", array()) && twig_in_filter($context["name"], (isset($context["marketplacePluginNames"]) ? $context["marketplacePluginNames"] : $this->getContext($context, "marketplacePluginNames"))))) {
                        // line 121
                        echo "<a href=\"javascript:void(0);\"
                               piwik-plugin-name=\"";
                        // line 122
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\"
                            >";
                        // line 123
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "</a>";
                    } else {
                        // line 125
                        echo "                            ";
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "
                        ";
                    }
                    // line 127
                    echo "                        <span class=\"plugin-version\" ";
                    if ($this->getAttribute($context["plugin"], "isCorePlugin", array())) {
                        echo "title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_CorePluginTooltip")), "html", null, true);
                        echo "\"";
                    }
                    echo ">(";
                    if ($this->getAttribute($context["plugin"], "isCorePlugin", array())) {
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
                    } else {
                        echo "v";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "version", array()), "html", null, true);
                    }
                    echo ")</span>

                        ";
                    // line 129
                    if (twig_in_filter($context["name"], (isset($context["pluginNamesHavingSettings"]) ? $context["pluginNamesHavingSettings"] : $this->getContext($context, "pluginNamesHavingSettings")))) {
                        // line 130
                        echo "                            <br /><br />
                            <a href=\"";
                        // line 131
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "CoreAdminHome", "action" => "generalSettings"))), "html", null, true);
                        echo "#";
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\" class=\"settingsLink\">";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Settings")), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 133
                    echo "                    </td>
                    <td class=\"desc\">
                        <div class=\"plugin-desc-missingrequirements\">
                            ";
                    // line 136
                    if (($this->getAttribute($context["plugin"], "missingRequirements", array(), "any", true, true) && $this->getAttribute($context["plugin"], "missingRequirements", array()))) {
                        // line 137
                        echo "                                ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "missingRequirements", array()), "html", null, true);
                        echo "
                                <br />
                            ";
                    }
                    // line 140
                    echo "                        </div>
                        <div class=\"plugin-desc-text\">

                            ";
                    // line 143
                    echo nl2br($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "description", array()));
                    echo "

                            ";
                    // line 145
                    if (( !twig_test_empty((($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "homepage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "homepage", array()))) : (""))) && !twig_in_filter($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "homepage", array()), array(0 => "http://piwik.org", 1 => "http://www.piwik.org", 2 => "http://piwik.org/", 3 => "http://www.piwik.org/")))) {
                        // line 148
                        echo "                                <span class=\"plugin-homepage\">
                            <a target=\"_blank\" href=\"";
                        // line 149
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "homepage", array()), "html", null, true);
                        echo "\">(";
                        echo twig_replace_filter(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginHomepage")), array(" " => "&nbsp;"));
                        echo ")</a>
                        </span>
                            ";
                    }
                    // line 152
                    echo "
                            ";
                    // line 153
                    if (($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "donate", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array())))) {
                        // line 154
                        echo "                                <div class=\"plugin-donation\">
                                    ";
                        // line 155
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LikeThisPlugin")), "html", null, true);
                        echo " <a href=\"javascript:;\" class=\"plugin-donation-link\" data-overlay-id=\"overlay-";
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\">";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ConsiderDonating")), "html", null, true);
                        echo "</a>
                                    <div id=\"overlay-";
                        // line 156
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\" class=\"donation-overlay ui-confirm\" title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LikeThisPlugin")), "html", null, true);
                        echo "\">
                                        <p>";
                        // line 157
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_CommunityContributedPlugin")), "html", null, true);
                        echo "</p>
                                        <p>";
                        // line 158
                        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ConsiderDonatingCreatorOf", (("<b>" . $context["name"]) . "</b>")));
                        echo "</p>
                                        <div class=\"donation-links\">
                                            ";
                        // line 160
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "donate", array(), "any", false, true), "paypal", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "paypal", array()))) {
                            // line 161
                            echo "                                                <a class=\"donation-link paypal\" target=\"_blank\" href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&item_name=Piwik%20Plugin%20";
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["name"], "url"), "html", null, true);
                            echo "&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted&business=";
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "paypal", array()), "url"), "html", null, true);
                            echo "\"><img src=\"plugins/CorePluginsAdmin/images/paypal_donate.jpg\" height=\"30\"/></a>
                                            ";
                        }
                        // line 163
                        echo "                                            ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "donate", array(), "any", false, true), "flattr", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "flattr", array()))) {
                            // line 164
                            echo "                                                <a class=\"donation-link flattr\" target=\"_blank\" href=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "flattr", array()), "html", null, true);
                            echo "\"><img class=\"alignnone\" title=\"Flattr\" alt=\"\" src=\"plugins/CorePluginsAdmin/images/flattr.png\" height=\"29\" /></a>
                                            ";
                        }
                        // line 166
                        echo "                                            ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "donate", array(), "any", false, true), "bitcoin", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "bitcoin", array()))) {
                            // line 167
                            echo "                                                <div class=\"donation-link bitcoin\">
                                                    <span>Donate Bitcoins to:</span>
                                                    <a href=\"bitcoin:";
                            // line 169
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "bitcoin", array()), "url"), "html", null, true);
                            echo "\">";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "bitcoin", array()), "html", null, true);
                            echo "</a>
                                                </div>
                                            ";
                        }
                        // line 172
                        echo "                                        </div>
                                        <input role=\"no\" type=\"button\" value=\"";
                        // line 173
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Close")), "html", null, true);
                        echo "\"/>
                                    </div>
                                </div>
                            ";
                    }
                    // line 177
                    echo "                        </div>
                        ";
                    // line 178
                    if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "license", array(), "any", true, true)) {
                        // line 179
                        echo "                            <div class=\"plugin-license\">
                                ";
                        // line 180
                        if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "license_file", array(), "any", true, true)) {
                            echo "<a title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LicenseHomepage")), "html", null, true);
                            echo "\" rel=\"noreferrer\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=showLicense&pluginName=";
                            echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "\">";
                        }
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "license", array()), "html", null, true);
                        if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "license_file", array(), "any", true, true)) {
                            echo "</a>";
                        }
                        // line 181
                        echo "                            </div>
                        ";
                    }
                    // line 183
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                        // line 184
                        echo "                            <div class=\"plugin-author\">
                                By
                                    ";
                        // line 186
                        if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                            // line 187
                            ob_start();
                            // line 188
                            echo "                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "authors", array()));
                            $context['loop'] = array(
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            );
                            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                                if ($this->getAttribute($context["author"], "name", array())) {
                                    // line 189
                                    echo "                                            ";
                                    if ($this->getAttribute($context["author"], "homepage", array(), "any", true, true)) {
                                        // line 190
                                        echo "                                                <a title=\"";
                                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_AuthorHomepage")), "html", null, true);
                                        echo "\" href=\"";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "homepage", array()), "html", null, true);
                                        echo "\" rel=\"noreferrer\" target=\"_blank\">";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                                        echo "</a>
                                            ";
                                    } else {
                                        // line 192
                                        echo "                                                ";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                                        echo "
                                            ";
                                    }
                                    // line 194
                                    echo "                                            ";
                                    if (($this->getAttribute($context["loop"], "index", array()) < twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "authors", array())))) {
                                        // line 195
                                        echo "                                                ,
                                            ";
                                    }
                                    // line 197
                                    echo "                                        ";
                                    ++$context['loop']['index0'];
                                    ++$context['loop']['index'];
                                    $context['loop']['first'] = false;
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 198
                            echo "                                    ";
                            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                        }
                        // line 199
                        echo ".
                            </div>
                        ";
                    }
                    // line 202
                    echo "                    </td>
                    <td class=\"status\" ";
                    // line 203
                    if ((isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                        echo "style=\"border-left-width:0px;\"";
                    }
                    echo ">
                        ";
                    // line 204
                    if ( !(isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                        // line 206
                        if ($this->getAttribute($context["plugin"], "activated", array())) {
                            // line 207
                            echo "                                ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 209
                            echo "                                ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                            echo "
                                ";
                            // line 210
                            if (($this->getAttribute($context["plugin"], "uninstallable", array()) && (isset($context["displayAdminLinks"]) ? $context["displayAdminLinks"] : $this->getContext($context, "displayAdminLinks")))) {
                                echo " <br/> - <a data-plugin-name=\"";
                                echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                                echo "\" class=\"uninstall\" href='index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                                echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                                echo "&nonce=";
                                echo \Piwik\piwik_escape_filter($this->env, (isset($context["uninstallNonce"]) ? $context["uninstallNonce"] : $this->getContext($context, "uninstallNonce")), "html", null, true);
                                echo "'>";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ActionUninstall")), "html", null, true);
                                echo "</a>";
                            }
                            // line 211
                            echo "                            ";
                        }
                    }
                    // line 214
                    echo "                    </td>

                    ";
                    // line 216
                    if ((isset($context["displayAdminLinks"]) ? $context["displayAdminLinks"] : $this->getContext($context, "displayAdminLinks"))) {
                        // line 217
                        echo "                        <td class=\"togl action-links\" ";
                        if ((isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                            echo "style=\"border-left-width:0px;\"";
                        }
                        echo ">
                            ";
                        // line 218
                        if ( !(isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                            // line 220
                            if (($this->getAttribute($context["plugin"], "invalid", array(), "any", true, true) || $this->getAttribute($context["plugin"], "alwaysActivated", array()))) {
                                // line 221
                                echo "                                    -
                                ";
                            } else {
                                // line 223
                                echo "                                    ";
                                echo $this->getAttribute($this, "pluginActivateDeactivateAction", array(0 => $context["name"], 1 => $this->getAttribute($context["plugin"], "activated", array()), 2 => $this->getAttribute($context["plugin"], "missingRequirements", array()), 3 => (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce")), 4 => (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce"))), "method");
                                echo "
                                ";
                            }
                        }
                        // line 227
                        echo "                        </td>
                    ";
                    }
                    // line 229
                    echo "                </tr>
            ";
                }
                // line 231
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "        </tbody>
    </table>

    <div class=\"tableActionBar\">
        ";
            // line 236
            if ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme"))) {
                // line 237
                echo "            <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browseThemes", "sort" => ""))), "html", null, true);
                echo "\"><span class=\"icon-add\"></span> ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewThemes")), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 239
                echo "            <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browsePlugins", "sort" => ""))), "html", null, true);
                echo "\"><span class=\"icon-add\"></span> ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewPlugins")), "html", null, true);
                echo "</a>
        ";
            }
            // line 241
            echo "    </div>

    <div class=\"footer-message\">
        ";
            // line 244
            ob_start();
            // line 245
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginsInfo"]) ? $context["pluginsInfo"] : $this->getContext($context, "pluginsInfo")));
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
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 246
                echo "                ";
                if (($this->getAttribute($context["plugin"], "alwaysActivated", array(), "any", true, true) && $this->getAttribute($context["plugin"], "alwaysActivated", array()))) {
                    // line 247
                    echo "                    ";
                    echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 248
                    echo "                 ";
                }
                // line 249
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "        ";
            $context["pluginsAlwaysActivated"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 251
            echo "        ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_AlwaysActivatedPluginsList", (isset($context["pluginsAlwaysActivated"]) ? $context["pluginsAlwaysActivated"] : $this->getContext($context, "pluginsAlwaysActivated")))), "html", null, true);
            echo "
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
        return "@CorePluginsAdmin/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  867 => 251,  864 => 250,  850 => 249,  847 => 248,  841 => 247,  838 => 246,  820 => 245,  818 => 244,  813 => 241,  805 => 239,  797 => 237,  795 => 236,  789 => 232,  783 => 231,  779 => 229,  775 => 227,  768 => 223,  764 => 221,  762 => 220,  760 => 218,  753 => 217,  751 => 216,  747 => 214,  743 => 211,  731 => 210,  726 => 209,  720 => 207,  718 => 206,  716 => 204,  710 => 203,  707 => 202,  702 => 199,  698 => 198,  688 => 197,  684 => 195,  681 => 194,  675 => 192,  665 => 190,  662 => 189,  650 => 188,  648 => 187,  646 => 186,  642 => 184,  639 => 183,  635 => 181,  623 => 180,  620 => 179,  618 => 178,  615 => 177,  608 => 173,  605 => 172,  597 => 169,  593 => 167,  590 => 166,  584 => 164,  581 => 163,  573 => 161,  571 => 160,  566 => 158,  562 => 157,  556 => 156,  548 => 155,  545 => 154,  543 => 153,  540 => 152,  532 => 149,  529 => 148,  527 => 145,  522 => 143,  517 => 140,  510 => 137,  508 => 136,  503 => 133,  494 => 131,  491 => 130,  489 => 129,  472 => 127,  466 => 125,  462 => 123,  458 => 122,  455 => 121,  453 => 120,  449 => 119,  427 => 117,  424 => 116,  421 => 115,  417 => 114,  412 => 111,  406 => 109,  404 => 108,  400 => 107,  396 => 106,  388 => 105,  378 => 98,  374 => 97,  370 => 96,  365 => 93,  346 => 92,  326 => 86,  322 => 85,  318 => 84,  314 => 83,  307 => 79,  303 => 78,  299 => 77,  295 => 76,  290 => 73,  279 => 72,  257 => 68,  253 => 66,  251 => 65,  243 => 64,  241 => 63,  225 => 62,  207 => 57,  199 => 54,  195 => 52,  187 => 50,  185 => 49,  178 => 48,  176 => 47,  172 => 46,  163 => 45,  161 => 44,  157 => 42,  151 => 40,  145 => 38,  143 => 37,  137 => 34,  133 => 33,  129 => 31,  121 => 29,  114 => 27,  106 => 25,  104 => 24,  97 => 20,  93 => 19,  83 => 17,  79 => 16,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  50 => 4,  47 => 3,  33 => 2,  28 => 91,  25 => 71,  22 => 61,  19 => 1,);
    }

    public function getSource()
    {
        return "
{% macro tablePluginUpdates(pluginsHavingUpdate, updateNonce, isMultiServerEnvironment) %}
    {% import '@Marketplace/macros.twig' as marketplaceMacro %}

    <table piwik-content-table>
        <thead>
        <tr>
            <th>{{ 'General_Plugin'|translate }}</th>
            <th class=\"num\">{{ 'CorePluginsAdmin_Version'|translate }}</th>
            <th>{{ 'General_Description'|translate }}</th>
            <th class=\"status\">{{ 'CorePluginsAdmin_Status'|translate }}</th>
            <th class=\"action-links\">{{ 'General_Action'|translate }}</th>
        </tr>
        </thead>
        <tbody id=\"plugins\">
        {% for name,plugin in pluginsHavingUpdate %}
            <tr {% if plugin.isActivated|default(false) %}class=\"active-plugin\"{% else %}class=\"inactive-plugin\"{% endif %}>
                <td class=\"name\">
                    <a href=\"javascript:void(0);\" piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\" class=\"plugin-details\">
                        {{ plugin.name }}
                    </a>
                </td>
                <td class=\"vers\">
                    {% if plugin.changelog is defined and plugin.changelog and plugin.changelog.url is defined and plugin.changelog.url %}
                        <a href=\"{{ plugin.changelog.url|e('html_attr') }}\" title=\"{{ 'CorePluginsAdmin_Changelog'|translate }}\"
                           target=\"_blank\" rel=\"noreferrer\"
                        >{{ plugin.currentVersion }} => {{ plugin.latestVersion }}</a>
                    {% else %}
                        {{ plugin.currentVersion }} => {{ plugin.latestVersion }}
                    {% endif %}
                </td>
                <td class=\"desc\">
                    {{ plugin.description }}
                    {{ marketplaceMacro.missingRequirementsPleaseUpdateNotice(plugin) }}
                </td>
                <td class=\"status\">
                    {% if plugin.isActivated %}
                        {{ 'CorePluginsAdmin_Active'|translate }}
                    {% else %}
                        {{ 'CorePluginsAdmin_Inactive'|translate }}
                    {% endif %}
                </td>
                <td class=\"togl action-links\">
                    {% if plugin.isDownloadable is defined and not plugin.isDownloadable %}
                        <span title=\"{{ 'CorePluginsAdmin_PluginNotDownloadable'|translate|e('html_attr') }} {% if plugin.isPaid %}{{ 'CorePluginsAdmin_PluginNotDownloadablePaidReason'|translate|e('html_attr') }}{% endif %}\"
                          >{{ 'CorePluginsAdmin_NotDownloadable'|translate|e('html_attr') }}</span>
                    {% elseif isMultiServerEnvironment %}
                        <a onclick=\"\$(this).css('display', 'none')\" href=\"{{ linkTo({'action':'download', 'module': 'Marketplace', 'pluginName': plugin.name, 'nonce': (plugin.name|nonce)}) }}\">{{ 'General_Download'|translate }}</a>
                    {% elseif 0 == plugin.missingRequirements|length %}
                        <a href=\"{{ linkTo({'action':'updatePlugin', 'module': 'Marketplace', 'pluginName': plugin.name, 'nonce': updateNonce}) }}\">{{ 'CoreUpdater_UpdateTitle'|translate }}</a>
                    {% else %}
                        -
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endmacro %}

{% macro pluginActivateDeactivateAction(name, isActivated, missingRequirements, deactivateNonce, activateNonce) -%}
    {%- if isActivated -%}
        <a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName={{ name }}&nonce={{ deactivateNonce }}&redirectTo=referrer'>{{ 'CorePluginsAdmin_Deactivate'|translate }}</a>
    {%- elseif missingRequirements %}
        -
    {% else -%}
        <a href='index.php?module=CorePluginsAdmin&action=activate&pluginName={{ name }}&nonce={{  activateNonce }}&redirectTo=referrer'>{{ 'CorePluginsAdmin_Activate'|translate }}</a>
    {%- endif -%}
{%- endmacro %}

{% macro pluginsFilter() %}

    <p class=\"row pluginsFilter\" piwik-plugin-filter>
        <span class=\"origin\">
            <strong>{{ 'CorePluginsAdmin_Origin'|translate }}</strong>
            <a data-filter-origin=\"all\" href=\"#\" class=\"active\">{{ 'General_All'|translate }}<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"core\" href=\"#\">{{ 'CorePluginsAdmin_OriginCore'|translate }}<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"noncore\" href=\"#\">{{ 'CorePluginsAdmin_OriginThirdParty'|translate }}<span class=\"counter\"></span></a>
        </span>

        <span class=\"status\">
            <strong>{{ 'CorePluginsAdmin_Status'|translate }}</strong>
            <a data-filter-status=\"all\" href=\"#\" class=\"active\">{{ 'General_All'|translate }}<span class=\"counter\"></span></a> |
            <a data-filter-status=\"active\" href=\"#\">{{ 'CorePluginsAdmin_Active'|translate }}<span class=\"counter\"></span></a> |
            <a data-filter-status=\"inactive\" href=\"#\">{{ 'CorePluginsAdmin_Inactive'|translate }}<span class=\"counter\"></span></a>
        </span>
    </p>

{% endmacro %}

{% macro tablePlugins(pluginsInfo, pluginNamesHavingSettings, activateNonce, deactivateNonce, uninstallNonce, isTheme, marketplacePluginNames, displayAdminLinks) %}

    <div id=\"confirmUninstallPlugin\" class=\"ui-confirm\">

        <h2 id=\"uninstallPluginConfirm\">{{ 'CorePluginsAdmin_UninstallConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>

    </div>

    <table piwik-content-table>
        <thead>
        <tr>
            <th>{% if isTheme %}{{ 'CorePluginsAdmin_Theme'|translate }}{% else %}{{ 'General_Plugin'|translate }}{% endif %}</th>
            <th>{{ 'General_Description'|translate }}</th>
            <th class=\"status\">{{ 'CorePluginsAdmin_Status'|translate }}</th>
            {% if (displayAdminLinks) %}
                <th class=\"action-links\">{{ 'General_Action'|translate }}</th>
            {% endif %}
        </tr>
        </thead>
        <tbody id=\"plugins\">
        {% for name,plugin in pluginsInfo %}
            {% set isDefaultTheme = isTheme and name == 'Morpheus' %}
            {% if (plugin.alwaysActivated is defined and not plugin.alwaysActivated) or isTheme %}
                <tr {% if plugin.activated %}class=\"active-plugin\"{% else %}class=\"inactive-plugin\"{% endif %} data-filter-status=\"{% if plugin.activated %}active{% else %}inactive{% endif %}\" data-filter-origin=\"{% if plugin.isCorePlugin %}core{% else %}noncore{% endif %}\">
                    <td class=\"name\">
                        <a name=\"{{ name|e('html_attr') }}\"></a>
                        {% if not plugin.isCorePlugin and name in marketplacePluginNames -%}
                            <a href=\"javascript:void(0);\"
                               piwik-plugin-name=\"{{ name|e('html_attr') }}\"
                            >{{ name }}</a>
                        {%- else %}
                            {{ name }}
                        {% endif %}
                        <span class=\"plugin-version\" {% if plugin.isCorePlugin %}title=\"{{ 'CorePluginsAdmin_CorePluginTooltip'|translate }}\"{% endif %}>({% if plugin.isCorePlugin %}{{ 'CorePluginsAdmin_OriginCore'|translate }}{% else %}v{{ plugin.info.version }}{% endif %})</span>

                        {% if name in pluginNamesHavingSettings %}
                            <br /><br />
                            <a href=\"{{ linkTo({'module':'CoreAdminHome', 'action': 'generalSettings'}) }}#{{ name|e('html_attr') }}\" class=\"settingsLink\">{{ 'General_Settings'|translate }}</a>
                        {% endif %}
                    </td>
                    <td class=\"desc\">
                        <div class=\"plugin-desc-missingrequirements\">
                            {% if plugin.missingRequirements is defined and plugin.missingRequirements %}
                                {{  plugin.missingRequirements }}
                                <br />
                            {% endif %}
                        </div>
                        <div class=\"plugin-desc-text\">

                            {{ plugin.info.description|raw|nl2br }}

                            {% if plugin.info.homepage|default is not empty and plugin.info.homepage not in [
                            'http://piwik.org', 'http://www.piwik.org', 'http://piwik.org/', 'http://www.piwik.org/'
                            ] %}
                                <span class=\"plugin-homepage\">
                            <a target=\"_blank\" href=\"{{ plugin.info.homepage }}\">({{ 'CorePluginsAdmin_PluginHomepage'|translate|replace({' ': '&nbsp;'})|raw }})</a>
                        </span>
                            {% endif %}

                            {% if plugin.info.donate is defined and plugin.info.donate|length %}
                                <div class=\"plugin-donation\">
                                    {{ 'CorePluginsAdmin_LikeThisPlugin'|translate }} <a href=\"javascript:;\" class=\"plugin-donation-link\" data-overlay-id=\"overlay-{{ name|escape('html_attr') }}\">{{ 'CorePluginsAdmin_ConsiderDonating'|translate }}</a>
                                    <div id=\"overlay-{{ name|escape('html_attr') }}\" class=\"donation-overlay ui-confirm\" title=\"{{ 'CorePluginsAdmin_LikeThisPlugin'|translate }}\">
                                        <p>{{ 'CorePluginsAdmin_CommunityContributedPlugin'|translate }}</p>
                                        <p>{{ 'CorePluginsAdmin_ConsiderDonatingCreatorOf'|translate(\"<b>\" ~ name ~ \"</b>\")|raw }}</p>
                                        <div class=\"donation-links\">
                                            {% if plugin.info.donate.paypal is defined and plugin.info.donate.paypal %}
                                                <a class=\"donation-link paypal\" target=\"_blank\" href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&item_name=Piwik%20Plugin%20{{ name|escape('url') }}&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted&business={{ plugin.info.donate.paypal|escape('url') }}\"><img src=\"plugins/CorePluginsAdmin/images/paypal_donate.jpg\" height=\"30\"/></a>
                                            {% endif %}
                                            {% if plugin.info.donate.flattr is defined and plugin.info.donate.flattr %}
                                                <a class=\"donation-link flattr\" target=\"_blank\" href=\"{{ plugin.info.donate.flattr }}\"><img class=\"alignnone\" title=\"Flattr\" alt=\"\" src=\"plugins/CorePluginsAdmin/images/flattr.png\" height=\"29\" /></a>
                                            {% endif %}
                                            {% if plugin.info.donate.bitcoin is defined and plugin.info.donate.bitcoin %}
                                                <div class=\"donation-link bitcoin\">
                                                    <span>Donate Bitcoins to:</span>
                                                    <a href=\"bitcoin:{{ plugin.info.donate.bitcoin|escape('url') }}\">{{ plugin.info.donate.bitcoin }}</a>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <input role=\"no\" type=\"button\" value=\"{{ 'General_Close'|translate }}\"/>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                        {% if plugin.info.license is defined %}
                            <div class=\"plugin-license\">
                                {% if plugin.info.license_file is defined %}<a title=\"{{ 'CorePluginsAdmin_LicenseHomepage'|translate }}\" rel=\"noreferrer\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=showLicense&pluginName={{ name }}\">{% endif %}{{ plugin.info.license }}{% if plugin.info.license_file is defined %}</a>{% endif %}
                            </div>
                        {% endif %}
                        {% if plugin.info.authors is defined %}
                            <div class=\"plugin-author\">
                                By
                                    {% if plugin.info.authors is defined -%}
                                    {% spaceless %}
                                        {% for author in plugin.info.authors if author.name %}
                                            {% if author.homepage is defined %}
                                                <a title=\"{{ 'CorePluginsAdmin_AuthorHomepage'|translate }}\" href=\"{{ author.homepage }}\" rel=\"noreferrer\" target=\"_blank\">{{ author.name }}</a>
                                            {% else %}
                                                {{ author.name }}
                                            {% endif %}
                                            {% if loop.index < plugin.info.authors|length %}
                                                ,
                                            {% endif %}
                                        {% endfor %}
                                    {% endspaceless %}
                                    {%- endif %}.
                            </div>
                        {% endif %}
                    </td>
                    <td class=\"status\" {% if isDefaultTheme %}style=\"border-left-width:0px;\"{% endif %}>
                        {% if not isDefaultTheme -%}

                            {% if plugin.activated %}
                                {{ 'CorePluginsAdmin_Active'|translate }}
                            {% else %}
                                {{ 'CorePluginsAdmin_Inactive'|translate }}
                                {% if plugin.uninstallable and displayAdminLinks %} <br/> - <a data-plugin-name=\"{{ name|escape('html_attr') }}\" class=\"uninstall\" href='index.php?module=CorePluginsAdmin&action=uninstall&pluginName={{ name }}&nonce={{ uninstallNonce }}'>{{ 'CorePluginsAdmin_ActionUninstall'|translate }}</a>{% endif %}
                            {% endif %}

                        {%- endif %}
                    </td>

                    {% if displayAdminLinks %}
                        <td class=\"togl action-links\" {% if isDefaultTheme %}style=\"border-left-width:0px;\"{% endif %}>
                            {% if not isDefaultTheme -%}

                                {% if plugin.invalid is defined or plugin.alwaysActivated %}
                                    -
                                {% else %}
                                    {{ _self.pluginActivateDeactivateAction(name, plugin.activated, plugin.missingRequirements, deactivateNonce, activateNonce) }}
                                {% endif %}

                            {%- endif %}
                        </td>
                    {% endif %}
                </tr>
            {% endif %}
        {% endfor %}
        </tbody>
    </table>

    <div class=\"tableActionBar\">
        {% if isTheme %}
            <a href=\"{{ linkTo({'action':'browseThemes', 'sort': ''}) }}\"><span class=\"icon-add\"></span> {{ 'CorePluginsAdmin_InstallNewThemes'|translate }}</a>
        {% else %}
            <a href=\"{{ linkTo({'action':'browsePlugins', 'sort': ''}) }}\"><span class=\"icon-add\"></span> {{ 'CorePluginsAdmin_InstallNewPlugins'|translate }}</a>
        {% endif %}
    </div>

    <div class=\"footer-message\">
        {% set pluginsAlwaysActivated %}
            {% for name,plugin in pluginsInfo %}
                {% if plugin.alwaysActivated is defined and plugin.alwaysActivated %}
                    {{ name }}{% if not loop.last %}, {% endif %}
                 {% endif %}
            {% endfor %}
        {% endset %}
        {{ 'CorePluginsAdmin_AlwaysActivatedPluginsList'|translate(pluginsAlwaysActivated) }}
    </div>

{% endmacro %}
";
    }
}
