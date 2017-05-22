<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'site/topic/000002',
        'locale' => 'en_US',
        'title' => 'Site Management',
        'toc' => 'site/toc/000000',
        'key' => 'site.siteManagement',
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
      'value' => '<p>OJS is designed to be a multi-journal system, and the Site Administrator is responsible for configuring site-level settings and creating new journals to be hosted within a single site. Journal sites are entirely independent, with the exception of user accounts; while a user may participate in any combination of roles and journals, the same email address and username will refer to the same user regardless of journal.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Site Settings',
      ),
      'value' => '<p>Basic information is entered by the Site Administrator that is applicable to all journals hosted by the site, including the site title and description, and contact information.</p>
		<p><em>Journal Redirect.</em> This setting can be used to ensure that all requests are redirected to a particular journal web site. Typically this setting is used when a site is hosting a single journal.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Hosted Journals',
      ),
      'value' => '<p>As OJS allows any number of individual and distinct journal web sites to be generated, new journals can be created and managed at any time. Each journal that is created can be accessed through a unique URL based on a path name entered by the Site Administrator. Journals that are currently in the process of being set up and configured can be hidden from the main site until such time that they are ready to go live.</p>',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Languages',
      ),
      'value' => '<p>OJS is designed to be a multilingual system, allowing journals supporting a wide variety of languages to be hosted under a single site. The Site Administrator can specify the default language of the site and install additional locales as they become available to make other languages available for use by journals.</p>
		<p>Additional language packages will typically be available for download from the Open Journal Systems <a href="http://pkp.sfu.ca/" target="_blank">web site</a> as user-contributed translations are received. These packages can be installed into an existing OJS system to make them available to journals.</p>',
    ),
    4 => 
    array (
      'attributes' => 
      array (
        'title' => 'Authentication Sources',
      ),
      'value' => '<p>By default, OJS authenticates users against its internal database. It is possible, however, to use other methods of authentication, such as LDAP. Additional authentication sources are implemented as OJS plugins; refer to the documentation shipped with each plugin for details.</p>',
    ),
  ),
); ?>