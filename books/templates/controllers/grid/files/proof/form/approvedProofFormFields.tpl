{**
 * templates/controllers/grid/files/proof/form/approvedProofFormFields.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Form to control pricing of approved proofs for direct sales.
 *}
{fbvFormSection for="priceType" list=true description="payment.directSales.price.description"}
	{foreach from=$salesTypes key=salesTypeKey item=salesType}
		{fbvElement type="radio" name="salesType" value=$salesTypeKey label=$salesType id=$salesTypeKey}
	{/foreach}
{/fbvFormSection}

{fbvFormSection for="price"}
	{translate|assign:"priceLabel" key="payment.directSales.priceCurrency" currency=$currentPress->getSetting('currency')}
	{fbvElement type="text" id="price" label=$priceLabel subLabelTranslate=false size=$fbvStyles.size.MEDIUM value=$price maxlength="255"}
	<p>{translate key="payment.directSales.numericOnly"}</p>
{/fbvFormSection}
