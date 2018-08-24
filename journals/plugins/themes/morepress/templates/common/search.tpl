{**
 * templates/common/search.tpl
 *
 *
 * Search Bar
 *
 *}


<script type="text/javascript">
function chgAction() {ldelim}
    var form = document.simpleSearchForm;
    var searchqry = form.query;

    switch (form.journalSearchOption.selectedIndex) {ldelim}
        case 0:
        {if $currentJournal}
            form.action = "/journals/{$currentJournal->getPath()}/search";
            searchqry.value = "";
            searchqry.placeholder = "{translate key="morePress.searchJournal"} {$currentJournal->getLocalizedTitle()}...";
        {/if}
            break;
        case 1:
            form.action = "/journals/search/search";
            searchqry.value = "";
            searchqry.placeholder = "{translate key="morePress.searchSite"}...";
            break;
    {rdelim}

{rdelim}
</script>



<div id="searchbar">
{if $currentJournal}
<form id="simpleSearchForm" name="simpleSearchForm" method="get" action="/journals/{$currentJournal->getPath()}/search">
{else}
<form id="simpleSearchForm" name="simpleSearchForm" method="get" action="/journals/search/search">
{/if}
{if $currentJournal}
<select name="journalSearchOption" id="journalSearchOption" onChange="chgAction()">
  <option value="" selected="selected">{translate key="morePress.thisJournal"}</option>
  <option value="">{translate key="morePress.allJournals"}</option>
</select>
	<input name="query" type="text" aria-label="Search" value="" placeholder="{translate key="morePress.searchJournal"} {$currentJournal->getLocalizedTitle()}..." class="textField" />
{else}
	<input name="query" type="text" aria-label="Search" value="" placeholder="{translate key="morePress.searchSite"} {translate key="morePress.searchAfter"}" class="textField" />
{/if}

  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
</div>
