<?php return array (
  'plugins.importexport.crossref.description' => 'Export or register article metadata in CrossRef format.',
  'plugins.importexport.crossref.displayName' => 'CrossRef Export/Registration Plugin',
  'plugins.importexport.crossref.requirements' => 'Requirements',
  'plugins.importexport.crossref.requirements.satisfied' => 'All plugin requirements are satisfied.',
  'plugins.importexport.crossref.error.pluginNotConfigured' => 'CrossRef plugin not configured! Configure this plugin in the plugin\'s <a href="{$settingsUrl}">settings page</a>.',
  'plugins.importexport.crossref.error.DOIsNotAvailable' => 'DOI Public Identifier plugin not configured! Enable and configure this plugin from the <a href="{$doiUrl}" target="_blank">DOI Plugin</a> Settings page.',
  'plugins.importexport.crossref.error.publisherNotConfigured' => 'A journal publisher has not been configured! You must add a publisher institution under <a href="{$publisherUrl}" target="_blank">Journal Setup Step 1.5</a>.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'The following items are required for a successful CrossRef deposit.',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Depositor name',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'Depositor email',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Please enter the depositor name.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Please enter the depositor email.',
  'plugins.importexport.crossref.settings.form.automaticRegistration' => 'Register DOIs automatically',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'OJS will deposit article DOIs automatically to CrossRef as articles are published. Please note that this may take a short amount of time after publication to process. You can check for all unregistered DOIs in the <a href="{$unregisteredURL}">unregistered articles listing</a>.',
  'plugins.importexport.crossref.registrationIntro' => 'This plugin can be configured to automatically register Digital Object Identifiers (DOIs) with CrossRef. You will need a username and password (available from <a href="http://www.crossref.org" target="_blank">CrossRef</a>) in order to do so. If you do not have your own username and password you can still export into the CrossRef XML format, but you cannot register your DOIs with CrossRef from within OJS.',
  'plugins.importexport.crossref.settings.description' => 'You can <a href="{$settingsUrl}">configure the CrossRef export/registration plug-in here</a>.',
  'plugins.importexport.crossref.settings.form.description' => 'Please configure the CrossRef export/registration plug-in:',
  'plugins.importexport.crossref.settings.form.username' => 'Username',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Please enter the username you got from CrossRef.',
  'plugins.importexport.crossref.export.unregistered' => 'Export unregistered articles',
  'plugins.importexport.crossref.export.selectUnregistered' => 'Select unregistered articles',
  'plugins.importexport.crossref.manageDOIs' => 'Manage DOIs',
  'plugins.importexport.crossref.manageIssues' => 'Manage Issues',
  'plugins.importexport.crossref.manageArticleDOIs' => 'Manage Article DOIs',
  'plugins.importexport.crossref.articles.notDeposited' => 'All published articles have already been registered (or none of them has a DOI assigned).',
  'plugins.importexport.crossref.articles.failed' => 'There are no failed deposits.',
  'plugins.importexport.crossref.articles.submitted' => 'There are no just submitted DOIs.',
  'plugins.importexport.crossref.articles.completed' => 'There are no completed deposits.',
  'plugins.importexport.crossref.articles.found' => 'There are no active DOIs',
  'plugins.importexport.crossref.downloadXML' => 'Download XML',
  'plugins.importexport.crossref.checkStatus' => 'Check status',
  'plugins.importexport.crossref.checkStatusDescription' => 'Click this button to update the status for the selected object(s).',
  'plugins.importexport.crossref.status.all' => 'All',
  'plugins.importexport.crossref.status.non' => 'Not deposited',
  'plugins.importexport.crossref.status.submitted' => 'Submitted',
  'plugins.importexport.crossref.status.completed' => 'Deposited',
  'plugins.importexport.crossref.status.failed' => 'Failed',
  'plugins.importexport.crossref.status.registered' => 'Active',
  'plugins.importexport.crossref.status.markedRegistered' => 'Marked registered',
  'plugins.importexport.crossref.statusLegend' => '<p>Deposit status:</p>
		<p>
		- Not deposited: no deposit attempt has been made for this DOI.<br />
		- Submitted: this DOI has been submitted for the deposit.<br />
		- Deposited: the DOI has been deposited to Crossref, but may not be active yet.<br />
		- Active: the DOI has been deposited, and is resolving correctly.<br />
		- Failed: the DOI deposit has failed.<br />
		- Marked registered: the DOI was manually marked as registered.
		</p>
		<p>Only the status of the last deposit attempt is displayed.</p>
		<p>If a deposit has failed, please solve the problem and try to register the DOI again.</p>',
  'plugins.importexport.crossref.notification.failed' => 'A DOI has failed to register. Please go to CrossRef Export/Registration Plugin > Export unregistered articles > Failed.',
  'plugins.importexport.crossref.register.error.mdsError' => 'Submission was not successful! The DOI registration server returned an error: \'{$param}\'.',
  'plugins.importexport.crossref.register.success' => 'Submission successful!',
  'plugins.importexport.crossref.cliUsage' => 'Usage:
{$scriptName} {$pluginName} export xmlFileName journal_path {issues|articles} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register journal_path {issues|articles} objectId1 [objectId2] ...',
  'plugins.importexport.crossref.senderTask.name' => 'CrossRef automatic registration task',
  'plugins.importexport.crossref.senderTask.warning.noDOIprefix' => 'DOI prefix is missing for the journal with the path {$path}.',
); ?>