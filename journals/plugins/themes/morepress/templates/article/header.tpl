{**
 * templates/article/header.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Article View -- Header component.
 *}

{php}
$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
if(!isset($_GET["lang"])){
header('Location: '."$_SERVER[REQUEST_URI]?lang=$Locale");die();
}
else {
if($_GET["lang"]!=$Locale){
header('Location: '."http://"."$_SERVER[HTTP_HOST]/journals/index/user/setLocale/".$_GET["lang"]."?source=".strtok($_SERVER["REQUEST_URI"],'?'));
}
}
{/php}

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
<head>
	<title>{$article->getLocalizedTitle()|strip_tags|escape} | {$article->getFirstAuthor(true)|strip_tags|escape} | {$currentJournal->getLocalizedTitle()|strip_tags|escape}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={$defaultCharset|escape}" />
	<meta name="description" content="{$article->getLocalizedAbstract()|strip_tags|escape}" />
	<meta name="author" content="{$article->getAuthorString(false,', ')|strip_tags|escape}" />
	<meta name="keywords" content="{$article->getLocalizedSubject()|strip_tags|escape|replace:';':','}" />
  <meta name="og:title" content="{$article->getLocalizedTitle()|strip_tags|escape} | {$article->getFirstAuthor(true)|strip_tags|escape} | {$currentJournal->getLocalizedTitle()|strip_tags|escape}" />
	<meta property="og:image" content="/images/graph.jpg" />

	{if $article->getLocalizedSubject()}
		<meta name="keywords" content="{$article->getLocalizedSubject()|escape}" />
	{/if}

	{if $displayFavicon}<link rel="icon" href="{$faviconDir}/{$displayFavicon.uploadName|escape:"url"}" type="{$displayFavicon.mimeType|escape}" />{/if}

	{include file="article/dublincore.tpl"}
	{include file="article/googlescholar.tpl"}
	{call_hook name="Templates::Article::Header::Metadata"}

	<script type="text/javascript">{literal}
 function sendparams() {
 document.body.style.overflow = "hidden";
 }
</script>{/literal}

<script type="application/ld+json">
{ldelim}
  "@context": "http://schema.org/",
  "@graph": [
    {ldelim}
        "@id": "#issue",
        "@type": "PublicationIssue",

        {if $issue}{literal}"issueNumber": "{/literal}{$issue->getNumber()|escape}"{literal},{/literal}{/if}

        {if $issue}{if $issue->getDatePublished()}{literal}"datePublished": "{/literal}{$issue->getYear()}"{literal},{/literal}{/if}{/if}

        "isPartOf": {ldelim}
            "@id": "#periodical",
            "@type": [
                "PublicationVolume",
                "Periodical"
            ],
            "name": "{$journal->getLocalizedTitle()|escape}",
            {assign var=onlineIssn value=$journal->getSetting('onlineIssn')}
            {assign var=issn value=$journal->getSetting('printIssn')}"issn": [
                {if $issn}{literal}"{/literal}{$issn|escape}{literal}"{/literal}{/if}{if $issn && $onlineIssn},{/if}
                {if $onlineIssn}{literal}"{/literal}{$onlineIssn|escape}{literal}"{/literal}{/if}
            ],
            {if $issue}{literal}"volumeNumber": "{/literal}{$issue->getVolume()|escape}"{literal},{/literal}{/if}
            "publisher": {ldelim}
        "@type": "CollegeOrUniversity",
        "@id": "#unizd",
        "name": "{translate key="moreFooter.university"}",
        "foundingDate": "2002-07-04",
        "publishingPrinciples": "http://www.unizd.hr/Portals/41/Propisi%20i%20dokumenti/Pravilnik_izdavacka_djelatnost.pdf?ver=2013-06-05-110030-833",
        "brand": {ldelim}
          "@type": "Brand",
          "name": "Morepress",
          "url": "https://morepress.unizd.hr/"
        {rdelim},
        "url": "http://www.unizd.hr/"
          {rdelim}

    {rdelim}{rdelim},
  {ldelim}
    {if $article->getPubId('doi')}"@id": "https://doi.org/{$article->getPubId('doi')|escape}",{/if}
  "@type": "ScholarlyArticle",
  "isPartOf": {ldelim}
"@id": "#issue"
{rdelim},
  "articleSection": "{$article->getSectionTitle()|escape}",
    "name": "{$article->getLocalizedTitle()|strip_tags|escape}",
    "headline": "{$article->getLocalizedTitle()|strip_tags|escape}",
    {if $article->getLocalizedAbstract()|strip_tags:false|escape}"description": "{$article->getLocalizedAbstract()|strip_tags:false|strip|escape}",{/if}
    {if $article->getPubId('doi')}"sameAs": "https://doi.org/{$article->getPubId('doi')|escape}",{/if}
  "author": [{assign var="alllAuthors" value=$article->getAuthors()}{foreach name="authorsloop" from=$alllAuthors item=author}{ldelim}
	"@type": "Person",
  {if $author->getData('orcid')}"@id": "{$author->getData('orcid')|escape}",{/if}
	{if $author->getLastName()|escape}"familyName": "{$author->getLastName(true)|escape}",{/if}
	{if $author->getFirstName()|escape}"givenName": "{$author->getFirstName(true)|escape}",{/if}
	{if $author->getMiddleName()|escape}"additionalName": "{$author->getMiddleName(true)|escape}",{/if}
  {if $author->getLocalizedAffiliation()|escape}"affiliation": "{$author->getLocalizedAffiliation()|escape}",{/if}
	{if $author->getFullName()|escape}"name": "{$author->getFullName(false)|escape}"{/if}
          {rdelim}{if !$smarty.foreach.authorsloop.last}, {/if}{/foreach}
        ],
  {if $article->getPages()}{if $article->getStartingPage()}"pagination": "{$article->getStartingPage()}{if $article->getEndingPage()}-{$article->getEndingPage()}{/if}",{/if}{/if}
  "accessMode": "textual",
  "copyrightHolder": {ldelim}
"@id": "#unizd"
{rdelim},
  {if $issue}{if $issue->getDatePublished()}{literal}"copyrightYear": "{/literal}{$issue->getYear()}"{literal},{/literal}{/if}{/if}
  {if $issue->getDatePublished()}"datePublished": "{$issue->getDatePublished()|date_format:"%Y-%m-%d"}",{/if}
  "inLanguage": "{$currentLocale}",
  "isAccessibleForFree": true,
  "keywords": "{$article->getLocalizedSubject()|strip|escape}",
  "publisher": {ldelim}
"@id": "#unizd"
{rdelim}
{rdelim}]
{rdelim}
</script>

	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/pkp.css" type="text/css" />
<!-- 	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/styles/common.css" type="text/css" /> -->
	<link rel="stylesheet" href="{$baseUrl}/styles/compiled.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/plugins/themes/morepress/css/articleView.css?v=2" type="text/css" />
<!-- 	<link rel="stylesheet" href="{$baseUrl}/styles/articleView.css" type="text/css" /> -->
	{if $journalRt && $journalRt->getEnabled()}
		<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/rtEmbedded.css" type="text/css" />
	{/if}

	{call_hook|assign:"leftSidebarCode" name="Templates::Common::LeftSidebar"}
	{call_hook|assign:"rightSidebarCode" name="Templates::Common::RightSidebar"}
<!-- 	{if $leftSidebarCode || $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/sidebar.css" type="text/css" />{/if}
	{if $leftSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/leftSidebar.css" type="text/css" />{/if}
	{if $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/rightSidebar.css" type="text/css" />{/if}
	{if $leftSidebarCode && $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/bothSidebars.css" type="text/css" />{/if} -->

	<!-- Base Jquery -->
	{if $allowCDN}<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">{literal}
		// Provide a local fallback if the CDN cannot be reached
		if (typeof google == 'undefined') {
			document.write(unescape("%3Cscript src='{/literal}{$baseUrl}{literal}/lib/pkp/js/lib/jquery/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
			document.write(unescape("%3Cscript src='{/literal}{$baseUrl}{literal}/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js' type='text/javascript'%3E%3C/script%3E"));
		} else {
			google.load("jquery", "{/literal}{$smarty.const.CDN_JQUERY_VERSION}{literal}");
			google.load("jqueryui", "{/literal}{$smarty.const.CDN_JQUERY_UI_VERSION}{literal}");
		}
	{/literal}</script>
	{else}
	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js"></script>
	{/if}

<script type="text/javascript" src="{$baseUrl}/plugins/themes/morepress/js/paragraphlinks.js"></script>

	<!-- Compiled scripts -->
	{if $useMinifiedJavaScript}
		<script type="text/javascript" src="{$baseUrl}/js/pkp.min.js"></script>
	{else}
		{include file="common/minifiedScripts.tpl"}
	{/if}

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
<body id="pkp-{$pageTitle|replace:'.':'-'}" class="article">

<div id="container">
{include file="common/navbar.tpl"}
<!-- <div id="header">
<div id="headerTitle">
<figure>
{if $displayPageHeaderLogo && is_array($displayPageHeaderLogo)}
	<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" width="{$displayPageHeaderLogo.width|escape}" height="{$displayPageHeaderLogo.height|escape}" {if $displayPageHeaderLogoAltText != ''}alt="{$displayPageHeaderLogoAltText|escape}"{else}alt="{translate key="common.pageHeaderLogo.altText"}"{/if} />
</figure>
{/if}
<h1>

{if $displayPageHeaderTitle && is_array($displayPageHeaderTitle)}
	<figure>
		<img src="{$publicFilesDir}/{$displayPageHeaderTitle.uploadName|escape:"url"}" width="{$displayPageHeaderTitle.width|escape}" height="{$displayPageHeaderTitle.height|escape}" {if $displayPageHeaderTitleAltText != ''}alt="{$displayPageHeaderTitleAltText|escape}"{else}alt="{translate key="common.pageHeader.altText"}"{/if} />
	</figure>
{elseif $displayPageHeaderTitle}
	{$displayPageHeaderTitle}
{elseif $alternatePageHeader}
	{$alternatePageHeader}
{elseif $siteTitle}
	{$siteTitle}
{else}
	{$applicationName}
{/if}

</h1>
</div>
</div> -->

<div id="body">
{if $leftSidebarCode || $rightSidebarCode}
	<div id="sidebar">

			<div id="rightSidebar">
				{include file="article/morepressRightSidebar.tpl"}
				{if $leftSidebarCode}{$leftSidebarCode}{/if}
			</div>


			<div id="leftSidebar">
				{if $rightSidebarCode}{$rightSidebarCode}{/if}
			</div>

	</div>
{/if}
<div id="mainShrinked">


<h4 style="text-align:center;font-size:1.6em;margin-bottom:0.3em;"><a href="{url context=$homeContext page="index"}">{$currentJournal->getLocalizedSetting('title')}</a></h4>

<div id="breadcrumb">
{translate key="morePress.bread"}...
		{if ($currentJournal==null)}
	<a href="/">Morepress</a> &gt; <a href="/journals">{translate key="common.morepressJournals"}</a> &gt;
	{else}
	<a href="/">Morepress</a> &gt; <a href="/journals">{translate key="common.morepressJournals"}</a> &gt; <a href="{url context=$homeContext page="index"}">{$currentJournal->getLocalizedSetting('title')}</a> &gt;
	{/if}
	{if $issue}<a href="{url page="issue" op="view" path=$issue->getBestIssueId($currentJournal)}" target="_parent">{$issue->getIssueIdentification(false,true)|escape}</a> &gt;{/if}
	<a href="{url page="article" op="view" path=$articleId}" class="current" target="_parent">{$article->getLocalizedTitle()|substr:0:25|escape}...</a>
	{if $galley}&gt; <a href="{url page="article" op="view" path=$articleId|to_array:$galleyId}" class="current" target="_parent">{$galley->getGalleyLabel()|escape}</a>{/if}


</div>

<div id="content">
