<?php /* Smarty version 2.6.26, created on 2017-04-05 06:06:13
         compiled from issue/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'issue/view.tpl', 13, false),array('function', 'url', 'issue/view.tpl', 25, false),array('modifier', 'to_array', 'issue/view.tpl', 25, false),array('modifier', 'assign', 'issue/view.tpl', 25, false),array('modifier', 'escape', 'issue/view.tpl', 33, false),array('modifier', 'strip_unsafe_html', 'issue/view.tpl', 34, false),array('modifier', 'nl2br', 'issue/view.tpl', 34, false),)), $this); ?>
<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && $this->_tpl_vars['showToc']): ?>
	<div id="accessKey">
		<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.openAccess"), $this);?>
&nbsp;
		<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
		<?php if ($this->_tpl_vars['purchaseArticleEnabled']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionOrFeeAccess"), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionAccess"), $this);?>

		<?php endif; ?>
	</div>
<?php endif; ?>
<?php if (! $this->_tpl_vars['showToc'] && $this->_tpl_vars['issue']): ?>
	<?php if ($this->_tpl_vars['issueId']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['issueId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, 'showToc') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'showToc'))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

	<?php else: ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'current','path' => 'showToc'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

	<?php endif; ?>
	<ul class="menu">
		<li><a href="<?php echo $this->_tpl_vars['currentUrl']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
	</ul>
	<br />
	<?php if ($this->_tpl_vars['coverPagePath']): ?><div id="issueCoverImage"><a href="<?php echo $this->_tpl_vars['currentUrl']; ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getFileName($this->_tpl_vars['locale']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['coverPageAltText'] != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?> alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.coverPage.altText"), $this);?>
"<?php endif; ?><?php if ($this->_tpl_vars['width']): ?> width="<?php echo ((is_array($_tmp=$this->_tpl_vars['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['height']): ?> height="<?php echo ((is_array($_tmp=$this->_tpl_vars['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>/></a></div><?php endif; ?>
	<div id="issueCoverDescription"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverPageDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
<?php elseif ($this->_tpl_vars['issue']): ?>
	<?php if ($this->_tpl_vars['issue']->getLocalizedDescription()): ?>
	<div id="issueDescription" class="block"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['issueGalleys']): ?>
		<h3 class="issue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.fullIssue"), $this);?>
</h3>
		<?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['issue']->getAccessStatus() == @ISSUE_ACCESS_OPEN || $this->_tpl_vars['subscribedUser'] || $this->_tpl_vars['subscribedDomain'] || ( $this->_tpl_vars['subscriptionExpiryPartial'] && $this->_tpl_vars['issueExpiryPartial'] ) )): ?>
			<?php $this->assign('hasAccess', 1); ?>
		<?php else: ?>
			<?php $this->assign('hasAccess', 0); ?>
		<?php endif; ?>
		<table class="tocArticle" width="100%">
		<tr valign="top">
			<td class="tocTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.viewIssueDescription"), $this);?>
</td>
			<td class="tocGalleys">
			<?php if ($this->_tpl_vars['hasAccess'] || ( $this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] )): ?>
				<?php $_from = $this->_tpl_vars['issueGalleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['issueGalley']):
?>
					<?php if ($this->_tpl_vars['issueGalley']->isPdfGalley()): ?>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'viewIssue','path' => ((is_array($_tmp=$this->_tpl_vars['issue']->getBestIssueId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['issueGalley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['issueGalley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['issueGalley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
					<?php else: ?>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'viewDownloadInterstitial','path' => ((is_array($_tmp=$this->_tpl_vars['issue']->getBestIssueId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['issueGalley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['issueGalley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['issueGalley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && $this->_tpl_vars['restrictOnlyPdf']): ?>
						<?php if ($this->_tpl_vars['issue']->getAccessStatus() == @ISSUE_ACCESS_OPEN || ! $this->_tpl_vars['issueGalley']->isPdfGalley()): ?>
							<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
						<?php else: ?>
							<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
						<?php endif; ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && ! $this->_tpl_vars['restrictOnlyPdf']): ?>
					<?php if ($this->_tpl_vars['issue']->getAccessStatus() == @ISSUE_ACCESS_OPEN): ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
					<?php else: ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
			</td>
		</tr>
		</table>
		<br />
	<?php endif; ?>
	<h3 class="issue"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</h3>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/issue.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "current.noCurrentIssueDesc"), $this);?>

<?php endif; ?>