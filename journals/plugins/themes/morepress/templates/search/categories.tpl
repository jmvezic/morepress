{**
 * templates/index/categories.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Site category list.
 *
 *}
{strip}
{assign var="pageTitle" value="navigation.categories"}
{include file="common/header.tpl"}
{/strip}

<br />

<!-- <a name="categories"></a>

<ul>
{foreach from=$categories item=categoryArray}
	{assign var=category value=$categoryArray.category}
	<li><a href="{url op="category" path=$category->getId()}">{$category->getLocalizedName()|escape}</a> ({$categoryArray.journals|@count})</li>
{/foreach}
</ul> -->

{php}
$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
$DAO = new DAO();
$ContrVocabs = $DAO->retrieve("SELECT * FROM controlled_vocabs");


$ContrVocabEntries = $DAO->retrieve("SELECT * FROM controlled_vocab_entries");
while (!$ContrVocabEntries->EOF) {
	if ($ContrVocabEntries->fields["controlled_vocab_id"]==303) {
		$CategoryID = $ContrVocabEntries->fields["controlled_vocab_entry_id"];
		$ContrVocabEntrySettings = $DAO->retrieve("SELECT * FROM controlled_vocab_entry_settings");
		while (!$ContrVocabEntrySettings->EOF) {
			if ($ContrVocabEntrySettings->fields["controlled_vocab_entry_id"]==$CategoryID && $ContrVocabEntrySettings->fields["locale"]==$Locale) {
				$CategoryName = $ContrVocabEntrySettings->fields["setting_value"];
				echo '<ul><li class="CategoryBlockSubtitle"><span>&raquo;&nbsp;</span><a href="category/'.$CategoryID.'">'.$CategoryName.'</a>'; // NAZIV KATEGORIJE PREMA LOKALU
				echo '<ul class="categoryChild">';
				$JournalSettings = $DAO->retrieve("SELECT * FROM journal_settings");
				while (!$JournalSettings->EOF) {
					if ($JournalSettings->fields["setting_name"]=="categories" && strpos($JournalSettings->fields["setting_value"], $CategoryID) !== false) {
						$JourID = $JournalSettings->fields["journal_id"];
						$Journal = $DAO->retrieve("SELECT * FROM journals");
						while (!$Journal->EOF) {
							if ($Journal->fields["journal_id"]==$JourID) {
								$JourShort = $Journal->fields["path"];
							}
							$Journal->MoveNext();
						}
						$JournalSettingsNew = $DAO->retrieve("SELECT * FROM journal_settings");
						while (!$JournalSettingsNew->EOF) {
							if ($JournalSettingsNew->fields["journal_id"]==$JourID && $JournalSettingsNew->fields["locale"]==$Locale && $JournalSettingsNew->fields["setting_name"]=="title") {
								echo '<li><a href="/index.php/'.$JourShort.'">'.$JournalSettingsNew->fields["setting_value"].'</a></li>';
							}
							$JournalSettingsNew->MoveNext();
						}
					}
					$JournalSettings->MoveNext();
				}
				echo "</li></ul></ul>";
			}
			$ContrVocabEntrySettings->MoveNext();
		}
	}
	$ContrVocabEntries->MoveNext();
}

{/php}

{include file="common/footer.tpl"}
