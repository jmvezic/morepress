

{if ($currentJournal==null)}

<!-- <div id="submit-button" class="largeButton">
	<a href="mailto:fpehar@unios.hr">{translate key="common.contact"}</a>
</div> -->
{else}
{if $currentJournal->getJournalId()<12 || $currentJournal->getJournalId() > 17}
<div id="submit-button" class="largeButton">
	<a href="{url page="about" op="submissions"}">{translate key="submission.submitArticle"}</em></a>
</div>
{/if}
{/if}
