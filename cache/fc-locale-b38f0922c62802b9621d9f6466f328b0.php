<?php return array (
  'plugins.auth.ldap.displayName' => 'LDAP poslužitelj',
  'plugins.auth.ldap.description' => 'Ovaj dodatak služi za provjeru vjerodostojnosti i usklađivanje korisničkih računa preko LDAP poslužitelja.',
  'plugins.auth.ldap.settings' => 'Postavke LDAP poslužitelja',
  'plugins.auth.ldap.settings.hostname' => 'Naziv poslužitelja',
  'plugins.auth.ldap.settings.hostname.description' => 'Npr. "ldap.primjer.com", ili "ldaps://ldap.primjer.com" (koristeći SSL)',
  'plugins.auth.ldap.settings.port' => 'Port poslužitelja',
  'plugins.auth.ldap.settings.port.description' => 'Po izboru. Standardno 389 (LDAP) ili 636 (LDAP preko SSL-a)',
  'plugins.auth.ldap.settings.basedn' => 'Osnovni naziv domene',
  'plugins.auth.ldap.settings.basedn.description' => 'Npr. "ou=osobe,dc=primjer,dc=com"',
  'plugins.auth.ldap.settings.managerdn' => 'Administratorov naziv domene',
  'plugins.auth.ldap.settings.managerdn.description' => 'Npr., "cn=Administrator,dc=primjer,dc=com"',
  'plugins.auth.ldap.settings.managerpwd' => 'Administratorova lozinka',
  'plugins.auth.ldap.settings.managerpwd.description' => 'Administratorov naziv domene i lozinka su obavezni  ako je omogućena sinkronizacija korisničkog profila/lozinke ili ako su omogućene opcije kreiranja korisnika. Ako će se LDAP poslužitelj koristiti isključivo za provjeru vjerodostojnosti korisničkih računa, tada ove opcije mogu biti isključene.',
  'plugins.auth.ldap.settings.pwhash' => 'Enkripcija lozinke',
  'plugins.auth.ldap.settings.pwhash.description' => 'Raspršeni format za lozinke pohranjen na poslužitelju. Preporuča se SSHA (zahtjeva PHP >= 4.3.0).',
  'plugins.auth.ldap.settings.saslopt' => 'Postavke SASL sučelja (po izboru)',
  'plugins.auth.ldap.settings.sasl' => 'Koristiti SASL sučelje umjesto jednostavne provjere vjerodostojnosti (zahtjeva PHP >= 5)',
  'plugins.auth.ldap.settings.saslmech' => 'SASL mehanizam',
  'plugins.auth.ldap.settings.saslmech.description' => 'Npr. "DIGEST-MD5"',
  'plugins.auth.ldap.settings.saslrealm' => 'Područje',
  'plugins.auth.ldap.settings.saslauthzid' => 'Zatražen autorizacijski ID',
  'plugins.auth.ldap.settings.saslprop' => 'Sigurnosne opcije SASL sučelja',
  'plugins.auth.ldap.settings.uid' => 'Atributi korisničkog imena',
  'plugins.auth.ldap.settings.uid.description' => 'Atributi čija vrijednost jedinstveno identificira objekt korisnika, kao što je uid ili cn ili sAMAccountName.',
); ?>