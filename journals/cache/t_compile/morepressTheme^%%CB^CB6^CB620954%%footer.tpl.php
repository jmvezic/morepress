<?php /* Smarty version 2.6.26, created on 2017-05-17 15:24:53
         compiled from common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/footer.tpl', 24, false),array('function', 'call_hook', 'common/footer.tpl', 31, false),array('function', 'url', 'common/footer.tpl', 64, false),array('function', 'get_debug_info', 'common/footer.tpl', 126, false),array('modifier', 'escape', 'common/footer.tpl', 64, false),)), $this); ?>

</div><!-- content -->
</div><!-- main -->
</div><!-- body -->
</div><!-- container -->
<?php echo ''; ?><?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('onlineIssn')): ?><?php echo ''; ?><?php $this->assign('issn', $this->_tpl_vars['currentJournal']->getSetting('onlineIssn')); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('printIssn')): ?><?php echo ''; ?><?php $this->assign('issn', $this->_tpl_vars['currentJournal']->getSetting('printIssn')); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['displayCreativeCommons']): ?><?php echo ''; ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense"), $this);?><?php echo ''; ?><?php endif; ?><?php echo '<!--<div id="pageFooter">'; ?><?php if ($this->_tpl_vars['pageFooter']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pageFooter']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?><?php echo '<div id="standardFooter"><a href="http://unizd.hr"><img src="'; ?><?php echo $this->_tpl_vars['baseUrl']; ?><?php echo '/plugins/themes/morepress/img/unizd-logo.svg" alt="UNIZD"/></a><h2>&copy; 2016</h2></div>'; ?>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/js/menu.js"></script>
</div>

-->

<div id="preFooter">
<a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c6/Open_Access.jpg.png" /></a>
<a href="https://creativecommons.org" target="_blank"><img src="http://mirrors.creativecommons.org/presskit/logos/cc.logo.large.png" /></a>
<a href="http://www.crossref.org" target="_blank"><img src="https://assets.crossref.org/logo/crossref-logo-landscape-200.png" /></a>
<a href="https://doaj.org" target="_blank"><img src="https://doaj.org/static/doaj/images/logo_cropped.jpg" /></a>
<a href="http://hrcak.srce.hr/" target="_blank"><img src="http://hrcak.srce.hr/images/logo/hrcak-logo-potpis_hr.png" /></a>
</div>

<div id="customFooter">
<div id="colsCont">
	<div id="footerCol">
	<a href="http://www.unizd.hr/" id="logoNav"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/unizd-znak-bijeli_200p.png" style="margin-bottom:15px;"/></a>
	<a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
" id="logoNav"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/morepress_bijeli_veci.png" /></a>
	</div>
	<div id="footerCol">
		<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.userHome"), $this);?>
</h2>
		<ul>
		<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user'), $this);?>
"><li><?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</li></a>
			<a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/index.php/index/login/signOut"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.logout"), $this);?>
</li></a>
			
		<?php else: ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>
"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</li></a>
			
			<?php if (! $this->_tpl_vars['hideRegisterLink']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>
"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</li></a>
				
			<?php endif; ?>
			
		<?php endif; ?>			<a href="#"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.notif"), $this);?>
</li></a>
		</ul>
		<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.aboutSite"), $this);?>
</h2>
		<ul>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>
"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.aboutSite"), $this);?>
</li></a>
			<a href="#"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.journals"), $this);?>
</li></a>
			<a href="#"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.OA"), $this);?>
</li></a>
		</ul>
	</div>
	<div id="footerCol">
		<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.helpAndContact"), $this);?>
</h2>
		<ul>
			<a href="#"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.FAQ"), $this);?>
</li></a>
			<a href="#"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.contact"), $this);?>
</li></a>
		</ul>
		<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.socialNets"), $this);?>
</h2>
		<ul id="footSocial">
			<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a><a href="https://twitter.com/unizdmorepress" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
		</ul>
		<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.development"), $this);?>
</h2>
		<ul>
			<a href="#"><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.SPC"), $this);?>
</li></a>
		</ul>
	</div>
	<div id="footerCol">
		<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "moreFooter.version"), $this);?>
</h2>
		<ul>
		<?php 
function gitVersion()
{
    $full = exec('git describe --tags');
    $parts = explode('-', $full);
    $structured = 'N/A';
    if (strlen($parts[0])) {
        $structured = str_replace('v', '', $parts[0]);
        if (isset($parts[1])) {
            $structured .= '.' . $parts[1];
        } else {
            $structured .= '.0';
        }
    }
    return $structured;
}
 ?>
			<a href="#"><li><strong>ver. <?php  echo gitVersion()."</strong><br>".exec('git rev-parse --short HEAD'); echo "<br>".exec('git log -n1 --pretty=%ci HEAD');  ?></span></li></a>
		</ul>
	</div>
</div>
</div>

<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>


</body>
</html>