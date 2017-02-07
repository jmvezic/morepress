{**
 * plugins/blocks/languageToggle/block.tpl
 *
 * Copyright (c) 2013-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- language toggle.
 *
 *}

{if $enableLanguageToggle}
<div class="block" id="sidebarLanguageToggle">
	<script type="text/javascript">
		<!--
		function changeLanguage() {ldelim}
			var e = document.getElementById('languageSelect');
			var new_locale = e.options[e.selectedIndex].value;

			var redirect_url = '{url|escape:"javascript" page="user" op="setLocale" path="NEW_LOCALE" source=$smarty.server.REQUEST_URI escape=false}';
			redirect_url = redirect_url.replace("NEW_LOCALE", new_locale);

			window.location.href = redirect_url;
		{rdelim}
		//-->
	</script>
	<span class="blockTitle">{translate key="common.language"}</span>
	<form action="#">
		<label for="languageSelect">{translate key="plugins.block.languageToggle.selectLabel"}</label>
		<select  id="languageSelect" {if $isPostRequest}disabled="disabled" {/if}size="1" name="locale" class="selectMenu siroko">{html_options options=$languageToggleLocales selected=$currentLocale}</select>
		<div style="clear: both;"></div>
		<input  type="submit" id="languageSelectButton" class="button" value="{translate key='form.submit'}" onclick="changeLanguage(); return false;" />
	</form>
</div>
{/if}