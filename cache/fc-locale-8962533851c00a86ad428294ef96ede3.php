<?php return array (
  'plugins.importexport.native.displayName' => 'XML dodatak za članke i brojeve',
  'plugins.importexport.native.description' => 'Uvoz/izvoz članaka i brojeva.',
  'plugins.importexport.native.cliUsage' => 'Primjena: {$scriptName} {$pluginName} [naredba] ...
Naredbe:
	import [xmlNazivDatoteke] [putanja_časopisa] [korisničko_ime] ...
	export [xmlNazivDatoteke] [putanja_časopisa] articles [članakId1] [članakId2] ...
	export [xmlNazivDatoteke] [putanja_časopisa] article [članakId]
	export [xmlNazivDatoteke] [putanja_časopisa] issues [brojId1] [brojId2] ...
	export [xmlNazivDatoteke] [putanja_časopisa] issue [brojId]

Dodatni parametri su obavezni za unošenje članaka kako slijedi, 
ovisno o glavnom čvoru XML dokumenta.

Ako je glavni čvor <article> ili <articles>, dodatni parametri su obavezni.
Prihvatljivi su sljedeći formati:

{$scriptName} {$pluginName} import [xmlNazivDatoteke] [putanja_časopisa] [korisničko_ime]
	issue_id [brojId] section_id [rubrikaId]

{$scriptName} {$pluginName} import [xmlNazivDatoteke] [putanja_časopisa] [korisničko_ime]
	issue_id [brojId] section_name [naziv]

{$scriptName} {$pluginName} import [xmlNazivDatoteke] [putanja_časopisa]
	issue_id [brojId] section_abbrev [kratica]',
  'plugins.importexport.native.export' => 'Iznošenje podataka',
  'plugins.importexport.native.export.issues' => 'Iznošenje brojeva',
  'plugins.importexport.native.export.sections' => 'Iznošenje rubrika',
  'plugins.importexport.native.export.articles' => 'Iznošenje članaka',
  'plugins.importexport.native.selectIssue' => 'Odaberite broj',
  'plugins.importexport.native.selectArticle' => 'Odaberite članak',
  'plugins.importexport.native.import.articles' => 'Unošenje članaka',
  'plugins.importexport.native.import.articles.description' => 'Datoteka koju unosite sadrži jedan ili više članaka. Morate odabrati broj i rubriku u koju ćete unijeti članke. Ako ih ne želite unijeti sve u istu rubriku i broj, možete ih ili odvojiti u različite XML datoteke ili premjestiti u odgovarajuće brojeve i rubrike nakon unošenja.',
  'plugins.importexport.native.import' => 'Unošenje podataka',
  'plugins.importexport.native.import.description' => 'Ovaj dodatak podržava unos podataka baziran na native.dtd definiciji. Podržani korijenski elementi su: &lt;article&gt;, &lt;articles&gt;, &lt;issue&gt; i &lt;issues&gt;.',
  'plugins.importexport.native.import.error' => 'Pogreška prilikom unošenja',
  'plugins.importexport.native.import.error.description' => 'Prilikom unosa pojavila se jedna ili više grešaka. Molimo provjerite da li format unesene datoteke odgovara specifikaciji. Detalji grešaka prilikom unosa ispisani su ispod.',
  'plugins.importexport.native.cliError' => 'GREŠKA:',
  'plugins.importexport.native.error.unknownUser' => 'Navedeni korisnik "{$userName}" ne postoji.',
  'plugins.importexport.native.error.unknownJournal' => 'Navedena putanja časopisa "{$journalPath}" ne postoji.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Nije moguće pisati u datoteku "{$fileName}".',
  'plugins.importexport.native.export.error.sectionNotFound' => 'Niti jedna rubrika ne odgovara oznaci "{$sectionIdentifier}".',
  'plugins.importexport.native.export.error.issueNotFound' => 'Niti jedan broj ne odgovara navedenom identifikatoru broja "{$issueId}".',
  'plugins.importexport.native.export.error.articleNotFound' => 'Niti jedan članak ne odgovara navedenom identifikatoru članka "{$articleId}".',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'Ovaj dodatak ne podržava korijenski element "{$rootName}". Molimo provjerite jesu li datoteke ispravno formirane i pokušajte ponovno.',
  'plugins.importexport.native.import.error.titleMissing' => 'Nedostajao je naslov broja.',
  'plugins.importexport.native.import.error.defaultTitle' => 'NASLOV KOJI NEDOSTAJE',
  'plugins.importexport.native.import.error.unknownIdentificationType' => 'Nepoznati identifikacijski tip "{$identificationType}" je specificiran u "identification" atributu "issue" elementa broja "{$issueTitle}".',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'Navedena je neispravna logička (boolean) vrijednost "{$value}". Molimo koristite "true" ili "false".',
  'plugins.importexport.native.import.error.invalidDate' => 'Naveden je neispravan datum "{$value}".',
  'plugins.importexport.native.import.error.unknownEncoding' => 'Podaci su umetnuti koristivši nepoznati tip enkodiranja "{$type}".',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'Nije moguće spremiti lokalno kopiju datoteke "{$originalName}".',
  'plugins.importexport.native.import.error.illegalUrl' => 'Navedeni URL "{$url}" za broj "{$issueTitle}" je bio nedopušten. Uvođenja putem web prijave podržavaju samo http, https, ftp ili ftps metode.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'Naveden je nepoznati tip dopunske datoteke "{$suppFileType}".',
  'plugins.importexport.native.import.error.couldNotCopy' => 'Navedeni URL "{$url}" ne može se kopirati u lokalnu datoteku.',
  'plugins.importexport.native.import.error.duplicatePublicIssueId' => 'Javni identifikator dodijeljen za uvođenje broja "{$issueTitle}" već koristi drugi broj, "{$otherIssueTitle}".',
  'plugins.importexport.native.import.error.sectionTitleMissing' => 'Nedostajao je naslov rubrike za broj "{$issueTitle}". Molimo vas, pobrinite se da XML dokument odgovara adekvatnom DTD-u.',
  'plugins.importexport.native.import.error.sectionMismatch' => 'Rubrika "{$sectionTitle}" broja "{$issueTitle}" pristaje postojećoj rubrici časopisa, ali navedena kratica ("{$sectionAbbrev}") pristaje drugoj rubrici.',
  'plugins.importexport.native.import.error.articleTitleMissing' => 'Nedostajao je naslov članka za broj "{$issueTitle}" u rubrici "{$sectionTitle}". Molimo vas, pobrinite se da XML dokument odgovara adekvatnom DTD-u, te da je naslov isporučen za lokalitet časopisa.',
  'plugins.importexport.native.import.error.articleTitleLocaleUnsupported' => 'Naslov časopisa ("{$articleTitle}") za broj "{$issueTitle}" zaveden je u lokalizaciji ("{$locale}") koju ovaj časopis ne podržava.',
  'plugins.importexport.native.import.error.articleAbstractLocaleUnsupported' => 'Sažetak članka za članak  "{$articleTitle}" u broju "{$issueTitle}" je zaveden u lokalizaciji ("{$locale}") koju ovaj časopis ne podržava.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'Članku "{$articleTitle}" u rubrici "{$sectionTitle}" broja "{$issueTitle}" je nedostajala oznaka prijeloma.',
  'plugins.importexport.native.import.error.suppFileMissing' => 'Članku "{$articleTitle}" u rubrici "{$sectionTitle}" broja "{$issueTitle}" je nedostajala dopunska datoteka.',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'Članku "{$articleTitle}" u rubrici "{$sectionTitle}" broja "{$issueTitle}" je nedostajala datoteka prijeloma.',
  'plugins.importexport.native.import.success' => 'Uvođenje uspješno',
  'plugins.importexport.native.import.success.description' => 'Uvođenje je uspješno završeno. Uspješno uvedene stavke su izlistane ispod.',
  'plugins.importexport.native.import.error.issueTitleLocaleUnsupported' => 'Naslov unesenog izdanja ("{$issueTitle}") je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.issueDescriptionLocaleUnsupported' => 'Opis unesenog izdanja "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.coverLocaleUnsupported' => 'Naslovnica unesenog izdanja "{$issueTitle}"  je definirana na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.sectionTitleLocaleUnsupported' => 'Naziv rubrike ("{$sectionTitle}") unesen u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.sectionAbbrevLocaleUnsupported' => 'Kratica rubrike ("{$sectionAbbrev}") unesena u izdanju "{$issueTitle}" je definirana na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.sectionIdentifyTypeLocaleUnsupported' => 'Identifikator čestice u rubrici ("{$sectionIdentifyType}") unesen u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.sectionPolicyLocaleUnsupported' => 'Smjernice rubrike ("{$sectionPolicy}") unesene u izdanju "{$issueTitle}" su definirane na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'Naziv rubrike "{$section1Title}" i naziv rubrike "{$section2Title}" u izdanju "{$issueTitle}" podudaraju se sa različitim postojećim rubrikama časopisa.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'Naziv rubrike "{$sectionTitle}" u izdanju "{$issueTitle}" podudaraju se sa postojećim rubrikama časopisa, ali se drugi priloženi naziv rubrike ne podudara se sa drugim nazivom dotične postojeće rubrike.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'Kratica rubrike "{$section1Abbrev}" i kratica rubrike "{$section2Abbrev}" izdanja "{$issueTitle}" podudaraju se sa različitim postojećim rubrikama časopisa.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'Kratica rubrike "{$sectionAbbrev}" u izdanju "{$issueTitle}" podudara se sa postojećom rubrikom,  ali se druga priložena kratica rubrike ne podudara se sa drugom kraticom dotične postojeće rubrike.',
  'plugins.importexport.native.import.error.articleDisciplineLocaleUnsupported' => 'Disciplinarno područje priloga "{$articleTitle}" u izdanju "{$issueTitle}"  je definirano na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleTypeLocaleUnsupported' => 'Tip priloga unesen za prilog "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSubjectLocaleUnsupported' => 'Ključne riječi za prilog "{$articleTitle}" u izdanju "{$issueTitle}" su definirane na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSubjectClassLocaleUnsupported' => 'Klasifikacija područja priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definirana na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleCoverageGeoLocaleUnsupported' => 'Geografski obuhvat priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleCoverageChronLocaleUnsupported' => 'Kronološki ili povijesni opseg priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleCoverageSampleLocaleUnsupported' => 'Podaci o uzorkovanju priloga "{$articleTitle}" u izdanju "{$issueTitle}" su definirani na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSponsorLocaleUnsupported' => 'Izvor potpore priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleAuthorCompetingInterestsLocaleUnsupported' => 'Izjava o sukobu interesa autora "{$authorFullName}" za članak "{$articleTitle}" u izdanju "{$issueTitle}" je definirana na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleAuthorBiographyLocaleUnsupported' => 'Autorska biografija za "{$authorFullName}" vezana uz članak "{$articleTitle}" u izdanju "{$issueTitle}" je definirana na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'Prijelom priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSuppFileTitleLocaleUnsupported' => 'Naziv dopunske datoteke ("{$suppFileTitle}") priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSuppFileCreatorLocaleUnsupported' => 'Autor ili kreator dopunske datoteke ("{$suppFileTitle}") priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSuppFileSubjectLocaleUnsupported' => 'Ključne riječi dopunske datoteke ("{$suppFileTitle}") priloga "{$articleTitle}" u izdanju "{$issueTitle}" su definirane na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSuppFileTypeOtherLocaleUnsupported' => 'Posebni tip dopunske datoteke ("{$suppFileTitle}") priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSuppFileDescriptionLocaleUnsupported' => 'Opis dopunske datoteke ("{$suppFileTitle}") priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSuppFilePublisherLocaleUnsupported' => 'Izdavač dopunske datoteke ("{$suppFileTitle}") priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSuppFileSponsorLocaleUnsupported' => 'Izvor potpore dopunske datoteke ("{$suppFileTitle}") priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.import.error.articleSuppFileSourceLocaleUnsupported' => 'Izvor dopunske datoteke ("{$suppFileTitle}") priloga "{$articleTitle}" u izdanju "{$issueTitle}" je definiran na jeziku ("{$locale}") kojeg ovaj časopis ne koristi.',
  'plugins.importexport.native.error.uploadFailed' => 'Slanje podataka nije uspjelo. Molimo provjerite da li je slanje podataka na vaš poslužitelj omogućeno te da li je datoteka prevelika za trenutnu konfiguraciju vašeg PHP i mrežnog poslužitelja.',
); ?>