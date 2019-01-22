{**
 * header.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2000-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site header.
 *}

 {php}
 if (!$PKPRequest->isBot){

 $ip = $_SERVER['REMOTE_ADDR']; // This will contain the ip of the request

 // You can use a more sophisticated method to retrieve the content of a webpage with php using a library or something
 // We will retrieve quickly with the file_get_contents
 if (!isset($_COOKIE["ip"])){
 	setcookie("ip", $ip);
 	if (!isset($_COOKIE["country"])){
 		$country = "US";
 	}
 }

 // outputs something like (obviously with the data of your IP) :

 // geoplugin_countryCode => "DE",
 // geoplugin_countryName => "Germany"
 // geoplugin_continentCode => "EU"

 $AppLocale = new AppLocale();
 $Locale = $AppLocale->getLocale();

 if (!isset($_COOKIE["country"])) {
 setcookie("country",$country,time()+31556926 ,'/');// where 31556926 is total seconds for a year.
 if ($country=="HR"){header('Location: '."http://"."$_SERVER[HTTP_HOST]/journals/index/user/setLocale/en_US?source=$_SERVER[REQUEST_URI]");die();}
 else {header('Location: '."http://"."$_SERVER[HTTP_HOST]/journals/index/user/setLocale/en_US?source=$_SERVER[REQUEST_URI]");die();}
 }
 else {
 if (($_COOKIE["country"]=="HR" && $Locale=="hr_HR") || ($_COOKIE["country"]!="HR" && $Locale!="hr_HR")) {} else {
 if ($_COOKIE["country"]=="HR") {header('Location: '."http://"."$_SERVER[HTTP_HOST]/journals/index/user/setLocale/hr_HR?source=$_SERVER[REQUEST_URI]");die();}
 if ($_COOKIE["country"]!="HR") {header('Location: '."http://"."$_SERVER[HTTP_HOST]/journals/index/user/setLocale/en_US?source=$_SERVER[REQUEST_URI]");die();}
 }
 }


 }
 {/php}


{strip}
{if !$pageTitleTranslated}{translate|assign:"pageTitleTranslated" key=$pageTitle}{/if}
{if $pageCrumbTitle}
	{translate|assign:"pageCrumbTitleTranslated" key=$pageCrumbTitle}
{elseif !$pageCrumbTitleTranslated}
	{assign var="pageCrumbTitleTranslated" value=$pageTitleTranslated}
{/if}
{/strip}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset={$defaultCharset|escape}" />
	<title>{$pageTitleTranslated}</title>
	<meta name="description" content="{$metaSearchDescription|escape}" />
	<meta name="keywords" content="{$metaSearchKeywords|escape}" />
	{$metaCustomHeaders}
	{if $displayFavicon}<link rel="icon" href="{$faviconDir}/{$displayFavicon.uploadName|escape:"url"}" type="{$displayFavicon.mimeType|escape}" />{/if}
	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/pkp.css" type="text/css" />
	<!-- <link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/styles/common.css" type="text/css" />-->
	<link rel="stylesheet" href="{$baseUrl}/styles/compiled.css" type="text/css" />


{if ($currentJournal==null)}
{literal}
<script async type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "https://morepress.unizd.hr/journals",
  "name": "Morepress - University of Zadar | Journals",
  "description": "Open Access academic journals published by University of Zadar",
  "publisher": "University of Zadar",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://morepress.unizd.hr/journals/index/search/search?query={search_term}",
    "query-input": "required name=search_term" }
}
{/literal}
</script>
{/if}


	<!-- Base Jquery -->
	{if $allowCDN}<script async type="text/javascript" src="//www.google.com/jsapi"></script>
		<script type="text/javascript">{literal}
			<!--
			// Provide a local fallback if the CDN cannot be reached
			if (typeof google == 'undefined') {
				document.write(unescape("%3Cscript src='{/literal}{$baseUrl}{literal}/lib/pkp/js/lib/jquery/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
				document.write(unescape("%3Cscript src='{/literal}{$baseUrl}{literal}/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js' type='text/javascript'%3E%3C/script%3E"));
			} else {
				google.load("jquery", "{/literal}{$smarty.const.CDN_JQUERY_VERSION}{literal}");
				google.load("jqueryui", "{/literal}{$smarty.const.CDN_JQUERY_UI_VERSION}{literal}");
			}
			// -->
		{/literal}</script>
	{else}
		<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js"></script>
	{/if}

	{call_hook|assign:"leftSidebarCode" name="Templates::Common::LeftSidebar"}
	{call_hook|assign:"rightSidebarCode" name="Templates::Common::RightSidebar"}
	<!-- {if $leftSidebarCode || $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/sidebar.css" type="text/css" />{/if}
	{if $leftSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/leftSidebar.css" type="text/css" />{/if}
	{if $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/rightSidebar.css" type="text/css" />{/if}
	{if $leftSidebarCode && $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/bothSidebars.css" type="text/css" /> {/if}-->

	<!-- Default global locale keys for JavaScript -->
	{include file="common/jsLocaleKeys.tpl" }

	<!-- Compiled scripts -->
	{if $useMinifiedJavaScript}
		<script type="text/javascript" src="{$baseUrl}/js/pkp.min.js"></script>
	{else}
		{include file="common/minifiedScripts.tpl"}
	{/if}

	<!-- Form validation -->
	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/plugins/validate/jquery.validate.js"></script>
	<script type="text/javascript">
		<!--
		// initialise plugins
		{literal}
		$(function(){
			jqueryValidatorI18n("{/literal}{$baseUrl}{literal}", "{/literal}{$currentLocale}{literal}"); // include the appropriate validation localization
			{/literal}{if $validateId}{literal}
				$("form[name={/literal}{$validateId}{literal}]").validate({
					errorClass: "error",
					highlight: function(element, errorClass) {
						$(element).parent().parent().addClass(errorClass);
					},
					unhighlight: function(element, errorClass) {
						$(element).parent().parent().removeClass(errorClass);
					}
				});
			{/literal}{/if}{literal}
			$(".tagit").live('click', function() {
				$(this).find('input').focus();
			});
		});
		// -->
		{/literal}
	</script>

	{if $hasSystemNotifications}
		{url|assign:fetchNotificationUrl page='notification' op='fetchNotification' escape=false}
		<script type="text/javascript">
			$(function(){ldelim}
				$.get('{$fetchNotificationUrl}', null,
					function(data){ldelim}
						var notifications = data.content;
						var i, l;
						if (notifications && notifications.general) {ldelim}
							$.each(notifications.general, function(notificationLevel, notificationList) {ldelim}
								$.each(notificationList, function(notificationId, notification) {ldelim}
									$.pnotify(notification);
								{rdelim});
							{rdelim});
						{rdelim}
				{rdelim}, 'json');
			{rdelim});
		</script>
	{/if}{* hasSystemNotifications *}

	{foreach from=$stylesheets name="testUrl" item=cssUrl}
		{if $cssUrl == "$baseUrl/styles/ojs.css"}
			<link rel="stylesheet" href="{$cssUrl}" type="text/css" />
		{/if}
	{/foreach}

	{include file="common/head.tpl"}

	{foreach from=$stylesheets name="testUrl" item=cssUrl}
		{if $cssUrl != "$baseUrl/styles/ojs.css"}
			<link rel="stylesheet" href="{$cssUrl}" type="text/css" />
		{/if}
	{/foreach}

	{$additionalHeadData}

</head>
<body id="pkp-{$pageTitle|replace:'.':'-'}">
<a id="skip-to-content" href="#main">Skip to Main Content</a>
{include file="common/navbar.tpl"}

<div id="container">
<!--
<div id="header" role="banner">

<div id="body">
    <div id="header_logo">
        <img style="width:50%;" src="{$baseUrl}/plugins/themes/morepress/img/logo_ideje_5_horizontalni.png" alt="morepress" />
    </div>
<div id="sidebar">
			<div id="leftSidebar" class="slide" role="complementary">
			</div>


	</div>
<div id="main" role="main" tabindex="-1">
	<div id="headerTitle">
	<img style="width: 100%; " src="{$baseUrl}/plugins/themes/morepress/img/morepress-text.svg" alt="morepress"/>
</div>
</div>
</div>
</div>
-->

<div id="body">

{if $leftSidebarCode || $rightSidebarCode}
	<div id="sidebar">
		{if $leftSidebarCode}
			<div id="rightSidebar" class="slide" role="complementary">
				{$leftSidebarCode}
			</div>
		{/if}
		{if $rightSidebarCode}
			<div id="leftSidebar" class="slide" role="complementary">
				{if ($currentJournal==null)}
						{if $isUserLoggedIn}{include file="common/userSidebar.tpl"}{/if}
						{include file="common/OASidebar.tpl"}
						{include file="common/moreHomeSidebar.tpl"}
						{include file="common/morePressRecentArticles.tpl"}
					{else}
						{include file="common/submit.tpl"}
						{include file="common/morePressRecentArticles.tpl"}
						{$rightSidebarCode}
				{/if}

			</div>
		{/if}
	</div>
{/if}
{if $rightSidebarCode && !$leftSidebarCode}
<div id="rightClearance"></div>
{/if}


{if $leftSidebarCode && $rightSidebarCode}
<div id="mainShrinked">
{else}
<div id="main" role="main" tabindex="-1">
{/if}


{include file="common/breadcrumbs.tpl"}



{if $pageSubtitle && !$pageSubtitleTranslated}{translate|assign:"pageSubtitleTranslated" key=$pageSubtitle}{/if}
{if $pageSubtitleTranslated}
	<h3>{$pageSubtitleTranslated}</h3>
{/if}

<div id="content" >
