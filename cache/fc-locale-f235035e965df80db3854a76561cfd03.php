<?php return array (
  'plugins.generic.xmlGalley.displayName' => 'Dodatak za XML prijelom',
  'plugins.generic.xmlGalley.description' => 'Ovaj dodatak generira XHTML prijelom iz XML članaka koristeći XSLT.',
  'plugins.generic.xmlGalley.manager.settings' => 'Postavke',
  'plugins.generic.xmlGalley.settings.description' => '<p>S ovim dodatkom, prijelom članaka će biti automatski prikazan temeljem izvorne poslane XML datoteke korištenjem specifične XSL stylesheet transformacije.</p>',
  'plugins.generic.xmlGalley.settings.renderer' => 'XSLT metoda prikaza',
  'plugins.generic.xmlGalley.settings.PHP5' => 'PHP 5.0.0+ sa XSL funkcijama (libxslt)',
  'plugins.generic.xmlGalley.settings.PHP4' => 'PHP 4.0.3+ sa XSLT funkcijama (Sablotron)',
  'plugins.generic.xmlGalley.settings.notAvailable' => 'Nije na raspolaganju',
  'plugins.generic.xmlGalley.settings.externalXSLT' => 'Vanjski XSLT alat za prikaz koji se poziva kroz komandnu liniju (npr. Xalan)',
  'plugins.generic.xmlGalley.settings.externalXSLTDescription' => 'Unesite kompletnu putanju do XSLT alata za prikaz, zajedno sa potrebnim parametrima.  Koristite %xsl kao zamjenu za lokaciju XSL stylesheet datoteke i  %xml kao zamjenu za lokaciju izvorne XML datoteke; npr.: <br /><pre>/usr/bin/java -jar ~/java/xalan.jar -HTML -IN %xml -XSL %xsl</pre>',
  'plugins.generic.xmlGalley.settings.externalXSLTTest' => 'Testiraj XSLT',
  'plugins.generic.xmlGalley.settings.externalXSLTSuccess' => 'Test vanjskog XSLT alata uspješan.',
  'plugins.generic.xmlGalley.settings.externalXSLTFailure' => 'Test vanjskog XSLT alata nije uspio.',
  'plugins.generic.xmlGalley.settings.externalXSLTRequired' => 'Potrebno je specificirati vanjski XSLT alat koji se poziva kroz komandnu liniju.',
  'plugins.generic.xmlGalley.settings.stylesheet' => 'XSL Stylesheet',
  'plugins.generic.xmlGalley.settings.xslNLM' => '<a href="http://dtd.nlm.nih.gov/publishing/">NLM Journal Publishing DTD</a> → XHTML',
  'plugins.generic.xmlGalley.settings.xslFOP' => 'Omogući prikaz PDF prijeloma koristeći XSL-FO (npr. FOP)',
  'plugins.generic.xmlGalley.settings.xslFOPDescription' => 'Unesite kompletnu putanju do FO alata, zajedno sa potrebnim parametrima.  Koristite %fo kao zamjenu za lokaciju XSL-FO datoteke i %pdf kao zamjenu za lokaciju PDF datoteke; npr.: <br /><pre>/usr/sbin/fop -fo %fo -pdf %pdf</pre>',
  'plugins.generic.xmlGalley.settings.xslFOPRequired' => 'Potrebno je specificirati vanjski FO alat koji se poziva kroz komandnu liniju.',
  'plugins.generic.xmlGalley.settings.customXSL' => 'Posebni XSL stylesheet',
  'plugins.generic.xmlGalley.settings.customXSLRequired' => 'Potrebno je specificirati posebnu XSL stylesheet datoteku.',
  'plugins.generic.xmlGalley.settings.customXSLInvalid' => 'Poslana XSL datoteka nije valjana. Molimo provjerite datoteku i pokušajte ponovo.',
); ?>