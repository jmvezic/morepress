{**
 * templates/controllers/tab/pubIds/form/publicIdentifiersForm.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 *}
<script>
	$(function() {ldelim}
		// Attach the form handler.
		$('#publicIdentifiersForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{ldelim}
				trackFormChanges: true
			{rdelim}
		);
	{rdelim});
</script>
{if $pubObject instanceof Monograph}
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="{url router=$smarty.const.ROUTE_COMPONENT op="updateIdentifiers"}">
		{include file="controllers/notification/inPlaceNotification.tpl" notificationId="publicationIdentifiersFormFieldsNotification"}
		<input type="hidden" name="submissionId" value="{$pubObject->getId()|escape}" />
		<input type="hidden" name="stageId" value="{$stageId|escape}" />
		<input type="hidden" name="tabPos" value="2" />
		<input type="hidden" name="displayedInContainer" value="{$formParams.displayedInContainer|escape}" />
		<input type="hidden" name="tab" value="identifiers" />

{elseif $pubObject instanceof Chapter}
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="{url router=$smarty.const.ROUTE_COMPONENT component="grid.users.chapter.ChapterGridHandler" op="updateIdentifiers"}">
		{include file="controllers/notification/inPlaceNotification.tpl" notificationId="representationIdentifiersFormFieldsNotification"}
		<input type="hidden" name="submissionId" value="{$pubObject->getMonographId()|escape}" />
		<input type="hidden" name="chapterId" value="{$pubObject->getId()|escape}" />

{elseif $pubObject instanceof Representation}
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="{url router=$smarty.const.ROUTE_COMPONENT component="grid.catalogEntry.PublicationFormatGridHandler" op="updateIdentifiers"}">
		{include file="controllers/notification/inPlaceNotification.tpl" notificationId="representationIdentifiersFormFieldsNotification"}
		<input type="hidden" name="submissionId" value="{$pubObject->getSubmissionId()|escape}" />
		<input type="hidden" name="representationId" value="{$pubObject->getId()|escape}" />

{elseif $pubObject instanceof SubmissionFile}
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="{url component="api.file.ManageFileApiHandler" op="updateIdentifiers" escape=false}">
		{include file="controllers/notification/inPlaceNotification.tpl" notificationId="fileIdentifiersFormFieldsNotification"}
		<input type="hidden" name="fileId" value="{$pubObject->getFileId()|escape}" />
		<input type="hidden" name="revision" value="{$pubObject->getRevision()|escape}" />
		<input type="hidden" name="submissionId" value="{$pubObject->getSubmissionId()|escape}" />
		<input type="hidden" name="stageId" value="{$stageId|escape}" />
		<input type="hidden" name="fileStageId" value="{$pubObject->getFileStage()|escape}" />

{/if}

{csrf}
{fbvFormSection}
	{fbvElement type="text" label="submission.publisherId" id="publisherId" name="publisherId" value=$publisherId size=$fbvStyles.size.MEDIUM}
{/fbvFormSection}

{foreach from=$pubIdPlugins item=pubIdPlugin}
	{assign var=pubIdMetadataFile value=$pubIdPlugin->getPubIdMetadataFile()}
	{assign var=canBeAssigned value=$pubIdPlugin->canBeAssigned($pubObject)}
	{include file="$pubIdMetadataFile" pubObject=$pubObject canBeAssigned=$canBeAssigned}
{/foreach}
{call_hook name="Templates::Controllers::Tab::PubIds::Form::PublicIdentifiersForm"}
{fbvFormButtons id="publicIdentifiersFormSubmit" submitText="common.save"}

</form>
