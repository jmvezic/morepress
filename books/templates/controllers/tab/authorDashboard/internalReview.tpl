{**
 * templates/authorDashboard/stages/internalReview.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display the internal review stage on the author dashboard.
 *}

{if $submission->getStageId() >= $smarty.const.WORKFLOW_STAGE_ID_INTERNAL_REVIEW && !$reviewRounds->wasEmpty()}
	{include file="authorDashboard/reviewRoundTab.tpl" reviewRounds=$reviewRounds reviewRoundTabsId="internalReviewRoundTabs" lastReviewRoundNumber=$lastReviewRoundNumber}

	<!-- Display queries grid -->
	{url|assign:queriesGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.queries.QueriesGridHandler" op="fetchGrid" submissionId=$submission->getId() stageId=$smarty.const.WORKFLOW_STAGE_ID_INTERNAL_REVIEW escape=false}
	{load_url_in_div id="queriesGrid" url=$queriesGridUrl}
{else}
	{translate key="submission.stageNotInitiated"}
{/if}
