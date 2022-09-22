ZADATAK 1

- Napraviti aplikaciju koja simulira sistem za slanje elektronske pošte.
- Svaki email je opisan adresom primaoca, temom i tekstom poruke. Instanciranje vršiti pomoću Factoryja.
- Kreirati klasu MailService koja ima metodu sendMail koja simulira slanje mailova. MailService treba da je singleton.
- MailService klasa takodje prati broj poslatih mejlova
sendMail funkcija ispisuje poruku “Sending email to: recipient” i takodje podize counter poslatih mejlova. 
- Na kraju ispisati ukupan broj poslatih mejlova


ZADATAK 2

- Napraviti aplikaciju koja simulira tehnički pregled vozila.
- Napraviti interfejs Vehicle koji predstavlja apstrakciju vozila i ima metodu za inspect koja simulira tehnički pregled.
- Napraviti dve konkretne klase vozila, Car i Bike. 
- Iskoristiti Abstract factory pattern za instanciranje gore pomenutih objekata.
- Na kraju, kreirati klasu InspectionService koji prima vozila i radi tehnicki pregled na njima. Ova klasa treba da je singleton. Ova klasa treba da prati broj pregledanih vozila.
- Ispisati na kraju ukupan broj pregledanih vozila