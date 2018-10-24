{**
 * templates/frontend/objects/monograph_summary.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display a summary view of a monograph for display in lists
 *
 * @uses $monograph Monograph The monograph to be displayed
 * @uses $isFeatured bool Is this a featured monograph?
 *}

{php}
$this->assign('seriesDao',DAORegistry::getDAO('SeriesDAO'));
{/php}

<div class="obj_monograph_summary{if $isFeatured} is_featured{/if}">
	<a href="{url page="catalog" op="book" path=$monograph->getBestId()}" class="cover">
		<img alt="{translate key="catalog.coverImageTitle" monographTitle=$monograph->getLocalizedFullTitle()|strip_tags|escape}" src="{url router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="thumbnail" submissionId=$monograph->getId() random=$monograph->getId()|uniqid}" />
	</a>




	<a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$monograph->getBestId()}" class="title">
		{$monograph->getLocalizedFullTitle()|escape}
	</a>
	<div class="author">
		{$monograph->getAuthorOrEditorString()|escape}
	</div>
	<div class="date">
		{$monograph->getDatePublished()|date_format:"%d.%m.%Y."}
	</div>

  {if $monograph->getSeriesId()>0}
  <hr>
  <div>{assign var="series" value=$seriesDao->getById($monograph->getSeriesId())}
  <span class="series"><a href="{url page="catalog" op="series" path=$series->getPath()}">{$series->getLocalizedFullTitle()|escape}</a></span>


  {if $monograph->getSeriesPosition()}

      <span class="seriesPosition">{$monograph->getSeriesPosition()|escape}</span>

  {/if}
</div>
  {/if}
</div><!-- .obj_monograph_summary -->
