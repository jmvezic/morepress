

{if ($currentJournal==null)}

<div id="submit-button" class="largeButton">
	<a href="mailto:fpehar@unios.hr">{translate key="common.contact"}</a>
</div>
{else}
<div id="submit-button" class="largeButton">
	<a href="{url page="about" op="submissions"}">{translate key="submition.submitArticle"}</em></a>
</div>
{/if}
