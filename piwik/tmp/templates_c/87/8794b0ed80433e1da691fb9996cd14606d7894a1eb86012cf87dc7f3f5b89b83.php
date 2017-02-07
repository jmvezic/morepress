<?php

/* @UsersManager/index.twig */
class __TwigTemplate_1e5745de01e3bb245085fc5e127c309dc50e6f2e7d81490992b8443f51185bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'websiteAccessTable' => array($this, 'block_websiteAccessTable'),
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
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ManageAccess")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div piwik-content-block
     content-title=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
        echo "\"
     feature=\"true\"
     style=\"width:800px;\"
     help-url=\"https://piwik.org/docs/manage-users/\"
    >
<div ng-controller=\"ManageUserAccessController as manageUserAccess\">
    <div id=\"sites\" class=\"usersManager\">
        <section class=\"sites_selector_container\">
            <p>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MainDescription")), "html", null, true);
        echo "</p>

            ";
        // line 18
        ob_start();
        // line 19
        echo "                <strong>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ApplyToAllWebsites")), "html", null, true);
        echo "</strong>
            ";
        $context["applyAllSitesText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
            <div piwik-siteselector
                 show-selected-site=\"true\"
                 only-sites-with-admin-access=\"true\"
                 class=\"sites_autocomplete\"
                 ng-model=\"manageUserAccess.site\"
                 ng-change=\"manageUserAccess.siteChanged()\"
                 siteid=\"";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")), "html", null, true);
        echo "\"
                 sitename=\"";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName")), "html", null, true);
        echo "\"
                 all-sites-text=\"";
        // line 30
        echo (isset($context["applyAllSitesText"]) ? $context["applyAllSitesText"] : $this->getContext($context, "applyAllSitesText"));
        echo "\"
                 all-sites-location=\"top\"
                 id=\"usersManagerSiteSelect\"
                 switch-site-on-select=\"false\"></div>
        </section>
    </div>

    ";
        // line 37
        $this->displayBlock('websiteAccessTable', $context, $blocks);
        // line 294
        echo "
";
    }

    // line 37
    public function block_websiteAccessTable($context, array $blocks = array())
    {
        // line 38
        echo "
    ";
        // line 39
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@UsersManager/index.twig", 39);
        // line 40
        echo "
    <div piwik-activity-indicator class=\"loadingManageUserAccess\" loading=\"manageUserAccess.isLoading\"></div>
    <div id=\"accessUpdated\" style=\"vertical-align:top;\"></div>

    ";
        // line 44
        if ((isset($context["anonymousHasViewAccess"]) ? $context["anonymousHasViewAccess"] : $this->getContext($context, "anonymousHasViewAccess"))) {
            // line 45
            echo "        <br/>
        <div class=\"alert alert-warning\">
            ";
            // line 47
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter(array(0 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess", "'anonymous'", "'view'")), 1 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess2"))), " "), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 50
        echo "
    <table piwik-content-table id=\"manageUserAccess\">
        <thead>
        <tr>
            <th class='first'>";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
        echo "</th>
            <th>";
        // line 55
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
        echo "</th>
            <th>";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivNone")), "html", null, true);
        echo "</th>
            <th>";
        // line 57
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivView")), "html", null, true);
        echo "</th>
            <th>";
        // line 58
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivAdmin")), "html", null, true);
        echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 63
        $context["accesValid"] = ('' === $tmp = "<img src='plugins/UsersManager/images/ok.png' class='accessGranted' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        echo "        ";
        ob_start();
        echo "<span title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExceptionSuperUserAccess")), "html", null, true);
        echo "\">N/A</span>";
        $context["superUserAccess"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 65
        echo "
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersAccessByWebsite"]) ? $context["usersAccessByWebsite"] : $this->getContext($context, "usersAccessByWebsite")));
        foreach ($context['_seq'] as $context["login"] => $context["access"]) {
            // line 67
            echo "            ";
            if (((isset($context["userIsSuperUser"]) ? $context["userIsSuperUser"] : $this->getContext($context, "userIsSuperUser")) || ((isset($context["hasOnlyAdminAccess"]) ? $context["hasOnlyAdminAccess"] : $this->getContext($context, "hasOnlyAdminAccess")) && (($context["access"] != "noaccess") || ((isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")) == "all"))))) {
                // line 68
                echo "            <tr data-login=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["login"], "html_attr");
                echo "\">
                <td id='login'>";
                // line 69
                echo \Piwik\piwik_escape_filter($this->env, $context["login"], "html", null, true);
                echo "</td>
                <td>";
                // line 70
                echo $this->getAttribute((isset($context["usersAliasByLogin"]) ? $context["usersAliasByLogin"] : $this->getContext($context, "usersAliasByLogin")), $context["login"], array(), "array");
                echo "</td>
                <td id='noaccess'>
                    ";
                // line 72
                if (twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                    // line 73
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["superUserAccess"]) ? $context["superUserAccess"] : $this->getContext($context, "superUserAccess")), "html", null, true);
                    echo "
                    ";
                } elseif (((                // line 74
$context["access"] == "noaccess") && ((isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")) != "all"))) {
                    // line 75
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["accesValid"]) ? $context["accesValid"] : $this->getContext($context, "accesValid")), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 77
                    echo "                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                             ng-click='manageUserAccess.setAccess(";
                    // line 78
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                    echo ", \"noaccess\")'
                        />
                    ";
                }
                // line 80
                echo "&nbsp;</td>
                <td id='view'>
                    ";
                // line 82
                if (twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                    // line 83
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["superUserAccess"]) ? $context["superUserAccess"] : $this->getContext($context, "superUserAccess")), "html", null, true);
                    echo "
                    ";
                } elseif (((                // line 84
$context["access"] == "view") && ((isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")) != "all"))) {
                    // line 85
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["accesValid"]) ? $context["accesValid"] : $this->getContext($context, "accesValid")), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 87
                    echo "                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                             ng-click='manageUserAccess.setAccess(";
                    // line 88
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                    echo ", \"view\")'
                        />
                    ";
                }
                // line 90
                echo "&nbsp;</td>
                <td id='admin'>
                    ";
                // line 92
                if (twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                    // line 93
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["superUserAccess"]) ? $context["superUserAccess"] : $this->getContext($context, "superUserAccess")), "html", null, true);
                    echo "
                    ";
                } elseif ((                // line 94
$context["login"] == "anonymous")) {
                    // line 95
                    echo "                        N/A
                    ";
                } else {
                    // line 97
                    echo "                        ";
                    if ((($context["access"] == "admin") && ((isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")) != "all"))) {
                        // line 98
                        echo "                            ";
                        echo \Piwik\piwik_escape_filter($this->env, (isset($context["accesValid"]) ? $context["accesValid"] : $this->getContext($context, "accesValid")), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 100
                        echo "                            <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                                 ng-click='manageUserAccess.setAccess(";
                        // line 101
                        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                        echo ", \"admin\")'
                            />
                        ";
                    }
                    // line 103
                    echo "&nbsp;
                    ";
                }
                // line 105
                echo "                </td>
            </tr>
            ";
            }
            // line 108
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['login'], $context['access'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </tbody>
    </table>

    ";
        // line 112
        if ((isset($context["hasOnlyAdminAccess"]) ? $context["hasOnlyAdminAccess"] : $this->getContext($context, "hasOnlyAdminAccess"))) {
            // line 113
            echo "        <div class=\"tableActionBar\">
            <div ng-controller=\"GiveUserViewAccessController as giveViewAccess\" piwik-form>
                <button id=\"showGiveViewAccessForm\"
                        ng-show=\"!giveViewAccess.showForm\" ng-click=\"giveViewAccess.showViewAccessForm()\">
                    <span class=\"icon-add\"></span>
                    ";
            // line 118
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_GiveViewAccessTitle", (("\"" . (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName"))) . "\"")));
            echo "
                </button>

                <form id=\"giveViewAccessForm\" ng-show=\"giveViewAccess.showForm\">
                    <div piwik-field uicontrol=\"text\" name=\"user_invite\"
                         ng-model=\"giveViewAccess.usernameOrEmail\"
                         full-width=\"true\"
                         title=\"";
            // line 125
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_EnterUsernameOrEmail")), "html_attr");
            echo "\"
                         >
                    </div>

                    <div piwik-save-button id=\"giveUserAccessToViewReports\"
                         onconfirm=\"giveViewAccess.giveAccess()\"
                           saving=\"giveViewAccess.isLoading\"
                           value=\"";
            // line 132
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_GiveViewAccess", (("'" . (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName"))) . "'"))), "html_attr");
            echo "\"></div>

                </form>
            </div>
        </div>
        <div id=\"ajaxErrorGiveViewAccess\">

        </div>
    ";
        }
        // line 141
        echo "</div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>";
        // line 145
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangeAllConfirm", "<span class='login'></span>"));
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 146
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 147
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

";
        // line 150
        if ((isset($context["userIsSuperUser"]) ? $context["userIsSuperUser"] : $this->getContext($context, "userIsSuperUser"))) {
            // line 151
            echo "<div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagement")), "html_attr");
            echo "\">
    <div class=\"ui-confirm\" id=\"confirmUserRemove\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 154
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 155
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"confirmTokenRegenerate\">
        <h2>";
            // line 159
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TokenRegenerateConfirm")), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 160
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 161
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>
    <div class=\"ui-confirm\" id=\"confirmTokenRegenerateSelf\">
        <h2>";
            // line 164
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TokenRegenerateConfirmSelf")), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 165
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 166
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>

    <br/>
    <p>";
            // line 170
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagementMainDescription")), "html", null, true);
            echo "
        ";
            // line 171
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ThereAreCurrentlyNRegisteredUsers", (("<b>" . (isset($context["usersCount"]) ? $context["usersCount"] : $this->getContext($context, "usersCount"))) . "</b>")));
            echo "</p>
    ";
            // line 172
            $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@UsersManager/index.twig", 172);
            // line 173
            echo "
    <div class=\"user\" ng-controller=\"ManageUsersController as manageUsers\">
        <div piwik-activity-indicator class=\"loadingManageUsers\" loading=\"manageUsers.isLoading\"></div>

        <table piwik-content-table id=\"users\">
            <thead>
            <tr>
                <th>";
            // line 180
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "</th>
                <th>";
            // line 181
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "</th>
                <th>";
            // line 182
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html", null, true);
            echo "</th>
                <th>";
            // line 183
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
                ";
            // line 184
            if ((array_key_exists("showLastSeen", $context) && (isset($context["showLastSeen"]) ? $context["showLastSeen"] : $this->getContext($context, "showLastSeen")))) {
                // line 185
                echo "                <th>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_LastSeen")), "html", null, true);
                echo "</th>
                ";
            }
            // line 187
            echo "                <th>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
            echo "</th>
                <th>";
            // line 188
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
            echo "</th>
            </tr>
            </thead>

            <tbody>
            ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["i"] => $context["user"]) {
                // line 194
                echo "                ";
                if (($this->getAttribute($context["user"], "login", array()) != "anonymous")) {
                    // line 195
                    echo "                    <tr class=\"editable\" id=\"row";
                    echo \Piwik\piwik_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">
                        <td id=\"userLogin\" class=\"editable\" ng-click='manageUsers.editUser(\"row";
                    // line 196
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'>";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
                    echo "</td>
                        <td id=\"password\" class=\"editable\" ng-click='manageUsers.editUser(\"row";
                    // line 197
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'>-</td>
                        <td id=\"email\" class=\"editable\" ng-click='manageUsers.editUser(\"row";
                    // line 198
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'>";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                    echo "</td>
                        <td id=\"alias\" class=\"editable\" ng-click='manageUsers.editUser(\"row";
                    // line 199
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'>";
                    echo $this->getAttribute($context["user"], "alias", array());
                    echo "</td>
                        ";
                    // line 200
                    if ($this->getAttribute($context["user"], "last_seen", array(), "any", true, true)) {
                        // line 201
                        echo "                        <td id=\"last_seen\">";
                        if (twig_test_empty($this->getAttribute($context["user"], "last_seen", array()))) {
                            echo "-";
                        } else {
                            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeAgo", $this->getAttribute($context["user"], "last_seen", array())));
                        }
                        echo "</td>
                        ";
                    }
                    // line 203
                    echo "                        <td class=\"center\">
                            <button ng-click='manageUsers.editUser(\"row";
                    // line 204
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'
                                    class=\"edituser table-action\" title=\"";
                    // line 205
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                    echo "\">
                                <span class=\"icon-edit\"></span>
                            </button>
                        </td>
                        <td class=\"center\">
                            <button class=\"deleteuser table-action\"
                                    ng-click='manageUsers.deleteUser(";
                    // line 211
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["user"], "login", array())), "html", null, true);
                    echo ")'
                                    title=\"";
                    // line 212
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                    echo "\">
                                <span class=\"icon-delete\"></span>
                            </button>
                        </td>
                    </tr>
                ";
                }
                // line 218
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "            </tbody>
        </table>

        <div class=\"tableActionBar\">
            <button class=\"add-user\" ng-click=\"manageUsers.createUser()\" ng-show=\"manageUsers.showCreateUser\">
                <span class=\"icon-add\"></span>
                ";
            // line 225
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AddUser")), "html", null, true);
            echo "
            </button>
        </div>
    </div>
</div>

<div piwik-content-block
     id=\"super_user_access\"
     style=\"width:800px;\"
     content-title=\"";
            // line 234
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagement")), "html_attr");
            echo "\">

    <div ng-controller=\"ManageSuperUserController as manageSuperUser\">

        <p>";
            // line 238
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementMainDescription")), "html", null, true);
            echo " <br/>
        ";
            // line 239
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementGrantMore")), "html", null, true);
            echo "</p>

        <div piwik-activity-indicator class=\"loadingManageSuperUser\" loading=\"manageSuperUser.isLoading\"></div>

        <div id=\"superUserAccessUpdated\" style=\"vertical-align:top;\"></div>

        <table piwik-content-table id=\"superUserAccess\" >
            <thead>
            <tr>
                <th class='first'>";
            // line 248
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
            echo "</th>
                <th>";
            // line 249
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
                <th>";
            // line 250
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SuperUser")), "html", null, true);
            echo "</th>
            </tr>
            </thead>

            <tbody>
            ";
            // line 255
            if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) > 1)) {
                // line 256
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["usersAliasByLogin"]) ? $context["usersAliasByLogin"] : $this->getContext($context, "usersAliasByLogin")));
                foreach ($context['_seq'] as $context["login"] => $context["alias"]) {
                    if (($context["login"] != "anonymous")) {
                        // line 257
                        echo "                    <tr>
                        <td id='login'>";
                        // line 258
                        echo \Piwik\piwik_escape_filter($this->env, $context["login"], "html", null, true);
                        echo "</td>
                        <td>";
                        // line 259
                        echo $context["alias"];
                        echo "</td>
                        <td id='superuser'>
                            ";
                        // line 261
                        if (twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                            // line 262
                            echo "                                <img src='plugins/UsersManager/images/ok.png' class='accessGranted'
                                     ng-click='manageSuperUser.removeSuperUserAccess(";
                            // line 263
                            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                            echo ")' />
                            ";
                        }
                        // line 265
                        echo "                            ";
                        if ( !twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                            // line 266
                            echo "                                <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                                     ng-click='manageSuperUser.giveSuperUserAccess(";
                            // line 267
                            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                            echo ")' />
                            ";
                        }
                        // line 269
                        echo "                            &nbsp;
                        </td>
                    </tr>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['login'], $context['alias'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "            ";
            } else {
                // line 274
                echo "                <tr>
                    <td colspan=\"3\">
                        ";
                // line 276
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_NoUsersExist")), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
            }
            // line 280
            echo "            </tbody>
        </table>

        <div class=\"ui-confirm\" id=\"superUserAccessConfirm\">
            <h2> </h2>
            <input role=\"yes\" type=\"button\" value=\"";
            // line 285
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
            <input role=\"no\" type=\"button\" value=\"";
            // line 286
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
        </div>

    </div>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "@UsersManager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 286,  673 => 285,  666 => 280,  659 => 276,  655 => 274,  652 => 273,  642 => 269,  637 => 267,  634 => 266,  631 => 265,  626 => 263,  623 => 262,  621 => 261,  616 => 259,  612 => 258,  609 => 257,  603 => 256,  601 => 255,  593 => 250,  589 => 249,  585 => 248,  573 => 239,  569 => 238,  562 => 234,  550 => 225,  542 => 219,  536 => 218,  527 => 212,  523 => 211,  514 => 205,  510 => 204,  507 => 203,  497 => 201,  495 => 200,  489 => 199,  483 => 198,  479 => 197,  473 => 196,  468 => 195,  465 => 194,  461 => 193,  453 => 188,  448 => 187,  442 => 185,  440 => 184,  436 => 183,  432 => 182,  428 => 181,  424 => 180,  415 => 173,  413 => 172,  409 => 171,  405 => 170,  398 => 166,  394 => 165,  390 => 164,  384 => 161,  380 => 160,  376 => 159,  369 => 155,  365 => 154,  358 => 151,  356 => 150,  350 => 147,  346 => 146,  342 => 145,  336 => 141,  324 => 132,  314 => 125,  304 => 118,  297 => 113,  295 => 112,  290 => 109,  284 => 108,  279 => 105,  275 => 103,  269 => 101,  266 => 100,  260 => 98,  257 => 97,  253 => 95,  251 => 94,  246 => 93,  244 => 92,  240 => 90,  234 => 88,  231 => 87,  225 => 85,  223 => 84,  218 => 83,  216 => 82,  212 => 80,  206 => 78,  203 => 77,  197 => 75,  195 => 74,  190 => 73,  188 => 72,  183 => 70,  179 => 69,  174 => 68,  171 => 67,  167 => 66,  164 => 65,  157 => 64,  155 => 63,  147 => 58,  143 => 57,  139 => 56,  135 => 55,  131 => 54,  125 => 50,  119 => 47,  115 => 45,  113 => 44,  107 => 40,  105 => 39,  102 => 38,  99 => 37,  94 => 294,  92 => 37,  82 => 30,  78 => 29,  74 => 28,  65 => 21,  59 => 19,  57 => 18,  52 => 16,  41 => 8,  37 => 6,  34 => 5,  30 => 1,  26 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin.twig' %}

{% set title %}{{ 'UsersManager_ManageAccess'|translate }}{% endset %}

{% block content %}

<div piwik-content-block
     content-title=\"{{ title|e('html_attr') }}\"
     feature=\"true\"
     style=\"width:800px;\"
     help-url=\"https://piwik.org/docs/manage-users/\"
    >
<div ng-controller=\"ManageUserAccessController as manageUserAccess\">
    <div id=\"sites\" class=\"usersManager\">
        <section class=\"sites_selector_container\">
            <p>{{ 'UsersManager_MainDescription'|translate }}</p>

            {% set applyAllSitesText %}
                <strong>{{ 'UsersManager_ApplyToAllWebsites'|translate }}</strong>
            {% endset %}

            <div piwik-siteselector
                 show-selected-site=\"true\"
                 only-sites-with-admin-access=\"true\"
                 class=\"sites_autocomplete\"
                 ng-model=\"manageUserAccess.site\"
                 ng-change=\"manageUserAccess.siteChanged()\"
                 siteid=\"{{ idSiteSelected }}\"
                 sitename=\"{{ defaultReportSiteName }}\"
                 all-sites-text=\"{{ applyAllSitesText|raw }}\"
                 all-sites-location=\"top\"
                 id=\"usersManagerSiteSelect\"
                 switch-site-on-select=\"false\"></div>
        </section>
    </div>

    {% block websiteAccessTable %}

    {% import 'ajaxMacros.twig' as ajax %}

    <div piwik-activity-indicator class=\"loadingManageUserAccess\" loading=\"manageUserAccess.isLoading\"></div>
    <div id=\"accessUpdated\" style=\"vertical-align:top;\"></div>

    {% if anonymousHasViewAccess %}
        <br/>
        <div class=\"alert alert-warning\">
            {{ ['UsersManager_AnonymousUserHasViewAccess'|translate(\"'anonymous'\",\"'view'\"), 'UsersManager_AnonymousUserHasViewAccess2'|translate]|join(' ') }}
        </div>
    {% endif %}

    <table piwik-content-table id=\"manageUserAccess\">
        <thead>
        <tr>
            <th class='first'>{{ 'UsersManager_User'|translate }}</th>
            <th>{{ 'UsersManager_Alias'|translate }}</th>
            <th>{{ 'UsersManager_PrivNone'|translate }}</th>
            <th>{{ 'UsersManager_PrivView'|translate }}</th>
            <th>{{ 'UsersManager_PrivAdmin'|translate }}</th>
        </tr>
        </thead>

        <tbody>
        {% set accesValid %}<img src='plugins/UsersManager/images/ok.png' class='accessGranted' />{% endset %}
        {% set superUserAccess %}<span title=\"{{ 'UsersManager_ExceptionSuperUserAccess'|translate }}\">N/A</span>{% endset %}

        {% for login,access in usersAccessByWebsite %}
            {% if userIsSuperUser or (hasOnlyAdminAccess and (access!='noaccess' or idSiteSelected == 'all'))  %}
            <tr data-login=\"{{ login|e('html_attr') }}\">
                <td id='login'>{{ login }}</td>
                <td>{{ usersAliasByLogin[login]|raw }}</td>
                <td id='noaccess'>
                    {% if login in superUserLogins %}
                        {{ superUserAccess }}
                    {% elseif access=='noaccess' and idSiteSelected != 'all' %}
                        {{ accesValid }}
                    {% else %}
                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                             ng-click='manageUserAccess.setAccess({{ login|json_encode}}, \"noaccess\")'
                        />
                    {% endif %}&nbsp;</td>
                <td id='view'>
                    {% if login in superUserLogins %}
                        {{ superUserAccess }}
                    {% elseif access == 'view' and idSiteSelected != 'all' %}
                        {{ accesValid }}
                    {% else %}
                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                             ng-click='manageUserAccess.setAccess({{ login|json_encode}}, \"view\")'
                        />
                    {% endif %}&nbsp;</td>
                <td id='admin'>
                    {% if login in superUserLogins %}
                        {{ superUserAccess }}
                    {% elseif login == 'anonymous' %}
                        N/A
                    {% else %}
                        {% if access == 'admin' and idSiteSelected != 'all' %}
                            {{ accesValid }}
                        {% else %}
                            <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                                 ng-click='manageUserAccess.setAccess({{ login|json_encode}}, \"admin\")'
                            />
                        {% endif %}&nbsp;
                    {% endif %}
                </td>
            </tr>
            {% endif %}
        {% endfor %}
        </tbody>
    </table>

    {% if hasOnlyAdminAccess %}
        <div class=\"tableActionBar\">
            <div ng-controller=\"GiveUserViewAccessController as giveViewAccess\" piwik-form>
                <button id=\"showGiveViewAccessForm\"
                        ng-show=\"!giveViewAccess.showForm\" ng-click=\"giveViewAccess.showViewAccessForm()\">
                    <span class=\"icon-add\"></span>
                    {{ 'UsersManager_GiveViewAccessTitle'|translate('\"' ~ defaultReportSiteName ~ '\"')|raw }}
                </button>

                <form id=\"giveViewAccessForm\" ng-show=\"giveViewAccess.showForm\">
                    <div piwik-field uicontrol=\"text\" name=\"user_invite\"
                         ng-model=\"giveViewAccess.usernameOrEmail\"
                         full-width=\"true\"
                         title=\"{{ 'UsersManager_EnterUsernameOrEmail'|translate|e('html_attr') }}\"
                         >
                    </div>

                    <div piwik-save-button id=\"giveUserAccessToViewReports\"
                         onconfirm=\"giveViewAccess.giveAccess()\"
                           saving=\"giveViewAccess.isLoading\"
                           value=\"{{ 'UsersManager_GiveViewAccess'|translate(\"'\" ~ defaultReportSiteName ~ \"'\")|e('html_attr') }}\"></div>

                </form>
            </div>
        </div>
        <div id=\"ajaxErrorGiveViewAccess\">

        </div>
    {% endif %}
</div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>{{ 'UsersManager_ChangeAllConfirm'|translate(\"<span class='login'></span>\")|raw }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>

{% if userIsSuperUser %}
<div piwik-content-block content-title=\"{{ 'UsersManager_UsersManagement'|translate|e('html_attr') }}\">
    <div class=\"ui-confirm\" id=\"confirmUserRemove\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"confirmTokenRegenerate\">
        <h2>{{ 'UsersManager_TokenRegenerateConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>
    <div class=\"ui-confirm\" id=\"confirmTokenRegenerateSelf\">
        <h2>{{ 'UsersManager_TokenRegenerateConfirmSelf'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <br/>
    <p>{{ 'UsersManager_UsersManagementMainDescription'|translate }}
        {{ 'UsersManager_ThereAreCurrentlyNRegisteredUsers'|translate(\"<b>\"~usersCount~\"</b>\")|raw }}</p>
    {% import 'ajaxMacros.twig' as ajax %}

    <div class=\"user\" ng-controller=\"ManageUsersController as manageUsers\">
        <div piwik-activity-indicator class=\"loadingManageUsers\" loading=\"manageUsers.isLoading\"></div>

        <table piwik-content-table id=\"users\">
            <thead>
            <tr>
                <th>{{ 'General_Username'|translate }}</th>
                <th>{{ 'General_Password'|translate }}</th>
                <th>{{ 'UsersManager_Email'|translate }}</th>
                <th>{{ 'UsersManager_Alias'|translate }}</th>
                {% if showLastSeen is defined and showLastSeen %}
                <th>{{ 'UsersManager_LastSeen'|translate }}</th>
                {% endif %}
                <th>{{ 'General_Edit'|translate }}</th>
                <th>{{ 'General_Delete'|translate }}</th>
            </tr>
            </thead>

            <tbody>
            {% for i,user in users %}
                {% if user.login != 'anonymous' %}
                    <tr class=\"editable\" id=\"row{{ i }}\">
                        <td id=\"userLogin\" class=\"editable\" ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'>{{ user.login }}</td>
                        <td id=\"password\" class=\"editable\" ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'>-</td>
                        <td id=\"email\" class=\"editable\" ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'>{{ user.email }}</td>
                        <td id=\"alias\" class=\"editable\" ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'>{{ user.alias|raw }}</td>
                        {% if user.last_seen is defined %}
                        <td id=\"last_seen\">{% if user.last_seen is empty %}-{% else %}{{ 'General_TimeAgo'|translate(user.last_seen)|raw }}{% endif %}</td>
                        {% endif %}
                        <td class=\"center\">
                            <button ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'
                                    class=\"edituser table-action\" title=\"{{ 'General_Edit'|translate }}\">
                                <span class=\"icon-edit\"></span>
                            </button>
                        </td>
                        <td class=\"center\">
                            <button class=\"deleteuser table-action\"
                                    ng-click='manageUsers.deleteUser({{ user.login|json_encode }})'
                                    title=\"{{ 'General_Delete'|translate }}\">
                                <span class=\"icon-delete\"></span>
                            </button>
                        </td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>

        <div class=\"tableActionBar\">
            <button class=\"add-user\" ng-click=\"manageUsers.createUser()\" ng-show=\"manageUsers.showCreateUser\">
                <span class=\"icon-add\"></span>
                {{ 'UsersManager_AddUser'|translate }}
            </button>
        </div>
    </div>
</div>

<div piwik-content-block
     id=\"super_user_access\"
     style=\"width:800px;\"
     content-title=\"{{ 'UsersManager_SuperUserAccessManagement'|translate|e('html_attr') }}\">

    <div ng-controller=\"ManageSuperUserController as manageSuperUser\">

        <p>{{ 'UsersManager_SuperUserAccessManagementMainDescription'|translate }} <br/>
        {{ 'UsersManager_SuperUserAccessManagementGrantMore'|translate }}</p>

        <div piwik-activity-indicator class=\"loadingManageSuperUser\" loading=\"manageSuperUser.isLoading\"></div>

        <div id=\"superUserAccessUpdated\" style=\"vertical-align:top;\"></div>

        <table piwik-content-table id=\"superUserAccess\" >
            <thead>
            <tr>
                <th class='first'>{{ 'UsersManager_User'|translate }}</th>
                <th>{{ 'UsersManager_Alias'|translate }}</th>
                <th>{{ 'Installation_SuperUser'|translate }}</th>
            </tr>
            </thead>

            <tbody>
            {% if users|length > 1 %}
                {% for login,alias in usersAliasByLogin if login != 'anonymous' %}
                    <tr>
                        <td id='login'>{{ login }}</td>
                        <td>{{ alias|raw }}</td>
                        <td id='superuser'>
                            {% if login in superUserLogins %}
                                <img src='plugins/UsersManager/images/ok.png' class='accessGranted'
                                     ng-click='manageSuperUser.removeSuperUserAccess({{ login|json_encode}})' />
                            {% endif %}
                            {% if not (login in superUserLogins) %}
                                <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                                     ng-click='manageSuperUser.giveSuperUserAccess({{ login|json_encode }})' />
                            {% endif %}
                            &nbsp;
                        </td>
                    </tr>
                {% endfor %}
            {% else %}
                <tr>
                    <td colspan=\"3\">
                        {{ 'UsersManager_NoUsersExist'|translate }}
                    </td>
                </tr>
            {% endif %}
            </tbody>
        </table>

        <div class=\"ui-confirm\" id=\"superUserAccessConfirm\">
            <h2> </h2>
            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
            <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
        </div>

    </div>
</div>

{% endif %}
{% endblock %}

{% endblock %}
";
    }
}
