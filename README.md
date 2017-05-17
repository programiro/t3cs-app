# Medienagenten Docker TYPO3


## t3cs example
```zsh
git clone git@github.com:programiro/t3cs-docker.git t3cs-docker
cd t3cs-docker
git clone git@github.com:programiro/t3cs-app.git app
docker-compose up -d
make bash
./setup.sh --import-db
gulp watch 
``` 

im Browser localhost:8000 öffnen.

---

Benutzername / Passwörter / Installtool = t3cs

---

Diese Entwicklungsumgebung ist nur ein Beispiel und in keinster weise Final. Gulp-Task etc. sind auch nicht "schön" gemacht oder fertiggestellt.

---


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

in den App-Docker einloggen
```zsh
make bash
``` 


den first install ausführen.
```zsh
./setup.sh
``` 


## Gulp watcher ausführen

in den App-Docker einloggen
```zsh
make bash
``` 

alle Task auflisten
```zsh
gulp
``` 

/src Ordner watchen
```zsh
gulp watch
```  


build Prozess starten
```zsh
gulp build
```  
