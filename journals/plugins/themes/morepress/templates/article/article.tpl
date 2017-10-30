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
{include file="article/header.tpl"}
{/strip}

{if $galley}
	{if $galley->isHTMLGalley()}
		{$galley->getHTMLContents()}
	{elseif $galley->isPdfGalley()}
		{include file="article/pdfViewer.tpl"}
	{/if}
{else}
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
	<div id="authorString"><em>{$article->getAuthorString()|escape}</em></div>
	</div>
	
	<div id="mobileRightSidebar">{include file="article/morepressRightSidebar.tpl"}</div>
	
	{if $article->getLocalizedAbstract()}
		<div id="articleAbstract" class="block">
		<h4>{translate key="article.abstract"}</h4>
		<div>{$article->getLocalizedAbstract()|strip_unsafe_html|nl2br}</div>
		</div>
	{/if}

	<!-- {if $article->getLocalizedSubject()}
		<div id="articleSubject" class="block">
		<h4>{translate key="article.subject"}</h4>
		<div>{$article->getLocalizedSubject()|escape}</div>
		</div>
	{/if} -->

	{if (!$subscriptionRequired || $article->getAccessStatus() == $smarty.const.ARTICLE_ACCESS_OPEN || $subscribedUser || $subscribedDomain)}
		{assign var=hasAccess value=1}
	{else}
		{assign var=hasAccess value=0}
	{/if}

{assign var=Galleys value=$article->getGalleys()}
	{if $Galleys}
	<span class="blockSubtitle">{translate key="reader.fullText"}</span>
	<div id="tocLinksContainer">
	{foreach from=$Galleys item=Galley}
<a href="{url path=$article->getBestArticleId($currentJournal)|to_array:$Galley->getBestGalleyId($currentJournal)}" id="tocItemFullTextLink" {if $Galley->getRemoteURL()}target="_blank"{else}target="_parent"{/if}><i class="fa fa-eye" aria-hidden="true"></i> {$Galley->getGalleyLabel()|escape}</a>

	{if $Galley->isPdfGalley()}
	<a href="{url op="download" path=$article->getBestArticleId($currentJournal)|to_array:$Galley->getBestGalleyId($currentJournal)}" id="tocItemFullTextLink" {if $Galley->getRemoteURL()}target="_blank"{else}target="_parent"{/if}><i class="fa fa-download" aria-hidden="true"></i> {$Galley->getGalleyLabel()|escape}</a> 
	{/if}

	{/foreach}
	</div>
	{/if}

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
<div class="block">
{foreach from=$pubIdPlugins item=pubIdPlugin}
	{if $issue->getPublished()}
		{assign var=pubId value=$pubIdPlugin->getPubId($pubObject)}
	{else}
		{assign var=pubId value=$pubIdPlugin->getPubId($pubObject, true)}{* Preview rather than assign a pubId *}
	{/if}
	{if $pubId}
		{$pubIdPlugin->getPubIdDisplayType()|escape}: {if $pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}<a id="pub-id::{$pubIdPlugin->getPubIdType()|escape}" href="{$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}">{$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}</a>{else}{$pubId|escape}{/if}
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
