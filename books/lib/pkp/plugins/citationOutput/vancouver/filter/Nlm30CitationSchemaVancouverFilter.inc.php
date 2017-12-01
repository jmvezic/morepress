<?php
/**
 * @defgroup plugins_citationOutput_vancouver_filter Vancouver Citation Format Filter
 */

/**
 * @file plugins/citationOutput/vancouver/filter/Nlm30CitationSchemaVancouverFilter.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Nlm30CitationSchemaVancouverFilter
 * @ingroup plugins_citationOutput_vancouver_filter
 *
 * @brief Filter that transforms NLM citation metadata descriptions into
 *  Vancouver citation output.
 */


import('lib.pkp.plugins.metadata.nlm30.filter.Nlm30CitationSchemaCitationOutputFormatFilter');

class Nlm30CitationSchemaVancouverFilter extends Nlm30CitationSchemaCitationOutputFormatFilter {
	/**
	 * Constructor
	 * @param $filterGroup FilterGroup
	 */
	function __construct($filterGroup) {
		$this->setDisplayName('Vancouver Citation Output');

		parent::__construct($filterGroup);
	}


	//
	// Implement template methods from PersistableFilter
	//
	/**
	 * @copydoc PersistableFilter::getClassName()
	 */
	function getClassName() {
		return 'lib.pkp.plugins.citationOutput.vancouver.filter.Nlm30CitationSchemaVancouverFilter';
	}


	//
	// Implement abstract template methods from TemplateBasedFilter
	//
	/**
	 * @copydoc TemplateBasedFilter::getBasePath()
	 */
	function getBasePath() {
		return dirname(__FILE__);
	}
}
?>
