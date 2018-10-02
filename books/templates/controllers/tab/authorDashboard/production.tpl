{**
 * templates/controllers/tab/authorDashboard/production.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display the production stage on the author dashboard.
 *}
{if $submission->getStageId() >= $smarty.const.WORKFLOW_STAGE_ID_PRODUCTION}
	{include file="authorDashboard/submissionEmails.tpl" submissionEmails=$productionEmails}

	<!-- Display queries grid -->
	{url|assign:queriesGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.queries.QueriesGridHandler" op="fetchGrid" submissionId=$submission->getId() stageId=$smarty.const.WORKFLOW_STAGE_ID_PRODUCTION escape=false}
	{load_url_in_div id="queriesGrid" url=$queriesGridUrl}

	<!-- Display galleys grid -->
	{url|assign:representationsGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.catalogEntry.PublicationFormatGridHandler" op="fetchGrid" submissionId=$submission->getId() stageId=$smarty.const.WORKFLOW_STAGE_ID_PRODUCTION escape=false}
	{load_url_in_div id="formatsGridContainer"|uniqid url=$representationsGridUrl}
{else}
	{translate key="submission.stageNotInitiated"}
{/if}
