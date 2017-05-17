{**
 * templates/common/footer.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2000-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site footer.
 *
 *}

</div><!-- content -->
</div><!-- main -->
</div><!-- body -->
</div><!-- container -->
{strip}
{if $currentJournal && $currentJournal->getSetting('onlineIssn')}
	{assign var=issn value=$currentJournal->getSetting('onlineIssn')}
{elseif $currentJournal && $currentJournal->getSetting('printIssn')}
	{assign var=issn value=$currentJournal->getSetting('printIssn')}
{/if}

{if $displayCreativeCommons}
	{translate key="common.ccLicense"}
{/if}
<!-- 
<div id="pageFooter">
{if $pageFooter}
	{$pageFooter}
{/if}
{call_hook name="Templates::Common::Footer::PageFooter"}

	<div id="standardFooter">
	
		<a href="http://unizd.hr">
			<img src="{$baseUrl}/plugins/themes/morepress/img/unizd-logo.svg" alt="UNIZD"/>
		</a>
		<h2>&copy; 2016</h2>
	</div>
{/strip}
<script type="text/javascript" src="{$baseUrl}/plugins/themes/morepress/js/menu.js"></script>
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
	<a href="http://www.unizd.hr/" id="logoNav"><img src="{$baseUrl}/plugins/themes/morepress/img/unizd-znak-bijeli_200p.png" style="margin-bottom:15px;"/></a>
	<a href="{$baseUrl}" id="logoNav"><img src="{$baseUrl}/plugins/themes/morepress/img/morepress_bijeli_veci.png" /></a>
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
			<a href="#"><li>{translate key="moreFooter.notif"}</li></a>
		</ul>
		<h2>{translate key="navigation.aboutSite"}</h2>
		<ul>
			<a href="{url page="about"}"><li>{translate key="navigation.aboutSite"}</li></a>
			<a href="#"><li>{translate key="moreFooter.journals"}</li></a>
			<a href="#"><li>{translate key="moreFooter.OA"}</li></a>
		</ul>
	</div>
	<div id="footerCol">
		<h2>{translate key="moreFooter.helpAndContact"}</h2>
		<ul>
			<a href="#"><li>{translate key="moreFooter.FAQ"}</li></a>
			<a href="#"><li>{translate key="moreFooter.contact"}</li></a>
		</ul>
		<h2>{translate key="moreFooter.socialNets"}</h2>
		<ul id="footSocial">
			<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a><a href="https://twitter.com/unizdmorepress" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
		</ul>
		<h2>{translate key="moreFooter.development"}</h2>
		<ul>
			<a href="#"><li>{translate key="moreFooter.SPC"}</li></a>
		</ul>
	</div>
	<div id="footerCol">
		<h2>{translate key="moreFooter.tweets"}</h2>
		<ul>
			<a href="#"><li>Tweety</li></a>
			<a href="#"><li>Tweety</li></a>
			<a href="#"><li>Tweety</li></a>
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
			<a href="#"><li><strong>ver. {php} echo gitVersion()."</strong><br>".exec('git rev-parse --short HEAD'); echo "<br>".exec('git log -n1 --pretty=%ci HEAD'); {/php}</span></li></a>
		</ul>
	</div>
</div>
</div>

{get_debug_info}
{if $enableDebugStats}{include file=$pqpTemplate}{/if}


</body>
</html>
