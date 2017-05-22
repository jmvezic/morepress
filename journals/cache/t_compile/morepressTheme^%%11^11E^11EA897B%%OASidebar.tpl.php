<?php /* Smarty version 2.6.26, created on 2017-05-22 14:00:39
         compiled from common/OASidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'common/OASidebar.tpl', 1, false),array('function', 'translate', 'common/OASidebar.tpl', 3, false),)), $this); ?>
<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>
"><div class="block" id="OA">
<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/OAblue.png" />
<span class="moreOpen"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "morepress.moreOpen"), $this);?>
</span>
</div></a>