<script type="text/javascript" src="{$baseUrl}/plugins/themes/morepress/js/navCollapse.js"></script>
<div class="block" id="featured">
<span class="blockTitle">{translate key="navigation.categories"}</span>
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
				echo '<ul><li class="CategoryBlockSubtitle"><span>&raquo;&nbsp;'.$CategoryName.'</span>'; // NAZIV KATEGORIJE PREMA LOKALU
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
								if ($JournalSettingsNew->fields["journal_id"] == 8)
								{
									echo '<li><a href="http://www.libellarium.org" target="_blank">'.$JournalSettingsNew->fields["setting_value"].'</a></li>';							
								}
								else if ($JournalSettingsNew->fields["journal_id"] == 9)
								{
									echo '<li><a href="https://www.sic-journal.org" target="_blank">'.$JournalSettingsNew->fields["setting_value"].'</a></li>';							
								}
								else
								{
									echo '<li><a href="/journals/'.$JourShort.'">'.$JournalSettingsNew->fields["setting_value"].'</a></li>';
								}
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
</div>

<!-- <div class="block" id="featured">
<span class="blockTitle">{translate key="morePress.featuredArticle"}</span>
{php}
$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
$Config = new Config();
$DAO = new DAO();
$ArticleSettings = $DAO->retrieve("SELECT * FROM article_settings");
$ArticleID = 2;
$ArticleTitle = "";
$ArticleJournal = "";
$JournalData = $DAO->retrieve("SELECT * FROM articles");
$JournalID = 0;
$Journals = $DAO->retrieve("SELECT * FROM journals");
$JournalPath = "";
$ArticleURL = "";

while (!$ArticleSettings->EOF) {

         if ($ArticleSettings->fields["article_id"]==2 && $ArticleSettings->fields["setting_name"]=="cleanTitle" && $ArticleSettings->fields["locale"]==$Locale) {
         $ArticleTitle = $ArticleSettings->fields["setting_value"];
         }

         $ArticleSettings->MoveNext();

}

while (!$JournalData->EOF) {
	if ($JournalData->fields["article_id"]==$ArticleID) {
		$JournalID = $JournalData->fields["journal_id"];
	}
	$JournalData->MoveNext();
}

$JournalSettings = $DAO->retrieve("SELECT * FROM journal_settings");
$JournalTitle = "";

while (!$JournalSettings->EOF) {
	if ($JournalSettings->fields["journal_id"]==$JournalID && $JournalSettings->fields["locale"]==$Locale && $JournalSettings->fields["setting_name"]=="title") {
		$JournalTitle = $JournalSettings->fields["setting_value"];
	}
	$JournalSettings->MoveNext();
}

echo '<span id="featuredArtJournal">'.$JournalTitle.'</span>';

$IssueID = 0;
$PublishedArtData = $DAO->retrieve("SELECT * FROM published_articles");

while (!$PublishedArtData->EOF) {
	if ($PublishedArtData->fields["article_id"]==$ArticleID) {
		$IssueID = $PublishedArtData->fields["issue_id"];
	}
	$PublishedArtData->MoveNext();
}

$IssueInfo = "";
$IssueData = $DAO->retrieve("SELECT * FROM issues");

while (!$IssueData->EOF) {
	if ($IssueData->fields["issue_id"]==$IssueID) {
		$Volume = $IssueData->fields["volume"];
		$Number = $IssueData->fields["number"];
		$Year = $IssueData->fields["year"];
		$IssueInfo = $Volume.", ".$Number."(".$Year.")";
	}
	$IssueData->MoveNext();
}

echo '<span id="featuredArtNum">';
{/php}{translate key="issue.vol"}{php}
echo " ".$Volume.", ";
{/php}{translate key="issue.no"}{php}
echo " ".$Number;
echo " (".$Year.")";
echo "</span>";


while (!$Journals->EOF) {
	if ($Journals->fields["journal_id"]==$JournalID) {
			$JournalPath = $Journals->fields["path"];
	}
	$Journals->MoveNext();
}

$ArticleURL = "journals/".$JournalPath."/article/view/".$ArticleID;

echo '<a href="'.$ArticleURL.'">';
echo '<span id="featuredArtTitle">'.$ArticleTitle.'</span></a>';

$Authors = array();
$AuthorsData = $DAO->retrieve("SELECT * FROM authors");

while (!$AuthorsData->EOF) {
	if ($AuthorsData->fields["submission_id"]==$ArticleID) {
			$FirstName = $AuthorsData->fields["first_name"];
			$LastName = $AuthorsData->fields["last_name"];
			$AuthorName = $FirstName." ".$LastName;
			array_push($Authors, $AuthorName);
	}
	
	$AuthorsData->MoveNext();
}

echo '<span id="featuredArtAuths">'.implode(", ", $Authors).'</span>';

{/php}
</div>

<div class="block" id="featured">
<span class="blockTitle">{translate key="morePress.featuredEditor"}</span>

{php}

$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
$DAO = new DAO();
$Users = $DAO->retrieve("SELECT * FROM users");
$UserSettings = $DAO->retrieve("SELECT * FROM user_settings");

$Username = "morepress";

while (!$Users->EOF) {
	if ($Users->fields["username"]==$Username) {$FirstName = $Users->fields["first_name"];$LastName = $Users->fields["last_name"];$UserID = $Users->fields["user_id"];}
	$Users->MoveNext();
}

while (!$UserSettings->EOF) {
	if ($UserSettings->fields["user_id"]==$UserID && $UserSettings->fields["locale"]==$Locale && $UserSettings->fields["setting_name"]=="biography") {$UserBio = $UserSettings->fields["setting_value"];}
	$UserSettings->MoveNext();
}

echo '<span id="featuredEditorName">'.$FirstName.' '.$LastName.'</span>';
echo '<span id="featuredEditorDesc">'.$UserBio.'</span>';

{/php}
</div> -->
