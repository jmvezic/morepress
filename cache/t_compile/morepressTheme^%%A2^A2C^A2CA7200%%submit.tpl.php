<?php /* Smarty version 2.6.26, created on 2017-02-09 08:00:49
         compiled from common/submit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/submit.tpl', 6, false),array('function', 'url', 'common/submit.tpl', 10, false),)), $this); ?>


<?php if (( $this->_tpl_vars['currentJournal'] == null )): ?>

<!-- <div id="submit-button" class="largeButton">
	<a href="mailto:fpehar@unios.hr"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.contact"), $this);?>
</a>
</div> -->
<?php else: ?>
<div id="submit-button" class="largeButton">
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submitArticle"), $this);?>
</em></a>
</div>
<?php endif; ?>