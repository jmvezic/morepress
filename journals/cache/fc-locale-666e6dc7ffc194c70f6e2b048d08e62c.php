<?php return array (
  'plugins.gateways.metsGateway.displayName' => 'METS Gateway Plugin',
  'plugins.gateways.metsGateway.settings' => 'Settings',
  'plugins.gateways.metsGateway.description' => 'This plugin provides raw XML data in METS format for a specified journal. <strong>NOTE: This is intended to be used by Web Services and enabling this plugin has a security issue in that it provides unrestricted access to the journal in XML form (content is base64 encoded).</strong>',
  'plugins.gateways.metsGateway.errors.errorMessage' => 'Unable to export journal data. The METS Gateway plugin needs to be enabled and the id of the journal to exported must be provided in the URL.',
  'plugins.gateways.metsGateway.settings.FContent' => 'Use base64 encoding for content wrapper',
  'plugins.gateways.metsGateway.settings.FLocat' => 'Use URL of the bitsream for content wrapper',
  'plugins.gateways.metsGateway.settings.organization' => 'METS:agent element organization attribute',
  'plugins.gateways.metsGateway.settings.preservationLevel' => 'PREMIS preservation Level',
  'plugins.gateways.metsGateway.settings.exportSuppFiles' => 'Export supplementary files',
); ?>