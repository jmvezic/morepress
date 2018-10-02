{**
 * templates/workflow/submissionHeader.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Include the submission progress bar
 *}
<div class="pkp_page_title">
	<h1 class="pkp_submission_title">
		<span class="pkp_screen_reader">{translate key="submission.submissionTitle"}</span>
		{$submission->getLocalizedTitle()}
	</h1>
	<div class="pkp_submission_author">
		<span class="pkp_screen_reader">{translate key="user.role.author_s"}</span>
		{$submission->getAuthorString()}
	</div>
	<ul class="pkp_submission_actions">
		{if $submissionEntryAction}
			<li>{include file="linkAction/linkAction.tpl" action=$submissionEntryAction}</li>
		{/if}
		{if $submissionInformationCenterAction}
			<li>{include file="linkAction/linkAction.tpl" action=$submissionInformationCenterAction}</li>
		{/if}
		<li>{include file="linkAction/linkAction.tpl" action=$submissionLibraryAction}</li>
	</ul>
</div>

{url|assign:submissionProgressBarUrl op="submissionProgressBar" submissionId=$submission->getId() stageId=$stageId contextId="submission" escape=false}
{load_url_in_div id="submissionProgressBarDiv" url=$submissionProgressBarUrl}
