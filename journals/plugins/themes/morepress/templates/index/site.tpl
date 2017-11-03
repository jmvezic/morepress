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

/*

Poluautomatski način dodijeljivanja statusa časopisima, svakom časopisu se dodijeljuje broj statusa prema njegovoj kratici.

1 - aktivan
2 - prestao izlaziti
3 - rani prikaz
4 - uskoro
5- vanjski

*/

$casopisi = array("csi"=>1, "adriatica"=>1, "liburna"=>2, "magistraiadertina"=>1, "actaiadertina"=>1, "arsadriatica"=>1, "mhm"=>1, "oeconomicajadertina"=>1, "geoadria"=>1, "libellarium"=>1, "sic"=>1);

$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
$DAO = new DAO();
$InDAO = new DAO();
$InJournalDAO = new JournalDAO();
$JournalDAO = new JournalDAO();

$Journals = $DAO->retrieve("SELECT journals.journal_id, MAX(issues.date_published) FROM journals LEFT JOIN issues ON journals.journal_id = issues.journal_id GROUP BY journals.journal_id ORDER BY MAX(issues.date_published) DESC");

$InJournals = $InDAO->retrieve("SELECT journals.journal_id, MAX(issues.date_published) FROM journals LEFT JOIN issues ON journals.journal_id = issues.journal_id GROUP BY journals.journal_id ORDER BY MAX(issues.date_published) DESC");

while (!$Journals->EOF) {
	$JourID = $Journals->fields["journal_id"];
	$JournalObject = $JournalDAO->getById($JourID);
	$JourTitle = $JournalObject->getLocalizedTitle();
	$JourPath = $JournalObject->getPath();
	$JourInit = $JournalObject->getInitials($Locale);
	$JourInitials = $JournalObject->getUrl();
	$JourThumb = $JournalObject->getLocalizedSetting('journalThumbnail');
	$JourAltText = $JournalObject->getLocalizedSetting('journalThumbnailAltText');
	$JourThumbPath = "/public/journals/".$JourID."/".$JourThumb["uploadName"];
	$JourISSN = $JournalObject->getSetting('printIssn');
	$JourEISSN = $JournalObject->getSetting('onlineIssn');
	$JourCatInfo = $JournalObject->getSetting('categories');

	
	if ($casopisi[$JourPath] != 2) {

	if ($JourPath == "libellarium") {
		echo '<a href="http://libellarium.org/" target="_blank" id="jourBlockLink"><div id="jourBlock">';
	}
	elseif ($JourPath == "sic") {
		echo '<a href="http://www.sic-journal.org/" target="_blank" id="jourBlockLink"><div id="jourBlock">';	
	}
	else {
	echo '<a href="'.$JourInitials.'" id="jourBlockLink"><div id="jourBlock">';
}
	
	/*	echo '<div id="jourStatus" ';
	if (array_key_exists($JourPath, $casopisi)) {
		if ($casopisi[$JourPath] == 1) {echo ' style="color:white;background-color:rgba(48,140,228,0.7);">'.$AppLocale->translate("morepress.status.active", null, $Locale);}
		elseif ($casopisi[$JourPath] == 2) {echo ' style="background-color:rgba(218,0,0,0.7);color:white;">'.$AppLocale->translate("morepress.status.inactive", null, $Locale);}
		elseif ($casopisi[$JourPath] == 3) {echo ' style="background-color:rgba(58, 170, 10, 0.7);color:white">'.$AppLocale->translate("morepress.status.earlyaccess", null, $Locale);}
		elseif ($casopisi[$JourPath] == 4) {echo ' style="background-color:rgba(255,255,255,0.7);">'.$AppLocale->translate("morepress.status.comingsoon", null, $Locale);}
		elseif ($casopisi[$JourPath] == 5) {echo ' style="background-color:rgba(255,171,0,0.7);">'.$AppLocale->translate("morepress.status.external", null, $Locale);}
	}
echo '</div>'; */


	echo '<div id="jourThumb">';


echo '<img src="/journals/'.$JourThumbPath.'" alt="'.$JourAltText.'" /></div>';	
	echo '<div id="jourTitle">'.$JourTitle; 	
	echo '</div>';
	echo '<div id="jourInfoBlock">';
		$IssuePublished = $Journals->fields["MAX(issues.date_published)"];
	if(strtotime($IssuePublished) > strtotime('-7 days')) {
     $proba = $AppLocale->translate("morePress.newIssue");
     echo '<div id="jourCategory" style="background-color:#10a915;color:white;"><i class="fa fa-star" aria-hidden="true"></i> &nbsp;';
     echo $proba;
     echo '</div>';
 	}
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
	echo '<div id="jourDOI">DOI:<span style="text-transform:lowercase;"> 10.15291/'.$JourInit.'</span></div>';
	echo '</div></div></a>';
	}
	$Journals->MoveNext();
}

while (!$InJournals->EOF) {
	$JourID = $InJournals->fields["journal_id"];
	$JournalObject = $InJournalDAO->getById($JourID);
	$JourTitle = $JournalObject->getLocalizedTitle();
	$JourPath = $JournalObject->getPath();
	$JourInitials = $JournalObject->getUrl();
	$JourInit = $JournalObject->getInitials($Locale);
	$JourThumb = $JournalObject->getLocalizedSetting('journalThumbnail');
	$JourAltText = $JournalObject->getLocalizedSetting('journalThumbnailAltText');
	$JourThumbPath = "/public/journals/".$JourID."/".$JourThumb["uplliburnaoadName"];
	$JourISSN = $JournalObject->getSetting('printIssn');
	$JourEISSN = $JournalObject->getSetting('onlineIssn');
	$JourCatInfo = $JournalObject->getSetting('categories');
	
	if ($casopisi[$JourPath] == 2) {

	if ($JourPath == "libellarium") {
		echo '<a href="http://libellarium.org/" target="_blank" id="jourBlockLink"><div id="jourBlock">';
	}
	elseif ($JourPath == "sic") {
		echo '<a href="http://www.sic-journal.org/" target="_blank" id="jourBlockLink"><div id="jourBlock">';	
	}
	else {
	echo '<a href="'.$JourInitials.'" id="jourBlockLink"><div id="jourBlock">';
}
	
		/* echo '<div id="jourStatus" ';
	if (array_key_exists($JourPath, $casopisi)) {
		if ($casopisi[$JourPath] == 1) {echo ' style="color:white;background-color:rgba(48,140,228,0.7);">'.$AppLocale->translate("morepress.status.active", null, $Locale);}
		elseif ($casopisi[$JourPath] == 2) {echo ' style="background-color:rgba(218,0,0,0.7);color:white;">'.$AppLocale->translate("morepress.status.inactive", null, $Locale);}
		elseif ($casopisi[$JourPath] == 3) {echo ' style="background-color:rgba(58, 170, 10, 0.7);color:white">'.$AppLocale->translate("morepress.status.earlyaccess", null, $Locale);}
		elseif ($casopisi[$JourPath] == 4) {echo ' style="background-color:rgba(255,255,255,0.7);">'.$AppLocale->translate("morepress.status.comingsoon", null, $Locale);}
		elseif ($casopisi[$JourPath] == 5) {echo ' style="background-color:rgba(255,171,0,0.7);">'.$AppLocale->translate("morepress.status.external", null, $Locale);}
	}
echo '</div>'; */


	echo '<div id="jourThumb">';
				$IssuePublished = $InJournals->fields["date_published"];
	echo $IssuePublished;


echo '<img src="/journals/'.$JourThumbPath.'" alt="'.$JourAltText.'" /></div>';	
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
	echo '<div id="jourDOI">DOI: <span style="text-transform:lowercase">10.15291/'.$JourInit.'</span></div>';
	echo '</div></div></a>';
	}
	$InJournals->MoveNext();
}

{/php}

</div>

<div id="journalListPageInfo">{page_info iterator=$journals}</div>
<div id="journalListPageLinks">{page_links anchor="journals" name="journals" iterator=$journals}</div>

{include file="common/footer.tpl"}

