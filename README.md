# Medienagenten Docker TYPO3

## Requirements
**Docker**
http://bitbucket.org/a-messer/medienagenten-docker.git
Bitte dort die Installationsanweisungen lesen


### Install MySQL DB
Imm Docker MySQL-Container befindet sich die Datenbank `typo3`

 * User: dev
 * Pass: dev
 * Host: mysql

Für Zugriff von z.B. SequelPro:

 * User: dev
 * Pass: dev
 * Host: 127.0.0.1
 * Port: 13306

Nach der Installation die Datenbank aus LIVE bzw. PREVIEW exportieren.
Dann in das `TYPO3 Install Tool` einloggen und `Compare Database` ausführen.


### Create missing Folders

TYPO3 Install Tool -> Folder Structure -> Fix File & Folder Permissions


## First Install

Mit `make bash` in den App-Container einloggen.

Mit `./setup.sh` den first install ausführen.


## Gulp watcher ausführen

Mit `make bash` in den App-Container einloggen.

Mit `gulp` alle Task auflisten

Mit `gulp watch` /src Ordner watchen

Mit `gulp build` build Prozess starten