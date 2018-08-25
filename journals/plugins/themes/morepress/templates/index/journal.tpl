{**
 * templates/index/journal.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Journal index page.
 *
 *}
{strip}
{assign var="pageTitleTranslated" value=$siteTitle}
{include file="common/journalHeader.tpl"}
{/strip}

{if $enableAnnouncementsHomepage}
	{* Display announcements *}
	<div id="mobileAnnounHeading"><h4>{translate key="announcement.announcementsHome"}</h4></div>
	<div id="announcementsHome">
		<!-- <h3><a href="{url page="announcement"}">{translate key="announcement.announcementsHome"}</a></h3> -->
		{include file="announcement/list.tpl"}
		<!-- <table class="announcementsMore">
			<tr>
				<td><a href="{url page="announcement"}">{translate key="announcement.moreAnnouncements"}</a></td>
			</tr>
		</table> -->
	</div>
{/if}

<div id="journalAboutCont">
<div class="journalDescriptionHeading"><h4>{$currentJournal->getLocalizedSetting('title')}</h4></div>
{if $journalDescription}<div id="journalDescription">{$journalDescription}</div>{/if}

{call_hook name="Templates::Index::journal"}


{if $homepageImage}
<br />
<div id="homepageImage"><img src="{$publicFilesDir}/{$homepageImage.uploadName|escape:"url"}" width="{$homepageImage.width|escape}" height="{$homepageImage.height|escape}" {if $homepageImageAltText != ''}alt="{$homepageImageAltText|escape}"{else}alt="{translate key="common.journalHomepageImage.altText"}"{/if} /></div>
{/if}

{if $additionalHomeContent}
<br />
<div id="additionalHomeContent">{$additionalHomeContent}</div>
{/if}

</div>
{if $currentJournal->getJournalId() < 12 || $currentJournal->getJournalId() > 17}
<script type="text/javascript" src="{$baseUrl}/plugins/themes/morepress/js/journalTabSwitch.js"></script>


<div id="JournalHomeTabs">
<div id="JournalHomeTabControl">
	<div id="ShowArchive" class="JournalTab">{translate key="common.archive"}</div>
	{if $issue && $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}<div id="ShowIssue" class="JournalTab active">
	{$issue->getIssueIdentification()|strip_unsafe_html|nl2br}</div>
	{else}<div id="ShowIssue" class="JournalTab active">{$siteTitle}</div>{/if}
	<div id="ShowAbout" class="JournalTab">{translate key="navigation.about"}</div>
	<div id="ShowEditorial" class="JournalTab">{translate key="about.editorialTeam"}</div>
	<div id="ShowSubmit" class="JournalTab">{translate key="submission.submitArticle"}</div>
</div>
{/if}
<script type="text/javascript" src="{$baseUrl}/plugins/themes/morepress/js/JournalArchiveCollapser.js"></script>

{php}
$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
$DAO = new DAO();
$IssueDAO = new IssueDAO();
$JournalDAO = new JournalDAO();
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$server_name = $_SERVER['SERVER_NAME'];
$pieces = explode($server_name.'/journals/', $url);
$ThisJournalPath = explode('/', $pieces[1]);
$ThisJournalPath = $ThisJournalPath[0];
$ThisJournal = $JournalDAO->getJournalByPath($ThisJournalPath);
$ThisJournalID = $ThisJournal->getJournalId();
$Issues = $IssueDAO->getPublishedIssues($ThisJournalID);
$Issues = $Issues->toArray();
echo '<div id="JournalHomeArchiveTab">';
$YearIndex = [];
if ($Issues) {
foreach ($Issues as &$value) {
    $IssueID = $value->getIssueId();
    $IssueYear = $value->getYear();
    if (!$IssueYear) {
    	$YearIndex[$IssueYear] = array($IssueID);
    }
    else {
    	$YearIndex[$IssueYear][] = $IssueID;
    }
}
foreach ($YearIndex as $Year => $Values) {
	echo '<div class="yearParent">';
	echo '<div class="JournalHomeArchiveYearLabel">&raquo;&nbsp;'.$Year.'</div>';
	echo '<div class="yearChild">';
	foreach ($Values as $Iden) {
		foreach ($Issues as &$value) {
    			$IssueID = $value->getIssueId();
    			if ($IssueID == $Iden) {
    				$IssueIdent = $value->getIssueIdentification();
    				$IssueURL = '/journals/'.$ThisJournalPath.'/issue/view/'.$IssueID;
    				echo '<a class="JournalHomeArchiveLink" href="'.$IssueURL.'">'.$IssueIdent.'</a>';
    			}
    		}
	}
	echo '</div></div>';
}

}
else {
	$Trans = new PKPLocale();
	echo $Trans->translate("current.noCurrentIssueDesc", "", $Locale);
}
echo '</div>';
{/php}

{if $currentJournal->getJournalId() < 12 || $currentJournal->getJournalId() > 17}
<div id="JournalAboutTab">
{$currentJournal->getLocalizedSetting('history')}


{if $currentJournal->getLocalizedSetting('focusScopeDesc') != ''}
<div id="focusAndScope" class="block"><h3>{translate key="about.focusAndScope"}</h3>
<p>{$currentJournal->getLocalizedSetting('focusScopeDesc')|nl2br}</p>

<div class="separator">&nbsp;</div>
</div>
{/if}



<div id="sectionPolicies" class="block"><h3>{translate key="about.sectionPolicies"}</h3>
{foreach from=$sections item=section}{if !$section->getHideAbout()}
	<h4>{$section->getLocalizedTitle()}</h4>

	{assign var="hasEditors" value=0}
	{foreach from=$sectionEditorEntriesBySection item=sectionEditorEntries key=key}
		{if $key == $section->getId()}
			{foreach from=$sectionEditorEntries item=sectionEditorEntry}
				{assign var=sectionEditor value=$sectionEditorEntry.user}
				{if 0 == $hasEditors++}
				{translate key="user.role.editors"}
				<ul>
				{/if}
				<li>{$sectionEditor->getFirstName()|escape} {$sectionEditor->getLastName()|escape}{if $sectionEditor->getLocalizedAffiliation()}, {$sectionEditor->getLocalizedAffiliation()|escape}{/if}</li>
			{/foreach}
		{/if}
	{/foreach}
	{if $hasEditors}</ul>{/if}

	<table width="60%">
		<tr>
			<td width="33%">{if !$section->getEditorRestricted()}{icon name="checked"}{else}{icon name="unchecked"}{/if} {translate key="manager.sections.open"}</td>
			<td width="33%">{if $section->getMetaIndexed()}{icon name="checked"}{else}{icon name="unchecked"}{/if} {translate key="manager.sections.indexed"}</td>
			<td width="34%">{if $section->getMetaReviewed()}{icon name="checked"}{else}{icon name="unchecked"}{/if} {translate key="manager.sections.reviewed"}</td>
		</tr>
	</table>
{/if}{/foreach}
</div>

<div class="separator">&nbsp;</div>

{if $currentJournal->getLocalizedSetting('reviewPolicy') != ''}<div id="peerReviewProcess" class="block"><h3>{translate key="about.peerReviewProcess"}</h3>
<p>{$currentJournal->getLocalizedSetting('reviewPolicy')|nl2br}</p>

<div class="separator">&nbsp;</div>
</div>
{/if}

{if $currentJournal->getLocalizedSetting('pubFreqPolicy') != ''}
<div id="publicationFrequency" class="block"><h3>{translate key="about.publicationFrequency"}</h3>
<p>{$currentJournal->getLocalizedSetting('pubFreqPolicy')|nl2br}</p>

<div class="separator">&nbsp;</div>
</div>
{/if}

{if $currentJournal->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_OPEN && $currentJournal->getLocalizedSetting('openAccessPolicy') != ''}
<div id="openAccessPolicy" class="block"><h3>{translate key="about.openAccessPolicy"}</h3>
<p>{$currentJournal->getLocalizedSetting('openAccessPolicy')|nl2br}</p>

<div class="separator">&nbsp;</div>
</div>
{/if}

{if $currentJournal->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_SUBSCRIPTION && $currentJournal->getSetting('enableAuthorSelfArchive')}
<div id="authorSelfArchivePolicy" class="block"><h3>{translate key="about.authorSelfArchive"}</h3>
<p>{$currentJournal->getLocalizedSetting('authorSelfArchivePolicy')|nl2br}</p>

<div class="separator">&nbsp;</div>
</div>
{/if}

{if $currentJournal->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_SUBSCRIPTION && $currentJournal->getSetting('enableDelayedOpenAccess')}
<div id="delayedOpenAccessPolicy" class="block"><h3>{translate key="about.delayedOpenAccess"}</h3>
<p>{translate key="about.delayedOpenAccessDescription1"} {$currentJournal->getSetting('delayedOpenAccessDuration')} {translate key="about.delayedOpenAccessDescription2"}</p>
{if $currentJournal->getLocalizedSetting('delayedOpenAccessPolicy') != ''}
	<p>{$currentJournal->getLocalizedSetting('delayedOpenAccessPolicy')|nl2br}</p>
{/if}

<div class="separator">&nbsp;</div>
</div>
{/if}

{if $currentJournal->getSetting('enableLockss') && $currentJournal->getLocalizedSetting('lockssLicense') != ''}
<div id="archiving" class="block"><h3>{translate key="about.archiving"}</h3>
<p>{$currentJournal->getLocalizedSetting('lockssLicense')|nl2br}</p>

<div class="separator">&nbsp;</div>
</div>
{/if}

{foreach key=key from=$currentJournal->getLocalizedSetting('customAboutItems') item=customAboutItem name=customAboutItems}
	{if !empty($customAboutItem.title)}
		<div id="custom-{$key|escape}"><h3>{$customAboutItem.title|escape}</h3>
		<p>{$customAboutItem.content|nl2br}</p>
		{if !$smarty.foreach.customAboutItems.last}<div class="separator">&nbsp;</div>{/if}
		</div>
	{/if}
{/foreach}

{if !empty($currentJournal->getLocalizedSetting('contactMailingAddress'))}
<div id="mailingAddress" class="block">
<h3>{translate key="common.mailingAddress"}</h3>
{$currentJournal->getSetting('mailingAddress')}
</div>
<div id="principalContact">
<h3>{translate key="about.contact.principalContact"}</h3>
<p><strong>{$currentJournal->getSetting('contactName')}</strong></p>
<p>{$currentJournal->getLocalizedSetting('contactTitle')}</p>
<p>{translate key="about.contact.email"}: {mailto address=$currentJournal->getSetting('contactEmail')|escape encode="hex"}</p>
<p>{translate key="about.contact.phone"}: {$currentJournal->getSetting('contactPhone')}</p>
<p>{translate key="about.contact.fax"}: {$currentJournal->getSetting('contactFax')}</p>
<p>{$currentJournal->getLocalizedSetting('contactMailingAddress')}</p>
</div>
<div id="supportContact">
<h3>{translate key="about.contact.supportContact"}</h3>
<p><strong>{$currentJournal->getSetting('supportName')}</b></strong>
<p>{translate key="about.contact.email"}: {mailto address=$currentJournal->getSetting('supportEmail')|escape encode="hex"}</p>
<p>{translate key="about.contact.phone"}: {$currentJournal->getSetting('supportPhone')}</p>
</div>
{/if}


</div>

<div id="JournalEditorialTab">
<div id="editorialTeam" class="block pseudoMenu">
{if count($editors) > 0}
	<div id="editors" class="block">
	{if count($editors) == 1}
		<h3>{translate key="user.role.editor"}</h3>
	{else}
		<h3>{translate key="user.role.editors"}</h3>
	{/if}

	<ul class="editorialTeam">
		{foreach from=$editors item=editor}
			<li><a href="#/">{$editor->getFullName()|escape}</a>{if $editor->getLocalizedAffiliation()}, {$editor->getLocalizedAffiliation()|escape}{/if}{if $editor->getCountry()}{assign var=countryCode value=$editor->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}</li>
		{/foreach}
	</ul>
	</div>
{/if}

{if count($sectionEditors) > 0}
	<div id="sectionEditors" class="block">
	{if count($sectionEditors) == 1}
		<h3>{translate key="user.role.sectionEditor"}</h3>
	{else}
		<h3>{translate key="user.role.sectionEditors"}</h3>
	{/if}

	<ul class="editorialTeam" class="block">
		{foreach from=$sectionEditors item=sectionEditor}
			<li><a href="#/">{$sectionEditor->getFullName()|escape}</a>{if $sectionEditor->getLocalizedAffiliation()}, {$sectionEditor->getLocalizedAffiliation()|escape}{/if}{if $sectionEditor->getCountry()}{assign var=countryCode value=$sectionEditor->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}</li>
		{/foreach}
	</ul>
	</div>
{/if}

{if count($layoutEditors) > 0}
	<div id="layoutEditors" class="block">
	{if count($layoutEditors) == 1}
		<h3>{translate key="user.role.layoutEditor"}</h3>
	{else}
		<h3>{translate key="user.role.layoutEditors"}</h3>
	{/if}

	<ul class="editorialTeam">
		{foreach from=$layoutEditors item=layoutEditor}
			<li><a href="#/">{$layoutEditor->getFullName()|escape}</a>{if $layoutEditor->getLocalizedAffiliation()}, {$layoutEditor->getLocalizedAffiliation()|escape}{/if}{if $layoutEditor->getCountry()}{assign var=countryCode value=$layoutEditor->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}</li>
		{/foreach}
	</ul>
	</div>
{/if}

{if count($copyEditors) > 0}
	<div id="copyEditors" class="block">
	{if count($copyEditors) == 1}
		<h3>{translate key="user.role.copyeditor"}</h3>
	{else}
		<h3>{translate key="user.role.copyeditors"}</h3>
	{/if}

	<ul class="editorialTeam" class="block">
		{foreach from=$copyEditors item=copyEditor}
			<li><a href="#/">{$copyEditor->getFullName()|escape}</a>{if $copyEditor->getLocalizedAffiliation()}, {$copyEditor->getLocalizedAffiliation()|escape}{/if}{if $copyEditor->getCountry()}{assign var=countryCode value=$copyEditor->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}</li>
		{/foreach}
	</ul>
	</div>
{/if}

{if count($proofreaders) > 0}
	<div id="proofreaders" class="block">
	{if count($proofreaders) == 1}
		<h3>{translate key="user.role.proofreader"}</h3>
	{else}
		<h3>{translate key="user.role.proofreaders"}</h3>
	{/if}

	<ul class="editorialTeam" class="block">
		{foreach from=$proofreaders item=proofreader}
			<li><a href="#/">{$proofreader->getFullName()|escape}</a>{if $proofreader->getLocalizedAffiliation()}, {$proofreader->getLocalizedAffiliation()|escape}{/if}{if $proofreader->getCountry()}{assign var=countryCode value=$proofreader->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}</li>
		{/foreach}
	</ul>
	</div>
{/if}
</div>
{call_hook name="Templates::About::EditorialTeam::Information"}

{foreach from=$groups item=group}
<div id="group" class="pseudoMenu">
	<h3>{$group->getLocalizedTitle()}</h3>
	{assign var=groupId value=$group->getId()}
	{assign var=members value=$teamInfo[$groupId]}

	<ul class="editorialTeam">
		{foreach from=$members item=member}
			{assign var=user value=$member->getUser()}
			<div class="member"><li><a href="#/">{$user->getFullName()|escape}</a>{if $user->getLocalizedAffiliation()}, {$user->getLocalizedAffiliation()|escape}{/if}{if $user->getCountry()}{assign var=countryCode value=$user->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}</li></div>
		{/foreach}{* $members *}
	</ul>
</div>
{/foreach}{* $groups *}

</div>

<div id="JournalHomeCurrentIssueTab">
{if $issue && $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}
	{* Display the table of contents or cover page of the current issue. *}
	<!-- <h3 class="issueTitle"><a href="{url page="issue" op="current"}">{$issue->getIssueIdentification()|strip_unsafe_html|nl2br}</a></h3> -->
	{include file="issue/view.tpl"}
{else}
{translate key="current.noCurrentIssueDesc"}
{/if}
</div>

<div id="JournalHomeSubmitTab">
{if $currentJournal->getSetting('journalPaymentsEnabled') &&
		($currentJournal->getSetting('submissionFeeEnabled') || $currentJournal->getSetting('fastTrackFeeEnabled') || $currentJournal->getSetting('publicationFeeEnabled')) }
	{assign var="authorFees" value=1}
{/if}

{if !$currentJournal->getSetting('disableUserReg')}
	<div id="onlineSubmissions" class="block">
		<h3>{translate key="about.onlineSubmissions"}</h3>
		<p class="callout">{translate key="about.onlineSubmissions.registrationRequired"}</p>
		<div >
			<p>{translate key="about.onlineSubmissions.haveAccount" journalTitle=$siteTitle|escape}</p>
			<a href="{url page="login"}" class="action">{translate key="about.onlineSubmissions.login"}</a>
			<a href="{url page="author" op="submit"}" class="action">{translate key="about.onlineSubmissions.startNew"}</a>
		</div>

		<div >
			<p>{translate key="about.onlineSubmissions.needAccount"}</p>
			<a href="{url page="user" op="register"}" class="action">{translate key="about.onlineSubmissions.registration"}</a>
		</div>


	</div>
{/if}

<div class="separator">&nbsp;</div>

{if $currentJournal->getLocalizedSetting('authorGuidelines') != ''}
<div id="authorGuidelines" class="block"><h3>{translate key="about.authorGuidelines"}</h3>
<p>{$currentJournal->getLocalizedSetting('authorGuidelines')|nl2br}</p>

<div class="separator">&nbsp;</div>
</div>
{/if}

{if $submissionChecklist}
	<div id="submissionPreparationChecklist" class="block"><h3>{translate key="about.submissionPreparationChecklist"}</h3>
	<p>{translate key="about.submissionPreparationChecklist.description"}</p>
	<ol>
		{foreach from=$submissionChecklist item=checklistItem}
			<li>{$checklistItem.content|nl2br}</li>
		{/foreach}
	</ol>
	<div class="separator">&nbsp;</div>
	</div>
{/if}{* $submissionChecklist *}

{if $currentJournal->getLocalizedSetting('copyrightNotice') != ''}
<div id="copyrightNotice" class="block"><h3>{translate key="about.copyrightNotice"}</h3>
<p>{$currentJournal->getLocalizedSetting('copyrightNotice')|nl2br}</p>

<div class="separator">&nbsp;</div>
</div>
{/if}

{if $currentJournal->getLocalizedSetting('privacyStatement') != ''}<div id="privacyStatement" class="block"><h3>{translate key="about.privacyStatement"}</h3>
<p>{$currentJournal->getLocalizedSetting('privacyStatement')|nl2br}</p>

<div class="separator">&nbsp;</div>
</div>
{/if}

{if $authorFees}

<div id="authorFees" class="block"><h3>{translate key="manager.payment.authorFees"}</h3>
	<p>{translate key="about.authorFeesMessage"}</p>
	{if $currentJournal->getSetting('submissionFeeEnabled')}
		<p>{$currentJournal->getLocalizedSetting('submissionFeeName')|escape}: {$currentJournal->getSetting('submissionFee')|string_format:"%.2f"} ({$currentJournal->getSetting('currency')})<br />
		{$currentJournal->getLocalizedSetting('submissionFeeDescription')|nl2br}<p>
	{/if}
	{if $currentJournal->getSetting('fastTrackFeeEnabled')}
		<p>{$currentJournal->getLocalizedSetting('fastTrackFeeName')|escape}: {$currentJournal->getSetting('fastTrackFee')|string_format:"%.2f"} ({$currentJournal->getSetting('currency')})<br />
		{$currentJournal->getLocalizedSetting('fastTrackFeeDescription')|nl2br}<p>
	{/if}
	{if $currentJournal->getSetting('publicationFeeEnabled')}
		<p>{$currentJournal->getLocalizedSetting('publicationFeeName')|escape}: {$currentJournal->getSetting('publicationFee')|string_format:"%.2f"} ({$currentJournal->getSetting('currency')})<br />
		{$currentJournal->getLocalizedSetting('publicationFeeDescription')|nl2br}<p>
	{/if}
	{if $currentJournal->getLocalizedSetting('waiverPolicy') != ''}
		<p>{$currentJournal->getLocalizedSetting('waiverPolicy')|nl2br}</p>
	{/if}
</div>
{/if}
</div>
{/if}
</div>

{include file="common/footer.tpl"}
