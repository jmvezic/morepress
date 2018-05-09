{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common site frontend footer.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}

	</div><!-- pkp_structure_main -->

	{* Sidebars *}
	{if empty($isFullWidth)}
		{call_hook|assign:"sidebarCode" name="Templates::Common::Sidebar"}
		{if $sidebarCode}
			<div class="pkp_structure_sidebar left" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
				{$sidebarCode}
			</div><!-- pkp_sidebar.left -->
		{/if}
	{/if}
</div><!-- pkp_structure_content -->


<!-- custom footer -->

<div id="customFooter">
<div id="colsCont">
	<div id="footerCol">
	<a href="http://www.unizd.hr/" id="logoNav"><img src="{$baseUrl}/plugins/themes/morepress/img/unizd-znak-bijeli_200p.png" style="margin-bottom:15px;"/></a>
	<a href="/" id="logoNav"><img src="{$baseUrl}/plugins/themes/morepress/img/morepress_bijeli_veci.png" /></a>
	</div>
	<div id="footerCol">
		<h2>{translate key="navigation.userHome"}</h2>
		<ul>
		{if $isUserLoggedIn}
			<a href="{url page="user"}"><li>{$loggedInUsername|escape}</li></a>
			<a href="{$baseUrl}/index.php/index/login/signOut"><li>{translate key="common.logout"}</li></a>
			
		{else}
			<a href="{url page="login"}"><li>{translate key="navigation.login"}</li></a>
			
			{if !$hideRegisterLink}
				<a href="{url page="user" op="register"}"><li>{translate key="navigation.register"}</li></a>
				
			{/if}
			
		{/if}{* $isUserLoggedIn *}
		</ul>
		<h2>{translate key="navigation.aboutSite"}</h2>
		<ul>
			<a href="{url page="about"}"><li>{translate key="navigation.aboutSite"}</li></a>
			<a href="/privacy/{$currentLocale|substr:0:2}/"><li>{translate key="moreFooter.privacy"}</li></a>
			<a href="/"><li>{translate key="moreFooter.homepage"}</li></a>
			<a href="/journals"><li>{translate key="moreFooter.journals"}</li></a>
			<a href="/books"><li class="not-active">{translate key="moreFooter.books"}</li></a>
		</ul>
	</div>
	<div id="footerCol">
		<h2>{translate key="moreFooter.helpAndContact"}</h2>
		<ul>
			<a href="mailto:morepress@unizd.hr"><li>{translate key="moreFooter.contact"} (E-mail)</li></a>
			<a href="mailto:izdavastvo@unizd.hr"><li>c/o {translate key="moreFooter.university"}<br>{translate key="moreFooter.publishingdept"}<br>{translate key="moreFooter.zadar"}</li></a>
		</ul>
		<h2>{translate key="moreFooter.socialNets"}</h2>
		<ul id="footSocial">
			<a href="https://www.facebook.com/morepressUNIZD" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a><a href="https://twitter.com/unizdmorepress" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><a href="https://github.com/jmvezic/morepress" target="_blank"><i class="fa fa-github-square"></i></a>
		</ul>
		<h2>{translate key="moreFooter.development"}</h2>
		<ul>
			<a href="#/"><li>{translate key="moreFooter.franjo"}<br>{translate key="moreFooter.jakopec"}<br>{translate key="moreFooter.jakov"}</li></a>
		</ul>
	</div>
	<div id="footerCol">
		<h2>{translate key="moreFooter.version"}</h2>
		<ul>
		{php}
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
{/php}
			<a href="#/"><li><strong>ver. {php} echo gitVersion()."</strong><br>".exec('git rev-parse --short HEAD'); echo "<br>".exec('git log -n1 --pretty=%ci HEAD'); {/php}</span></li></a>
		</ul>
	</div>
</div>
</div>

<!-- custom footer -->

</div><!-- pkp_structure_page -->

{load_script context="frontend"}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>
</html>
