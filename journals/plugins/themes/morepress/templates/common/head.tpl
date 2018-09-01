{**
 * head.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2000-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site header.
 *}
<!-- Add View Port -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add Favicon -->

<link rel="icon" type="img/ico" href="{$baseUrl}/plugins/themes/morepress/img/favicon.ico?v=3" />

<!-- Add fonts style sheet -->

<script async src="{$baseUrl}/plugins/themes/morepress/js/fontawesome.js"></script>
<!-- <link rel="stylesheet" href="{$baseUrl}/plugins/themes/morepress/css/awesome.min.css" /> -->

<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Cardo|Crimson+Text|Fira+Sans|Lato|Libre+Baskerville|Lora|Noto+Sans|Open+Sans|PT+Sans|PT+Serif+Caption|Quicksand|Roboto|Roboto+Slab|Taviraj" rel="stylesheet">

<!-- Add theme style sheet -->
<link rel="stylesheet" href="{$baseUrl}/plugins/themes/morepress/css/screen.css?v=14" type="text/css" />
<link href="{$baseUrl}/plugins/themes/morepress/css/print.css" media="print" rel="stylesheet" type="text/css" />
<link href="{$baseUrl}/plugins/themes/morepress/css/style.css?v=3" rel="stylesheet" type="text/css" />


<script async type="text/javascript" src="{$baseUrl}/plugins/themes/morepress/js/anchor.js?v=2"></script>
<script async type="text/javascript" src="{$baseUrl}/plugins/themes/morepress/js/newlinesremove.js"></script>
<script>
$(document).ready(function(){ldelim}
$( ".sharelink" ).click(function() {ldelim}
  $(this).find( ".sharesuccess" ).toggleClass( "sharehighlight" );
  $(this).find( ".shareoriginal" ).toggleClass( "sharehidden" );
  var that = this;
  setTimeout(function() {ldelim}$(that).find( ".sharesuccess" ).toggleClass( "sharehighlight" );{rdelim}, 900)
  setTimeout(function() {ldelim}$(that).find( ".shareoriginal" ).toggleClass( "sharehidden" );{rdelim}, 1000)
{rdelim});
{rdelim});
</script>

<script async type="text/javascript" src="{$baseUrl}/plugins/themes/morepress/js/piwik.js"></script>

<meta property="og:image" content="/images/graph.jpg" />
