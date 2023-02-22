---
title: Allgemeines zur testWare
description: Dieser Abschntt beschäftigt sich mit der grafischen Oberfläche, Prozess- und Objektstrukturen
reading-time: ~ 3min
---
@extends('_layouts/documentation')
@section('nav-docs')
    @php

        $navigation = [
            [
                'link' => 'installation-lemp-requirements',
                'header' => 'Voraussetzngen'
            ],
            [
                'link' => 'installation-lemp-repository',
                'header' => 'Repository laden'
            ],
            [
                'link' => 'installation-lemp-database',
                'header' => 'Datenbank einrichten'
            ],
            [
                'link' => 'installation-lemp-installer',
                'header' => 'Ausführen des Installers'
            ],
            [
                'link' => 'installation-lemp-email',
                'header' => 'E-Mail Server einrichten'
            ],
            [
                'link' => 'installation-lemp-sample',
                'header' => 'Beispiel .env'
            ],
    ];

    @endphp
    <x-nav-docs :items="$navigation" />
@endsection
@section('content')

    <h1 id="installation-lemp-header">Installation</h1>

    <p>Die Abkürzungen LEMP/LAMP stehen für <span class="font-semibold">L</span>inux <span class="font-semibold">A</span>pache <span class="font-semibold">M</span>ySQL <span class="font-semibold">P</span>HP bzw. <span class="font-semibold">L</span>inux <span class="font-semibold">N</span>ginx (ausgesprochen engine-x) <span class="font-semibold">M</span>ariaDB und
        <span class="font-semibold">P</span>HP. </p>
    <h2 id="installation-lemp-requirements">Voraussetzungen</h2>
    <p>Für eine erfolgreiche Installation müssen folgende Voraussetzungen erfüllt sein:</p>
    <ul class="list-inside">
        <li>Linux basiertes system (Ubuntu oder Debian)</li>
        <li>Apache server (oder nginx reverse proxy)</li>
        <li>php min. Version 7.4</li>
        <li>SQL Datenbankserver PostgreSQL oder MariaDB / mySQL</li>
        <li>Paketmanager für php <a href="https://getcomposer.org/" target="_blank">Composer</a> installiert</li>
        <li>Paketmanager für JavaScript / Node.js <a href="https://www.npmjs.com/" target="_blank">npm</a> installiert</li>
        <li>Die Versionsverwaltung <a href="https://git-scm.com/" target="_blank">git</a></li>
    </ul>

    <h2 id="installation-lemp-repository">Schritt 1: testWare Repository laden</h2>
    <p>Im Wurzelverzeichnis des Servers zum Beispiel <x-code>/var/www</x-code> wird ein neues Verzeichnis angelegt.</p>
    <pre><code class="language-bash">mkdir testware</code></pre>
    <p>In diesem Verzeichnis wird die aktuelle Version der testWare mit git geladen.</p>
    <pre><code class="language-bash">/var/www: cd testware
/var/www/testware: git clone https://github.com/daniel-koertvelyessy/testware.git</code></pre>
    <p>Nachdem die Dateien geladen werden, müssen die abhängigen Pakete installiert werden. Das erreicht man über die Befehle:</p>
    <pre><code class="language-bash">npm install</code></pre>
    <pre><code class="language-bash">composer install</code></pre>
    <p>Nachdem dies erfolgt ist wird eine Datei <x-code>.env</x-code> erstellt. Wichtig ist der Punkt vor env.</p>
    <pre><code class="language-bash">vim .env</code></pre>
    <x-note>Es kann natürlich jeder anderer Texteditor wie nano, vi oder emacs verwendet werden.</x-note>
    <p>In diese leere Datei werden folgende Zeilen eingeführt:</p>
    <pre><code class="language-bash">APP_URL="https://ihre-domain-der-testware"
APP_PORT=443
APP_ENV=production
APP_DEBUG=false</code></pre>


    <p>Damit es zu keinen Berechtigungsproblemen kommt, müssen die Daten dem Benutzer <x-code>www-data</x-code> zugeordnet werden. Dies erfolgt über die Befehle:</p>
    <pre><code class="language-bash">chown -R www-data:www-data /var/www/html \
&& find /var/www/html/ -type f -exec chmod 664 {} \; \
&& find /var/www/html/ -type d -exec chmod 775 {} \; \
&& chgrp -R www-data /var/www/html/storage /var/www/html/bootstrap/cache \
&& chmod -R ug+rwx /var/www/html/storage /var/www/html/bootstrap/cache</code></pre>
    <p>Dieser Vorgang kann abhängig vom System ein paar Minuten dauern. Nach Abschluss ist die testWare von der Codeseite aus fertig. Nun muss die Datenbank eingerichtet werden.</p>
    <hr>
    <h2 id="installation-lemp-database">Schritt 2: Datenbank einrichten</h2>

    <p>Durch Einfügen der folgenden Zeilen in die <x-code>.env</x-code> Datei erhält die testWare die Möglichkeit, mit der Datenbank zu kommunizieren.</p>
    <pre><code class="language-markup">DB_CONNECTION=pgsql
DB_HOST= [IP-adress-of-your-databse-server]
DB_PORT=5432
DB_DATABASE=[testware]
DB_USERNAME=[root]
DB_PASSWORD=[passworrd]
</code></pre>
    <p>Im Beispiel oben ist für eine PostgreSQL Datenbank eingetragen. Soll eine MySQL / MariaDB verwendet werden, muss für den Schlüssel <x-code>DB_CONNECTION</x-code> als Wert <x-code>mysql</x-code> und als Port <x-code>3306</x-code> vorgesehen. Bitte lesen Sie Dokumentation Ihrer Datenbank bezüglich der verwendeten Ports.</p>
    <x-note type="danger">Beachten Sie, dass der Benutzer und das Passwort exakt übereinstimmen. Auch wird von der Verwendung des root als Benutzer aus Sicherheitsgründen dringend abgeraten.</x-note>

    <h2 id="installation-lemp-installer">Schritt 3: Ausführen des testWare Installer</h2>
    <h3>In der Konsole</h3>
    <p>Im Wurzelverzeichnis wird folgender Befehl ausgeführt.</p>
    <pre><code class="language-bash">php artisan testware:install</code></pre>
    <p>Mit diesem Programm richten Sie unter anderem den System-Administrator ein und legen die Tabellen in der Datenbank an.</p>

    <h3>Webinstaller</h3>
    <p>Ist das Programm abgeschlossen, wird die Einrichtung im Webbrowser forgeführt. Dazu wird er Link <x-code>domain.tld/installer</x-code> aufgerufen, wobei <span class="font-semibold">domain.tld</span> mit der echten Adresse des Webservers ersetzt werden sollte.</p>

    <hr>

    <h2 id="installation-lemp-email">Optionaler Schritt 4: E-Mail Server einrichten</h2>
    <p>Die testWare kann Benachrichtigungen über E-Mail versenden. Dazu müssen folgende Zeilen in die <x-code>.env</x-code> eingetragen werden:</p>
<pre><code class="language-markup">MAIL_MAILER=smtp
MAIL_HOST=[smpt.provider-address.com]
MAIL_PORT=[587]
MAIL_USERNAME=[username]
MAIL_PASSWORD=[password]
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=[yourmail@address.com]
MAIL_FROM_NAME="${APP_NAME}"
</code></pre>
    <x-note>Wenn der Versand per E-Mail nicht gewünscht ist bitte statt der Zeile <x-code>MAIL_MAILER=smtp</x-code> statt dem Wert <x-code>smtp</x-code> den Wert <x-code>log</x-code> verwenden.</x-note>

    <h2 id="installation-lemp-sample">Beispiel .env</h2>
    <pre><code class="language-bash"># testWare Umgebung
APP_URL="https://db.domain.tld"
APP_PORT=443
APP_ENV=production
APP_DEBUG=false

# Datenbank verknüpfen
DB_CONNECTION=pgsql
DB_HOST= db.domain.tld
DB_PORT=5432
DB_DATABASE="testware"
DB_USERNAME="dbTestWareUser"
DB_PASSWORD="dasSicherstePassWortDerGanzenWelt"

# testWare soll keine E-Mail verschicken
MAIL_MAILER=log
# MAIL_HOST=smtp.mailtrap.io
# MAIL_PORT=2525
# MAIL_USERNAME=mailtrapUseName
# MAIL_PASSWORD=mailtrapPassWOrd
# MAIL_ENCRYPTION=tls
# MAIL_FROM_ADDRESS="your.email@domain.tld"
# MAIL_FROM_NAME="NAME"
</code></pre>
@endsection