{**
 * templates/issue/issue.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Issue
 *
 *}
<script type="text/javascript" src="/plugins/themes/morepress/js/JournalIssueCollapser.js"></script>
{if $publishedArticles}
{foreach name=sections from=$publishedArticles item=section key=sectionId}


<div id="tocContainer" class="sectionParent">
	{if $section.title}<a href="#" class="tocSectionTitle">&raquo;&nbsp;{$section.title|escape}</a>{/if}
	<div class="sectionChild">
	{foreach from=$section.articles item=article}

	{assign var=articlePath value=$article->getBestArticleId($currentJournal)}
	{assign var=articleId value=$article->getId()}

	{if $article->getLocalizedFileName() && $article->getLocalizedShowCoverPage() && !$article->getHideCoverPageToc($locale)}
		{assign var=showCoverPage value=true}
	{else}
		{assign var=showCoverPage value=false}
	{/if}

	{if $article->getLocalizedAbstract() == ""}
		{assign var=hasAbstract value=0}
	{else}
		{assign var=hasAbstract value=1}
	{/if}

	{if (!$subscriptionRequired || $article->getAccessStatus() == $smarty.const.ARTICLE_ACCESS_OPEN || $subscribedUser || $subscribedDomain || ($subscriptionExpiryPartial && $articleExpiryPartial.$articleId))}
		{assign var=hasAccess value=1}
	{else}
		{assign var=hasAccess value=0}
	{/if}

	<div id="tocSectionContainer">
		<div id="tocItemContainer">
			<a class="tocItemTitle" href="{url page="article" op="view" path=$articlePath}">{$article->getLocalizedTitle()|strip_unsafe_html}</a><br>
			{if (!$section.hideAuthor && $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_DEFAULT) || $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_SHOW}
				{foreach from=$article->getAuthors() item=author name=authorList}
					<span class="tocItemAuthors">{$author->getFullName()|escape}{if !$smarty.foreach.authorList.last},{/if}</span>
				{/foreach}
			{/if}<br>
{if $hasAccess || ($subscriptionRequired && $showGalleyLinks)}
				{foreach from=$article->getGalleys() item=galley name=galleyList}
			<div id="tocLinksContainer">
			<a href="{url page="article" op="view" path=$articlePath|to_array:$galley->getBestGalleyId($currentJournal)}"  id="tocItemFullTextLink"> {$galley->getGalleyLabel()|escape} </a>
					<a href="{url page="article" op="view" path=$articlePath|to_array:$galley->getBestGalleyId($currentJournal)}" {if $galley->getRemoteURL()}target="_blank" {/if} id="tocItemFullTextLink"> <i class="fa fa-eye" aria-hidden="true"></i> {translate key="morePress.viewGalley"} </a>
{if $galley->isPdfGalley()}
	<a href="{url page="article" op="download" path=$articlePath|to_array:$galley->getBestGalleyId($currentJournal)}" id="tocItemFullTextLink" {if $galley->getRemoteURL()}target="_blank"{else}target="_parent"{/if}> <i class="fa fa-download" aria-hidden="true"></i> {translate key="morePress.downloadGalley"} </a>
	{/if}


</div>
{/foreach}{/if}
</div>
</div>
{if $hasAccess || ($subscriptionRequired && $showGalleyLinks)}

    {assign var=Supplementaries value=$article->getSuppFiles()}
    {if $Supplementaries}
    <i style="display:inline-block;font-style:italic;">{translate key="morePress.containsSuppFiles"}</i>:
    {foreach name="supploop" from=$Supplementaries item=Suppl}
      <a href="{url page="article" op="downloadSuppFile" path=$articlePath|to_array:$Suppl->getSuppFileId()}" title="{$Suppl->getDescription($currentLocale)}" {if $Suppl->getRemoteURL()}target="_blank"{else}target="_parent"{/if} style="display:inline-block;" download>{$Suppl->getTitle($currentLocale)|escape} <i class="fa fa-download" aria-hidden="true"></i></a> {if !$smarty.foreach.supploop.last}, {/if}
    {/foreach}
    {/if}

{/if}

{/foreach}
</div>

</div>


{if !$smarty.foreach.sections.last}
<div class="separator"></div>
{/if}
{/foreach}
{else}
{translate key="issue.noArticles"}
{/if}
