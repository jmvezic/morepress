{if ($currentJournal)}
{if (!$issue)}
<div class="block" id="featured">
<span class="blockTitle">{translate key="common.latestArticles"}</span>{translate key="morePress.noRecentArticles"}
{else}
<div class="block" id="featured">
<span class="blockTitle">{translate key="common.latestArticles"}</span>
{php}
$lastHowMany = 5;
$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
$DAO = new DAO();
$JournalDAO = new JournalDAO();
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$server_name = $_SERVER['SERVER_NAME'];
$pieces = explode($server_name.'/index.php/', $url);
$ThisJournalPath = explode('/', $pieces[1]);
$ThisJournalPath = $ThisJournalPath[0];
$ThisJournal = $JournalDAO->getJournalByPath($ThisJournalPath);
$ThisJournalID = $ThisJournal->getJournalId();

$ArticlesCount = $DAO->retrieve("SELECT * FROM articles WHERE journal_id=".$ThisJournalID." ORDER BY date_submitted DESC LIMIT ".$lastHowMany);
$ArtCount = 0;
while (!$ArticlesCount->EOF) {$ArtCount+=1;$ArticlesCount->MoveNext();}
if ($ArtCount > 0) {}

$ArticlesMega = $DAO->retrieve("SELECT * FROM articles WHERE journal_id=".$ThisJournalID." ORDER BY date_submitted DESC LIMIT ".$lastHowMany);
while (!$ArticlesMega->EOF) {
	$ArticleID = $ArticlesMega->fields["article_id"];
	$JournalID = $ArticlesMega->fields["journal_id"];
	$DateSubmitted = $ArticlesMega->fields["date_submitted"];
	
	$JournalDAO = new JournalDAO();
	$ThisJournal = $JournalDAO->getJournal($JournalID);
	$JournalPath = $ThisJournal->getPath();
	$JournalLink = 'http://'.$_SERVER['SERVER_NAME'].'/index.php/'.$JournalPath;
	$ArticleLink = $JournalLink.'/article/view/'.$ArticleID;
	
	$ArticleSettings = $DAO->retrieve("SELECT * FROM article_settings WHERE article_id=".$ArticleID);
	while (!$ArticleSettings->EOF) {
		if ($ArticleSettings->fields["setting_name"]=="copyrightHolder" && $ArticleSettings->fields["locale"]==$Locale) {
			$ArticleJournal = $ArticleSettings->fields["setting_value"];
		}
		if ($ArticleSettings->fields["setting_name"]=="cleanTitle" && $ArticleSettings->fields["locale"]==$Locale) {
			$ArticleTitle = $ArticleSettings->fields["setting_value"];
		}
		$ArticleSettings->MoveNext();
	}
	
	echo '<div class="latestArtBlock">';
	echo '<a href="'.$ArticleLink.'" class="latestArtTitle">';
	echo $ArticleTitle."</a>";
	echo '</div>';
	
	$ArticlesMega->MoveNext();
}
{/php}
{/if}
</div>
{else}
<div class="block" id="featured">
<span class="blockTitle">{translate key="common.latestArticles"}</span>
{php}
$lastHowMany = 5;
$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
$DAO = new DAO();

$ArticlesMega = $DAO->retrieve("SELECT * FROM articles ORDER BY date_submitted DESC LIMIT ".$lastHowMany);

while (!$ArticlesMega->EOF) {
	$ArticleID = $ArticlesMega->fields["article_id"];
	$JournalID = $ArticlesMega->fields["journal_id"];
	$DateSubmitted = $ArticlesMega->fields["date_submitted"];
	
	$JournalDAO = $DAO->retrieve("SELECT * FROM journals WHERE journal_id=".$JournalID);
	while (!$JournalDAO->EOF) {
		$JournalPath = $JournalDAO->fields["path"];
		$JournalDAO->MoveNext();
	}
	$JournalLink = 'http://'.$_SERVER['SERVER_NAME'].'/index.php/'.$JournalPath;
	$ArticleLink = $JournalLink.'/article/view/'.$ArticleID;
	
	
	$ArticleSettings = $DAO->retrieve("SELECT * FROM article_settings WHERE article_id=".$ArticleID);
	while (!$ArticleSettings->EOF) {		
		if ($ArticleSettings->fields["setting_name"]=="cleanTitle" && $ArticleSettings->fields["locale"]==$Locale) {
			$ArticleTitle = $ArticleSettings->fields["setting_value"];
		}
		$ArticleSettings->MoveNext();
	}

	$JournalSettingsDAO = $DAO->retrieve("SELECT * FROM journal_settings WHERE (journal_id=".$JournalID." AND setting_name='title' AND locale='".$Locale."')");
	$ArticleJournal = $JournalSettingsDAO->fields["setting_value"];
	
	echo '<div class="latestArtBlock">';
	echo '<a href="'.$ArticleLink.'" class="latestArtTitle">';
	echo $ArticleTitle."</a>";
	echo '<a href="'.$JournalLink.'" class="latestArtJournal">'.$ArticleJournal.'</a>';
	echo '</div>';
	
	$ArticlesMega->MoveNext();
}
{/php}
</div>
{/if}
