---
title: Installation der testWare mit Container
description: Seit die Einführung von Container-Laufzeiten wie Docker oder Podman ist die Installation der testWare in wenigen Schritten erfolgt
reading-time: ~ 10min
---
@extends('_layouts/documentation')
@section('nav-docs')
    @php

        $navigation = [
            [
                'link' => 'installation-docker-requirements',
                'header' => 'Voraussetzungen'
            ],
            [
                'link' => 'installation-docker-configs',
                'header' => 'Konfigurationsdateien'
            ],
            [
                'link' => 'installation-docker-composeyaml',
                'header' => 'docker-compose.yml'
            ],
            [
                'link' => 'installation-docker-appenv',
                'header' => 'app.env'
            ],
            [
                'link' => 'installation-docker-dbenv',
                'header' => 'db.env'
            ],
            [
                'link' => 'installation-docker-startcontainer',
                'header' => 'Container starten'
            ],
            [
                'link' => 'installation-docker-installer',
                'header' => 'Web-Installer'
            ],
    ];

    @endphp
    <x-nav-docs :items="$navigation" />
@endsection
@section('content')

    <h1 id="general-ui-header">Installation mit Container</h1>
    <h2 id="installation-docker-requirements">Voraussetzungen</h2>
    <p>Der Betrieb einer testWare Instanz mit docker-compose benötigt lediglich zwei Voraussetzungen: </p>
    <ul class="list-inside">
        <li>Eine YAML Konfigurationsdatei, typischer Weise <x-code>docker-compose.yml</x-code> benannt</li>
        <li>Eine Containerlaufzeitumgebung wie <a href="https://docs.docker.com/compose/" target="_blank">Docker</a> oder <a href="https://podman.io/" target="_blank">podman</a></li>
    </ul>
    <h2 id="installation-docker-configs">Schritt 1: Konfigurationsdateien</h2>
    <h3 id="installation-docker-composeyaml">Konfigurationsdatei docker-compose.yml</h3>
    <p>Eine lauffähige Konfiguration für testWare <x-code>docker-compose.yml</x-code> ist hier aufgelistet:</p>
<pre><code class="language-yaml">version: "3.1"  #  3.1 minimum version

services:
  app:
    image: thermocontrol/testware
    restart: always
    container_name: testware-app
    env_file:
      - app.env
    ports:
      - 80:80
      - 443:443
    volumes:
      - testware-files:/var/www/html/storage/app
    depends_on:
      - db

  db:
    image: postgres:14
    restart: always
    env_file:
      - db.env
    ports:
      - 5432:5432
    container_name: testware-db
    working_dir: /data/pgsql
    volumes:
      - testware-db-data:/var/lib/postgresql/data

volumes:
  testware-files:
  testware-db-data:
</code></pre>
    <p>Auffällig sind die beiden Einträge:</p>
    <pre><code class="language-yaml">
services:
  app:
    ...
    env_file:
        - app.env
    ...

 db:
    ...
    env_file:
        - db.env
    ...
        </code></pre>

    <p>Damit werden zwei Dateien referenziert, welche Umgebungsvariablen in die Laufzeit übertragen und so die Konfiguration der Services sicherstellt.</p>
    <h3 id="installation-docker-appenv">Konfigurationsdatei app.env</h3>
    <p>Hier ein Beispiel für die Datei <x-code>app.env</x-code>:</p>
    <pre><code class="language-bash"># Set testware enviorment
APP_URL="http://domain.tld"
APP_PORT=80
APP_DEBUG=false
APP_ENV=production

# setup mail server to log
MAIL_MAILER=log
# MAIL_HOST=smtp.mailtrap.io
# MAIL_PORT=2525
# MAIL_USERNAME=mailtrapUseName
# MAIL_PASSWORD=mailtrapPassWOrd
# MAIL_ENCRYPTION=tls
# MAIL_FROM_ADDRESS="your.email@domain.tld"
# MAIL_FROM_NAME="NAME"

#Connect Database
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=testware
DB_USERNAME=testWareDbUser
DB_PASSWORD=yourMostSecurePasswordYouCanThinkOf

# # # # # # # # # # # # # # # # # # # # # # #
#   IMPORTANT                               #
#   Make sure that the DB credentials are   #
#   the same as specified in the db.env     #
# # # # # # # # # # # # # # # # # # # # # # #
</code></pre>
    <h3 id="installation-docker-dbenv">Konfigurationsdatei db.env</h3>
    <p>Die entsprechende Konfiguration für den Container mit der PostgreSQL Datenbank <x-code>db.env</x-code> hätte folgenden Inhalt:</p>
    <pre><code class="language-bash">#Connect Database
POSTGRES_DB=testware
POSTGRES_USER=testWareDbUser
POSTGRES_PASSWORD=yourMostSecurePasswordYouCanThinkOf

# # # # # # # # # # # # # # # # # # # # # # #
#   IMPORTANT                               #
#   Make sure that the DB credentials are   #
#   the same as specified in the app.env    #
# # # # # # # # # # # # # # # # # # # # # # #
</code></pre>
    <hr>
    <h2 id="installation-docker-startcontainer">Schritt 2: Starten der Container</h2>
    <p>Jetzt startet man die Anwendung im Terminal mit dem Befehl:</p>
    <pre><code class="language-bash">docker-compose up -d</code></pre>
    <p>Dieser Befehl wird sowohl in der Docker als auch in der podman Laufzeit verwendet. Beim ersten Start lädt die Laufzeit die entsprechenden Images und richtet diese mit den übergebenen Konfigurationsdateien ein.</p>
    <x-note><p>Möchte man die Log-Einträge sehen kann dies entweder durch das Weglassen des Schalters
            <x-code>-d</x-code>
            erreichen, oder durch die Eingabe des Befehls
            <x-code>docker compose logs</x-code>
            beziehungsweise
            <x-code>podman logs testware-app</x-code>
            , vorausgesetzt, dass die testWare als <x-code>testware-app</x-code> läuft.</p>
        <p>Informationen zum Befehl in der Docker Laufzeit sind in der entsprechenden
            <a href="https://docs.docker.com/engine/reference/commandline/compose_logs/">Dokumentation</a> beschrieben.</p>
        <p>Verwendet man die podman Laufzeitumgebung, sind die Informationen zum Befehl auch in der entsprechenden
            <a href="https://docs.podman.io/en/latest/markdown/podman-logs.1.html">Dokumentation</a> beschrieben.</p></x-note>
    <hr>
    <h2 id="installation-docker-installer">Schritt 3: Ausführen des testWare Installer</h2>
    <h3>In der Konsole</h3>
    <p>Im Wurzelverzeichnis wird folgender Befehl ausgeführt.</p>
    <pre><code class="language-bash">php artisan testware:install</code></pre>
    <p>Mit diesem Programm richten Sie unter anderem den System-Administrator ein und legen die Tabellen in der Datenbank an.</p>

    <h3>Webinstaller</h3>
    <p>Ist das Programm abgeschlossen, wird die Einrichtung im Webbrowser forgeführt. Dazu wird er Link <x-code>domain.tld/installer</x-code> aufgerufen, wobei <span class="font-semibold">domain.tld</span> mit der echten Adresse des Webservers ersetzt werden sollte.</p>

    <hr>

@endsection