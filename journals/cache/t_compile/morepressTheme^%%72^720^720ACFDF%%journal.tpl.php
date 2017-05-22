<?php /* Smarty version 2.6.26, created on 2017-05-22 14:33:12
         compiled from index/journal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'index/journal.tpl', 18, false),array('function', 'url', 'index/journal.tpl', 20, false),array('function', 'call_hook', 'index/journal.tpl', 34, false),array('function', 'icon', 'index/journal.tpl', 152, false),array('function', 'mailto', 'index/journal.tpl', 230, false),array('modifier', 'escape', 'index/journal.tpl', 39, false),array('modifier', 'strip_unsafe_html', 'index/journal.tpl', 54, false),array('modifier', 'nl2br', 'index/journal.tpl', 54, false),array('modifier', 'string_format', 'index/journal.tpl', 424, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitleTranslated', $this->_tpl_vars['siteTitle']); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if ($this->_tpl_vars['enableAnnouncementsHomepage']): ?>
		<div id="mobileAnnounHeading"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcementsHome"), $this);?>
</h4></div>
	<div id="announcementsHome">
		<!-- <h3><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcementsHome"), $this);?>
</a></h3> -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "announcement/list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
		<!-- <table class="announcementsMore">
			<tr>
				<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.moreAnnouncements"), $this);?>
</a></td>
			</tr>
		</table> -->
	</div>
<?php endif; ?>

<div id="journalAboutCont">
<div class="journalDescriptionHeading"><h4><?php echo $this->_tpl_vars['currentJournal']->getLocalizedSetting('title'); ?>
</h4></div>
<?php if ($this->_tpl_vars['journalDescription']): ?><div id="journalDescription"><?php echo $this->_tpl_vars['journalDescription']; ?>
</div><?php endif; ?>

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Index::journal"), $this);?>



<?php if ($this->_tpl_vars['homepageImage']): ?>
<br />
<div id="homepageImage"><img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php if ($this->_tpl_vars['homepageImageAltText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.journalHomepageImage.altText"), $this);?>
"<?php endif; ?> /></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['additionalHomeContent']): ?>
<br />
<div id="additionalHomeContent"><?php echo $this->_tpl_vars['additionalHomeContent']; ?>
</div>
<?php endif; ?>

</div>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/js/journalTabSwitch.js"></script>
<div id="JournalHomeTabs">
<div id="JournalHomeTabControl">
	<div id="ShowArchive" class="JournalTab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.archive"), $this);?>
</div>
	<?php if ($this->_tpl_vars['issue'] && $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?><div id="ShowIssue" class="JournalTab active">
	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
	<?php else: ?><div id="ShowIssue" class="JournalTab active"><?php echo $this->_tpl_vars['siteTitle']; ?>
</div><?php endif; ?>
	<div id="ShowAbout" class="JournalTab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</div>
	<div id="ShowEditorial" class="JournalTab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>
</div>
	<div id="ShowSubmit" class="JournalTab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submitArticle"), $this);?>
</div>
</div>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/js/JournalArchiveCollapser.js"></script>
<?php 
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
	echo '<div id="JournalHomeArchiveYearLabel">&raquo;&nbsp;'.$Year.'</div>';
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
 ?>

<div id="JournalAboutTab">
<?php echo $this->_tpl_vars['currentJournal']->getLocalizedSetting('history'); ?>



<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('focusScopeDesc') != ''): ?>
<div id="focusAndScope" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.focusAndScope"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('focusScopeDesc'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>



<div id="sectionPolicies" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</h3>
<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?><?php if (! $this->_tpl_vars['section']->getHideAbout()): ?>
	<h4><?php echo $this->_tpl_vars['section']->getLocalizedTitle(); ?>
</h4>
	<?php if (strlen ( $this->_tpl_vars['section']->getLocalizedPolicy() ) > 0): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getLocalizedPolicy())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
	<?php endif; ?>

	<?php $this->assign('hasEditors', 0); ?>
	<?php $_from = $this->_tpl_vars['sectionEditorEntriesBySection']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sectionEditorEntries']):
?>
		<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['section']->getId()): ?>
			<?php $_from = $this->_tpl_vars['sectionEditorEntries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionEditorEntry']):
?>
				<?php $this->assign('sectionEditor', $this->_tpl_vars['sectionEditorEntry']['user']); ?>
				<?php if (0 == $this->_tpl_vars['hasEditors']++): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>

				<ul>
				<?php endif; ?>
				<li><?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['sectionEditor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['hasEditors']): ?></ul><?php endif; ?>

	<table width="60%">
		<tr>
			<td width="33%"><?php if (! $this->_tpl_vars['section']->getEditorRestricted()): ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this);?>
<?php endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.open"), $this);?>
</td>
			<td width="33%"><?php if ($this->_tpl_vars['section']->getMetaIndexed()): ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this);?>
<?php endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.indexed"), $this);?>
</td>
			<td width="34%"><?php if ($this->_tpl_vars['section']->getMetaReviewed()): ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this);?>
<?php endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.reviewed"), $this);?>
</td>
		</tr>
	</table>
<?php endif; ?><?php endforeach; endif; unset($_from); ?>
</div>

<div class="separator">&nbsp;</div>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('reviewPolicy') != ''): ?><div id="peerReviewProcess" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.peerReviewProcess"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('reviewPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('pubFreqPolicy') != ''): ?>
<div id="publicationFrequency" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.publicationFrequency"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('pubFreqPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_OPEN && $this->_tpl_vars['currentJournal']->getLocalizedSetting('openAccessPolicy') != ''): ?> 
<div id="openAccessPolicy" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('openAccessPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION && $this->_tpl_vars['currentJournal']->getSetting('enableAuthorSelfArchive')): ?> 
<div id="authorSelfArchivePolicy" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorSelfArchive"), $this);?>
</h3> 
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('authorSelfArchivePolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION && $this->_tpl_vars['currentJournal']->getSetting('enableDelayedOpenAccess')): ?>
<div id="delayedOpenAccessPolicy" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccess"), $this);?>
</h3> 
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccessDescription1"), $this);?>
 <?php echo $this->_tpl_vars['currentJournal']->getSetting('delayedOpenAccessDuration'); ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccessDescription2"), $this);?>
</p>
<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('delayedOpenAccessPolicy') != ''): ?>
	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('delayedOpenAccessPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('enableLockss') && $this->_tpl_vars['currentJournal']->getLocalizedSetting('lockssLicense') != ''): ?>
<div id="archiving" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.archiving"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('lockssLicense'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['currentJournal']->getLocalizedSetting('customAboutItems'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['customAboutItems'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customAboutItems']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
        $this->_foreach['customAboutItems']['iteration']++;
?>
	<?php if (! empty ( $this->_tpl_vars['customAboutItem']['title'] )): ?>
		<div id="custom-<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h3>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
		<?php if (! ($this->_foreach['customAboutItems']['iteration'] == $this->_foreach['customAboutItems']['total'])): ?><div class="separator">&nbsp;</div><?php endif; ?>
		</div>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if (! empty ( $this->_tpl_vars['currentJournal']->getLocalizedSetting('contactMailingAddress') )): ?>
<div id="mailingAddress" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.mailingAddress"), $this);?>
</h3>
<?php echo $this->_tpl_vars['currentJournal']->getSetting('mailingAddress'); ?>

</div>
<div id="principalContact">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.principalContact"), $this);?>
</h3>
<p><strong><?php echo $this->_tpl_vars['currentJournal']->getSetting('contactName'); ?>
</strong></p>
<p><?php echo $this->_tpl_vars['currentJournal']->getLocalizedSetting('contactTitle'); ?>
</p>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.email"), $this);?>
: <?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('contactEmail'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'encode' => 'hex'), $this);?>
</p>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.phone"), $this);?>
: <?php echo $this->_tpl_vars['currentJournal']->getSetting('contactPhone'); ?>
</p>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.fax"), $this);?>
: <?php echo $this->_tpl_vars['currentJournal']->getSetting('contactFax'); ?>
</p>
<p><?php echo $this->_tpl_vars['currentJournal']->getLocalizedSetting('contactMailingAddress'); ?>
</p>
</div>
<div id="supportContact">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.supportContact"), $this);?>
</h3>
<p><strong><?php echo $this->_tpl_vars['currentJournal']->getSetting('supportName'); ?>
</b></strong>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.email"), $this);?>
: <?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('supportEmail'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'encode' => 'hex'), $this);?>
</p>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.phone"), $this);?>
: <?php echo $this->_tpl_vars['currentJournal']->getSetting('supportPhone'); ?>
</p>
</div>
<?php endif; ?>


</div>

<div id="JournalEditorialTab">
<div id="editorialTeam" class="block pseudoMenu">
<?php if (count ( $this->_tpl_vars['editors'] ) > 0): ?>
	<div id="editors" class="block">
	<?php if (count ( $this->_tpl_vars['editors'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam">
		<?php $_from = $this->_tpl_vars['editors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['editor']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['editor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['editor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['editor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['sectionEditors'] ) > 0): ?>
	<div id="sectionEditors" class="block">
	<?php if (count ( $this->_tpl_vars['sectionEditors'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam" class="block">
		<?php $_from = $this->_tpl_vars['sectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionEditor']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['sectionEditor']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['sectionEditor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['sectionEditor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['sectionEditor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['layoutEditors'] ) > 0): ?>
	<div id="layoutEditors" class="block">
	<?php if (count ( $this->_tpl_vars['layoutEditors'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam">
		<?php $_from = $this->_tpl_vars['layoutEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['layoutEditor']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['layoutEditor']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['layoutEditor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['layoutEditor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['layoutEditor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['layoutEditor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['copyEditors'] ) > 0): ?>
	<div id="copyEditors" class="block">
	<?php if (count ( $this->_tpl_vars['copyEditors'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditors"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam" class="block">
		<?php $_from = $this->_tpl_vars['copyEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['copyEditor']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['copyEditor']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['copyEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['copyEditor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['copyEditor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['copyEditor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['copyEditor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['proofreaders'] ) > 0): ?>
	<div id="proofreaders" class="block">
	<?php if (count ( $this->_tpl_vars['proofreaders'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreaders"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam" class="block">
		<?php $_from = $this->_tpl_vars['proofreaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['proofreader']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['proofreader']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['proofreader']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['proofreader']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['proofreader']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['proofreader']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['proofreader']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>
</div>
<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::EditorialTeam::Information"), $this);?>


<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
<div id="group" class="pseudoMenu">
	<h3><?php echo $this->_tpl_vars['group']->getLocalizedTitle(); ?>
</h3>
	<?php $this->assign('groupId', $this->_tpl_vars['group']->getId()); ?>
	<?php $this->assign('members', $this->_tpl_vars['teamInfo'][$this->_tpl_vars['groupId']]); ?>

	<ul class="editorialTeam">
		<?php $_from = $this->_tpl_vars['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['member']):
?>
			<?php $this->assign('user', $this->_tpl_vars['member']->getUser()); ?>
			<div class="member"><li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['user']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['user']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['user']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['user']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li></div>
		<?php endforeach; endif; unset($_from); ?>	</ul>
</div>
<?php endforeach; endif; unset($_from); ?>
</div>

<div id="JournalHomeCurrentIssueTab">
<?php if ($this->_tpl_vars['issue'] && $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
		<!-- <h3 class="issueTitle"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'current'), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</a></h3> -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "current.noCurrentIssueDesc"), $this);?>

<?php endif; ?>
</div>

<div id="JournalHomeSubmitTab">
<?php if ($this->_tpl_vars['currentJournal']->getSetting('journalPaymentsEnabled') && ( $this->_tpl_vars['currentJournal']->getSetting('submissionFeeEnabled') || $this->_tpl_vars['currentJournal']->getSetting('fastTrackFeeEnabled') || $this->_tpl_vars['currentJournal']->getSetting('publicationFeeEnabled') )): ?>
	<?php $this->assign('authorFees', 1); ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['currentJournal']->getSetting('disableUserReg')): ?>
	<div id="onlineSubmissions" class="block">
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions"), $this);?>
</h3>
		<p class="callout"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.registrationRequired"), $this);?>
</p>
		<div >
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.haveAccount",'journalTitle' => ((is_array($_tmp=$this->_tpl_vars['siteTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</p>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.login"), $this);?>
</a>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'author','op' => 'submit'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.startNew"), $this);?>
</a>
		</div>
		
		<div >			
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.needAccount"), $this);?>
</p>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.registration"), $this);?>
</a>
		</div>
		

	</div>
<?php endif; ?>

<div class="separator">&nbsp;</div>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('authorGuidelines') != ''): ?>
<div id="authorGuidelines" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('authorGuidelines'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['submissionChecklist']): ?>
	<div id="submissionPreparationChecklist" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissionPreparationChecklist"), $this);?>
</h3>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissionPreparationChecklist.description"), $this);?>
</p>
	<ol>
		<?php $_from = $this->_tpl_vars['submissionChecklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['checklistItem']):
?>
			<li><?php echo ((is_array($_tmp=$this->_tpl_vars['checklistItem']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
	</ol>
	<div class="separator">&nbsp;</div>
	</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('copyrightNotice') != ''): ?>
<div id="copyrightNotice" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('copyrightNotice'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('privacyStatement') != ''): ?><div id="privacyStatement" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('privacyStatement'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['authorFees']): ?>

<div id="authorFees" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.payment.authorFees"), $this);?>
</h3>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorFeesMessage"), $this);?>
</p>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('submissionFeeEnabled')): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('submissionFeeName'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('submissionFee'))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 (<?php echo $this->_tpl_vars['currentJournal']->getSetting('currency'); ?>
)<br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('submissionFeeDescription'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('fastTrackFeeEnabled')): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('fastTrackFeeName'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('fastTrackFee'))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 (<?php echo $this->_tpl_vars['currentJournal']->getSetting('currency'); ?>
)<br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('fastTrackFeeDescription'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('publicationFeeEnabled')): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('publicationFeeName'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('publicationFee'))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 (<?php echo $this->_tpl_vars['currentJournal']->getSetting('currency'); ?>
)<br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('publicationFeeDescription'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('waiverPolicy') != ''): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('waiverPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
	<?php endif; ?>
</div>
<?php endif; ?>
</div>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
