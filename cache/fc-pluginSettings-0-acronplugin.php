<?php return array (
  'crontab' => 
  array (
    0 => 
    array (
      'className' => 'plugins.generic.usageStats.UsageStatsLoader',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
        0 => 'autoStage',
      ),
    ),
    1 => 
    array (
      'className' => 'plugins.generic.pln.classes.tasks.Depositor',
      'frequency' => 
      array (
        'hour' => '25',
      ),
      'args' => 
      array (
        0 => 'autoStage',
      ),
    ),
    2 => 
    array (
      'className' => 'plugins.generic.alm.ArticleInfoSender',
      'frequency' => 
      array (
        'hour' => '24',
      ),
      'args' => 
      array (
      ),
    ),
    3 => 
    array (
      'className' => 'plugins.importexport.datacite.DataciteInfoSender',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    4 => 
    array (
      'className' => 'plugins.importexport.medra.MedraInfoSender',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    5 => 
    array (
      'className' => 'plugins.importexport.crossref.CrossrefInfoSender',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    6 => 
    array (
      'className' => 'plugins.importexport.crossref.CrossrefInfoSender',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    7 => 
    array (
      'className' => 'classes.tasks.ReviewReminder',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    8 => 
    array (
      'className' => 'classes.tasks.SubscriptionExpiryReminder',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    9 => 
    array (
      'className' => 'classes.tasks.OpenAccessNotification',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
  ),
  'enabled' => true,
); ?>