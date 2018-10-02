{**
 * templates/controllers/informationCenter/newNoteForm.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display submission file notes/note form in information center.
 *}

<script type="text/javascript">
	// Attach the Notes handler.
	$(function() {ldelim}
		$('#newNoteForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{ldelim}
				baseUrl: {$baseUrl|json_encode}
			{rdelim}
		);
	{rdelim});
</script>

<div id="newNoteContainer">
	<form class="pkp_form" id="newNoteForm" action="{url router=$smarty.const.ROUTE_COMPONENT op="saveNote" params=$linkParams}" method="post">
		{csrf}
		{fbvFormSection title="informationCenter.addNote" for="newNote"}
			{fbvElement type="textarea" id="newNote"}
		{/fbvFormSection}
		{fbvFormButtons hideCancel=true submitText=$submitNoteText}
	</form>
</div>
