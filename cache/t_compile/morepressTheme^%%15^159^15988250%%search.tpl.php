<?php /* Smarty version 2.6.26, created on 2017-02-09 08:00:46
         compiled from common/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'common/search.tpl', 11, false),array('function', 'translate', 'common/search.tpl', 12, false),)), $this); ?>


<div id="searchbar">
<form id="simpleSearchForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search','op' => 'search'), $this);?>
">							
	<input name="query" type="text" aria-label="Search" value="" placeholder="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.searchTerm"), $this);?>
" class="textField" />
	<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
</div>