<?php /* Smarty version 2.6.26, created on 2017-04-05 12:05:35
         compiled from search/categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'search/categories.tpl', 23, false),array('modifier', 'escape', 'search/categories.tpl', 23, false),array('modifier', 'count', 'search/categories.tpl', 23, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "navigation.categories"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<br />

<!-- <a name="categories"></a>

<ul>
<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['categoryArray']):
?>
	<?php $this->assign('category', $this->_tpl_vars['categoryArray']['category']); ?>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'category','path' => $this->_tpl_vars['category']->getId()), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['category']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a> (<?php echo count($this->_tpl_vars['categoryArray']['journals']); ?>
)</li>
<?php endforeach; endif; unset($_from); ?>
</ul> -->

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

 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>