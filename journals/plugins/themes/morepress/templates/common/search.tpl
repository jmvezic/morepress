{**
 * templates/common/search.tpl
 *
 *
 * Search Bar
 *
 *}


<div id="searchbar">
<form id="simpleSearchForm" method="get" action="{url page="search" op="search"}">
{if $currentJournal}
	<input name="query" type="text" aria-label="Search" value="" placeholder="{translate key="morePress.searchJournal"} {$currentJournal->getLocalizedTitle()}..." class="textField" />
{else}
	<input name="query" type="text" aria-label="Search" value="" placeholder="{translate key="morePress.searchSite"} {translate key="morePress.searchAfter"} " class="textField" />
{/if}

  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
</div>
