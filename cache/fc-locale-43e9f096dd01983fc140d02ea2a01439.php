<?php return array (
  'plugins.importexport.users.displayName' => 'Dodatak za XML korisnika',
  'plugins.importexport.users.description' => 'Uvoz/izvoz korisnika.',
  'plugins.importexport.users.cliUsage' => 'Primjena: {$scriptName} {$pluginName} [naredba] ...
Naredba:
	import [xmlNazivDatoteke] [putanja_časopisa] [opcionalne oznake]
	export [xmlNazivDatoteke] [putanja_časopisa]
	export [xmlNazivDatoteke] [putanja_časopisa] [putanja_uloge1] [putanja_uloge2] ...

Opcionalne oznake:
	continue_on_error: Ako je zadano, u slučaju pojavljivanja pogreške ne staje s unošenjem korisnika

	send_notify: Ako je zadano, šalje e-pošte obavijesti unesenim korisnicima koji sadrže korisnička imena i lozinke

Primjeri:
	Unosi korisnike u mojCasopis iz mojaDatotekaUnosenja.xml, nastavljajući u slučaju pogreške:
	{$scriptName} {$pluginName} import mojaDatotekaUnosenja.xml mojCasopis continue_on_error

	Iznosi sve korisnike iz časpoisa mojCasopis:
	{$scriptName} {$pluginName} export mojaDatotekaIznosa.xml mojCasopis

	Iznosi sve korisnike registrirane kao recenzente, zajedno s njihovim recenzentskim ulogama:
	{$scriptName} {$pluginName} export mojaDatotekaIznosa.xml mojCasopis reviewer',
  'plugins.importexport.users.import.importUsers' => 'Unesi korisnike',
  'plugins.importexport.users.import.instructions' => 'Molim odaberite XML datoteku koja sadrži informacije o korisnicima koje želite unijeti u ovaj časopis. Konzultirajte pomoć časopisa za detalje o formatu ove datoteke.<br /><br />Ukoliko unesena datoteka sadrži bilo koja korisnička imena ili adrese e-pošte koje već postoje u sustavu, ti korisnici neće biti uneseni, već će njihove uloge biti dodijeljene onima postojećih korisnika.',
  'plugins.importexport.users.import.failedToImportUser' => 'Neuspjelo unošenje korisnika',
  'plugins.importexport.users.import.failedToImportRole' => 'Neuspjelo unošenje uloga korisnika',
  'plugins.importexport.users.import.dataFile' => 'Datoteka s podacima o korisnicima',
  'plugins.importexport.users.import.sendNotify' => 'Pošalji e-poštom svakom unesenom korisniku obavijest koja sadrži njegovo korisničko ime i lozinku.',
  'plugins.importexport.users.import.continueOnError' => 'U slučaju greške nastavi s unošenjem ostalih korisnika.',
  'plugins.importexport.users.import.noFileError' => 'Datoteka nije poslana!',
  'plugins.importexport.users.import.usersWereImported' => 'Sljedeći korisnici su uspješno uneseni u sustav',
  'plugins.importexport.users.import.errorsOccurred' => 'Pogreške koje su se pojavile prilikom unošenja',
  'plugins.importexport.users.import.confirmUsers' => 'Molim potvrdite da su ovo korisnici koje želite unijeti u sustav',
  'plugins.importexport.users.unknownJournal' => 'Navedena je nepoznata putanja "{$journalPath}".',
  'plugins.importexport.users.export.exportUsers' => 'Iznesi korisnike',
  'plugins.importexport.users.export.exportByRole' => 'Iznesi po ulozi',
  'plugins.importexport.users.export.exportAllUsers' => 'Iznesi sve',
  'plugins.importexport.users.export.errorsOccurred' => 'Pogreške koje su se pojavile prilikom iznošenja',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Nije moguće pisati po datoteci "{$fileName}".',
  'plugins.importexport.users.import.warning' => 'Upozorenje',
  'plugins.importexport.users.import.encryptionMismatch' => 'Nije moguće koristiti lozinke pohranjene hash funkcijom {$importHash}; OJS je podešen da koristi {$ojsHash}. Ukoliko nastavite, morat ćete ponovno postaviti lozinke ovako unesenih korisnika.',
); ?>