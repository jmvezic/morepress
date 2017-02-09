<?php /* Smarty version 2.6.26, created on 2017-02-09 08:00:46
         compiled from common/moreHomeSidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/moreHomeSidebar.tpl', 3, false),)), $this); ?>
<script type="text/javascript" src="/plugins/themes/morepress/js/navCollapse.js"></script>
<div class="block" id="featured">
<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.categories"), $this);?>
</span>
<?php 
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

 ?>
</div>

<!-- <div class="block" id="featured">
<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "morePress.featuredArticle"), $this);?>
</span>
<?php 
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
 ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.vol"), $this);?>
<?php 
echo " ".$Volume.", ";
 ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.no"), $this);?>
<?php 
echo " ".$Number;
echo " (".$Year.")";
echo "</span>";


while (!$Journals->EOF) {
	if ($Journals->fields["journal_id"]==$JournalID) {
			$JournalPath = $Journals->fields["path"];
	}
	$Journals->MoveNext();
}

$ArticleURL = "index.php/".$JournalPath."/article/view/".$ArticleID;

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

 ?>
</div>

<div class="block" id="featured">
<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "morePress.featuredEditor"), $this);?>
</span>

<?php 

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

 ?>
</div> -->