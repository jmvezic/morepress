<?php /* Smarty version 2.6.26, created on 2017-01-17 21:15:24
         compiled from file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 27, false),array('function', 'url', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 30, false),array('function', 'page_info', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 88, false),array('function', 'page_links', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 89, false),array('block', 'iterate', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 51, false),array('modifier', 'date_format', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 55, false),array('modifier', 'escape', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 56, false),array('modifier', 'truncate', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 57, false),array('modifier', 'strip_unsafe_html', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 58, false),array('modifier', 'default', 'file:/home/morepress/www/plugins/generic/referral/authorReferrals.tpl', 59, false),)), $this); ?>

<div class="separator"></div>

<script type="text/javascript">
<?php echo '
<!--
function toggleChecked() {
	var elements = document.getElementsByName("referralId[]");
	for (var i=0; i < elements.length; i++) {
			elements[i].checked = !elements[i].checked;
	}
}
// -->
'; ?>

</script>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.referrals"), $this);?>
</h3>

<ul class="menu">
	<li<?php if ($this->_tpl_vars['referralFilter'] == null): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('referralFilter' => null), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.all"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['referralFilter'] == @REFERRAL_STATUS_NEW): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('referralFilter' => @REFERRAL_STATUS_NEW), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.new"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['referralFilter'] == @REFERRAL_STATUS_ACCEPT): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('referralFilter' => @REFERRAL_STATUS_ACCEPT), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.accepted"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['referralFilter'] == @REFERRAL_STATUS_DECLINE): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('referralFilter' => @REFERRAL_STATUS_DECLINE), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.declined"), $this);?>
</a></li>
</ul>

<div id="referrals">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'referral','op' => 'bulkAction'), $this);?>
" method="post">
<table width="100%" class="listing">
	<tr><td class="headseparator" colspan="8">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="3%">&nbsp;</td>
		<td width="7%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.dateAdded"), $this);?>
</td>
		<td width="3%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.count"), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.url"), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.article"), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.title"), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.status"), $this);?>
</td>
		<td width="10%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td class="headseparator" colspan="8">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'referrals','item' => 'referral')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['referral']->getArticleId()); ?>
	<tr valign="top">
		<td><input type="checkbox" name="referralId[]" value="<?php echo $this->_tpl_vars['referral']->getId(); ?>
"/></td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['referral']->getDateAdded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['referral']->getLinkCount())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['referral']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['referral']->getUrl())) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 50)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['articleTitles'][$this->_tpl_vars['articleId']])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['referral']->getReferralName())) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 50)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['referral']->getStatusKey()), $this);?>
</td>
		<td align="right">
			<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'referral','op' => 'editReferral','path' => $this->_tpl_vars['referral']->getId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a class="action" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'referral','op' => 'deleteReferral','path' => $this->_tpl_vars['referral']->getId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
		</td>
	</tr>
	<tr valign="top">
		<td colspan="8" class="<?php if ($this->_tpl_vars['referrals']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['referrals']->wasEmpty()): ?>
	<tr valign="top">
		<td colspan="8" class="nodata">
			<?php if ($this->_tpl_vars['referralFilter'] == null): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.all.empty"), $this);?>

			<?php elseif ($this->_tpl_vars['referralFilter'] == @REFERRAL_STATUS_NEW): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.new.empty"), $this);?>

			<?php elseif ($this->_tpl_vars['referralFilter'] == @REFERRAL_STATUS_ACCEPT): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.accept.empty"), $this);?>

			<?php else: ?>				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.decline.empty"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td colspan="8" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="4" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['referrals']), $this);?>
</td>
		<td colspan="4" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'referrals','name' => 'referrals','iterator' => $this->_tpl_vars['referrals'],'referralFilter' => $this->_tpl_vars['referralFilter']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
<p>
	<input type="submit" name="accept" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.accept"), $this);?>
" class="button" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.accept.confirm"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"/>
	<input type="submit" name="decline" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.decline"), $this);?>
" class="button" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.decline.confirm"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"/>
	<input type="submit" name="delete" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"/>
	<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.selectAll"), $this);?>
" class="button" onclick="toggleChecked()" />
</p>
</form>
</div>