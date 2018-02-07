{**
 * plugins/blocks/languageToggle/block.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common site sidebar menu for switching the current language.
 *
 * @uses $languageToggleLocales array Available locales as key/value pair. Value
 *       is a string representing the locale name
 * @uses $currentLocale string Name of current locale
 *}
{if $enableLanguageToggle}
<div class="pkp_block block_language">
	<span class="title">
		{translate key="common.language"}
	</span>
	
	<script type="text/javascript">
		<!--
		function changeLanguageNav(elem) {ldelim}
			var new_locale = elem.id;
			
			country_ready = "";
			
			if (new_locale=="hr_HR") {ldelim}
				country_ready = "HR";
			{rdelim}
			else {ldelim}
				country_ready = "US";
			{rdelim}
			
			var d = new Date();
			d.setTime(d.getTime() + (365*24*60*60*1000));
			var expires = "expires="+d.toUTCString();

			var redirect_url = '{url|escape:"javascript" page="user" op="setLocale" path="NEW_LOCALE" source=$smarty.server.REQUEST_URI escape=false}';
			redirect_url = redirect_url.replace("NEW_LOCALE", new_locale);
			
			document.cookie="country="+country_ready+"; "+expires+"; path=/";

			window.location.href = redirect_url;
		{rdelim}
		//-->
	</script>

	<div class="content">
		<ul>
			{foreach from=$languageToggleLocales item=localeName key=localeKey}
				<li class="locale_{$localeKey|escape}{if $localeKey == $currentLocale} current{/if}">
					<a id="{$localeKey|escape}" onclick="changeLanguageNav(this)" href="{url router=$smarty.const.ROUTE_PAGE page="user" op="setLocale" path=$localeKey source=$smarty.server.REQUEST_URI}">
						{$localeName}
					</a>
				</li>
			{/foreach}
		</ul>
	</div>
</div><!-- .block_language -->
{/if}
