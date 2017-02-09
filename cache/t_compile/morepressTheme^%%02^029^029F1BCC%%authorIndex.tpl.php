<?php /* Smarty version 2.6.26, created on 2017-01-18 10:32:12
         compiled from search/authorIndex.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'search/authorIndex.tpl', 16, false),array('function', 'translate', 'search/authorIndex.tpl', 16, false),array('function', 'page_info', 'search/authorIndex.tpl', 53, false),array('function', 'page_links', 'search/authorIndex.tpl', 53, false),array('modifier', 'escape', 'search/authorIndex.tpl', 16, false),array('modifier', 'String_substr', 'search/authorIndex.tpl', 21, false),array('modifier', 'lower', 'search/authorIndex.tpl', 23, false),array('block', 'iterate', 'search/authorIndex.tpl', 19, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "search.authorIndex"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<p><?php $_from = $this->_tpl_vars['alphaList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter']):
?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'authors','searchInitial' => $this->_tpl_vars['letter']), $this);?>
"><?php if ($this->_tpl_vars['letter'] == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></a> <?php endforeach; endif; unset($_from); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'authors'), $this);?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
<?php endif; ?></a></p>

<div id="authors">
<?php $this->_tag_stack[] = array('iterate', array('from' => 'authors','item' => 'author')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('lastFirstLetter', $this->_tpl_vars['firstLetter']); ?>
	<?php $this->assign('firstLetter', ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 1) : String::substr($_tmp, 0, 1))); ?>

	<?php if (((is_array($_tmp=$this->_tpl_vars['lastFirstLetter'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['firstLetter'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp))): ?>
			<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstLetter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
		<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['firstLetter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h3>
			</div>
	<?php endif; ?>

	<?php $this->assign('lastAuthorName', $this->_tpl_vars['authorName']); ?>
	<?php $this->assign('lastAuthorCountry', $this->_tpl_vars['authorCountry']); ?>

	<?php $this->assign('authorAffiliation', $this->_tpl_vars['author']->getLocalizedAffiliation()); ?>
	<?php $this->assign('authorCountry', $this->_tpl_vars['author']->getCountry()); ?>

	<?php $this->assign('authorFirstName', $this->_tpl_vars['author']->getFirstName()); ?>
	<?php $this->assign('authorMiddleName', $this->_tpl_vars['author']->getMiddleName()); ?>
	<?php $this->assign('authorLastName', $this->_tpl_vars['author']->getLastName()); ?>
	<?php $this->assign('authorName', ($this->_tpl_vars['authorLastName']).", ".($this->_tpl_vars['authorFirstName'])); ?>

	<?php if ($this->_tpl_vars['authorMiddleName'] != ''): ?><?php $this->assign('authorName', ($this->_tpl_vars['authorName'])." ".($this->_tpl_vars['authorMiddleName'])); ?><?php endif; ?>
	<?php echo '<a href="'; ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'authors','path' => 'view','firstName' => $this->_tpl_vars['authorFirstName'],'middleName' => $this->_tpl_vars['authorMiddleName'],'lastName' => $this->_tpl_vars['authorLastName'],'affiliation' => $this->_tpl_vars['authorAffiliation'],'country' => $this->_tpl_vars['authorCountry']), $this);?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['authorName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['authorAffiliation']): ?><?php echo ', '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['authorAffiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['lastAuthorName'] == $this->_tpl_vars['authorName'] && $this->_tpl_vars['lastAuthorCountry'] != $this->_tpl_vars['authorCountry']): ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['authorCountry']): ?><?php echo ' ('; ?><?php echo $this->_tpl_vars['author']->getCountryLocalized(); ?><?php echo ')'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

	<br/>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if (! $this->_tpl_vars['authors']->wasEmpty()): ?>
	<br />
	<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['authors']), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'authors','iterator' => $this->_tpl_vars['authors'],'name' => 'authors','searchInitial' => $this->_tpl_vars['searchInitial']), $this);?>

<?php else: ?>
<?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
