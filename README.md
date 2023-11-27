# bht-cms-typo3

## Extensions installed
* https://extensions.typo3.org/extension/scroll
* https://extensions.typo3.org/extension/yoast_seo/

## Steps after EXT installation
1. Run Admin Tools -> Maintenance -> Analyze Database Structure
1. Run Admin Tools -> Maintenance -> Manage Language Packs

## Maßnahmen
### Systemakzeptanz
https://extensions.typo3.org/extension/scroll installiert

### SEO
https://extensions.typo3.org/extension/yoast_seo/ installiert

### Performance
```ts
config {
 concatenateJs = 1
 concatenateCss = 1
 compressJs = 1
 compressCss = 1
}
```

### Rechtskonformität
* Datenschutzseite erreichbar
* Impressumseite erreichbar
* TODO: https://extensions.typo3.org/extension/we_cookie_consent

### Standardkonformität
TODO
Testen:
HTML - http://validator.w3.org/
CSS - https://jigsaw.w3.org/css-validator/
JS - http://www.jslint.com/

### Digitale Souveränität
TODO:
Vorgehensweise:
Betrachten Sie ihre Anwendung und listen sie alle Komponenten tabellarisch auf, aus denen Sie besteht! (Betriebssystem, Webserver, Programmiersprache, Datenbank, CMS, Extensions Dritter, angebundene Zusatzsysteme wie Tracking, Newsletter, CRM, etc).
Ordnen Sie für jede Komponente (ja/nein) zu, ob eine Abhängigkeit zu einer zentralen/singulären Einrichtung wie Staat(enverbund), einem Wirtschaftsunternehmen o.ä. besteht oder dezentrale Strukturen/Verteiltheit (offene Entwickler*innengemeinde) charakteristisch sind.
Besteht Quellcode-Offenheit (GitHub, etc)?
Besteht Datenhoheit? (Kann man Daten nach Vertragsende exportieren?)
Wie hoch ist die Abhängigkeit zum Dienstleister?
Ermitteln Sie einen Index für die Digitale Souveränität ihrer Anwendung von 0 = gering bis 100 = sehr hoch. Überlegen Sie sich dazu ein eigenes Punkte- und Gewichtungssystem.

### Multichanneling
#### Druckversion
Print.css angelegt und angepasst

#### RSS
https://bht-cms-typo3.ddev.site/?type=9818