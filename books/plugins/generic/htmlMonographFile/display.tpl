{**
 * plugins/generic/htmlMonographFile/display.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Embedded viewing of a HTML galley.
 *}
<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset={$defaultCharset|escape}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{translate key="catalog.viewableFile.title" type=$publicationFormat->getLocalizedName()|escape title=$submissionFile->getLocalizedName()|escape}</title>

	{load_header context="frontend" headers=$headers}
	{load_stylesheet context="frontend" stylesheets=$stylesheets}
	{load_script context="frontend" scripts=$scripts}
</head>
<body class="pkp_page_{$requestedPage|escape} pkp_op_{$requestedOp|escape}">

	{* Header wrapper *}
	<header class="header_viewable_file">

		<a href="{url page="catalog" op="book" path=$monograph->getBestId()}" class="return">
			<span class="pkp_screen_reader">
				{translate key="monograph.return"}
			</span>
		</a>

		<a href="{url page="catalog" op="book" path=$monograph->getBestId()|to_array:$publicationFormat->getBestId():$downloadFile->getBestId()}" class="title">
			{$monograph->getLocalizedTitle()|escape}
		</a>
	</header>

	<div id="htmlContainer">
		<iframe name="htmlFrame" src="{url page="catalog" op="download" path=$monograph->getBestId()|to_array:$publicationFormat->getBestId():$downloadFile->getBestId() inline=true}" allowfullscreen webkitallowfullscreen></iframe>
	</div>
	{call_hook name="Templates::Common::Footer::PageFooter"}
</body>
</html>
