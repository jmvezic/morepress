<?php /* Smarty version 2.6.26, created on 2017-02-10 11:27:12
         compiled from common/morePressRecentArticles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/morePressRecentArticles.tpl', 4, false),)), $this); ?>
<?php if (( $this->_tpl_vars['currentJournal'] )): ?>
<?php if (( $this->_tpl_vars['issue'] )): ?>
<div class="block" id="featured">
<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.latestArticles"), $this);?>
</span>
<?php 
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
	
	if (!empty($ArticleTitle)) {
	echo '<div class="latestArtBlock">';
	echo '<a href="'.$ArticleLink.'" class="latestArtTitle">';
	echo $ArticleTitle."</a>";
	echo '</div>';
	}
	
	$ArticlesMega->MoveNext();
}
 ?>
</div>
<?php endif; ?>
<?php else: ?>
<div class="block" id="featured">
<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.latestArticles"), $this);?>
</span>
<?php 
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
	
	if (!empty($ArticleTitle)) {
	echo '<div class="latestArtBlock">';
	echo '<a href="'.$ArticleLink.'" class="latestArtTitle">';
	echo $ArticleTitle."</a>";
	echo '<a href="'.$JournalLink.'" class="latestArtJournal">'.$ArticleJournal.'</a>';
	echo '</div>';
	}
	
	$ArticlesMega->MoveNext();
}
 ?>
</div>
<?php endif; ?>