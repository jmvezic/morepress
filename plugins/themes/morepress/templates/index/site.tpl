{**
 * templates/index/site.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Site index.
 *
 *}
{strip}
{if $siteTitle}
	{assign var="pageTitleTranslated" value=$siteTitle}
{/if}
{assign var="pageDisplayed" value="site"}
{include file="common/header.tpl"}
{/strip}



<a name="journals"></a>

<!-- {if $useAlphalist}
	<p>{foreach from=$alphaList item=letter}<a href="{url searchInitial=$letter sort="title"}">{if $letter == $searchInitial}<strong>{$letter|escape}</strong>{else}{$letter|escape}{/if}</a> {/foreach}<a href="{url}">{if $searchInitial==''}<strong>{translate key="common.all"}</strong>{else}{translate key="common.all"}{/if}</a></p>
{/if} -->

{if $journals->wasEmpty()}
	{translate key="site.noJournals"}
{/if} 

<div id="indexJournalsList">


{php}

$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
$DAO = new DAO();
$JournalDAO = new JournalDAO();
$Journals = $DAO->retrieve("SELECT * FROM journals");

while (!$Journals->EOF) {
	$JourID = $Journals->fields["journal_id"];
	$JournalObject = $JournalDAO->getById($JourID);
	$JourTitle = $JournalObject->getLocalizedTitle();
	$JourPath = $JournalObject->getPath();
	$JourInitials = $JournalObject->getUrl();
	$JourThumb = $JournalObject->getLocalizedSetting('journalThumbnail');
	$JourAltText = $JournalObject->getLocalizedSetting('journalThumbnailAltText');
	$JourThumbPath = "/public/journals/".$JourID."/".$JourThumb["uploadName"];
	$JourISSN = $JournalObject->getSetting('printIssn');
	$JourEISSN = $JournalObject->getSetting('onlineIssn');
	$JourCatInfo = $JournalObject->getSetting('categories');
	
	if ($JourPath == "libellarium") {
		echo '<a href="http://libellarium.org/" target="_blank" id="jourBlockLink"><div id="jourBlock">';
	}
	elseif ($JourPath == "sic") {
		echo '<a href="http://www.sic-journal.org/" target="_blank" id="jourBlockLink"><div id="jourBlock">';	
	}
	else {
	echo '<a href="'.$JourInitials.'" id="jourBlockLink"><div id="jourBlock">';
}
	
	
	echo '<div id="jourThumb"><img src="'.$JourThumbPath.'" alt="'.$JourAltText.'" /></div>';	
	echo '<div id="jourTitle">'.$JourTitle.'</div>';
	echo '<div id="jourInfoBlock">';
	foreach($JourCatInfo as $v) {
		$ControlVocabSettings = $DAO->retrieve("SELECT * FROM controlled_vocab_entry_settings");
		while (!$ControlVocabSettings->EOF) {
			if ($ControlVocabSettings->fields["controlled_vocab_entry_id"]==$v && $ControlVocabSettings->fields["locale"]==$Locale) { echo '<div';

if ($v == 325) {echo ' class="externaljour"';}

echo ' id="jourCategory">'.$ControlVocabSettings->fields["setting_value"].'</div>'; }
			$ControlVocabSettings->MoveNext();
		}
	}
	if ($JourISSN) { echo '<div id="jourISSN">ISSN: '.$JourISSN.'</div>'; }
	if ($JourEISSN) { echo '<div id="jourOnlineISSN">e-ISSN: '.$JourEISSN.'</div>'; }
	echo '<div id="jourDOI">DOI: 10.15291/'.$JourPath.'</div>';
	echo '</div></div></a>';
	
	$Journals->MoveNext();
}

{/php}

</div>

<div id="journalListPageInfo">{page_info iterator=$journals}</div>
<div id="journalListPageLinks">{page_links anchor="journals" name="journals" iterator=$journals}</div>

{include file="common/footer.tpl"}

