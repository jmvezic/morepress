# 1. Instalacija na friški Debian 8 poslužitelj

### 1.1 Pretpostavke
Za instalaciju je potrebno imati ili `root` account ili `sudo` account. Ove upute pretpostavljaju da postoji sudo korisnik naziva **moreuser** s rwx pristupom direktoriju /home/moreuser

### 1.2 Potrebni paketi
Za instalaciju Morepress-a (OJS i OMP) potrebno je nekoliko paketa koje možemo instalirati naredbom

```sh
sudo apt-get install git apache2 mysql-server php5 php-pear php5-mysql php5-curl
```
### 1.3 Kloniranje Git repozitorija
Nakon instalacije paketa, možemo klonirati git repozitorij u direktorij korisnika:
```sh
cd /home/moreuser
git clone -b morepress.unizd.hr https://github.com/tjakopec/morepress.git
```
### 1.4 Postavljanje MySQL baze
Sada moramo postaviti bazu kojoj će OJS pristupati i MySQL korisnika s pristupom toj bazi. Prvo se moramo ulogirati u MySQL kao root (lozinku smo postavili tijekom instalacije MySQL-a):
```sh
sudo mysql -u root -p
```
Zatim možemo napraviti bazu:
```sql
CREATE DATABASE ojs;
```
Zatim napravimo MySQL korisnika koji će imati pristup navedenoj bazi. U ovim uputama koristit ćemo `dbmoreuser` i `dbpassword` kao pristupne podatke za MySQL:
```sql
CREATE USER 'dbmoreuser'@'localhost' IDENTIFIED BY 'dbpassword';
```
Sada možemo korisniku `dbmoreuser` dati sve ovlasti nad bazom `ojs`:
```sql
GRANT ALL PRIVILEGES ON ojs.* TO 'dbmoreuser'@'localhost';
```
I kao posljednji korak u MySQL-u primjeniti promjene:
```sql
FLUSH PRIVILEGES;
```
Iz MySQL-a izlazimo s naredbom
```sql
exit
```
### 1.5 Prilagodba Apache-a
Naš sljedeći korak sada je prilagodba Apache2, odnosno izrada konfiguracije za Morepress, što ćemo napraviti na sljedeći način:
```sh
cd /etc/apache2/sites-available
sudo nano morepress.unizd.hr.conf
```
Sadržaj datoteke ovisi o tome postavljamo li testni ili produkcijski server. U ovim uputama, pretpostavit će se da je riječ o testnom serveru (u ovim primjerima kao testna adresa koristit će se `more.test.com`).
```conf
<VirtualHost *:80>
        DocumentRoot /home/moreuser/morepress
        ServerName more.test.com
        <Directory />
                Options FollowSymLinks
                AllowOverride None
        </Directory>
        <Directory /home/moreuser/morepress>
#               Options Indexes FollowSymLinks MultiViews
#               AllowOverride None
#               Order allow,deny
#               allow from all
				Require all granted
        </Directory>

        ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
        <Directory "/usr/lib/cgi-bin">
                AllowOverride None
                Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
                Order allow,deny
                Allow from all
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log

        # Possible values include: debug, info, notice, warn, error, crit,
        # alert, emerg.
        LogLevel warn

        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
Datoteku spremamo naredbom `Ctrl+X` i zatim `Y`.
Potrebno je i dozvoliti OJS-u mijenjanje linkova, što ćemo napraviti na sljedeći način:
```sh
cd /etc/apache2
sudo nano apache2.conf
```
Dodavanjem sljedećeg na mjesto gdje su popisi direktorija:
```conf
<Directory /home/moreuser/morepress/>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```

Sada možemo uključiti konfiguraciju i resetirati Apache2:
```sh
sudo a2dissite 000-default.conf
sudo a2ensite morepress.unizd.hr.conf
sudo service apache2 reload
```
### 1.6 Konfiguriranje OJS-a
Sljedeći korak je konfiguriranje OJS-a. Prvo moramo konfigurirati .htaccess datoteku:
```sh
cd /home/moreuser/morepress
sudo nano .htaccess
```
Potrebno je promjeniti liniju
```conf
RewriteRule ^(.*) http://morepress.unizd.hr/journals [R,L]  
```
tako da sadrži IP adresu ili URL adresu testnog servera (u ovim primjerima koristit će se `more.test.com`)
```conf
RewriteRule ^(.*) http://more.test.com/journals [R,L]  
```
Ponovno spremimo promjene sa `Ctrl+X` i `Y`
Nakon toga moramo kopirati template konfiguracije OJS-a:
```sh
cd journals
cp config.TEMPLATE.inc.php config.inc.php
```
Slijedi nam naštimati `config.inc.php` prema postavkama poslužitelja:
```sh
nano config.inc.php
```
Potrebno je namjestiti sljedeće retke:
```conf
installed = On
base_url = "http://more.test.com"
restful_urls = On
```
```conf
[database]
username = dbmoreuser
password = dbpassword
name = ojs
```
```conf
; Default locale
locale = hr_HR
```
```conf
[files]
files_dir = /home/moreuser/ojs_files
```
I opet spremamo s `Ctrl+X` i `Y`.

# 2. Unos podataka i datoteka
Naredni koraci odnose se na unos svih podataka za bazu i datoteka s Morepress-a kako bi stranica funkcionirala, odnosno kako bi mogli s nečim raditi. Ovo se odnosi na
- `files` direktorij sa svim potrebnim PDF-ovima, HTML-ovima itd. za članke
- `cache` direktorij
- SQL skriptu za bazu podataka

Navedeni direktoriji i datoteke sadrže stanje baze i podataka Morepress-a datuma **5. lipnja 2017.** Ukoliko je iz nekog razloga za testni server potrebno dobiti novije podatke, oni se trebaju povući ili preko FTP-a ili preko `rsync` naredbe.

### 2.1 Unos `files` direktorija
`files` direktorij povući ćemo `wget` naredbom s Dropbox-a. Direktorij se **ne** nalazi na git-u iz razloga što sadrži gotovo 5 GB podataka.

```sh
cd /home/moreuser
wget https://www.dropbox.com/s/p0cbk6mbkcdysgg/files_backup_20170605.tar.gz?dl=1
mv files_backup_20170605.tar.gz?dl=1 files_backup_20170605.tar.gz
tar xvzf files_backup_20170605.tar.gz
mv files ojs_files
rm files_backup_20170605.tar.gz
```
### 2.2 Unos `cache` direktorija
Istu stvar ponovit ćemo s `cache` direktorijem, ali pod `journals` direktorijem:
```sh
cd morepress/journals
wget https://www.dropbox.com/s/2hk8g5ra5p3hvcj/cache_backup_20170605.tar.gz?dl=1
mv cache_backup_20170605.tar.gz?dl=1 cache_backup_20170605.tar.gz
tar xvzf cache_backup_20170605.tar.gz
rm cache_backup_20170605.tar.gz
```
### 2.3 Unos baze
Nakon toga, preostaje nam učitati SQL skriptu u našu bazu. SQL skripta također se preuzima preko `wget` naredbe s Dropboxa:
```sh
cd /home/moreuser
wget https://www.dropbox.com/s/hk6bv8bcgp2wr22/ojs_05-Jun-2017?dl=1
mv ojs_05-Jun-2017?dl=1 ojs_05-Jun-2017.sql
mysql -u dbmoreuser -pdbpassword ojs < ojs_05-Jun-2017.sql
```
# 3. Dodatna konfiguracija
Kako bi Apache mogao napraviti rewrite `index.php` dijela iz URL-a potrebno je uključiti mod_rewrite na sljedeći način:
```sh
sudo a2enmod rewrite
sudo service apache2 restart
```
Na poslijetku, potrebno je Apache korisniku `www-data` dati ovlasti nad pristupom direktoriju:
```sh
cd /home/moreuser
sudo chown www-data:moreuser -R morepress/
```

I to je to! Morepress bi sada trebao raditi na testnom poslužitelju! Ali to nije sve ako želimo sve mogućnosti kao na produkciji. U sljedećem dijelu objasnit ćemo instalaciju `Apache Solr/Lucene` full-text pretraživanja i postavljanja `cron` poslova

# 3. Apache Solr i Lucene integracija
### 3.1 Pokretanje Solr-a
`solr` i `jetty` direktoriji već su uključeni u Git repozitorij. Međutim, kako bi pokrenuli Solr, server nam mora imati Java pakete, koje ćemo instalirati naredbom:
```sh
sudo apt-get install default-jre
```
Nakon toga možemo pokrenuti Solr sljedećim naredbama:
```sh
cd /home/moreuser/morepress/journals/plugins/generic/lucene/embedded/bin
./start.sh
```
**NAPOMENA**: Apache Solr oduzima puno radne memorije, pogotovo ako server radi dugo vremena bez ponovnog pokretanja i ako kontanstno indeksira nove članke. Preporuča se barem 2GB RAM-a na serveru ako će full-text pretraživanja biti uključeno.
### 3.2 Reindeksiranje
Ukoliko je iz nekog razloga potrebno ponovno indeksirati naslove, potrebno je obrisati postojeće indekse naredbom:
```sh
rm -R /home/moreuser/ojs_files/lucene
```
a zatim pokrenuti reindeksiranje:
```sh
cd /home/moreuser/morepress/journals/tools
sudo php rebuildSearchIndex.php
```

# 4. Cron poslovi
Za pravilno funkcioniranje poslužitelja potrebno je i postaviti nekoliko `cron` poslova, i to kao `moreuser` korisnik:
```sh
crontab -e
```

### 4.1 Prikupljanje statistike pristupa člancima
OJS statistiku pristupa člancima prikuplja preko Apache-a, ali kako to ne bi konstantno radio, što je zahtjevno za poslužitelj, nudi posebnu skriptu koja prikuplja `log` podatke Apache-a te sprema u vlastitu bazu u određenim intervalima. Na produkciji Morepress-a to je svakih pola sata (5.6.2017.). Za ovaj cron potrebno je prvo izraditi shell skriptu:
```sh
cd /home/moreuser
nano runstats.sh
```
U datoteku ćemo staviti sljedeće:
```sh
cd /home/moreuser/
sudo cp -p -r ojs_files/usageStats/usageEventLogs/. ojs_files/usageStats/stage/
sudo chmod -R 777 ojs_files/usageStats/
cd morepress/journals/
php tools/runScheduledTasks.php plugins/generic/usageStats/scheduledTasksAutoStage.xml
php tools/runScheduledTasks.php plugins/generic/usageStats/scheduledTasks.xml 
```
Ovu skriptu sada možemo staviti u `crontab` (*odabrati `1` za nano*):
```sh
crontab -e
```
Za pokretanje skripte svakih pola sata potrebno je dodati sljedeću liniju na kraj datoteke (**i obavezno ostaviti jedan prazan red na kraju datoteke!**):
```sh
*/30 * * * * sudo bash /home/moreuser/runstats.sh
```
Kao i uvijek, iz `nano` izlazimo sa `Ctrl+X` pa `Y`.

### 4.2 Automatsko pokretanje Solr servera nakon restarta
Kako ne bi ručno morali pokretati Solr server svaki put kad se poslužitelj iz nekog razloga resetira, možemo dodati sljedeći `cron` u `crontab`:
```sh
crontab -e
@reboot /home/moreuser/morepress/journals/plugins/generic/lucene/embedded/bin/start.sh
```
Kao i uvijek, iz `nano` izlazimo sa `Ctrl+X` pa `Y`.

### 4.3 Automatska izrada MySQLDump skripti
Radi sigurnosti baze podataka, možemo automatizirati i izradu backup-a naredbom `mysqldump`:
```sh
crontab -e
59 1 * * * /usr/bin/mysqldump -u dbmoreuser -p'dbpassword' ojs > /home/moreuser/cron_sqldump/ojs_$(date '+\%d-\%b-\%Y')
```

Ova naredba stvarat će SQL kopije `ojs` baze svaki dan u 1:59 sati u folder `cron_sqldump` s nazivom `ojs_DATUM`.

### 4.4 Automatski RSync backup svih direktorija
Ukoliko imamo još jedan poslužitelj koji nam može poslužiti kao *backup* poslužitelj (i postavili smo SSH ključeve između oba poslužitelja), sljedećom `cron` naredbom možemo automatizirati backup:
```sh
5 2 * * * rsync -rtv /home/moreuser/ backup_user@backup_server:/home/backup_user/morepress_dnevni_backup/
```
Ova naredba izvodi se svaki dan u 2:05 sati

**NAPOMENA**: S obzirom da je naziv *backup* direktorija fiksni, svaki sljedeći backup pregazit će postojeći. Ukoliko želimo svaki dan imati zasebni *backup*, potrebno je u naziv direktorija uvrstiti datum, npr. `$(date '+\%d-\%b-\%Y')`. Međutim, kako su direktoriji veliki, u ovom slučaju je potrebno na *backup* poslužitelju imati puno prostora.

Za tjedni backup naredba je:
```sh
5 2 * * 0 rsync -rtv /home/moreuser/ backup_user@backup_server:/home/backup_user/morepress_tjedni_backup/
```