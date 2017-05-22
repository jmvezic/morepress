<?php /* Smarty version 2.6.26, created on 2017-05-22 14:02:30
         compiled from index/site.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'index/site.tpl', 24, false),array('function', 'translate', 'index/site.tpl', 24, false),array('function', 'page_info', 'index/site.tpl', 93, false),array('function', 'page_links', 'index/site.tpl', 94, false),array('modifier', 'escape', 'index/site.tpl', 24, false),)), $this); ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['siteTitle']): ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', $this->_tpl_vars['siteTitle']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('pageDisplayed', 'site'); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>




<a name="journals"></a>

<!-- <?php if ($this->_tpl_vars['useAlphalist']): ?>
	<p><?php $_from = $this->_tpl_vars['alphaList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter']):
?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('searchInitial' => $this->_tpl_vars['letter'],'sort' => 'title'), $this);?>
"><?php if ($this->_tpl_vars['letter'] == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></a> <?php endforeach; endif; unset($_from); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array(), $this);?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
<?php endif; ?></a></p>
<?php endif; ?> -->

<?php if ($this->_tpl_vars['journals']->wasEmpty()): ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.noJournals"), $this);?>

<?php endif; ?> 

<div id="indexJournalsList">


<?php 

$AppLocale = new AppLocale();
$Locale = $AppLocale->getLocale();
$DAO = new DAO();
$JournalDAO = new JournalDAO();

$Journals = $DAO->retrieve("SELECT journals.journal_id, issues.date_published FROM journals LEFT JOIN issues ON journals.journal_id = issues.journal_id GROUP BY journals.journal_id ORDER BY MAX(issues.date_published) DESC");

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
	
	
	echo '<div id="jourThumb"><img src="/journals/'.$JourThumbPath.'" alt="'.$JourAltText.'" /></div>';	
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

 ?>

</div>

<div id="journalListPageInfo"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['journals']), $this);?>
</div>
<div id="journalListPageLinks"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'journals','name' => 'journals','iterator' => $this->_tpl_vars['journals']), $this);?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
