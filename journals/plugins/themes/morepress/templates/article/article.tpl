{**
 * templates/article/article.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Article View.
 *}
{strip}
{if $galley}
	{assign var=pubObject value=$galley}
{else}
	{assign var=pubObject value=$article}
{/if}
{/strip}
{if $smarty.get.export == "bibtex"}
{literal}
@article{{/literal}{$journal->getLocalizedInitials()|escape}{$articleId|escape}{literal},
	author = {{/literal}{assign var=authors value=$article->getAuthors()}{foreach from=$authors item=author name=authors key=i}{assign var=firstName value=$author->getFirstName()}{assign var=authorCount value=$authors|@count}{$firstName|escape} {$author->getLastName()|escape}{if $i<$authorCount-1} {translate key="common.and"} {/if}{/foreach}{literal}},
	title = {{/literal}{$article->getLocalizedTitle()|strip_tags|escape}{literal}},
	journal = {{/literal}{$journal->getLocalizedTitle()|escape}{literal}},
{/literal}{if $issue}{literal}	volume = {{/literal}{$issue->getVolume()|escape}{literal}},
	number = {{/literal}{$issue->getNumber()|escape}{literal}},{/literal}{/if}{literal}
	year = {{/literal}{if $issue->getDatePublished()}{$issue->getYear()}{/if}{literal}},
	keywords = {{/literal}{$article->getLocalizedSubject()|escape}{literal}},
	abstract = {{/literal}{$article->getLocalizedAbstract()|strip_tags:false|escape}{literal}},
{/literal}{assign var=onlineIssn value=$journal->getSetting('onlineIssn')}
{assign var=issn value=$journal->getSetting('issn')}{if $issn}{literal}	issn = {{/literal}{$issn|escape}{literal}},{/literal}
{elseif $onlineIssn}{literal}	issn = {{/literal}{$onlineIssn|escape}{literal}},{/literal}{/if}
{if $article->getPages()}{if $article->getStartingPage()}	pages = {literal}{{/literal}{$article->getStartingPage()}{if $article->getEndingPage()}--{$article->getEndingPage()}{/if}{literal}}{/literal},{/if}{/if}
{if $article->getPubId('doi')}	doi = {ldelim}{$article->getPubId('doi')|escape}{rdelim},
{/if}
	url = {ldelim}{url|escape page="article" op="view" path=$article->getBestArticleId()}{rdelim}
{rdelim}
{/literal}
{if $smarty.get.download == "yes"}
{php}
header('Content-Disposition: attachment; filename=bibtex_'.$_GET["articleid"].'.bib');
header("Content-Type: application/x-bibtex; ");
exit();
{/php}
{else}
{php}
exit();
{/php}
{/if}
{elseif $smarty.get.export == "endnote"}
{**
 * plugins/citationFormats/endNote/citation.tpl
 *
 * Copyright (c) 2013-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * EndNote citation format generator
 *
 *}
{if $galleyId}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId|to_array:$galleyId}
{else}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId}
{/if}
{foreach from=$article->getAuthors() item=author}
%A {$author->getFullName(true)|escape}
{/foreach}
{if $issue->getDatePublished()}
%D {$issue->getYear()}
{/if}
%T {$article->getLocalizedTitle()|strip_tags}
%B {$article->getDatePublished()|date_format:"%Y"}
%9 {$article->getLocalizedSubject()|escape}
%! {$article->getLocalizedTitle()|strip_tags}
%K {$article->getLocalizedSubject()|escape}
%X {$article->getLocalizedAbstract()|strip_tags|replace:"\n":" "|replace:"\r":" "}
%U {$articleUrl}
%0 Journal Article
{if $article->getPubId('doi')}%R {$article->getPubId('doi')|escape}
{/if}
{if $article->getPages()}
{if $article->getStartingPage()}%& {$article->getStartingPage()|escape}{/if}
{if $article->getEndingPage()}
{math equation="end - start + 1" end=$article->getEndingPage() start=$article->getStartingPage() assign=pages}
%P {$pages}
{else}
%P 1
{/if}
{/if}
%J {$currentJournal->getLocalizedTitle()|escape}
{if $issue->getShowVolume()}%V {$issue->getVolume()|escape}
{/if}
{if $issue->getShowNumber()}%N {$issue->getNumber()|escape}
{/if}
{if $currentJournal->getSetting('onlineIssn')}%@ {$currentJournal->getSetting('onlineIssn')|escape}
{elseif $currentJournal->getSetting('printIssn')}%@ {$currentJournal->getSetting('printIssn')|escape}
{/if}
{if $article->getDatePublished()}
%8 {$article->getDatePublished()|date_format:"%Y-%m-%d"}
{/if}
{if $issue->getDatePublished()}
%7 {$issue->getDatePublished()|date_format:"%Y-%m-%d"}
{/if}
{php}
header('Content-Disposition: attachment; filename=endnote_'.$_GET["articleid"].'.enw');
header("Content-Type: application/x-endnote-refer; ");
exit();
{/php}
{elseif $smarty.get.export == "ris"}
{if $galleyId}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId|to_array:$galleyId}
{else}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId}
{/if}
TY  - JOUR
{foreach from=$article->getAuthors() item=author}
AU  - {$author->getFullName(true)|escape}
{/foreach}
{if $issue->getDatePublished()}
PY  - {$issue->getYear()}
{/if}
TI  - {$article->getLocalizedTitle()|strip_tags}
JF  - {$journal->getLocalizedTitle()}{if $issue}; {$issue->getIssueIdentification()|strip_tags}{/if}

{if $article->getPubId('doi')}DO  - {$article->getPubId('doi')|escape}
{/if}
KW  - {$article->getLocalizedSubject()|escape}
N2  - {$article->getLocalizedAbstract()|strip_tags|replace:"\n":" "|replace:"\r":" "}
UR  - {$articleUrl}
{php}
header('Content-Disposition: attachment; filename=ris_'.$_GET["articleid"].'.ris');
header("Content-Type: application/x-research-info-systems; ");
exit();
{/php}
{/if}


{if $galley}
	{if $galley->isHTMLGalley()}
	{include file="article/header.tpl"}
		{$galley->getHTMLContents()}

	{elseif $galley->isPdfGalley()}
	{include file="article/pdfHeader.tpl"}
		{include file="article/pdfViewer.tpl"}
	{/if}
{else}
{include file="article/header.tpl"}
	<div id="topBar">
		{if is_a($article, 'PublishedArticle')}{assign var=galleys value=$article->getGalleys()}{/if}
		{if $galleys && $subscriptionRequired && $showGalleyLinks}
			<div id="accessKey">
				<img src="{$baseUrl}/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="{translate key="article.accessLogoOpen.altText"}" />
				{translate key="reader.openAccess"}&nbsp;
				<img src="{$baseUrl}/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="{translate key="article.accessLogoRestricted.altText"}" />
				{if $purchaseArticleEnabled}
					{translate key="reader.subscriptionOrFeeAccess"}
				{else}
					{translate key="reader.subscriptionAccess"}
				{/if}
			</div>
		{/if}
	</div>
	{if $coverPagePath}
		<div id="articleCoverImage"><img src="{$coverPagePath|escape}{$coverPageFileName|escape}"{if $coverPageAltText != ''} alt="{$coverPageAltText|escape}"{else} alt="{translate key="article.coverPage.altText"}"{/if}{if $width} width="{$width|escape}"{/if}{if $height} height="{$height|escape}"{/if}/>
		</div>
	{/if}
	{call_hook name="Templates::Article::Article::ArticleCoverImage"}
	<div id="articleTitle" class="block">
	<h3>{$article->getLocalizedTitle()|strip_unsafe_html}</h3>
	<div id="authorString">
  {assign var="allAuthors" value=$article->getAuthors()}
  {foreach name=authloop from=$allAuthors item=author}
    <a href="{$baseUrl}/index/search?authors=%2B{$author->getFirstName()|escape}{if $author->getMiddleName()|escape} %2B{$author->getMiddleName()|escape}{/if} %2B{$author->getLastName()|escape}">{$author->getFullName()|escape}</a>{if $author->getData('orcid')} <a href="{$author->getData('orcid')|escape}" target="_blank" class="orcid"><img src="{$baseUrl}/plugins/blocks/authorBios/orcid.png" alt="orcid" /></a>{/if}{if !$smarty.foreach.authloop.last}, {/if}
{/foreach}
	</div>
  </div>

  <div id="tocLinksContainer">
    <span id="tocItemFullTextLink" class="disabledLink" href="#" title="{translate key="morePress.openAccessDesc"}"><i class="fa fa-unlock-alt"></i> {translate key="morePress.openAccess"}</span>
</div>
{if $currentJournal->getJournalId() > 11}
<div id="tocLinksContainer">
  <span id="tocItemFullTextLink" class="disabledLink tocItemWarning" href="#" title="{translate key="morePress.ocrDesc"}"><i class="fa fa-warning"></i> OCR</span>
</div>
{/if}

{if (!$subscriptionRequired || $article->getAccessStatus() == $smarty.const.ARTICLE_ACCESS_OPEN || $subscribedUser || $subscribedDomain)}
  {assign var=hasAccess value=1}
{else}
  {assign var=hasAccess value=0}
{/if}

{assign var=Galleys value=$article->getGalleys()}
{if $Galleys}{foreach from=$Galleys item=Galley}
<div id="tocLinksContainer">
{if $Galley->getLocale() == $currentLocale}
{if $Galley->isHTMLGalley()}
<a href="{url path=$article->getBestArticleId($currentJournal)|to_array:$Galley->getBestGalleyId($currentJournal)}" id="tocItemFullTextLink" {if $Galley->getRemoteURL()}target="_blank"{else}target="_parent"{/if}><i class="fa fa-eye" aria-hidden="true"></i> {translate key="morePress.read"} (HTML)</a>
{elseif $Galley->isPdfGalley()}
  <a href="{url path=$article->getBestArticleId($currentJournal)|to_array:$Galley->getBestGalleyId($currentJournal)}" id="tocItemFullTextLink" {if $Galley->getRemoteURL()}target="_blank"{else}target="_parent"{/if}><i class="fa fa-eye" aria-hidden="true"></i> {translate key="morePress.read"} (PDF)</a>
{else}
<a href="{url path=$article->getBestArticleId($currentJournal)|to_array:$Galley->getBestGalleyId($currentJournal)}" id="tocItemFullTextLink" {if $Galley->getRemoteURL()}target="_blank"{else}target="_parent"{/if}><i class="fa fa-eye" aria-hidden="true"></i> {translate key="morePress.read"}</a>
{/if}
{/if}
{if $Galley->isPdfGalley()}
{if $Galley->getLocale() == $currentLocale}
  <a href="{url op="download" path=$article->getBestArticleId($currentJournal)|to_array:$Galley->getBestGalleyId($currentJournal)}" id="tocItemFullTextLink" {if $Galley->getRemoteURL()}target="_blank"{else}target="_parent"{/if}><i class="fa fa-download" aria-hidden="true"></i> {translate key="morePress.download"} ({$Galley->getGalleyLabel()|escape})</a>
{/if}

{/if}
</div>
{/foreach}
{/if}

	{if $article->getLocalizedAbstract()}
		<div id="articleAbstract" class="block">
		<h4>{translate key="article.abstract"}</h4>
		<div>{$article->getLocalizedAbstract()|strip_unsafe_html|nl2br}</div>
		</div>
	{/if}

  	<div id="mobileRightSidebar">{include file="article/morepressRightSidebar.tpl"}</div>

	<!-- {if $article->getLocalizedSubject()}
		<div id="articleSubject" class="block">
		<h4>{translate key="article.subject"}</h4>
		<div>{$article->getLocalizedSubject()|escape}</div>
		</div>
	{/if} -->


	<!-- {if $Galleys}
	<span class="blockSubtitle">{translate key="reader.fullText"}</span>
	<div id="tocLinksContainer">
	{foreach from=$Galleys item=Galley}
<a href="{url path=$article->getBestArticleId($currentJournal)|to_array:$Galley->getBestGalleyId($currentJournal)}" id="tocItemFullTextLink" {if $Galley->getRemoteURL()}target="_blank"{else}target="_parent"{/if}><i class="fa fa-eye" aria-hidden="true"></i> {$Galley->getGalleyLabel()|escape}</a>

	{if $Galley->isPdfGalley()}
	<a href="{url op="download" path=$article->getBestArticleId($currentJournal)|to_array:$Galley->getBestGalleyId($currentJournal)}" id="tocItemFullTextLink" {if $Galley->getRemoteURL()}target="_blank"{else}target="_parent"{/if}><i class="fa fa-download" aria-hidden="true"></i> {$Galley->getGalleyLabel()|escape}</a>
  {/if}

	{/foreach}
	</div>
	{/if} -->


{assign var=Supplementaries value=$article->getSuppFiles()}
{if $Supplementaries}
  <span class="blockSubtitle">{translate key="article.suppFile"}</span>
  <div id="tocLinksContainer">
  {foreach from=$Supplementaries item=Suppl}
    <a href="{url op="downloadSuppFile" path=$articleId|to_array:$Suppl->getSuppFileId()}" title="{$Suppl->getDescription($currentLocale)}" id="tocItemFullTextLink" {if $Suppl->getRemoteURL()}target="_blank"{else}target="_parent"{/if} download><i class="fa fa-download" aria-hidden="true"></i> {$Suppl->getTitle($currentLocale)|escape}</a>
  {/foreach}
</div>
{/if}

  <span class="blockSubtitle">{translate key="morePress.share"}</span>
  <div id="tocLinksContainer">
    <a href="http://www.facebook.com/sharer.php?u=https://doi.org/10.15291/{$currentJournal->getLocalizedInitials()|lower}.{$article->getId()}" id="tocItemFullTextLink" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a>
    <a href="http://twitter.com/share?url=https://doi.org/10.15291/{$currentJournal->getLocalizedInitials()|lower}.{$article->getId()}&text={$article->getLocalizedTitle()}&via=UNIZDmorepress" id="tocItemFullTextLink" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a>
    <a href="https://www.reddit.com/submit?url=https://doi.org/10.15291/{$currentJournal->getLocalizedInitials()|lower}.{$article->getId()}&title={$article->getLocalizedTitle()}" id="tocItemFullTextLink" target="_blank"><i class="fa fa-reddit-square"></i> Reddit</a>
    <a href="https://plus.google.com/share?url=https://doi.org/10.15291/{$currentJournal->getLocalizedInitials()|lower}.{$article->getId()}" id="tocItemFullTextLink" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Google+</a>
    <a href="http://www.linkedin.com/shareArticle?mini=true&url=https://doi.org/10.15291/{$currentJournal->getLocalizedInitials()|lower}.{$article->getId()}&title={$article->getLocalizedTitle()}&summary=blabla&source=morepress.unizd.hr" id="tocItemFullTextLink" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</a>
  </div>
  <div id="tocLinksContainer">
    <a href="http://www.mendeley.com/import/?doi=10.15291/{$currentJournal->getLocalizedInitials()|lower}.{$article->getId()}" id="tocItemFullTextLink" target="_blank"><i class="fa fa-share-alt-square" aria-hidden="true"></i> Mendeley</a>
    <a href="http://www.citeulike.org/posturl?url=https://doi.org/10.15291/{$currentJournal->getLocalizedInitials()|lower}.{$article->getId()}" id="tocItemFullTextLink" target="_blank"><i class="fa fa-share-alt-square" aria-hidden="true"></i> CiteUlike</a>
    <a href="mailto:?subject={$article->getLocalizedTitle()} - Morepress &body=https://doi.org/10.15291/{$currentJournal->getLocalizedInitials()|lower}.{$article->getId()}" id="tocItemFullTextLink" target="_blank"><i class="fa fa-envelope-square" aria-hidden="true"></i> E-mail</a>
  </div>

  <span class="blockSubtitle">{translate key="morePress.exportCit"}</span>
  <div id="tocLinksContainer">
  <a href="{$article->getId()}?lang={$currentLocale}&export=bibtex&download=no&articleid={$article->getId()}" id="tocItemFullTextLink" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> BibTeX</a>
  <a href="{$article->getId()}?lang={$currentLocale}&export=bibtex&download=yes&articleid={$article->getId()}" id="tocItemFullTextLink" download><i class="fa fa-download" aria-hidden="true"></i> BibTeX</a>
  <a href="{$article->getId()}?lang={$currentLocale}&export=ris&articleid={$article->getId()}" id="tocItemFullTextLink" download><i class="fa fa-download" aria-hidden="true"></i> RIS</a>
  <a href="{$article->getId()}?lang={$currentLocale}&export=endnote&articleid={$article->getId()}" id="tocItemFullTextLink" download><i class="fa fa-download" aria-hidden="true"></i> EndNote</a>
  </div>

	{if $citationFactory->getCount()}
		<div id="articleCitations" class="block">
		<h4>{translate key="submission.citations"}</h4>
		<div>
			{iterate from=citationFactory item=citation}
				<p>{$citation->getRawCitation()|strip_unsafe_html}</p>
			{/iterate}
		</div>
		</div>
	{/if}
{/if}
<div class="block shareparent">
{foreach from=$pubIdPlugins item=pubIdPlugin}
	{if $issue->getPublished()}
		{assign var=pubId value=$pubIdPlugin->getPubId($pubObject)}
	{else}
		{assign var=pubId value=$pubIdPlugin->getPubId($pubObject, true)}{* Preview rather than assign a pubId *}
	{/if}
	{if $pubId}
		{$pubIdPlugin->getPubIdDisplayType()|escape}: {if $pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}<a id="pub-id::{$pubIdPlugin->getPubIdType()|escape}" href="{$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}">{$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}</a> <a href="#!" class="sharelink larger" data-clipboard-text="{$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}"><i class="fa fa-clipboard" aria-hidden="true"></i> <span class="shareoriginal">{translate|lower key="morePress.copyLink"}</span><span class="sharesuccess">{translate|lower key="morePress.copySuccess"}</span></a>{else}{$pubId|escape}{/if}
	{/if}
{/foreach}
</div>
{call_hook name="Templates::Article::MoreInfo"}
<div class="block">
{include file="article/comments.tpl"}
</div>

{include file="common/footer.tpl"}
<script type="text/javascript" src="/plugins/themes/morepress/js/menu.js"></script>
<div id="openModal" class="modalDialog">
	<img src="" id="modalImage" />
</div>
