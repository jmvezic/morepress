<?php return array (
  'plugins.generic.lucene.displayName' => 'Lucene dodatak za pretraživanje',
  'plugins.generic.lucene.description' => 'Lucene dodatak omogućava podršku sa više jezika, poboljšano pretraživanje prema relevantnosti, brže indeksiranje, bolju skalabilnost i više.',
  'plugins.generic.lucene.faceting.displayName' => 'Lucene fasetiranje',
  'plugins.generic.lucene.faceting.description' => 'Blok za fasetiranje',
  'plugins.generic.lucene.faceting.title' => 'Sužavanje pretraživanja',
  'plugins.generic.lucene.faceting.discipline' => 'Područje',
  'plugins.generic.lucene.faceting.subject' => 'Ključne riječi',
  'plugins.generic.lucene.faceting.type' => 'Metoda/pristup',
  'plugins.generic.lucene.faceting.coverage' => 'Opseg',
  'plugins.generic.lucene.faceting.journalTitle' => 'Časopis',
  'plugins.generic.lucene.faceting.authors' => 'Autor',
  'plugins.generic.lucene.faceting.publicationDate' => 'Datum izdavanja',
  'plugins.generic.lucene.message.coreNotFound' => 'Zatražena jezgra \'{$core}\' nije pronađena na Solr serveru. Je li Solr server uključen?',
  'plugins.generic.lucene.message.indexingIncomplete' => 'Pogreška prilikom indeksiranja: Obrađeno {$numProcessed} od {$batchCount} ({$numDeleted} obrisanih dokumenata).',
  'plugins.generic.lucene.message.indexOnline' => 'Kazalo s {$numDocs} dokumenata online.',
  'plugins.generic.lucene.message.pullIndexingDisabled' => 'Pull indeksiranje nije uključeno. Molimo uključite ga u postavkama Lucene dodatka.',
  'plugins.generic.lucene.message.searchServiceOffline' => 'OJS pretraživanje trenutno nije dostupno.',
  'plugins.generic.lucene.message.techAdminInformed' => 'Tehnički administrator obaviješten je o ovom problemu.',
  'plugins.generic.lucene.message.webServiceError' => 'Lucene usluga naišla je na pogrešku.',
  'plugins.generic.lucene.rebuildIndex.pullResult' => '{$numMarked} članaka označenih za ažuriranje.',
  'plugins.generic.lucene.results.didYouMean' => 'Jeste li mislili',
  'plugins.generic.lucene.results.orderBy' => 'Poredaj rezultate prema',
  'plugins.generic.lucene.results.orderBy.relevance' => 'Relevantnosti',
  'plugins.generic.lucene.results.orderBy.author' => 'Autoru',
  'plugins.generic.lucene.results.orderBy.issue' => 'Svesku',
  'plugins.generic.lucene.results.orderBy.date' => 'Datumu izdavanja',
  'plugins.generic.lucene.results.orderBy.journal' => 'Naslovu časopisa',
  'plugins.generic.lucene.results.orderBy.article' => 'Naslovu članka',
  'plugins.generic.lucene.results.orderDir.asc' => 'Uzlazno',
  'plugins.generic.lucene.results.orderDir.desc' => 'Silazno',
  'plugins.generic.lucene.results.similarDocuments' => 'slični dokumenti',
  'plugins.generic.lucene.results.syntaxInstructions' => '<h4>Savjeti za pretraživanje:</h4><ul>
			<li>Pretraživanje je osjetljivo na velika i mala slova</li>
			<li>Česte riječi se ignoriraju</li>
			<li>Članci koji sadrže <em>bilo koju</em> riječ iz upita će biti izlistani (<em>OR</em> se podrazumijeva)</li>
			<li>Kako biste se uvjerili da riječ postoji u članku, stavite <strong>+</strong> prije same riječi; npr. <em>+journal +access scholarly academic</em></li>
			<li>Više riječi spojite s <em>AND</em> kako bi pronašli članke koji sadrže sve riječi; npr. <em>education AND research</em></li>
			<li>Isključite riječ s <strong>-</strong> ili s <em>NOT</em>; npr. <em>online -politics</em> ili <em>online NOT politics</em></li>
			<li>Pronađite točne fraze koristeći navodnike; npr. <em>"open access publishing"</em>. Napomena: Stavljanje kineskih ili japanskih riječi u navodnike pomoći će u pronalaženju točnih riječi u poljima miješanog jezika, npr. "中国".</li> 
			<li>Koristite zagrade za kompleksnije upite; npr. <em>archive ((journal AND conference) NOT theses)</em></li>
		 </ul>',
  'plugins.generic.lucene.settings' => 'Postavke',
  'plugins.generic.lucene.settings.autosuggest' => 'Automatski prijedlozi (prikaži dinamični padajući izbornik sa prijedlozima pretraživanja tijekom unosa upita)',
  'plugins.generic.lucene.settings.autosuggestTypeExplanation' => '<strong>Provjeri upite prema rezultatima</strong>: Predloži samo upite koji će imati rezultate. Prijedlozi će biti provjereni prema trenutnom časopisu i upitima koji su postavljeni u drugim poljima.<br />
		<strong>Koristi globalni rječnik</strong>: Brže, koristi manje resursa na poslužitelju te je prikladnije za veće instalacije. Prijedlozi mogu sadržavati nerelevantne upite, npr. iz drugih časopisa koji ne stvaraju rezultate.',
  'plugins.generic.lucene.settings.autosuggestTypeFaceting' => 'Provjeri upite prema rezultatima',
  'plugins.generic.lucene.settings.autosuggestTypeSuggester' => 'Koristi globalni rječnik',
  'plugins.generic.lucene.settings.customRanking' => 'Prilagođeno rangiranje (postavite individualnu težinu rangiranja prema sekcijama časopisa)',
  'plugins.generic.lucene.settings.description' => 'Lucene dodatak pristupa Lucene pretraživanju preko Solr poslužitelja. Ova konfiguracija dozvoljava namještanje pristupa Solr poslužitelju.
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