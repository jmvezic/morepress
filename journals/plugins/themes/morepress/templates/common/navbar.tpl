{**
 * templates/common/navbar.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Navigation Bar
 *
 *}
<script src="{$baseUrl}/plugins/themes/morepress/js/navbar.js" type="text/javascript"></script>

{literal}
<script type="text/javascript">
function removeParam(key, sourceURL) {
    var rtn = sourceURL.split("%3F")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("%3F") !== -1) ? sourceURL.split("%3F")[1] : "";
    if (queryString !== "") {
        params_arr = queryString.split("&");
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("%3D")[0];
            if (param === key) {
                params_arr.splice(i, 1);
            }
        }
        rtn = rtn + "%3F" + params_arr.join("&");
    }
    return rtn;
}
</script>
{/literal}

<script type="text/javascript">
		<!--
		function changeLanguageNav(elem) {ldelim}
			var new_locale = elem.id;

			country_ready = "";

			if (new_locale=="hr_HR") {ldelim}
				country_ready = "HR";
			{rdelim}
			else {ldelim}
				country_ready = "US";
			{rdelim}

			var d = new Date();
			d.setTime(d.getTime() + (365*24*60*60*1000));
			var expires = "expires="+d.toUTCString();

			var redirect_url = '{url|escape:"javascript" page="user" op="setLocale" path="NEW_LOCALE" source=$smarty.server.REQUEST_URI escape=false}';
			redirect_url = redirect_url.replace("NEW_LOCALE", new_locale);

			var modified_url = removeParam("lang", redirect_url);

			document.cookie="country="+country_ready+"; "+expires+"; path=/";

			if (modified_url.slice(-3)=="%3F") {ldelim}
				modified_url = modified_url.slice(0, -3);
			{rdelim}

			window.location.href = modified_url;
		{rdelim}
		//-->
	</script>
<ul class="topnav" id="myTopnav">
  <li><a class="active" href="{$baseUrl}"><img src="{$baseUrl}/plugins/themes/morepress/img/morepress_bijeli_veci.png" id="mobileLogo" /></a></li>
{if ($currentJournal==null)}
			<li id="about"><a href="{url page="about"}">{translate key="navigation.aboutSite"}</a></li>
			{else}
			<li id="about"><a href="{url page="about"}">{translate key="navigation.about"}</a></li>
            {/if}
           <li><a href="/">{translate key="morePress.homepage"}</a></li>
	<li><a href="/books">{translate key="morePress.books"}</a></li>

        <!-- <li><a href="#">{translate key="common.help"}</a></li>
        <li><a href="#">{translate key="common.contact"}</a></li> -->

		{if $siteCategoriesEnabled}
<!--	<li id="categories"><a href="{url journal="index" page="search" op="categories"}">{translate key="navigation.categories"}</a></li>-->
		{/if}{* $categoriesEnabled *}

		{if !$currentJournal || $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}
<!--	<li id="search"><a href="{url page="search"}">{translate key="navigation.search"}</a></li>-->
		{/if}

		{if $currentJournal && $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}

			<li id="archives"><a href="{url page="issue" op="archive"}">{translate key="common.archive"}</a></li>
		{/if}

		{if $enableAnnouncements}
			<li id="announcements"><a href="{url page="announcement"}">{translate key="announcement.announcements"}</a></li>
		{/if}{* enableAnnouncements *}

		{call_hook name="Templates::Common::Header::Navbar::CurrentJournal"}

		{foreach from=$navMenuItems item=navItem key=navItemKey}
			{if $navItem.url != '' && $navItem.name != ''}
				<li class="navItem" id="navItem-{$navItemKey|escape}"><a href="{if $navItem.isAbsolute}{$navItem.url|escape}{else}{$baseUrl}{$navItem.url|escape}{/if}">{if $navItem.isLiteral}{$navItem.name|escape}{else}{translate key=$navItem.name}{/if}</a></li>
			{/if}
		{/foreach}

		{if $isUserLoggedIn}
			<li id="userHome"><a href="{url page="user"}">{translate key="navigation.userHome"}</a></li>
			<li><a href="{$baseUrl}/index.php/index/login/signOut">{translate key="common.logout"}</a></li>

		{else}
			<li id="login"><a href="{url page="login"}">{translate key="navigation.login"}</a></li>

			{if !$hideRegisterLink}
				<li id="register"><a href="{url page="user" op="register"}">{translate key="navigation.register"}</a></li>

			{/if}

		{/if}{* $isUserLoggedIn *}

        <li><a href="#" id="hr_HR" onclick="changeLanguageNav(this)"><img class="langSmall" src="{$baseUrl}/plugins/themes/morepress/img/flags/png/256/HR.png" /></a><a href="#" id="en_US" onclick="changeLanguageNav(this)"><img class="langSmall" onclick="changeLanguageNav(this)" src="{$baseUrl}/plugins/themes/morepress/img/flags/png/256/GB.png" /></a></li>

  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="expandNav()">☰</a>
  </li>
</ul>


<nav>

<div id="fullNav">
<div id="navbar" role="navigation" class="body">
	<ul class="navMenu menu">
        <div id="leftblock">

<li><a href="/">{translate key="morePress.homepage"}</a></li>
          <li><a href="/books">{translate key="morePress.books"}</a></li>

<!-- {if ($currentJournal==null)}
			<li id="about"><a href="{url page="about"}">{translate key="navigation.aboutSite"}</a></li>
			{else}
			<li id="about"><a href="{url page="about"}">{translate key="navigation.about"}</a></li>
            {/if}
     -->

        <!-- <li><a href="#">{translate key="common.help"}</a></li>
        <li><a href="#">{translate key="common.contact"}</a></li> -->

		{if $siteCategoriesEnabled}
<!--	<li id="categories"><a href="{url journal="index" page="search" op="categories"}">{translate key="navigation.categories"}</a></li>-->
		{/if}{* $categoriesEnabled *}

		{if !$currentJournal || $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}
<!--	<li id="search"><a href="{url page="search"}">{translate key="navigation.search"}</a></li>-->
		{/if}

		{if $currentJournal && $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}

			<li id="archives"><a href="{url page="issue" op="archive"}">{translate key="common.archive"}</a></li>
		{/if}

		{if $enableAnnouncements}
			<li id="announcements"><a href="{url page="announcement"}">{translate key="announcement.announcements"}</a></li>
		{/if}{* enableAnnouncements *}

		{call_hook name="Templates::Common::Header::Navbar::CurrentJournal"}

		{foreach from=$navMenuItems item=navItem key=navItemKey}
			{if $navItem.url != '' && $navItem.name != ''}
				<li class="navItem" id="navItem-{$navItemKey|escape}"><a href="{if $navItem.isAbsolute}{$navItem.url|escape}{else}{$baseUrl}{$navItem.url|escape}{/if}">{if $navItem.isLiteral}{$navItem.name|escape}{else}{translate key=$navItem.name}{/if}</a></li>
			{/if}
		{/foreach}

        </div>

        <div id="langChange">
        <li><a href="#" id="hr_HR" onclick="changeLanguageNav(this)"><img src="{$baseUrl}/plugins/themes/morepress/img/flags/png/256/HR.png" /></a></li>
        <li><a href="#" id="en_US" onclick="changeLanguageNav(this)"><img src="{$baseUrl}/plugins/themes/morepress/img/flags/png/256/GB.png" /></a></li>
        </div>

        <div id="rightblock">

               {if $isUserLoggedIn}
			<li id="userHome"><a href="{url page="user"}">{$loggedInUsername|escape}</a></li>
			<li><a href="{$baseUrl}/index.php/index/login/signOut">{translate key="common.logout"}</a></li>

		{else}
			<li id="login"><a href="{url page="login"}">{translate key="navigation.login"}</a></li>

			{if !$hideRegisterLink}
				<li id="register"><a href="{url page="user" op="register"}">{translate key="navigation.register"}</a></li>

			{/if}

		{/if}{* $isUserLoggedIn *}

        </div>


	</ul>
</div>


</div><!-- End Full Nav -->


<div id="infoNav">
<div id="infoCont">

<div id="Blanky"></div>

<div id="LogoUnizd">
<a href="http://www.unizd.hr/" id="logoNav"><img src="{$baseUrl}/plugins/themes/morepress/img/unizd-znak-bijeli_200p.png" /></a>
</div>

<div id="LogoMorepress">
<a href="/journals" id="logoNav"><img src="{$baseUrl}/plugins/themes/morepress/img/morepress_bijeli_veci.png" /></a>
</div>

<a href="/journals"><div id="MorepressInfo"><span id="logoSep"></span><p>{translate key="common.morepressJournals"}</p></div></a>
</div>
</div>

<div id="fullSearchNav">
    <div id="contSearchNav">
        <!-- <a href="{$baseUrl}" id="logoNav">
            <img src="{$baseUrl}/plugins/themes/morepress/img/morepress_bijeli_veci.png" />
        </a> -->
        {include file="common/search.tpl"}
        <div id="advancedSearchNav">
        <a href="{url page="search"}">{translate key="common.advancedSearch"}</a>
        </div>
    </div>
</div>




</div>
</nav>
