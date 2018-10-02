{**
 * plugins/generic/webFeed/templates/settingsForm.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Web feeds plugin settings
 *
 *}
<div id="webFeedSettings">
<div id="description">{translate key="plugins.generic.webfeed.description"}</div>

<h3>{translate key="plugins.generic.webfeed.settings"}</h3>

<script>
	$(function() {ldelim}
		// Attach the form handler.
		$('#webFeedSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	{rdelim});
</script>

<form class="pkp_form" id="webFeedSettingsForm" method="post" action="{url router=$smarty.const.ROUTE_COMPONENT op="manage" category="generic" plugin=$pluginName verb="settings" save=true}">
	{csrf}
	{include file="controllers/notification/inPlaceNotification.tpl" notificationId="webFeedSettingsFormNotification"}

	{fbvFormArea id="webFeedSettingsFormArea"}
		{fbvFormSection list=true}
			{fbvElement type="radio" id="displayPage-all" name="displayPage" value="all" checked=$displayPage|compare:"all" label="plugins.generic.webfeed.settings.all"}
			{fbvElement type="radio" id="displayPage-homepage" name="displayPage" value="homepage" checked=$displayPage|compare:"homepage" label="plugins.generic.webfeed.settings.homepage"}
		{/fbvFormSection}

		{fbvFormSection list=true}
			{fbvElement type="text" id="recentItems" value=$recentItems label="plugins.generic.webfeed.settings.recentBooks" size=$fbvStyles.size.SMALL}
		{/fbvFormSection}
	{/fbvFormArea}

	{fbvFormButtons}
</form>

<p><span class="formRequired">{translate key="common.requiredField"}</span></p>
</div>
