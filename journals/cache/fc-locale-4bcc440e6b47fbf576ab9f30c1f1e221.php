<?php return array (
  'plugins.importexport.native.displayName' => 'Articles & Issues XML Plugin',
  'plugins.importexport.native.description' => 'Import and export articles and issues',
  'plugins.importexport.native.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [journal_path] [user_name] ...
	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	export [xmlFileName] [journal_path] article [articleId]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]

Additional parameters are required for importing data as follows, depending
on the root node of the XML document.

If the root node is <article> or <articles>, additional parameters are required.
The following formats are accepted:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]',
  'plugins.importexport.native.export' => 'Export Data',
  'plugins.importexport.native.export.issues' => 'Export Issues',
  'plugins.importexport.native.export.sections' => 'Export Sections',
  'plugins.importexport.native.export.articles' => 'Export Articles',
  'plugins.importexport.native.selectIssue' => 'Select Issue',
  'plugins.importexport.native.selectArticle' => 'Select Article',
  'plugins.importexport.native.import.articles' => 'Import Articles',
  'plugins.importexport.native.import.articles.description' => 'The file you are importing contains one or more articles. You must choose an issue and section to import these articles into; if you do not wish to import them all into the same section and issue, you may either separate them into different XML files or move them into the appropriate issues and sections after importing.',
  'plugins.importexport.native.import' => 'Import Data',
  'plugins.importexport.native.import.description' => 'This plugin supports data import based on the native.dtd Document Type Definition. Supported root nodes are &lt;article&gt;, &lt;articles&gt;, &lt;issue&gt;, and &lt;issues&gt;.',
  'plugins.importexport.native.import.error' => 'Import Error',
  'plugins.importexport.native.import.error.description' => 'One or more errors occurred during import. Please check to ensure that the format of the import file correctly matches the specification. Specific details of the import errors are listed below.',
  'plugins.importexport.native.cliError' => 'ERROR:',
  'plugins.importexport.native.error.uploadFailed' => 'The upload failed; please ensure that uploads are allowed on your server and that the file is not too big for your PHP and web server configuration.',
  'plugins.importexport.native.error.unknownUser' => 'The specified user, "{$userName}", does not exist.',
  'plugins.importexport.native.error.unknownJournal' => 'The specified journal path, "{$journalPath}", does not exist.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Could not write to the file "{$fileName}".',
  'plugins.importexport.native.export.error.sectionNotFound' => 'No section matched the specifier "{$sectionIdentifier}".',
  'plugins.importexport.native.export.error.issueNotFound' => 'No issue matched the specified issue ID "{$issueId}".',
  'plugins.importexport.native.export.error.articleNotFound' => 'No article matched the specified article ID "{$articleId}".',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'This plugin does not support the supplied root node "{$rootName}". Please ensure that the file is correctly formed and try again.',
  'plugins.importexport.native.import.error.titleMissing' => 'The title for an issue was missing.',
  'plugins.importexport.native.import.error.defaultTitle' => 'MISSING TITLE',
  'plugins.importexport.native.import.error.unknownIdentificationType' => 'An unknown identification type "{$identificationType}" was specified in the "identification" attribute to the "issue" element of the "{$issueTitle}" issue.',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'An invalid boolean value "{$value}" was specified. Please use "true" or "false".',
  'plugins.importexport.native.import.error.invalidDate' => 'An invalid date "{$value}" was specified.',
  'plugins.importexport.native.import.error.unknownEncoding' => 'Data was embedded using an unknown encoding type "{$type}".',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'Unable to save a local copy of "{$originalName}".',
  'plugins.importexport.native.import.error.illegalUrl' => 'The specified URL "{$url}" for the issue "{$issueTitle}" was illegal. Web-submitted imports support only http, https, ftp, or ftps methods.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'An unknown supplemental file type "{$suppFileType}" was specified.',
  'plugins.importexport.native.import.error.couldNotCopy' => 'A specified URL "{$url}" could not be copied to a local file.',
  'plugins.importexport.native.import.error.duplicatePublicGalleyId' => 'The public ID given for the import galley "{$publicId}" is already in use by another galley for the same article, "{$articleTitle}".',
  'plugins.importexport.native.import.error.duplicatePublicSuppFileId' => 'The public ID given for the import supplementary file "{$suppFileTitle}" is already in use by another supplementary file for the same article, "{$otherSuppFileTitle}".',
  'plugins.importexport.native.import.error.duplicatePublicArticleId' => 'The public ID given for the import article "{$articleTitle}" is already in use by another article, "{$otherArticleTitle}".',
  'plugins.importexport.native.import.error.duplicatePublicIssueId' => 'The public ID given for the import issue "{$issueTitle}" is already in use by another issue, "{$otherIssueTitle}".',
  'plugins.importexport.native.import.error.sectionTitleMissing' => 'A section title was missing for the issue "{$issueTitle}". Please ensure that the XML document conforms to the appropriate DTD.',
  'plugins.importexport.native.import.error.sectionMismatch' => 'The "{$sectionTitle}" section of the "{$issueTitle}" issue matched an existing journal section, but the specified abbreviation ("{$sectionAbbrev}") matched a different section.',
  'plugins.importexport.native.import.error.articleTitleMissing' => 'An article title was missing for the issue "{$issueTitle}" in the section "{$sectionTitle}". Please ensure that the XML document conforms to the appropriate DTD, and that a title has been supplied for the journal\'s locale.',
  'plugins.importexport.native.import.error.articleTitleLocaleUnsupported' => 'An article title ("{$articleTitle}") was provided for the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleAbstractLocaleUnsupported' => 'An article abstract was provided for the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'The article "{$articleTitle}" in the section "{$sectionTitle}" of the issue "{$issueTitle}" was missing a galley label.',
  'plugins.importexport.native.import.error.suppFileMissing' => 'The article "{$articleTitle}" in the section "{$sectionTitle}" of the issue "{$issueTitle}" was missing a supplemental file.',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'The article "{$articleTitle}" in the section "{$sectionTitle}" of the issue "{$issueTitle}" was missing a galley file.',
  'plugins.importexport.native.import.error.issueTitleLocaleUnsupported' => 'An issue title ("{$issueTitle}") was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.issueDescriptionLocaleUnsupported' => 'A description of the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.coverLocaleUnsupported' => 'A cover of the the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.sectionTitleLocaleUnsupported' => 'A section title ("{$sectionTitle}") was provided in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.sectionAbbrevLocaleUnsupported' => 'A section abbreviation ("{$sectionAbbrev}") was provided in the issue  ("{$issueTitle}") in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.sectionIdentifyTypeLocaleUnsupported' => 'A section identifying type ("{$sectionIdentifyType}") was provided in the issue  ("{$issueTitle}") in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.sectionPolicyLocaleUnsupported' => 'A section policy ("{$sectionPolicy}") was provided in the issue ("{$issueTitle}") in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'The section title "{$section1Title}" and the section title "{$section2Title}" in the "{$issueTitle}" issue matched the different existing journal sections.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'The section title "{$sectionTitle}" in the "{$issueTitle}" issue matched an existing journal section, but another title of this section doesn\'t match with another title of the existing journal section.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'The section abbreviation "{$section1Abbrev}" and the section abbreviation "{$section2Abbrev}" of the "{$issueTitle}" issue matched the different existing journal sections.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'The section abbreviation "{$sectionAbbrev}" in the "{$issueTitle}" issue matched an existing journal section, but another abbreviation of this section doesn\'t match with another abbreviation of the existing journal section.',
  'plugins.importexport.native.import.error.articleDisciplineLocaleUnsupported' => 'An article discipline was provided for the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleTypeLocaleUnsupported' => 'An article type was provided for the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSubjectLocaleUnsupported' => 'An article subject was provided for the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSubjectClassLocaleUnsupported' => 'An article subject classification was provided for the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleCoverageGeoLocaleUnsupported' => 'An article geographical coverage was provided for the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleCoverageChronLocaleUnsupported' => 'An article chronological coverage was provided for the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleCoverageSampleLocaleUnsupported' => 'An article sample coverage was provided for the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSponsorLocaleUnsupported' => 'An article sponsor was provided for the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleAuthorCompetingInterestsLocaleUnsupported' => 'An author competing interest was provided for the author "{$authorFullName}" of the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleAuthorBiographyLocaleUnsupported' => 'An author biography was provided for the author "{$authorFullName}" of the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleAuthorAffiliationLocaleUnsupported' => 'An author affiliation was provided for the author "{$authorFullName}" of the article "{$articleTitle}" in the issue "{$issueTitle}" in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'A galley of the article "{$articleTitle}" in the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSuppFileTitleLocaleUnsupported' => 'A supplementary file title ("{$suppFileTitle}") of the article "{$articleTitle}" in the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSuppFileCreatorLocaleUnsupported' => 'A creator of the supplementary file "{$suppFileTitle}" of the article "{$articleTitle}" in the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSuppFileSubjectLocaleUnsupported' => 'A subject of the supplementary file "{$suppFileTitle}" of the article "{$articleTitle}" in the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSuppFileTypeOtherLocaleUnsupported' => 'A custom type of the supplementary file "{$suppFileTitle}" of the article "{$articleTitle}" in the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSuppFileDescriptionLocaleUnsupported' => 'A description of the supplementary file "{$suppFileTitle}" of the article "{$articleTitle}" in the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSuppFilePublisherLocaleUnsupported' => 'A publisher of the supplementary file "{$suppFileTitle}" of the article "{$articleTitle}" in the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSuppFileSponsorLocaleUnsupported' => 'A sponsor of the supplementary file "{$suppFileTitle}" of the article "{$articleTitle}" in the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.articleSuppFileSourceLocaleUnsupported' => 'A source of the supplementary file "{$suppFileTitle}" of the article "{$articleTitle}" in the issue "{$issueTitle}" was provided in a locale ("{$locale}") that this journal does not support.',
  'plugins.importexport.native.import.error.invalidPubId' => 'Your import file contains a dataset with an invalid {$pubIdType}: \'{$pubId}\'.',
  'plugins.importexport.native.import.error.duplicatePubId' => 'Your import file contains a dataset with {$pubIdType} \'{$pubId}\' that already exists for another object in the database. Please make sure that you never import objects with IDs that already exist in the database.',
  'plugins.importexport.native.import.error.unknownPubId' => 'Your import file contains a dataset with an ID-type \'{$pubIdType}\' that no ID-plugin can handle. Please install and/or activate the corresponding ID plug-in before trying to import this dataset.',
  'plugins.importexport.native.import.success' => 'Import Successful',
  'plugins.importexport.native.import.success.description' => 'The import was successful. Successfully-imported items are listed below.',
); ?>