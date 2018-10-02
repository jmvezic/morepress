{**
 * templates/frontend/pages/catalog.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view the catalog.
 *
 * @uses $publishedMonographs array List of published monographs
 * @uses $prevPage int The previous page number
 * @uses $nextPage int The next page number
 * @uses $showingStart int The number of the first item on this page
 * @uses $showingEnd int The number of the last item on this page
 * @uses $total int Count of all published monographs
 *}
{include file="frontend/components/header.tpl" pageTitle="navigation.catalog"}

<div class="page page_catalog">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="navigation.catalog"}
	<div class="monograph_count">
		{translate key="catalog.browseTitles" numTitles=$total}
	</div>

	{* No published titles *}
	{if !$publishedMonographs|@count}
		<h2>
			{translate key="catalog.allBooks"}
		</h2>
		<p>{translate key="catalog.noTitles"}</p>

	{* Monograph List *}
	{else}
		{include file="frontend/components/monographList.tpl" monographs=$publishedMonographs featured=$featuredMonographIds}

		{* Pagination *}
		{if $prevPage > 1}
			{url|assign:"prevUrl" router=$smarty.const.ROUTE_PAGE page="catalog" op="page" path=$prevPage}
		{elseif $prevPage === 1}
			{url|assign:"prevUrl" router=$smarty.const.ROUTE_PAGE page="catalog"}
		{/if}
		{if $nextPage}
			{url|assign:"nextUrl" router=$smarty.const.ROUTE_PAGE page="catalog" op="page" path=$nextPage}
		{/if}
		{include
			file="frontend/components/pagination.tpl"
			prevUrl=$prevUrl
			nextUrl=$nextUrl
			showingStart=$showingStart
			showingEnd=$showingEnd
			total=$total
		}
	{/if}

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
