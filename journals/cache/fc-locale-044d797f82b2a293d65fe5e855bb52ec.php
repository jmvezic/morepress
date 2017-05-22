<?php return array (
  'plugins.importexport.datacite.displayName' => 'DataCite Export/Registration Plugin',
  'plugins.importexport.datacite.description' => 'Export or register issue, article, galley and supplementary file metadata in DataCite format.',
  'plugins.importexport.datacite.intro' => 'If you want to register DOIs with DataCite, please contact the Managing
		Agent via the <a href="http://datacite.org/contact" target="_blank">DataCite
		homepage</a>, who will refer you to your local DataCite Member. Once you have
		established a relationship with the Member organisation, you will be provided
		with access to the DataCite service for minting persistent identifiers (DOIs)
		and registering associated metadata. If you do not have your own username and
		password you\'ll still be able to export into the DataCite XML format but you
		cannot register your DOIs with DataCite from within OJS.
		Please note that the password will be saved as plain text, i.e. not encrypted, due
		to the DataCite registration service requirements.',
  'plugins.importexport.datacite.settings.description' => 'Please <a href="{$settingsUrl}">configure</a> the DataCite export plug-in before using it for the first time.',
  'plugins.importexport.datacite.settings.form.description' => 'Please configure the DataCite export plug-in:',
  'plugins.importexport.datacite.settings.form.username' => 'Username (symbol)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Please enter the username (symbol) you got from DataCite. The username may not contain colons.',
  'plugins.importexport.datacite.settings.form.passwordRequired' => 'Please enter the password you got from DataCite.',
  'plugins.importexport.datacite.settings.form.automaticRegistration' => 'Register DOIs automatically',
  'plugins.importexport.datacite.settings.form.automaticRegistration.description' => 'OJS will deposit DOIs automatically to DataCite as articles are published. Please note that this may take a short amount of time after publication to process. You can check for all unregistered DOIs in the <a href="{$unregisteredURL}">unregistered articles listing</a>.',
  'plugins.importexport.datacite.export.suppFiles' => 'Export supplementary files',
  'plugins.importexport.datacite.export.selectSuppFile' => 'Select Supplementary Files',
  'plugins.importexport.datacite.export.noSuppFiles' => 'No supplementary files currently have DOIs assigned.',
  'plugins.importexport.datacite.register.success' => 'Registration successful!',
  'plugins.importexport.datacite.export.error.suppFileNotFound' => 'No supplementary file matched the specified suppfile ID: {$param}.',
  'plugins.importexport.datacite.cliUsage' => 'Usage: 
{$scriptName} {$pluginName} export xmlFileName journal_path {issues|articles|galleys|suppfiles} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register journal_path {issues|articles|galleys|suppfiles} objectId1 [objectId2] ...',
  'plugins.importexport.datacite.senderTask.name' => 'DataCite automatic registration task',
); ?>