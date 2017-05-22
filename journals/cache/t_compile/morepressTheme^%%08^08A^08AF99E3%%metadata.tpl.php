<?php /* Smarty version 2.6.26, created on 2017-04-05 10:05:14
         compiled from rt/metadata.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_unsafe_html', 'rt/metadata.tpl', 16, false),array('modifier', 'escape', 'rt/metadata.tpl', 42, false),array('modifier', 'nl2br', 'rt/metadata.tpl', 74, false),array('modifier', 'date_format', 'rt/metadata.tpl', 98, false),array('modifier', 'to_array', 'rt/metadata.tpl', 178, false),array('function', 'translate', 'rt/metadata.tpl', 23, false),array('function', 'url', 'rt/metadata.tpl', 138, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "rt.viewMetadata"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</h3>

<br />

<table class="listing" width="100%">
	<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
	<tr valign="top">
		<td class="heading" width="25%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore"), $this);?>
</td>
		<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkpItem"), $this);?>
</td>
		<td class="heading" width="50%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.forThisDocument"), $this);?>
</td>
	</tr>
	<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>

<tr valign="top">
	<td>1.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.title"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.title"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</td>
</tr>
<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>2.</td>
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.primaryAuthor"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.primaryAuthor"), $this);?>
</td>
	<td>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['author']->getLocalizedAffiliation()): ?>; <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['author']->getCountry()): ?>; <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getCountryLocalized())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
		</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>3.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.subject"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.discipline"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedDiscipline())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>3.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.subject"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.subject"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
</tr>
<?php if ($this->_tpl_vars['article']->getLocalizedSubjectClass()): ?>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>3.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.subject"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.subjectClass"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubjectClass())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
</tr>
<?php endif; ?>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>4.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.description"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.abstract"), $this);?>
</td>
	<td><?php if ($this->_tpl_vars['article']->getLocalizedAbstract()): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<?php endif; ?></td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>5.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.publisher"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.publisher"), $this);?>
</td>
	<?php $this->assign('pubUrl', ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('publisherUrl'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
	<td><?php if ($this->_tpl_vars['pubUrl']): ?><a target="_new" href="<?php echo $this->_tpl_vars['pubUrl']; ?>
"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('publisherInstitution'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['pubUrl']): ?></a><?php endif; ?></td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>6.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.contributor"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.sponsors"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSponsor())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>7.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.date"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.date"), $this);?>
</td>
	<td>
		<?php if ($this->_tpl_vars['article']->getDatePublished()): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

		<?php elseif ($this->_tpl_vars['issue'] && $this->_tpl_vars['issue']->getDatePublished()): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

		<?php elseif ($this->_tpl_vars['issue']): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		<?php else: ?>
			&mdash;
		<?php endif; ?>
	</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>8.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.type"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.genre"), $this);?>
</td>
	<td><?php if ($this->_tpl_vars['section'] && $this->_tpl_vars['section']->getLocalizedIdentifyType()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getLocalizedIdentifyType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.peerReviewed"), $this);?>
<?php endif; ?></td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>8.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.type"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.type"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>9.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.format"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.format"), $this);?>
</td>
	<td>
		<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleys'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleys']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleys']['iteration']++;
?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (! ($this->_foreach['galleys']['iteration'] == $this->_foreach['galleys']['total'])): ?>, <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>10.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.identifier"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.uri"), $this);?>
</td>
	<td><a target="_new" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articleId']), $this);?>
"><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articleId']), $this);?>
</a></td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
	<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
		<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['article'])); ?>
	<?php else: ?>
		<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['article'],true)); ?>	<?php endif; ?>
	<?php if ($this->_tpl_vars['pubId']): ?>
		<tr valign="top">
			<td>10.</td>
			<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.identifier"), $this);?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
			<td><a target="_new" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td>
		</tr>
		<tr><td colspan="4" class="separator">&nbsp;</td></tr>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<tr valign="top">
	<td>11.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.source"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.source"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['issue']): ?>; <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<?php endif; ?></td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>12.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.language"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.language"), $this);?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLanguage())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<?php if ($this->_tpl_vars['journalRt']->getSupplementaryFiles()): ?>
<tr valign="top">
	<td>13.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.relation"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.suppFiles"), $this);?>
</td>
	<td>
		<?php $_from = $this->_tpl_vars['article']->getSuppFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['suppFile']):
?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'downloadSuppFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getBestSuppFileId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getBestSuppFileId($this->_tpl_vars['currentJournal'])))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getSuppFileTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a> (<?php echo $this->_tpl_vars['suppFile']->getNiceFileSize(); ?>
)<br />
		<?php endforeach; endif; unset($_from); ?>
	</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<?php endif; ?>
<tr valign="top">
	<td>14.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.coverage"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.coverage"), $this);?>
</td>
	<td>
		<?php if ($this->_tpl_vars['article']->getLocalizedCoverageGeo()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverageGeo())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php $this->assign('notFirstItem', 1); ?><?php endif; ?><?php if ($this->_tpl_vars['article']->getLocalizedCoverageChron()): ?><?php if ($this->_tpl_vars['notFirstItem']): ?>, <br/><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverageChron())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php $this->assign('notFirstItem', 1); ?><?php endif; ?><?php if ($this->_tpl_vars['article']->getLocalizedCoverageSample()): ?><?php if ($this->_tpl_vars['notFirstItem']): ?>, <br/><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverageSample())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php $this->assign('notFirstItem', 1); ?><?php endif; ?>
	</td>
</tr>
<tr><td colspan="4" class="separator">&nbsp;</td></tr>
<tr valign="top">
	<td>15.</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.dublinCore.rights"), $this);?>
</td>
	<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.metadata.pkp.copyright"), $this);?>
</td>
	<td>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyrightStatement",'copyrightHolder' => ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCopyrightHolder())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'copyrightYear' => ((is_array($_tmp=$this->_tpl_vars['article']->getCopyrightYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
<br/>
		<?php if ($this->_tpl_vars['ccLicenseBadge']): ?>
			<?php echo $this->_tpl_vars['ccLicenseBadge']; ?>

		<?php elseif ($this->_tpl_vars['article']->getLicenseURL()): ?>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLicenseURL())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLicenseURL())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
		<?php endif; ?>
	</td>
</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
