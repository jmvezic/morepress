{**
 * templates/frontend/components/headerHead.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site header <head> tag and contents.
 *}
<head>
	<meta http-equiv="Content-Type" content="text/html; charset={$defaultCharset|escape}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		{$pageTitleTranslated|strip_tags}
		{* Add the journal name to the end of page titles *}
		{if $requestedPage|escape|default:"index" != 'index' && $currentContext && $currentContext->getLocalizedName()}
			| {$currentContext->getLocalizedName()}
		{/if}
	</title>
	<link href="/books/plugins/themes/morepress/styles/additional.css" rel="stylesheet" type="text/css">
	<script src="/journals/plugins/themes/morepress/js/fontawesome.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Cardo|Crimson+Text|Fira+Sans|Lato|Libre+Baskerville|Lora|Noto+Sans|Open+Sans|PT+Sans|PT+Serif+Caption|Quicksand|Roboto|Roboto+Slab|Taviraj" rel="stylesheet">

	{load_header context="frontend"}
	{load_stylesheet context="frontend"}
</head>
