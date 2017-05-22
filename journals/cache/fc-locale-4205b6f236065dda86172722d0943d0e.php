<?php return array (
  'plugins.generic.lucene.displayName' => 'Lucene Search Plugin',
  'plugins.generic.lucene.description' => 'The Lucene plugin provides multi-language support, improved search result relevance, faster indexing, better scalability and more.',
  'plugins.generic.lucene.faceting.displayName' => 'Lucene Faceting',
  'plugins.generic.lucene.faceting.description' => 'Faceting Block Plugin for Lucene',
  'plugins.generic.lucene.faceting.title' => 'refine your search',
  'plugins.generic.lucene.faceting.discipline' => 'Discipline',
  'plugins.generic.lucene.faceting.subject' => 'Keyword',
  'plugins.generic.lucene.faceting.type' => 'Method/Approach',
  'plugins.generic.lucene.faceting.coverage' => 'Coverage',
  'plugins.generic.lucene.faceting.journalTitle' => 'Journal',
  'plugins.generic.lucene.faceting.authors' => 'Author',
  'plugins.generic.lucene.faceting.publicationDate' => 'Publication Date',
  'plugins.generic.lucene.message.coreNotFound' => 'The requested core \'{$core}\' was not found on the Solr server. Is it online?',
  'plugins.generic.lucene.message.indexingIncomplete' => 'An error occurred while indexing: Processed {$numProcessed} out of a batch of {$batchCount} ({$numDeleted} deleted documents in this batch).',
  'plugins.generic.lucene.message.indexOnline' => 'Index with {$numDocs} documents online.',
  'plugins.generic.lucene.message.pullIndexingDisabled' => 'Pull indexing is not enabled. Please enable it in the Lucene plug-in settings.',
  'plugins.generic.lucene.message.searchServiceOffline' => 'Unfortunately the OJS search service is currently offline.',
  'plugins.generic.lucene.message.techAdminInformed' => 'The technical administrator of this journal has been informed about the problem.',
  'plugins.generic.lucene.message.webServiceError' => 'The Lucene web service returned an error.',
  'plugins.generic.lucene.rebuildIndex.pullResult' => '{$numMarked} articles marked for update',
  'plugins.generic.lucene.results.didYouMean' => 'Did you mean',
  'plugins.generic.lucene.results.orderBy' => 'Order results by',
  'plugins.generic.lucene.results.orderBy.relevance' => 'Relevance',
  'plugins.generic.lucene.results.orderBy.author' => 'Author',
  'plugins.generic.lucene.results.orderBy.issue' => 'Issue',
  'plugins.generic.lucene.results.orderBy.date' => 'Publication Date',
  'plugins.generic.lucene.results.orderBy.journal' => 'Journal Title',
  'plugins.generic.lucene.results.orderBy.article' => 'Article Title',
  'plugins.generic.lucene.results.orderDir.asc' => 'Ascending',
  'plugins.generic.lucene.results.orderDir.desc' => 'Descending',
  'plugins.generic.lucene.results.similarDocuments' => 'similar documents',
  'plugins.generic.lucene.results.syntaxInstructions' => '<h4>Search tips:</h4><ul>
			<li>Search terms are case-insensitive</li>
			<li>Common words are ignored</li>
			<li>By default articles containing <em>any</em> term in the query are returned (i.e., <em>OR</em> is implied)</li>
			<li>Make sure that a word exists in an article by prefixing it with <strong>+</strong>; e.g., <em>+journal +access scholarly academic</em></li>
			<li>Combine multiple words with <em>AND</em> to find articles containing all terms; e.g., <em>education AND research</em></li>
			<li>Exclude a word by prefixing it with <strong>-</strong> or <em>NOT</em>; e.g., <em>online -politics</em> or <em>online NOT politics</em></li>
			<li>Search for an exact phrase by putting it in quotes; e.g., <em>"open access publishing"</em>. Hint: Quoting Chinese or Japanese words will help you to find exact word matches in mixed-language fields, e.g. "中国".</li> 
			<li>Use parentheses to create more complex queries; e.g., <em>archive ((journal AND conference) NOT theses)</em></li>
		 </ul>',
  'plugins.generic.lucene.settings' => 'Settings',
  'plugins.generic.lucene.settings.autosuggest' => 'Auto-Suggest (show a dynamic drop-down with search term suggestions while entering a search query)',
  'plugins.generic.lucene.settings.autosuggestTypeExplanation' => '<strong>Check terms for results</strong>: Only suggest terms that will actually produce search results. Suggestions will be
		cross-checked against the current journal and terms already entered into other search fields.<br />
		<strong>Use global dictionary</strong>: This is faster, consumes less resources on the search server and therefore scales better
		for large installations. Suggestions may contain irrelevant terms, though, e.g. from other journals or terms that produce no
		search results.',
  'plugins.generic.lucene.settings.autosuggestTypeFaceting' => 'Check terms for results',
  'plugins.generic.lucene.settings.autosuggestTypeSuggester' => 'Use global dictionary',
  'plugins.generic.lucene.settings.customRanking' => 'Custom Ranking (set individual ranking weights per journal section)',
  'plugins.generic.lucene.settings.description' => 'The Lucene plugin acesses the Lucene search index through a Solr server. This configuration page allows you to configure access to the Solr server.
		<strong>Please make sure you read the plugin\'s README file (plugins/generic/lucene/README) before you try to change the default configuration.</strong>
		If you are using the embedded scenario behind a firewall as explained in the README file then you may probably leave all configuration parameters unchanged.',
  'plugins.generic.lucene.settings.faceting' => 'Faceting (display a navigation box with additional filters to refine your search)',
  'plugins.generic.lucene.settings.facetingSelectCategory' => 'You may select specific facet categories (the corresponding metadata must have beeen selected for indexing in journal setup, step 3.4)',
  'plugins.generic.lucene.settings.featureDescription' => 'The Lucene plugin provides several optional search features. Most of these features are enabled by default but can be disabled or fine-tuned.',
  'plugins.generic.lucene.settings.highlighting' => 'Highlighting (display a short excerpt of each article\'s full text containing queried keywords)',
  'plugins.generic.lucene.settings.instId' => 'Unique Installation ID',
  'plugins.generic.lucene.settings.instIdRequired' => 'Please enter an ID that uniquely identifies this OJS installation to the Solr search server.',
  'plugins.generic.lucene.settings.instIdInstructions' => 'If you use a central search server then you\'ll have to provide a unique installation ID for every OJS installation sharing the same search index.  This can be any arbitrary text but it must be different for every participating OJS server (e.g. the server\'s static IP address if you have one OJS installation per server).',
  'plugins.generic.lucene.settings.internalError' => 'Invalid selection.',
  'plugins.generic.lucene.settings.luceneSettings' => 'Lucene Plugin: Settings',
  'plugins.generic.lucene.settings.password' => 'Password',
  'plugins.generic.lucene.settings.passwordInstructions' => 'Please enter the Solr server password.',
  'plugins.generic.lucene.settings.passwordRequired' => 'Please enter a valid password to authenticate to the Solr search server.',
  'plugins.generic.lucene.settings.pullIndexing' => 'Pull indexing (this is an advanced feature, see README file for more information)',
  'plugins.generic.lucene.settings.searchEndpoint' => 'Search Endpoint URL',
  'plugins.generic.lucene.settings.searchEndpointInstructions' => 'The Solr search endpoint consists of the server URL and a search handler. See the default setting as an example. Only change this if you are using a central search server.',
  'plugins.generic.lucene.settings.searchEndpointRequired' => 'Please enter a valid URL representing the search endpoint (Solr search server and search handler) you would like to connect to.',
  'plugins.generic.lucene.settings.searchFeatures' => 'Search Feature Configuration',
  'plugins.generic.lucene.settings.simdocs' => 'More-Like-This (display a link "similar documents" for every search result)',
  'plugins.generic.lucene.settings.solrServerSettings' => 'Solr server settings',
  'plugins.generic.lucene.settings.spellcheck' => 'Alternative Spelling Suggestions (display alternative search terms)',
  'plugins.generic.lucene.settings.useProxySettings' => 'Proxy settings',
  'plugins.generic.lucene.settings.useProxySettingsInstructions' => 'Use proxy settings from the file config.inc.php for the Solr web service requests.',
  'plugins.generic.lucene.settings.username' => 'Username',
  'plugins.generic.lucene.settings.usernameInstructions' => 'The Solr search server uses HTTP BASIC authentication. Please enter the username.',
  'plugins.generic.lucene.settings.usernameRequired' => 'Please enter a valid username to authenticate to the Solr search server (colons are disallowed).',
  'plugins.generic.lucene.sectionForm.rankingBoost' => 'Custom Ranking Weight',
  'plugins.generic.lucene.sectionForm.rankingBoostInstructions' => 'The Lucene/Solr search plugin allows you to adjust the relative weight of articles in the result list
		of a search query. Setting the ranking weight higher (or lower) does not place articles in this
		section above (or below) all other articles. But they will rank better (or worse) than they would
		without the adjustment made. Setting this option to "never show" will completely exclude articles
		in this section from search results.',
  'plugins.generic.lucene.sectionForm.rankingBoostInvalid' => 'Please select a valid custom ranking weight.',
  'plugins.generic.lucene.sectionForm.ranking.never' => 'Never Show',
  'plugins.generic.lucene.sectionForm.ranking.low' => 'Rank Lower',
  'plugins.generic.lucene.sectionForm.ranking.normal' => 'Normal',
  'plugins.generic.lucene.sectionForm.ranking.high' => 'Rank Higher',
); ?>