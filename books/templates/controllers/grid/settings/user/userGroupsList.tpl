{**
 * userGroupsList.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2000-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List of user groups. 
 *}

{assign var=cellId value="cell-"|concat:$id}
<span id="{$cellId|escape}">
	<ul>	
	{foreach from=$userGroups->toArray() item=userGroup}
		<li>
		{$userGroup->getLocalizedName()|escape}
		</li>
	{/foreach}
	</ul>
</span>
