MYSQL VERİTABANINIZ İÇERİSİNE BU KLASÖRDE OLAN SQL DOSYALARINI EKLEMENİZ GEREKMEKTEDİR BU İŞLEMİ GERÇEKLEŞTİRMEDEN ÖNCE
VERİTABANINIZ ÜZERİNDE 'gundogdu_avm' ve 'products' ADINDA İKİ ADET VERİTABANI OLUŞTURUP 'gundogdu_avm.sql' ve 'products.sql' 
DOSYALARINI BU VERİTABANLARINA IMPORT ETMELİSİNİZ.AYNI ZAMANDA yolgezer İSİMLİ BİR KULLANICI OLUŞTURUP parolasını g1b3kc4t YAPMALISINIZ.
BUNUN YANINDA KURULUM YAPTIĞINIZ DAĞITIMA 'php-mysql' kurmayı unutmayın !.


MYSQL VERİTABANINIZDA AŞAĞIDAKİ KOMUT SIRASINI İZLEYEBİLİRSİNİZ.

mysql> CREATE DATABASE gundogdu_avm;

mysql> CREATE DATABASE products;

mysql> CREATE USER 'yolgezer'@'localhost' IDENTIFIED BY 'g1b3kc4t';
mysql> GRANT ALL PRIVILEGES ON *.* TO 'yolgezer'@'localhost' WITH GRANT OPTION;
mysql> FLUSH PRIVILEGES;

$ mysql -u username -p gundogdu_avm < gundogdu_avm.sql

$ mysql -u username -p products < products.sql

