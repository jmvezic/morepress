<?php return array (
  'plugins.generic.alm.displayName' => 'ALM dodatak',
  'plugins.generic.alm.description' => 'Dodatak za prikaz metrike na razini članka. Za korištenje ALM usluge, morate imati valjane DOI oznake, u suprotnom se prikazuje statistika s lokalnog poslužitelja.',
  'plugins.generic.alm.title' => 'Metrika članka',
  'plugins.generic.alm.loading' => 'Učitavanje metrike ...',
  'plugins.generic.alm.settings' => 'Postavke',
  'plugins.generic.alm.settings.saved' => 'Postavke ALM dodatka spremljene.',
  'plugins.generic.alm.settings.apiKey' => 'API ključ za metriku na razini članka',
  'plugins.generic.alm.settings.apiKey.description' => 'Za mogućnost pristupa metrici s ALM poslužitelja, potrebno je imati API ključ, koji možete napraviti prijavom na (Mozilla Persona) <a href="http://pkp-alm.lib.sfu.ca/">PKP ALM stranicu</a>.',
  'plugins.generic.alm.settings.depositArticles' => 'Automatsko postavljanje informacija o članku? (Ostaviti prazno ukoliko direktno spremate informacije na ALM poslužitelj preko DOI prefiksa)',
  'plugins.generic.alm.settings.depositUrl' => 'URL za postavljanje podataka o članku',
  'plugins.generic.alm.settings.depositUrl.description' => 'URL ponuđen od strane PKP-a za postavljanje članaka.',
  'plugins.generic.alm.settings.ipAddress' => 'Kada kontaktirate PKP za postavljanje ALM usluge, ponudite im sljedeći IP adresu: {$ip}',
  'plugins.generic.alm.thisJournal' => 'Ovaj časopis',
  'plugins.generic.alm.categories.html' => 'HTML pogleda',
  'plugins.generic.alm.categories.html.description' => 'Ukupni broj HTML pogleda za ovaj članak. Ovaj broj se sprema u sam sustav. Mjesečni prikaz pogleda također je moguć.',
  'plugins.generic.alm.categories.pdf' => 'PDF pogleda',
  'plugins.generic.alm.categories.pdf.description' => 'Ukupan broj PDF pogleda i preuzimanja za ovaj članak. Ovaj broj se sprema u sam sustav. Mjesečni prikaz pogleda također je moguć.',
  'plugins.generic.alm.categories.shares' => 'Dijeljenja',
  'plugins.generic.alm.categories.shares.description' => 'Broj podijela ili stvaranja oznaka (bookmark) na društvene mreža kao što su Facebook, CiteULike i Mendeley. U većini slučajeva, klik na broj podijela odvest će vas na ispis same mreže.',
  'plugins.generic.alm.categories.likes' => 'Lajkova',
  'plugins.generic.alm.categories.likes.description' => 'Broj lajkova na društvenim mrežama poput Facebooka.',
  'plugins.generic.alm.categories.citations' => 'Citiranost',
  'plugins.generic.alm.categories.citations.description' => 'Broj citiranosti za ovaj članak, povlači se iz CrossRef, PubMed i Wikipedija baza. U većini slučajeva, klik na broj odvest će vas na samu uslugu.',
  'plugins.generic.alm.senderTask.warning.noDOIprefix' => 'ALM dodatak je uključen ali valjani DOI prefiks mora biti postavljen u putanji časopisa {$path} kako bi dodatak pravilno funkcionirao.',
  'plugins.generic.alm.senderTask.warning.noApiKey' => 'ALM dodatak je uključen ali nije pružen API ključ za putanju članka {$path}.',
  'plugins.generic.alm.senderTask.warning.noJournal' => 'ALM dodatak nije uključen u nijednom časopisu. Ne šalju se podaci o člancima.',
  'plugins.generic.alm.senderTask.error.noServerResponse' => 'Nije moguće potvrditi da su podaci o članku za časopis {$path} poslani. Poslužuitelj nije odgovorio.',
  'plugins.generic.alm.senderTask.error.noDepositUrl' => 'Nije napisan URL depozita.',
  'plugins.generic.alm.senderTask.error.returnError' => 'Poslužitelj je vratio poruku: {$error}
	{$articlesNumber} je poslano.
	{$payload}',
  'plugins.generic.alm.senderTask.name' => 'Slanje ALM podataka o članku',
); ?>