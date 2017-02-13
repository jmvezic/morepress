<?php /* Smarty version 2.6.26, created on 2017-02-13 12:48:35
         compiled from common/loadingContainer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/loadingContainer.tpl', 14, false),)), $this); ?>

<div class="loading_container">
	<div class="pkp_helpers_progressIndicator"></div>
	<span class="message"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.loading"), $this);?>
</span>
</div>