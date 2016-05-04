{**
 * templates/common/search.tpl
 *
 *
 * Search Bar
 *
 *}

<div id="searchbar">
<form id="simpleSearchForm" method="post" action="{url page="search" op="search"}">							
	<input name="query" type="text" aria-label="Search" value="" placeholder="{translate key="common.searchTerm"}" class="textField" />
	<input type="submit" value="{translate key="common.search"}" class="button" />
</form>
</div>