{**
 * templates/controllers/grid/users/chapter/editChapter.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * The "edit chapter" tabset.
 *}
<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {ldelim}
		$('#editChapterMetadataTabs').pkpHandler('$.pkp.controllers.TabHandler');
	{rdelim});
</script>
<div id="editChapterMetadataTabs">
	<ul>
		<li><a href="{url router=$smarty.const.ROUTE_COMPONENT op="editChapterTab" submissionId=$submissionId chapterId=$chapterId}">{translate key="grid.action.editMetadata"}</a></li>
		<li><a href="{url router=$smarty.const.ROUTE_COMPONENT op="identifiers" submissionId=$submissionId chapterId=$chapterId}">{translate key="submission.identifiers"}</a></li>
	</ul>
</div>
