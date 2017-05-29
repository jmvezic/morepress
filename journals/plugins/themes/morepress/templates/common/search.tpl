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
	<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
</div>
