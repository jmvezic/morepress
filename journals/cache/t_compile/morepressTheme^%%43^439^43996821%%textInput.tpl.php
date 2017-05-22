<?php /* Smarty version 2.6.26, created on 2017-04-05 14:18:05
         compiled from form/textInput.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'uniqid', 'form/textInput.tpl', 11, false),array('modifier', 'escape', 'form/textInput.tpl', 11, false),)), $this); ?>

<?php $this->assign('uniqId', ((is_array($_tmp=((is_array($_tmp="-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
<div<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
<?php if ($this->_tpl_vars['FBV_multilingual'] && count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<script type="text/javascript">
	$(function() {
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
').pkpHandler(
			'$.pkp.controllers.form.MultilingualInputHandler'
			);
	});
	</script>
		<span id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
" class="localization_popover_container">
		<?php echo '<input type="'; ?><?php if ($this->_tpl_vars['FBV_isPassword']): ?><?php echo 'password'; ?><?php else: ?><?php echo 'text'; ?><?php endif; ?><?php echo '"'; ?><?php echo $this->_tpl_vars['FBV_textInputParams']; ?><?php echo 'class="localizable '; ?><?php if ($this->_tpl_vars['FBV_class']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['FBV_validation']): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['FBV_validation']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['currentLocale']): ?><?php echo ' locale_'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['FBV_disabled']): ?><?php echo ' disabled="disabled"'; ?><?php endif; ?><?php echo 'value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo '"name="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo '['; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo ']"id="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo '-'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo ''; ?><?php echo $this->_tpl_vars['uniqId']; ?><?php echo '"/>'; ?>


		<?php echo $this->_tpl_vars['FBV_label_content']; ?>


		<span>
			<div class="localization_popover">
				<?php $_from = $this->_tpl_vars['formLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisFormLocale'] => $this->_tpl_vars['thisFormLocaleName']):
?><?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['thisFormLocale']): ?>
					<?php echo '<input	type="'; ?><?php if ($this->_tpl_vars['FBV_isPassword']): ?><?php echo 'password'; ?><?php else: ?><?php echo 'text'; ?><?php endif; ?><?php echo '"'; ?><?php echo $this->_tpl_vars['FBV_textInputParams']; ?><?php echo 'placeholder="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocaleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo '"class="multilingual_extra flag flag_'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo ''; ?><?php if ($this->_tpl_vars['FBV_sizeInfo']): ?><?php echo ' '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_sizeInfo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['FBV_disabled']): ?><?php echo ' disabled="disabled"'; ?><?php endif; ?><?php echo 'value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['thisFormLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo '"name="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo '['; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo ']"id="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo '-'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo ''; ?><?php echo $this->_tpl_vars['uniqId']; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['FBV_tabIndex']): ?><?php echo ' tabindex="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_tabIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?><?php echo '"'; ?><?php endif; ?><?php echo '/>'; ?>

					<label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
" class="locale">(<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocaleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)</label>
				<?php endif; ?><?php endforeach; endif; unset($_from); ?>
			</div>
		</span>
	</span>
<?php else: ?>
		<input	type="<?php if ($this->_tpl_vars['FBV_isPassword']): ?>password<?php else: ?>text<?php endif; ?>"
		<?php echo $this->_tpl_vars['FBV_textInputParams']; ?>

		class="field text<?php if ($this->_tpl_vars['FBV_class']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['FBV_validation']): ?> <?php echo $this->_tpl_vars['FBV_validation']; ?>
<?php endif; ?>"
		<?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?>
		name="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['FBV_multilingual']): ?>[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]<?php endif; ?>"
		value="<?php if ($this->_tpl_vars['FBV_multilingual']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>"
		id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
"
		<?php if ($this->_tpl_vars['FBV_tabIndex']): ?> tabindex="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_tabIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>
	/>

	<span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span>
<?php endif; ?>
</div>