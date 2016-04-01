<?php return array (
  'plugins.importexport.duracloud.displayName' => 'DuraCloud Import/Export Plugin',
  'plugins.importexport.duracloud.description' => 'Archive and restore issues using an external DuraCloud service for storage',
  'plugins.importexport.duracloud.configuration' => 'DuraCloud Configuration',
  'plugins.importexport.duracloud.configuration.unconfigured.description' => 'You are not currently signed in to a DuraCloud account. Please enter your credentials below. These will not be stored beyond the current session.',
  'plugins.importexport.duracloud.configuration.configured.description' => 'You are currently signed into DuraCloud at <a href="{$url}">{$escapedUrl}</a> with username "{$username}". These credentials will not be stored beyond the current session. To clear your credentials immediately, click to <a href="{$logoutUrl}">log out</a> of DuraCloud.',
  'plugins.importexport.duracloud.configuration.urlRequired' => 'A valid DuraCloud base URL is required.',
  'plugins.importexport.duracloud.configuration.usernameRequired' => 'A DuraCloud username is required.',
  'plugins.importexport.duracloud.configuration.passwordRequired' => 'A DuraCloud password is required.',
  'plugins.importexport.duracloud.configuration.credentialsInvalid' => 'Could not connect to the specified DuraCloud instance with the supplied credentials. Please check the credentials and try again.',
  'plugins.importexport.duracloud.configuration.space' => 'Space',
  'plugins.importexport.duracloud.cliUsage' => 'Usage: {$scriptName} {$pluginName}
	[base_url] [username] [password]
	[ojs_journal_path] [duracloud_space_id] [command] ...
Commands:
	importIssues [user_name] [issueId1] [issueId2] ...
	exportIssues [issueId1] [issueId2] ...
Example:
	php {$scriptName} {$pluginName} \\
		https://pkp.duracloud.org myUsername myPassword \\
		demojournal testspace \\
		exportIssues 1',
  'plugins.importexport.duracloud.export' => 'Export Data',
  'plugins.importexport.duracloud.export.issues' => 'Export Issues',
  'plugins.importexport.duracloud.export.results' => 'Export Results',
  'plugins.importexport.duracloud.export.results.description' => 'Here are the results of the export action for each of the selected issues.',
  'plugins.importexport.duracloud.export.results.success' => '{$issueIdentification} was successfully exported to <a href="{$targetLocation}">{$targetLocationEscaped}</a>.',
  'plugins.importexport.duracloud.export.results.failure' => '{$issueIdentification} could not be exported.',
  'plugins.importexport.duracloud.import.results' => 'Import Results',
  'plugins.importexport.duracloud.import.results.description' => 'Here are the results of the import action for each of the selected issues.',
  'plugins.importexport.duracloud.import.results.success' => '{$issueIdentification} was successfully imported from "{$contentId}".',
  'plugins.importexport.duracloud.import.results.failure' => '{$contentId} could not be imported.',
  'plugins.importexport.duracloud.selectIssue' => 'Select Issue',
  'plugins.importexport.duracloud.import.issues' => 'Import Issues',
  'plugins.importexport.duracloud.import.description' => 'This plugin supports data import based on the native.dtd Document Type Definition. Supported root nodes are &lt;article&gt;, &lt;articles&gt;, &lt;issue&gt;, and &lt;issues&gt;.',
  'plugins.importexport.duracloud.import.error' => 'Import Error',
  'plugins.importexport.duracloud.import.error.description' => 'One or more errors occurred during import. Please check to ensure that the format of the import file correctly matches the specification. Specific details of the import errors are listed below.',
  'plugins.importexport.duracloud.cliError' => 'ERROR:',
  'plugins.importexport.duracloud.export.error.couldNotWrite' => 'Could not write to the file "{$fileName}".',
  'plugins.importexport.duracloud.import.success' => 'Import Successful',
  'plugins.importexport.duracloud.import.success.description' => 'The import was successful. Successfully-imported items are listed below.',
); ?>