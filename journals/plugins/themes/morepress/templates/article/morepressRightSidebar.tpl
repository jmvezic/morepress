<div class="block">
<span class="blockTitle">Meta</span>
	<span class="blockSubtitle">{translate key="article.subject"}</span>
	{$article->getLocalizedSubject()|escape}			

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
	
	<span class="blockSubtitle">{translate key="issue.issue"}</span>
	<ul><li><a href="{url page="issue" op="view" path=$issue->getBestIssueId($currentJournal)}" target="_parent">{$issue->getIssueIdentification(false,true)|escape}</a></li></ul>

	<span class="blockSubtitle">{translate key="section.section"}</span>
	{$article->getSectionTitle()|escape} 

{foreach from=$pubIdPlugins item=pubIdPlugin}
	{if $issue->getPublished()}
		{assign var=pubId value=$pubIdPlugin->getPubId($pubObject)}
	{else}
		{assign var=pubId value=$pubIdPlugin->getPubId($pubObject, true)}{* Preview rather than assign a pubId *}
	{/if}

		<span class="blockSubtitle">{$pubIdPlugin->getPubIdDisplayType()|escape}</span>
		{if $pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}<a id="pub-id::{$pubIdPlugin->getPubIdType()|escape}" href="{$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}">{$pubIdPlugin->getPubId($article)|escape}</a>{else}{$pubId|escape}{/if}



{/foreach}
</div>