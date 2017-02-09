<?php /* Smarty version 2.6.26, created on 2017-01-18 14:15:00
         compiled from manager/people/searchUsers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/people/searchUsers.tpl', 13, false),array('function', 'url', 'manager/people/searchUsers.tpl', 17, false),array('function', 'html_options_translate', 'manager/people/searchUsers.tpl', 51, false),array('function', 'sort_heading', 'manager/people/searchUsers.tpl', 111, false),array('function', 'icon', 'manager/people/searchUsers.tpl', 127, false),array('function', 'page_info', 'manager/people/searchUsers.tpl', 153, false),array('function', 'page_links', 'manager/people/searchUsers.tpl', 154, false),array('modifier', 'translate', 'manager/people/searchUsers.tpl', 13, false),array('modifier', 'assign', 'manager/people/searchUsers.tpl', 13, false),array('modifier', 'escape', 'manager/people/searchUsers.tpl', 26, false),array('modifier', 'concat', 'manager/people/searchUsers.tpl', 125, false),array('modifier', 'to_array', 'manager/people/searchUsers.tpl', 126, false),array('modifier', 'truncate', 'manager/people/searchUsers.tpl', 127, false),array('block', 'iterate', 'manager/people/searchUsers.tpl', 117, false),)), $this); ?>
<?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.roleEnrollment",'role' => ((is_array($_tmp=$this->_tpl_vars['roleName'])) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<form id="disableUser" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'disableUser'), $this);?>
">
	<input type="hidden" name="reason" value=""/>
	<input type="hidden" name="userId" value=""/>
</form>

<script type="text/javascript">
<?php echo '
<!--
function confirmAndPrompt(userId) {
	var reason = prompt(\''; ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.confirmDisable"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
<?php echo '\');
	if (reason == null) return;

	document.getElementById(\'disableUser\').reason.value = reason;
	document.getElementById(\'disableUser\').userId.value = userId;

	document.getElementById(\'disableUser\').submit();
}

function toggleChecked() {
	var elements = document.getElementById(\'enroll\').elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].name == \'users[]\') {
			elements[i].checked = !elements[i].checked;
		}
	}
}
// -->
'; ?>

</script>

<?php if (! $this->_tpl_vars['omitSearch']): ?>
	<form method="post" id="submit" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSearch'), $this);?>
">
	<input type="hidden" name="roleId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['roleId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<select name="searchField" size="1" class="selectMenu">
			<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['fieldOptions'],'selected' => $this->_tpl_vars['searchField']), $this);?>

		</select>
		<select name="searchMatch" size="1" class="selectMenu">
			<option value="contains"<?php if ($this->_tpl_vars['searchMatch'] == 'contains'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.contains"), $this);?>
</option>
			<option value="is"<?php if ($this->_tpl_vars['searchMatch'] == 'is'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.is"), $this);?>
</option>
			<option value="startsWith"<?php if ($this->_tpl_vars['searchMatch'] == 'startsWith'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.startsWith"), $this);?>
</option>
		</select>
		<input type="text" size="15" name="search" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />&nbsp;<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" />
	</form>

	<p><?php $_from = $this->_tpl_vars['alphaList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter']):
?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSearch','searchInitial' => $this->_tpl_vars['letter'],'roleId' => $this->_tpl_vars['roleId']), $this);?>
"><?php if ($this->_tpl_vars['letter'] == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></a> <?php endforeach; endif; unset($_from); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollSearch','roleId' => $this->_tpl_vars['roleId']), $this);?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
<?php endif; ?></a></p>
<?php endif; ?>

<form id="enroll" onsubmit="return enrollUser(0)" action="<?php if ($this->_tpl_vars['roleId']): ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enroll','path' => $this->_tpl_vars['roleId']), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enroll'), $this);?>
<?php endif; ?>" method="post">
<?php if (! $this->_tpl_vars['roleId']): ?>
	<p>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollUserAs"), $this);?>
 <select name="roleId" size="1"  class="selectMenu">
		<option value=""></option>
		<option value="<?php echo @ROLE_ID_JOURNAL_MANAGER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.manager"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_EDITOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_SECTION_EDITOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this);?>
</option>
		<?php if ($this->_tpl_vars['roleSettings']['useLayoutEditors']): ?>
			<option value="<?php echo @ROLE_ID_LAYOUT_EDITOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</option>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['roleSettings']['useCopyeditors']): ?>
			<option value="<?php echo @ROLE_ID_COPYEDITOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
</option>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['roleSettings']['useProofreaders']): ?>
			<option value="<?php echo @ROLE_ID_PROOFREADER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</option>
		<?php endif; ?>
		<option value="<?php echo @ROLE_ID_REVIEWER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_AUTHOR; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_READER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reader"), $this);?>
</option>
		<option value="<?php echo @ROLE_ID_SUBSCRIPTION_MANAGER; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.subscriptionManager"), $this);?>
</option>

	</select>
	</p>
	<script type="text/javascript">
	<!--
	function enrollUser(userId) {
		var fakeUrl = '<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enroll','path' => 'ROLE_ID','userId' => 'USER_ID'), $this);?>
';
		if (document.getElementById('enroll').roleId.options[document.getElementById('enroll').roleId.selectedIndex].value == '') {
			alert("<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.mustChooseRole"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
");
			return false;
		}
		if (userId != 0){
		fakeUrl = fakeUrl.replace('ROLE_ID', document.getElementById('enroll').roleId.options[document.getElementById('enroll').roleId.selectedIndex].value);
		fakeUrl = fakeUrl.replace('USER_ID', userId);
		location.href = fakeUrl;
	}
	}
	// -->
	</script>
<?php endif; ?>

<div id="users">
<table width="100%" class="listing">
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="5%">&nbsp;</td>
	<td width="20%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "user.username",'sort' => 'username'), $this);?>
</td>
	<td width="25%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "user.name",'sort' => 'name'), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "user.email",'sort' => 'email'), $this);?>
</td>
	<td width="30%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
</tr>
<tr><td colspan="5" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'users','item' => 'user')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->assign('userid', $this->_tpl_vars['user']->getId()); ?>
<?php $this->assign('stats', $this->_tpl_vars['statistics'][$this->_tpl_vars['userid']]); ?>
<tr valign="top">
	<td><input type="checkbox" name="users[]" value="<?php echo $this->_tpl_vars['user']->getId(); ?>
" /></td>
	<td><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'userProfile','path' => $this->_tpl_vars['userid']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUsername())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	<td class="nowrap">
		<?php $this->assign('emailString', ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('concat', true, $_tmp, " <", $this->_tpl_vars['user']->getEmail(), ">") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, " <", $this->_tpl_vars['user']->getEmail(), ">"))); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

		<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 20, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
&nbsp;<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

	</td>
	<td align="right" class="nowrap">
		<?php if ($this->_tpl_vars['roleId']): ?>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enroll','path' => $this->_tpl_vars['roleId'],'userId' => $this->_tpl_vars['user']->getId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enroll"), $this);?>
</a>
		<?php else: ?>
		<a href="#" onclick="enrollUser(<?php echo $this->_tpl_vars['user']->getId(); ?>
)" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enroll"), $this);?>
</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['thisUser']->getId() != $this->_tpl_vars['user']->getId()): ?>
			<?php if ($this->_tpl_vars['user']->getDisabled()): ?>
				|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enableUser','path' => $this->_tpl_vars['user']->getId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enable"), $this);?>
</a>
			<?php else: ?>
				|&nbsp;<a href="javascript:confirmAndPrompt(<?php echo $this->_tpl_vars['user']->getId(); ?>
)" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.disable"), $this);?>
</a>
			<?php endif; ?>
		<?php endif; ?>
	</td>
</tr>
<tr><td colspan="5" class="<?php if ($this->_tpl_vars['users']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['users']->wasEmpty()): ?>
	<tr>
	<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr><td colspan="5" class="endseparator">&nbsp;</td></tr>
<?php else: ?>
	<tr>
		<td colspan="3" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['users']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'users','name' => 'users','iterator' => $this->_tpl_vars['users'],'searchInitial' => $this->_tpl_vars['searchInitial'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'roleId' => $this->_tpl_vars['roleId'],'sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
</div>

<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.enrollSelected"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.selectAll"), $this);?>
" class="button" onclick="toggleChecked()" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','escape' => false), $this);?>
'" />

</form>


<?php if ($this->_tpl_vars['backLink']): ?>
<a href="<?php echo $this->_tpl_vars['backLink']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['backLinkLabel'])), $this);?>
</a>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
