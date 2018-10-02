{**
 * templates/user/rolesForm.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Roles area of user profile form tabset.
 *}

{* Help Link *}
{help file="user-profile.md" class="pkp_help_tab"}

<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#rolesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	{rdelim});
</script>

<form class="pkp_form" id="rolesForm" method="post" action="{url op="saveRoles"}" enctype="multipart/form-data">
	{csrf}

	{include file="controllers/notification/inPlaceNotification.tpl" notificationId="rolesFormNotification"}

	{include file="user/userGroups.tpl"}

	{fbvFormButtons hideCancel=true submitText="common.save"}

	<p>
		{capture assign="privacyUrl"}{url router=$smarty.const.ROUTE_PAGE page="about" op="privacy"}{/capture}
		{translate key="user.privacyLink" privacyUrl=$privacyUrl}
	</p>

	<p><span class="formRequired">{translate key="common.requiredField"}</span></p>
</form>
