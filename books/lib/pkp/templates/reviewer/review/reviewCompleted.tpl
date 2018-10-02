{**
 * templates/reviewer/review/reviewCompleted.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Show the review completed page.
 *
 *}

<h2>{translate key="reviewer.complete"}</h2>
<br />
<div class="separator"></div>

<p>{translate key="reviewer.complete.whatNext"}</p>

<!-- Display queries grid -->
{url|assign:queriesGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.queries.QueriesGridHandler" op="fetchGrid" submissionId=$submission->getId() stageId=$smarty.const.WORKFLOW_STAGE_ID_EXTERNAL_REVIEW escape=false}
{load_url_in_div id="queriesGridComplete" url=$queriesGridUrl}
