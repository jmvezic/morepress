{**
 * lib/pkp/templates/announcement/list.tpl
 *
 * Copyright (c) 2013-2016 Simon Fraser University Library
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display list of announcements without site header or footer.
 *
 *}
<script type="text/javascript" src="/plugins/themes/morepress/js/announSlider.js"></script>


<div id="slides">
  <ul>

{counter start=1 skip=1 assign="count"}
{iterate from=announcements item=announcement}
	{if !$numAnnouncementsHomepage || $count <= $numAnnouncementsHomepage}
	{if $count == 1}
		<span class="announShort">{$announcement->getLocalizedDescriptionShort()|nl2br}</span>
		<!-- <span class="announPoster">{translate key="announcement.posted"}: {$announcement->getDatePosted()}</span> -->
			{if $announcement->getLocalizedDescription() != null}
				<a class="announMore" href="{url page="announcement" op="view" path=$announcement->getId()}">{translate key="announcement.viewLink"}</a>
			{/if}
	{/if}
	{/if}
	</li>
	{counter}
{/iterate}
{if $announcements->wasEmpty()}
	{translate key="announcement.noneExist"}
{/if}
  </ul>
</div>
