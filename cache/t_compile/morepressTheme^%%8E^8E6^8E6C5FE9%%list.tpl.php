<?php /* Smarty version 2.6.26, created on 2017-01-17 20:01:51
         compiled from announcement/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'announcement/list.tpl', 17, false),array('function', 'translate', 'announcement/list.tpl', 22, false),array('function', 'url', 'announcement/list.tpl', 24, false),array('block', 'iterate', 'announcement/list.tpl', 18, false),array('modifier', 'nl2br', 'announcement/list.tpl', 21, false),)), $this); ?>
<script type="text/javascript" src="/plugins/themes/morepress/js/announSlider.js"></script>


<div id="slides">
  <ul>

<?php echo smarty_function_counter(array('start' => 1,'skip' => 1,'assign' => 'count'), $this);?>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'announcements','item' => 'announcement')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if (! $this->_tpl_vars['numAnnouncementsHomepage'] || $this->_tpl_vars['count'] <= $this->_tpl_vars['numAnnouncementsHomepage']): ?>
	<?php if ($this->_tpl_vars['count'] == 1): ?>
		<span class="announShort"><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedDescriptionShort())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
		<!-- <span class="announPoster"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.posted"), $this);?>
: <?php echo $this->_tpl_vars['announcement']->getDatePosted(); ?>
</span> -->
			<?php if ($this->_tpl_vars['announcement']->getLocalizedDescription() != null): ?>
				<a class="announMore" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement','op' => 'view','path' => $this->_tpl_vars['announcement']->getId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.viewLink"), $this);?>
</a>
			<?php endif; ?>
	<?php endif; ?>
	<?php endif; ?>
	</li>
	<?php echo smarty_function_counter(array(), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['announcements']->wasEmpty()): ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.noneExist"), $this);?>

<?php endif; ?>
  </ul>
</div>