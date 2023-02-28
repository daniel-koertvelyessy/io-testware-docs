---
title: Einrichtung der testWare über den Terminal
description: Ist die Instanz der testWare eingerichtet, wird die Umgebung wie die Firmierung, weitere Benutzer, Mitarbeiter und Standorte über einen Web-Installer erstellt.
reading-time: ~ 3min
---
@extends('_layouts/documentation')
@section('nav-docs')
    @php

        $navigation = [
            [
                'link' => 'installation-terminal-requirements',
                'header' => 'Voraussetzungen'
            ],
            [
                'link' => 'installation-terminal-prenotes',
                'header' => 'Vorbereitungen'
            ],
            [
                'link' => 'installation-terminal-connect',
                'header' => 'Instanz verbinden'
            ],
            [
                'link' => 'installation-terminal-install',
                'header' => 'Ausführen'
            ],
            [
                'link' => 'installation-terminal-values',
                'header' => 'Vorgabewerte'
            ],
            [
                'link' => 'installation-terminal-sysadmin',
                'header' => 'Systemadministrator'
            ],
            [
                'link' => 'installation-terminal-profile',
                'header' => 'Mitarbeiter'
            ],
            [
                'link' => 'installation-terminal-finaltasks',
                'header' => 'Abschlussaufgaben'
            ],
    ];

    @endphp
    <x-nav-docs :items="$navigation"/>
@endsection
@section('content')

    <h1 id="installation-terminal-header">Ausführung des Terminal Installer</h1>

    <x-note id="installation-terminal-requirements">
        <p class="text-xl">Voraussetzungen</p>
        <p>Damit der Installer im Terminal lauffähig ist, muss laufende testWare Instanz auf <a href="/docs/1.7/installation-webserver">einem Webserver</a> oder   <a href="/docs/1.7/installation-container">in einem Container</a> vorhanden sein.</p>
    </x-note>

    <h2 id="installation-terminal-prenotes">Vorbereitungen</h2>
    <h3 id="installation-terminal-connect">Mit der testWare Instanz verbinden</h3>
    <p>Die Installation im Terminal setzt voraus, dass man sich auf dem Terminal (auch Kommandozeile genannt) des Servers in dem Stammverzeichnis der testWare befindet.</p>
    <p>Verbinden Sie sich zum Beispiel per <x-code>ssh</x-code> mit dem Server.</p>
    <x-terminal>
        <x-terminal-line dir="/var/www/testware">ssh system@domain.tld</x-terminal-line>
    </x-terminal>
    <p>Verwenden Sie einen traditionellen Webserver, wechseln Sie in das Stammverzeichnis z.B. <x-code type="dark">/var/www/testware</x-code></p>
    <pre><code class="language-bash">cd /var/www/testware</code></pre>
    <p>Für Systeme mit einer Containerlaufzeit öffnen Sie einen Terminal in den testWare Container. Als Beispiel für einen Docker Container names <x-code>testware-app</x-code></p>
    <pre><code class="language-bash">docker compose exec -ti testware-app /bash</code></pre>



    <h2 id="installation-terminal-install">Ausführen</h2>
    <x-note type="danger">
        <p>Warnung</p>
        <p>Dieser Befehl sollte nur für ein neue Instanz verwendet werden.</p>
        <p>Eine produktiv laufende Instanz sollte vorher gesichert werden, da alle Daten gelöscht werden.</p>
    </x-note>

    <x-note>
        <p>Hinweis:<br> Werte mit <x-code type="terminal">[  ]</x-code> sind Defaultwerte und können durch eine Betätigung der <kbd>Enter</kbd> Taste übernommen werden.</p>
    </x-note>

    <p>Nach der Eingabe des Befehels wir die obige Warnung im Terminal ausgegeben</p>
    <p>Im Stammverzeichnis wird der Installer mit folgendem Befehl gestartet:</p>
    <pre><code class="language-bash">php artisan testware:install</code></pre>

    <p>Nach der Eingabe des Befehels wir die obige Warnung im Terminal ausgegeben</p>

    <x-terminal>
        <x-terminal-line dir path="/var/www/testware">php artisan testware:install</x-terminal-line>
        <x-terminal-line type="error">         </x-terminal-line>
        <x-terminal-line type="error">     W A R N I N G         </x-terminal-line>
        <x-terminal-line type="error">         </x-terminal-line>
        <x-terminal-line type="error">     This installer will reset your database!        </x-terminal-line>
        <x-terminal-line type="error">     All data will be lost and cannot be restored!</x-terminal-line>
        <x-terminal-line type="error"> </x-terminal-line>
        <x-terminal-line>Type [yes] to proceed or [no] to exit without changes <span class="text-yellow-300">[no]</span>:</x-terminal-line>
    </x-terminal>

    <p>Wenn die Warnung mit <x-code type="terminal">yes</x-code> bestätigt wurde werden alle Tabellen in der Datenbank gelöscht und neu erstellt.</p>

    <h2 id="installation-terminal-values">Vorgabewerte</h2>
    <p>Anschließend wird die Möglichkeit gegeben, gängige Vorgabewerte einzufügen</p>

    <x-terminal>
        <x-terminal-line>Fill database with default entries [yes] or leave it empty [no] ? (yes/no) <span class="text-yellow-300">[yes]</span>:</x-terminal-line>
    </x-terminal>

    <p>Die Vorgabewerte sind:</p>
    <ul class="list-inside">
        <li>Benutzerrollen</li>
        <li>Länderliste der EU</li>
        <li>3 Adresstypen (Haus-, Rechnungs- und Lieferadresse)</li>
        <li>8 Prüfintervalle (Jahr, Monat, Tag etc.)</li>
        <li>3 Gebäudearten (Büro, Werkstatt, Lager)</li>
        <li>4 Raumarten (Büro, Werkstatt, Lagerraum, Materialraum)</li>
        <li>2 Produktstati (verfügbar, gesperrt)</li>
        <li>1 Produktkategorie (ohne)</li>
        <li>4 Gerätestati (verfügbar, beschädigt, Reparatur, gesperrt)</li>
        <li>3 Stellplatztypen (Lagerfach, Schublade, Lagerplatz)</li>
        <li>6 Dokumenttypen (Anleitung, Funktionsprüfbericht, Prüfbericht, Zeichnung, Vorschrift, Anforderung)</li>
    </ul>

    <h2 id="installation-terminal-sysadmin">Systemadministrator</h2>
    <p>Als nächstes kann ein Systemadministratorkonto eingerichtet werden. Dieser wird für die weiteren Schritte, wie den <a href="/docs/1.7/installation-webui">Web-Installer</a> benötigt.</p>
    <x-terminal>
        <x-terminal-line>Create new user with SysAdmin privileges? (yes/no) <span class="text-yellow-300">[yes]</span>:</x-terminal-line>
    </x-terminal>


    <p>Für die Einrichtung wird die E-Mail Adresse benötigt. Sie dient als Benutzername bei der Anmeldung.</p>

    <x-terminal>
        <x-terminal-line>E-Mail (used for login): </x-terminal-line>
    </x-terminal>

    <p>Nach erfolgter Eingabe wird die Bestätigung der E-Mail Adresse gefordert. Damit soll verhindert werden, dass fehlerhafte E-Mail Adressen Probleme verursachen. Ist die Adresse korret wird diese mit <x-code type="terminal">yes</x-code> bestätigt.</p>
    <x-terminal>
        <x-terminal-line>Confirm given e-mail address : [eingegebene email addresse] (yes/no) [no]: </x-terminal-line>
    </x-terminal>

    <p>Anschließend wird der Anzeigename vergeben. Dieser Name wird im Menü angezeigt und sollte daher nicht zu lange sein.</p>
    <x-terminal>
        <x-terminal-line>Username (will be displayed in app): </x-terminal-line>
    </x-terminal>

    <p>Danach wird der komplette Name angegeben.</p>
    <x-terminal>
        <x-terminal-line>Full name: </x-terminal-line>
    </x-terminal>

    <p>Da die testWare von Hause aus <a href="/docs/1.7/system-locales">mehrsprachig programmiert</a> wurde kann die Sprache des Benutzers angegeben werden. Der Vorgabewert ist <x-code type="terminal">de</x-code>. Es sind noch Übersetzungen für en (English etwa 90% übersetzt) und  fr (Fränzösich etwa 70% übersetzt) vorhanden.</p>
    <x-terminal>
        <x-terminal-line>Language <span class="text-yellow-300">[de]</span>: </x-terminal-line>
    </x-terminal>

    <p>Als letzten Pflichtpunkt wird das Passwort vergeben.</p>

    <x-note>Bitte beachten, dass in den meisten Terminals keine Eingabe zu sehen ist. Viele Terminals zeigen ein Schlüsselsymbol, um zu zeigen, dass ein Passwort eingegeben wird.</x-note>

    <x-terminal>
        <x-terminal-line>Password (min. 8 charakters): </x-terminal-line>
        <x-terminal-line>Confirm the password: </x-terminal-line>
    </x-terminal>

    <h2 id="installation-terminal-profile">Mitarbeiter</h2>

    <p>Nach der Bestätigung des Passwortes ist das Sys-Admin Konto angelegt. Optional kann diesem ein Mitarbeiter zugeordnet / angelegt werden.</p>

    <x-terminal>
        <x-terminal-line>Is this user going to be an employee as well? (yes/no) <span class="text-yellow-300">[no]</span>: </x-terminal-line>
    </x-terminal>

    <p>Ein Mitarbeiter hat als einziges erforderliches Feld den Nachnahmen. Der Installer versucht aus dem angegebenen kompletten Namen diesen zu erkennen. Dieser wird dann als Vorgabewert vorgeschlagen.</p>
    <x-terminal>
        <x-terminal-line>Name <span class="text-yellow-300">[Nachname]</span>: </x-terminal-line>
    </x-terminal>

    <p>Es können die weiteren, optionalen Daten eingegeben werden. Das sind folgende Felder</p>

    <x-terminal>
        <x-terminal-line>Surename <span class="text-yellow-300">[Vorname]</span>:</x-terminal-line>
        <x-terminal-line>Birthday (YYYY-MM-DD): </x-terminal-line>
        <x-terminal-line>Employee ID: </x-terminal-line>
        <x-terminal-line>Employed on (YYYY-MM-DD): </x-terminal-line>
        <x-terminal-line>Phone-#: </x-terminal-line>
        <x-terminal-line>Mobile-#: </x-terminal-line>
        <x-terminal-line>E-Mail <span class="text-yellow-300">[default value the e-mail already provided]</span>: </x-terminal-line>
    </x-terminal>

    <x-note>
        <p>Diese Felder sind optional. Es müssen nicht alle ausgefüllt werden.</p>
    </x-note>

    <p>Die Werte für <x-code type="terminal">[Vorname]</x-code> und <x-code type="terminal">[E-Mail]</x-code> werden von dem Benutzerkonto übernommen.</p>

    <h2 id="installation-terminal-finaltasks">Abschlussaufgaben</h2>

    <p>Damit ist der Installer von den Eingaben her abgeschlossen. Es werden noch Schlüssel erstellt, die für Sicherheitsfeatures verwendet werden. Die Schlüssel werden in die <x-code>.env</x-code> Datei als <x-code type="dark">APP_KEY</x-code> und <x-code type="dark">APP_HSKEY</x-code> eingetragen.</p>
    <x-terminal>
        <x-terminal-line>Generate new encryption keys ... </x-terminal-line>
    </x-terminal>

    <p>Ist dies erfolgt, erscheint eine Meldung, welche den Abschluss des Installationsschritts bestätigt.</p>

    <x-terminal>
        <x-terminal-line>Please use the newly created user to login at https://domain.tld/installer to set your company, location and complete the setup process.</x-terminal-line>
    </x-terminal>

    <p>Nun kann die Einrichtung des testWare erfolgen. Das kann entweder direkt in der <a href="/docs/1.7/system-main">Verwaltung</a> erfolgen, oder mit Hilfe des
        <a href="/docs/1.7/installation-webui">Web-Installer</a>.</p>

@endsection