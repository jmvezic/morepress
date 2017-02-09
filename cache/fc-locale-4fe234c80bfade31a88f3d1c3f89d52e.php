<?php return array (
  'plugins.generic.dataverse.displayName' => 'Dataverse Plugin',
  'plugins.generic.dataverse.description' => 'Deposit data sets and/or other supplementary files to a Dataverse.',
  'plugins.generic.dataverse.settings.connect' => 'Connect',
  'plugins.generic.dataverse.settings.dvnUri' => 'Dataverse URL',
  'plugins.generic.dataverse.settings.dvnUriDescription' => 'Root Dataverse URL',
  'plugins.generic.dataverse.settings.usernameDescription' => 'Username or API token',
  'plugins.generic.dataverse.settings.passwordDescription' => 'Password. Not required for API token.',
  'plugins.generic.dataverse.settings.dvnUriRequired' => 'Dataverse URL is required.',
  'plugins.generic.dataverse.settings.dvnUriNotValid' => 'Can\'t connect to Dataverse.',
  'plugins.generic.dataverse.settings.usernameRequired' => 'Please enter a Dataverse username.',
  'plugins.generic.dataverse.settings.selectDataverse' => 'Select Dataverse',
  'plugins.generic.dataverse.settings.dataverse' => 'Dataverse',
  'plugins.generic.dataverse.settings.dataverseDescription' => 'Select Dataverse to store this journal\'s data files.',
  'plugins.generic.dataverse.settings.dataverseRequired' => 'Please select a Dataverse.',
  'plugins.generic.dataverse.settings' => 'Settings',
  'plugins.generic.dataverse.settings.dataPolicies' => 'Data Policies',
  'plugins.generic.dataverse.settings.dataPoliciesDescription' => 'Configure data policies.',
  'plugins.generic.dataverse.settings.dataAvailabilityPolicy' => 'Data Availability Policy',
  'plugins.generic.dataverse.settings.dataAvailabilityPolicyDescription' => 'General data availability policy for the journal. This will appear in About the Journal.',
  'plugins.generic.dataverse.settings.dataAvailabilityRequired' => 'Please provide a data availability policy.',
  'plugins.generic.dataverse.settings.sectionPoliciesDescription' => 'Add data policies for specific journal sections.',
  'plugins.generic.dataverse.settings.authorGuidelinesDescription' => 'Edit <a href="{$authorGuidelinesUrl}" target="_blank">Author Guidelines</a> to include data submission and citation guidelines.',
  'plugins.generic.dataverse.settings.checklistDescription' => 'Edit <a href="{$checklistUrl}" target="_blank">Submission Preparation Checklist</a> to help authors comply with data submission and citation guidelines.',
  'plugins.generic.dataverse.settings.reviewPolicyDescription' => 'Edit <a href="{$reviewPolicyUrl}" target="_blank">Review Policy</a> to address datasets.',
  'plugins.generic.dataverse.settings.reviewGuidelinesUrl' => 'Edit <a href="{$reviewGuidelinesUrl}" target="_blank">Review Guidelines</a> to include instructions for reviewing datasets.',
  'plugins.generic.dataverse.settings.copyeditInstructionsUrl' => 'Edit <a href="{$copyeditInstructionsUrl}" target="_blank">Copyedit Instructions</a> to include instructions for datasets.',
  'plugins.generic.dataverse.settings.termsOfUse' => 'Terms of Use',
  'plugins.generic.dataverse.settings.termsOfUseRequired' => 'Provide terms of use or choose to fetch terms of use from Dataverse.',
  'plugins.generic.dataverse.settings.termsOfUseDescription' => 'Provide the terms of use to which users must agree before depositing data files.',
  'plugins.generic.dataverse.settings.fetchTermsOfUse' => 'Fetch terms of use from the Dataverse set up for this journal.',
  'plugins.generic.dataverse.settings.defineTermsOfUse' => 'Enter custom terms of use in the field below.',
  'plugins.generic.dataverse.settings.dataverseTermsOfUseError' => 'Could not retrieve terms of use for the configured Dataverse. Please check connection settings.',
  'plugins.generic.dataverse.settings.metadata' => 'Metadata Settings',
  'plugins.generic.dataverse.settings.citationFormat' => 'Citation format',
  'plugins.generic.dataverse.settings.citationFormatDescription' => 'Choose format of publication citation displayed in study cataloguing information.',
  'plugins.generic.dataverse.settings.citationFormat.apa' => 'APA Citation Style',
  'plugins.generic.dataverse.settings.pubIdType' => 'Public identifier type',
  'plugins.generic.dataverse.settings.pubIdTypeDescription' => 'Choose type of public identifier to link to article from publication citation. If no <a href="{$pubIdsUrl}">public identifier plugins</a> are enabled, citations for published articles will use OJS URLs.',
  'plugins.generic.dataverse.settings.workflow' => 'Workflow Settings',
  'plugins.generic.dataverse.settings.requireData' => 'Require data files',
  'plugins.generic.dataverse.settings.requireDataDescription' => 'Require submissions to include data files deposited in Dataverse.',
  'plugins.generic.dataverse.settings.requireDataError' => 'Authors are required to deposit submission data files in Dataverse. Upload a supplementary file to continue.',
  'plugins.generic.dataverse.settings.studyRelease' => 'Release draft studies',
  'plugins.generic.dataverse.settings.studyReleaseSubmissionAccepted' => 'Editor accepts submission',
  'plugins.generic.dataverse.settings.studyReleaseArticlePublished' => 'Article is published',
  'plugins.generic.dataverse.settings.default.dataAvailabilityPolicy' => '{$journal} requires, as a condition for publication, that data supporting the results in the paper should be archived in an appropriate public archive. {$journal} recommends the <a href="http://thedata.harvard.edu/">Harvard Dataverse</a>, which is free and open to all researchers worldwide to share, cite, reuse and archive research data. Data are important products of the scientific enterprise, and they should be preserved and usable for decades in the future. Authors may elect to have the data publicly available at time of publication. Exceptions may be granted at the discretion of the editor, especially for sensitive information such as human subject data or the location of endangered species. Any exceptions should be documented in a statement in the public article. (Adapted from <a href="http://datadryad.org/pages/jdap">Joint Data Archiving Policy</a> (JDAP)).',
  'plugins.generic.dataverse.settings.default.authorGuidelines.extras' => 'Example author guidelines',
  'plugins.generic.dataverse.settings.default.authorGuidelines.extras.label' => 'Show example data submission and citation guidelines',
  'plugins.generic.dataverse.settings.default.authorGuidelines' => '<ol>
     <li>
       <p>Definition of data that must be shared</p>
       <p>A "minimal dataset" can be defined to consist of the dataset used to reach the conclusions drawn in the manuscript with related metadata and methods, and any additional data required to replicate the reported study findings in their entirety. Include sufficient information for a researcher to understand data, and any citations to data from which the replication set is derived. Core descriptive data, methods, and study results should be included within the main paper, regardless of data deposition. Authors who have datasets too large for sharing via repositories or uploaded files should contact {$journal} for advice. (Adapted from <a href="http://www.plos.org/data-access-for-the-open-access-literature-ploss-data-policy/">PLOS\' Data Policy</a>)</p>
     </li>
     <li>
       <p>Guidance on sharing datasets that derive from work involving human participants</p>
       <p>{$journal} recognizes that there are cases where for reasons of privacy, national security and commercial confidentiality the full data cannot be made openly available. In such cases researchers should share their data analysis under the least restrictive terms consistent with legal requirements, and abiding by the research ethics and guidelines of their community. This should include opening up non-sensitive data, summary data, metadata and code; and facilitating access if the owner of the original data grants other researchers permission to use the data. (Adapted from OKF\'s <a href="http://openeconomics.net/principles/#sthash.MdxVXZlC.dpuf">Open Economics Principles</a>)</p>
     </li>
     <li>
       <p>Guidance on Data Citation</p>
       <p>If your research data is deposited at the same time as your manuscript using OJS\' article submission form then a Data Citation will automatically be generated by the Harvard Dataverse. However, if your research data is already in a repository then here is the suggested Data Citation format to include when you submit your manuscript:</p>
       <p>Author(s), Year, Dataset Title, Global Persistent Identifier, Data Repository or Archive, version and subset.</p>
       <p>For more information on Data Citation best practices please review <a href="http://www.force11.org/datacitation">Force11\'s Data Citation Principles</a>.</p>
     </li>
   </ol>',
  'plugins.generic.dataverse.settings.default.checklist.extras' => 'Submission preparation checklist examples',
  'plugins.generic.dataverse.settings.default.checklist.extras.label' => 'Show example checklist items for submissions with datasets',
  'plugins.generic.dataverse.settings.default.checklist' => '<ol>
   <li><p>If intending to share datasets that derive from work involving human participants please review "Guidance on sharing datasets that derive from work involving human participants" above.</p></li>
   <li><p>Prepare dataset for deposit by reviewing replication guidelines: <a href="http://thedata.org/book/replication-guidelines">http://thedata.org/book/replication-guidelines</a></p></li>
   <li><p>If depositing into the Harvard Dataverse, you may submit your dataset in OJS at the same time as your manuscript in {$journal}. This will be automatically deposited in the Harvard Dataverse and will generate a Data Citation with a persistent URL (DOI) which you can then refer others to cite your data when your article is published.</p></li>
   <li><p>If your dataset is already in a recommended public archive please include a Data Citation with a persistent URL. For guidelines on Data Citation please review the author guidelines.</p></li>
   </ol>',
  'plugins.generic.dataverse.settings.default.reviewPolicy.extras' => 'Review policy examples',
  'plugins.generic.dataverse.settings.default.reviewPolicy.extras.label' => 'Show examples of review policies for datasets',
  'plugins.generic.dataverse.settings.default.reviewPolicy' => '<ul>
   <li><p>Deposited datasets should be treated as part of the article for the purpose of peer review; OR</p></li>
   <li><p>At acceptance, and prior to the final version of the manuscript, underlying data must be submitted along with a description of how the dataset was created (including any differences from prior versions, and the name of any software packages that were used).</p></li>
   </ul>
   <p>A review policy should include a statement on datasets derived from work involving human participants:</p>
   <ul>
   <li><p>Datasets that derive from work involving human participants should demonstrate that the study participants\' privacy was preserved as indicated in the Data Availability Policy. They should also preferably meet the "minimal dataset" requirement described in the Data Availability Policy.</p></li>
   </ul>',
  'plugins.generic.dataverse.settings.default.reviewGuidelines.extras' => 'Example review guidelines',
  'plugins.generic.dataverse.settings.default.reviewGuidelines.extras.label' => 'Show example guidelines for reviewing datasets',
  'plugins.generic.dataverse.settings.default.reviewGuidelines' => '<p>As regards an article\'s accompanying data, reviewers should verify that the article and dataset comply with the journal\'s data submission policy, that the data appear consistent with the article, and the article and supplementary documentation are sufficient to understand the data provided, as well as its origins and the way in which it was used.</p>',
  'plugins.generic.dataverse.settings.default.copyeditInstructions.extras' => 'Example copyedit instructions',
  'plugins.generic.dataverse.settings.default.copyeditInstructions.extras.label' => 'Show examples of copyediting instructions for datasets',
  'plugins.generic.dataverse.settings.default.copyeditInstructions' => '<ul>
			<li><p>Copyeditors have verified that data citation policy is followed; OR</p></li>
			<li><p>Copyeditors have verified that empirical claims are accompanied by appropriate citations to data.</p></li>
		</ul>',
  'plugins.generic.dataverse.notification.studyCreated' => 'Submission data has been deposited in Dataverse.',
  'plugins.generic.dataverse.notification.studyUpdated' => 'Submission data has been updated in Dataverse.',
  'plugins.generic.dataverse.notification.fileAdded' => 'Supplementary file has been deposited in Dataverse.',
  'plugins.generic.dataverse.notification.fileDeleted' => 'Supplementary file has been removed from Dataverse.',
  'plugins.generic.dataverse.notification.studyDeleted' => 'Submission data has been removed from Dataverse.',
  'plugins.generic.dataverse.notification.releaseDataverse' => 'Data published in this journal\'s Dataverse is not accessible until the Dataverse is released. Please log in to the journal\'s Dataverse and release it.',
  'plugins.generic.dataverse.notification.studyReleased' => '<p>Submission data has been published in Dataverse:</p><p>{$dataCitation}</p>',
  'plugins.generic.dataverse.notification.error' => 'An error occured updating this submission\'s data in Dataverse.',
  'plugins.generic.dataverse.metadataForm.studyLocked' => 'This submission\'s Dataverse study is locked for processing. Submission metadata can\'t be updated until processing has completed.',
  'plugins.generic.dataverse.suppFile.title' => 'Dataverse Plugin: Publish Data',
  'plugins.generic.dataverse.suppFile.description' => 'Research data can be submitted for publication by depositing supplementary files in the journal\'s Dataverse or by supplying a citation to data already in a repository.',
  'plugins.generic.dataverse.suppFile.publishDataNone' => 'Treat uploaded file as supplementary file. File <strong>will not</strong> be deposited in Dataverse.',
  'plugins.generic.dataverse.suppFile.publishDataDataverse' => 'Deposit file in Dataverse. Author accepts and agrees to Dataverse <a href="javascript:openWindow(\'{$dataverseTermsOfUseUrl}\');">terms of use</a>.',
  'plugins.generic.dataverse.suppFile.publishData.error' => 'Please upload a file to deposit in Dataverse.',
  'plugins.generic.dataverse.suppFile.dataCitationDescription' => 'The file will be added to the Dataverse study created for this submission:',
  'plugins.generic.dataverse.suppFile.studyLocked' => 'This study is locked for processing. No changes can be made to submission data until processing has completed.',
  'plugins.generic.dataverse.suppFile.studyDescription' => 'Study Description',
  'plugins.generic.dataverse.suppFile.studyDescription.description' => 'Provide a summary of the purpose, nature, and scope of study data.',
  'plugins.generic.dataverse.suppFile.externalDataCitation' => 'External Data Citation',
  'plugins.generic.dataverse.suppFile.externalDataCitation.description' => 'If the data to be published with this submission is already in a different repository, please provide a data citation.',
  'plugins.generic.dataverse.suppFile.externalDataCitation.error' => 'Please upload files to deposit in Dataverse OR provide an external data citation.',
  'plugins.generic.dataverse.termsOfUse.title' => 'Terms Of Use',
  'plugins.generic.dataverse.termsOfUse.dataverse' => 'Dataverse',
  'plugins.generic.dataverse.dataAvailabilityPolicy.title' => 'Data Availability Policy',
  'plugins.generic.dataverse.block.displayName' => 'Dataverse Block Plugin',
  'plugins.generic.dataverse.block.title' => 'Data Citation',
  'plugins.generic.dataverse.suppFiles.view' => 'View in Dataverse',
  'plugins.generic.dataverse.dataCitation' => 'Data citation',
  'plugins.generic.dataverse.citationAPA.inPress' => '(in press).',
); ?>