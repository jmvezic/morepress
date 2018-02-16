{**
 * lib/pkp/templates/frontend/components/header.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common frontend site header.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}
 
{php}
$ip = $_SERVER['REMOTE_ADDR']; // This will contain the ip of the request

// You can use a more sophisticated method to retrieve the content of a webpage with php using a library or something
// We will retrieve quickly with the file_get_contents
$dataArray = json_decode(file_get_contents("http://freegeoip.net/json/".$ip), true);

// outputs something like (obviously with the data of your IP) :

// geoplugin_countryCode => "DE",
// geoplugin_countryName => "Germany"
// geoplugin_continentCode => "EU"

$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();

if (!isset($_COOKIE["country"])) {
setcookie("country",$dataArray["country_code"],time()+31556926 ,'/');// where 31556926 is total seconds for a year.
if ($dataArray["country_code"]=="HR"){header('Location: '."http://"."$_SERVER[HTTP_HOST]/books/press/user/setLocale/hr_HR?source=$_SERVER[REQUEST_URI]");die();}
else {header('Location: '."http://"."$_SERVER[HTTP_HOST]/books/press/user/setLocale/en_US?source=$_SERVER[REQUEST_URI]");die();}
}
else {
if (($_COOKIE["country"]=="HR" && $Locale=="hr_HR") || ($_COOKIE["country"]!="HR" && $Locale!="hr_HR")) {} else {
if ($_COOKIE["country"]=="HR") {header('Location: '."http://"."$_SERVER[HTTP_HOST]/books/press/user/setLocale/hr_HR?source=$_SERVER[REQUEST_URI]");die();}
if ($_COOKIE["country"]!="HR") {header('Location: '."http://"."$_SERVER[HTTP_HOST]/books/press/user/setLocale/en_US?source=$_SERVER[REQUEST_URI]");die();}
}
}

{/php}    
 
{strip}
	{* Determine whether a logo or title string is being displayed *}
	{assign var="showingLogo" value=true}
	{if $displayPageHeaderTitle && !$displayPageHeaderLogo && is_string($displayPageHeaderTitle)}
		{assign var="showingLogo" value=false}
	{/if}
{/strip}

<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{if !$pageTitleTranslated}{translate|assign:"pageTitleTranslated" key=$pageTitle}{/if}
{include file="frontend/components/headerHead.tpl"}
<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}{if $showingLogo} has_site_logo{/if}" dir="{$currentLocaleLangDir|escape|default:"ltr"}">

	<div class="cmp_skip_to_content">
		<a href="#pkp_content_main">{translate key="navigation.skip.main"}</a>
		<a href="#pkp_content_nav">{translate key="navigation.skip.nav"}</a>
		<a href="#pkp_content_footer">{translate key="navigation.skip.footer"}</a>
	</div>
	<div class="pkp_structure_page">

		{* Header *}
		<header class="pkp_structure_head" id="headerNavigationContainer" role="banner">
			<div class="pkp_head_wrapper">

				<div class="pkp_site_name_wrapper">
					{* Logo or site title. Only use <h1> heading on the homepage.
					   Otherwise that should go to the page title. *}
					{if $requestedOp == 'index'}
						<h1 class="pkp_site_name">
					{else}
						<div class="pkp_site_name">
					{/if}
						{if $currentContext && $multipleContexts}
							{url|assign:"homeUrl" journal="index" router=$smarty.const.ROUTE_PAGE}
						{else}
							{url|assign:"homeUrl" page="index" router=$smarty.const.ROUTE_PAGE}
						{/if}
											<a href="{$homeUrl}" id="moreHeader"><img src="/books/plugins/themes/morepress/img/morepress_bijeli_veci.png" /></a>
											<span id="logoSep"></span>
											<a href="{$homeUrl}" id="moreBooksNav"><span id="booksText">{translate key="moreFooter.books"}</span></a>
						
					{if $requestedOp == 'index'}
						</h1>
					{else}
						</div>
					{/if}
				</div>

				{* Primary site navigation *}
				{if $currentContext}
					<nav id="pkp_content_nav" class="pkp_navigation_primary_row navDropdownMenu" aria-label="{translate|escape key="common.navigation.site"}">
						<div class="pkp_navigation_primary_wrapper">

							{* Primary navigation menu for current application *}
							{include file="frontend/components/primaryNavMenu.tpl"}

							{* Search form *}
							{include file="frontend/components/searchForm_simple.tpl"}
						</div>
					</nav>
				{/if}

				<nav class="pkp_navigation_user_wrapper navDropdownMenu" id="navigationUserWrapper" aria-label="{translate|escape key="common.navigation.user"}">
					<ul id="navigationUser" class="pkp_navigation_user pkp_nav_list">
						<li style="float:left;"><a href="/">{translate key="moreFooter.homepage"}</a></li>
						<li style="float:left;"><a href="/journals">{translate key="moreFooter.journals"}</a></li>
						{if $isUserLoggedIn}
							<li class="profile {if $unreadNotificationCount} has_tasks{/if}" aria-haspopup="true" aria-expanded="false">
								<a href="{url router=$smarty.const.ROUTE_PAGE page="submissions"}">
									{$loggedInUsername|escape}
									<span class="task_count">
										{$unreadNotificationCount}
									</span>
								</a>
								<ul>
									{if array_intersect(array(ROLE_ID_MANAGER, ROLE_ID_ASSISTANT, ROLE_ID_REVIEWER, ROLE_ID_AUTHOR), (array)$userRoles)}
										<li>
											<a href="{url router=$smarty.const.ROUTE_PAGE page="submissions"}">
												{translate key="navigation.dashboard"}
												<span class="task_count">
													{$unreadNotificationCount}
												</span>
											</a>
										</li>
									{/if}
									<li>
										<a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="profile"}">
											{translate key="common.viewProfile"}
										</a>
									</li>
									{if array_intersect(array(ROLE_ID_SITE_ADMIN), (array)$userRoles)}
									<li>
										<a href="{if $multipleContexts}{url router=$smarty.const.ROUTE_PAGE context="index" page="admin" op="index"}{else}{url router=$smarty.const.ROUTE_PAGE page="admin" op="index"}{/if}">
											{translate key="navigation.admin"}
										</a>
									</li>
									{/if}
									<li>
										<a href="{url router=$smarty.const.ROUTE_PAGE page="login" op="signOut"}">
											{translate key="user.logOut"}
										</a>
									</li>
									{if $isUserLoggedInAs}
										<li>
											<a href="{url router=$smarty.const.ROUTE_PAGE page="login" op="signOutAsUser"}">
												{translate key="user.logOutAs"} {$loggedInUsername|escape}
											</a>
										</li>
									{/if}
								</ul>
							</li>
						{else}
							{if !$disableUserReg}
								<li><a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="register"}">{translate key="navigation.register"}</a></li>
							{/if}
							<li><a href="{url router=$smarty.const.ROUTE_PAGE page="login"}">{translate key="navigation.login"}</a></li>
						{/if}
					</ul>
				</nav><!-- .pkp_navigation_user_wrapper -->

			</div><!-- .pkp_head_wrapper -->
		</header><!-- .pkp_structure_head -->

		{* Wrapper for page content and sidebars *}
		{if $isFullWidth}
			{assign var=hasSidebar value=0}
		{/if}
		<div class="pkp_structure_content{if $hasSidebar} has_sidebar{/if}">
			<div id="pkp_content_main" class="pkp_structure_main" role="main">
