{**
 * templates/controllers/wizard/fileUpload/form/submissionFileMetadataForm.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * File metadata form.
 *
 * Parameters:
 *  $submissionFile: The submission file.
 *  $stageId: The workflow stage id from which the upload
 *   wizard was called.
 *  $showButtons: True iff form buttons should be presented.
 *}
<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#metadataForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	{rdelim});
</script>

<form class="pkp_form" id="metadataForm" action="{url component="api.file.ManageFileApiHandler" op="saveMetadata" submissionId=$submissionFile->getSubmissionId() stageId=$stageId reviewRoundId=$reviewRoundId fileStage=$submissionFile->getFileStage() fileId=$submissionFile->getFileId() escape=false}" method="post">
	{csrf}

	{* Editable metadata *}
	{fbvFormArea id="fileMetaData"}

		{* File name and detail summary *}
		{fbvFormSection}
			{include file="controllers/wizard/fileUpload/form/uploadedFileSummary.tpl" submissionFile=$submissionFile}
		{/fbvFormSection}
	{/fbvFormArea}

	{if $showButtons}
		{fbvElement type="hidden" id="showButtons" value=$showButtons}
		{fbvFormButtons submitText="common.save"}
	{/if}
</form>
