{**
 * controllers/modals/submissionMetadata/form/selectMonographForm.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a monograph selection form with the monograph's metadata
 * below.
 *
 *}

{* Help Link *}
{help file="catalog.md#new-catalog-entry" class="pkp_help_modal"}

<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#newCatalogEntryForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	{rdelim});
</script>

<form id="newCatalogEntryForm" class="pkp_form" action="{url router=$smarty.const.ROUTE_COMPONENT component="modals.submissionMetadata.SelectMonographHandler" op="select"}" method="post">
	{csrf}
	{fbvFormArea}
		{fbvFormSection}
			{assign var="uuid" value=""|uniqid|escape}
			<div id="select-new-entry-list-handler-{$uuid}">
				<script type="text/javascript">
					pkp.registry.init('select-new-entry-list-handler-{$uuid}', 'SelectSubmissionsListPanel', {$selectNewEntryData});
				</script>
			</div>
		{/fbvFormSection}
		{fbvFormButtons submitText="submission.catalogEntry.add" hideCancel="true"}
	{/fbvFormArea}
</form>
