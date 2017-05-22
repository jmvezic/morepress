<?php /* Smarty version 2.6.26, created on 2017-05-08 10:07:35
         compiled from common/navbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'common/navbar.tpl', 17, false),array('function', 'translate', 'common/navbar.tpl', 27, false),array('function', 'call_hook', 'common/navbar.tpl', 53, false),array('modifier', 'escape', 'common/navbar.tpl', 17, false),)), $this); ?>
<script src="/plugins/themes/morepress/js/navbar.js" type='text/javascript'></script>
<script type="text/javascript">
		<!--
		function changeLanguageNav(elem) {
			var new_locale = elem.id;

			var redirect_url = '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'setLocale','path' => 'NEW_LOCALE','source' => $_SERVER['REQUEST_URI'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
';
			redirect_url = redirect_url.replace("NEW_LOCALE", new_locale);

			window.location.href = redirect_url;
		}
		//-->
	</script>
<ul class="topnav" id="myTopnav">
  <li><a class="active" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/morepress_bijeli_veci.png" id="mobileLogo" /></a></li>
<?php if (( $this->_tpl_vars['currentJournal'] == null )): ?>
			<li id="about"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.aboutSite"), $this);?>
</a></li>
			<?php else: ?>
			<li id="about"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a></li>
            <?php endif; ?>
            
        
        <li><a href="#"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.help"), $this);?>
</a></li>
        <li><a href="#"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.contact"), $this);?>
</a></li>

		<?php if ($this->_tpl_vars['siteCategoriesEnabled']): ?>
<!--	<li id="categories"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'search','op' => 'categories'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.categories"), $this);?>
</a></li>-->
		<?php endif; ?>
		<?php if (! $this->_tpl_vars['currentJournal'] || $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
<!--	<li id="search"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
</a></li>-->
		<?php endif; ?>

		<?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
			
			<li id="archives"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'archive'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.archive"), $this);?>
</a></li>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['enableAnnouncements']): ?>
			<li id="announcements"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>
</a></li>
		<?php endif; ?>
		<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Header::Navbar::CurrentJournal"), $this);?>


		<?php $_from = $this->_tpl_vars['navMenuItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navItemKey'] => $this->_tpl_vars['navItem']):
?>
			<?php if ($this->_tpl_vars['navItem']['url'] != '' && $this->_tpl_vars['navItem']['name'] != ''): ?>
				<li class="navItem" id="navItem-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><a href="<?php if ($this->_tpl_vars['navItem']['isAbsolute']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['navItem']['isLiteral']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['navItem']['name']), $this);?>
<?php endif; ?></a></li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		
		<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
			<li id="userHome"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.userHome"), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/index.php/index/login/signOut"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.logout"), $this);?>
</a></li>
			
		<?php else: ?>
			<li id="login"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
			
			<?php if (! $this->_tpl_vars['hideRegisterLink']): ?>
				<li id="register"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</a></li>
				
			<?php endif; ?>
			
		<?php endif; ?>		
        <li><a href="#" id="hr_HR" onclick="changeLanguageNav(this)"><img class="langSmall" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/flags/png/256/HR.png" /></a><a href="#" id="en_US" onclick="changeLanguageNav(this)"><img class="langSmall" onclick="changeLanguageNav(this)" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/flags/png/256/GB.png" /></a></li>
		
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="expandNav()">☰</a>
  </li>
</ul>


<nav>

<div id="fullNav">
<div id="navbar" role="navigation" class="body">
	<ul class="navMenu menu">
        <div id="leftblock">
            <?php if (( $this->_tpl_vars['currentJournal'] == null )): ?>
			<li id="about"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.aboutSite"), $this);?>
</a></li>
			<?php else: ?>
			<li id="about"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a></li>
            <?php endif; ?>
            
        
        <li><a href="#"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.help"), $this);?>
</a></li>
        <li><a href="#"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.contact"), $this);?>
</a></li>

		<?php if ($this->_tpl_vars['siteCategoriesEnabled']): ?>
<!--	<li id="categories"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'search','op' => 'categories'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.categories"), $this);?>
</a></li>-->
		<?php endif; ?>
		<?php if (! $this->_tpl_vars['currentJournal'] || $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
<!--	<li id="search"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
</a></li>-->
		<?php endif; ?>

		<?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
			
			<li id="archives"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'archive'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.archive"), $this);?>
</a></li>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['enableAnnouncements']): ?>
			<li id="announcements"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>
</a></li>
		<?php endif; ?>
		<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Header::Navbar::CurrentJournal"), $this);?>


		<?php $_from = $this->_tpl_vars['navMenuItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navItemKey'] => $this->_tpl_vars['navItem']):
?>
			<?php if ($this->_tpl_vars['navItem']['url'] != '' && $this->_tpl_vars['navItem']['name'] != ''): ?>
				<li class="navItem" id="navItem-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><a href="<?php if ($this->_tpl_vars['navItem']['isAbsolute']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['navItem']['isLiteral']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['navItem']['name']), $this);?>
<?php endif; ?></a></li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
            
        </div>
        
        <div id="langChange">
        <li><a href="#" id="hr_HR" onclick="changeLanguageNav(this)"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/flags/png/256/HR.png" /></a></li>
        <li><a href="#" id="en_US" onclick="changeLanguageNav(this)"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/flags/png/256/GB.png" /></a></li>
        </div>        
        
        <div id="rightblock">
        
               <?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
			<li id="userHome"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/index.php/index/login/signOut"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.logout"), $this);?>
</a></li>
			
		<?php else: ?>
			<li id="login"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
			
			<?php if (! $this->_tpl_vars['hideRegisterLink']): ?>
				<li id="register"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</a></li>
				
			<?php endif; ?>
			
		<?php endif; ?>		
        </div>
        
        
	</ul>
</div> 

    
</div><!-- End Full Nav -->


<div id="infoNav">
<div id="infoCont">

<div id="Blanky"></div>

<div id="LogoUnizd">
<a href="http://www.unizd.hr/" id="logoNav"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/unizd-znak-bijeli_200p.png" /></a>
</div>

<div id="LogoMorepress">
<a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
" id="logoNav"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/morepress_bijeli_veci.png" /></a>
</div>

<a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
"><div id="MorepressInfo"><span id="logoSep"></span><p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.morepressJournals"), $this);?>
 Beta</p></div></a>
</div>
</div>
        
<div id="fullSearchNav">
    <div id="contSearchNav">
        <!-- <a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
" id="logoNav">
            <img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/morepress/img/morepress_bijeli_veci.png" />
        </a> -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div id="advancedSearchNav">
        <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.advancedSearch"), $this);?>
</a>
        </div>
    </div>
</div>
    
    


</div>
</nav>