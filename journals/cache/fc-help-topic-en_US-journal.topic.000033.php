<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000033',
        'locale' => 'en_US',
        'title' => 'Merge Users',
        'toc' => 'journal/toc/000002',
        'key' => 'journal.managementPages.mergeUsers',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>The Merge Users feature, available from Journal Management under the Users heading, allows the Journal Manager to merge two user accounts into a single account, transferring edit assignments, submissions, and numerous other records from one account to the other and effectively deleting the first.</p>
		<p>The following items are transferred:</p>
			<ul>
				<li>Article authorship</li>
				<li>Public comments on articles</li>
				<li>Article notes</li>
				<li>Editor assignments and decisions</li>
				<li>Review assignments</li>
				<li>Layout editor assignments</li>
				<li>Proofreader assignments</li>
				<li>Article email and event log entries</li>
				<li>Reviewer access keys</li>
				<li>Roles</li>
				<li>Subscriptions (please see below)</li>
			</ul>
		<p>The following items are <strong>not</strong> transferred:</p>
			<ul>
				<li>Sessions</li>
				<li>Notification status (i.e. whether the user has signed up to receive notifications about journal news)</li>
				<li>Editorial team memberships</li>
				<li>Section Editor status on sections</li>
				<li>User profile information (e.g. first name, last name, etc.)</li>
			</ul>
		<p>This feature should be used with caution, as it is not reversible and involves the transfer of records from one user to another.</p>
		<p>For subscriptions, the merge feature performs the following actions: For Individual Subscriptions, the second user\'s subscription is transferred to the first user only if is valid and if the first user does not already have a valid subscription for a given journal. For Institutional Subscriptions, all of the subscriptions for which the second user is identified as the contact person are transferred to the first user, who becomes the new contact person for the subscriptions.</p>',
    ),
  ),
); ?>