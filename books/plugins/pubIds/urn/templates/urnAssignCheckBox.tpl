{**
 * @file plugins/pubIds/urn/templates/urnAssignCheckBox.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Displayed only if the URN can be assigned.
 * Assign URN form check box included in urnSuffixEdit.tpl and urnAssign.tpl.
 *}

{capture assign=translatedObjectType}{translate key="plugins.pubIds.urn.editor.urnObjectType"|cat:$pubObjectType}{/capture}
{capture assign=assignCheckboxLabel}{translate key="plugins.pubIds.urn.editor.assignURN" pubId=$pubId pubObjectType=$translatedObjectType}{/capture}
{fbvFormSection list=true}
	{fbvElement type="checkbox" id="assignURN" checked="true" value="1" label=$assignCheckboxLabel translate=false disabled=$disabled}
{/fbvFormSection}
