---
title: API - Allgemeines
description: Diese Seite zeigt die grundlegeneden Funktionen einer API. Anhand von Beispielen wird der Zugriff auf die testWare vorgeführt.
reading-time: ~ 10min
---
@extends('_layouts/documentation')
@section('content')

    <h1 id="api-start">Kurze Einführung</h1>
    <p>testWare bietet neben der Weboberfläche auch eine sogenannte REST-API. Die Abkürzung
        <x-code>API</x-code>
        steht für
        <x-code>Application Program Interface</x-code>
        und beschreibt, eine Schnittstelle zu einem Programm. Diese Schnittstelle ermöglicht die REST Kommunikation mit der Datenbank der testWare ohne einen Browser.
    </p>

    <p>Im Gegensatz zu der Weboberfläche, welche eine einmalige Authentifizierung eines Benutzers erfordert, muss die Authentifizierung mit jedem Aufruf erfolgen. Die API der testware verwendet hierzu eine 80 Zeichen lange Kette von Zahlen und Buchstaben, die auch
        <x-code>Token</x-code>
        genannt wird. Dieser Token kann für jeden registrierten Benutzer der testware in der Account-Oberfläche generiert werden.
    </p>
    <p>Für einen Zugriff muss dieser als
        <x-code>Bearer</x-code>
        im Request angegeben werden. Im <a href="#api-script-examples">Beispiel unten</a> wird ein Zugriff auf die API mit
        <x-code>jQuery</x-code>
        hergestellt, um einen neuen Betrieb mit Adresse anzulegen.
    </p>
    <h2 id="api-endpoint">Endpunkte</h2>
    <p>Im Gegensatz zur Darstellung der testware im Browser, besitzt die API keine Navigation, welche man über Links erreichen kann. Die API benutzt hierzu sogenannte Endpunkte.</p>
    <p>Diese Endpunkte bestehen aus der Kombination einer Webadresse und einer Übertragungsart (engl.
        <x-code>method</x-code>
        ). Die Webadresse stellt sich aus der Domäne z.B.
        <x-code type="dark">https://demo.testware.io</x-code>
        , einem sogenannten Präfix und dem Namen zusammen. Die aktuelle Version der testware API ist V1, das entsprechende Präfix lautet
        <x-code type="dark">api/v1/</x-code>
        und der Name z.B.
        <x-code type="dark">locations</x-code>
        . Die Webadresse lautet demnach
        <x-code type="dark">https://demo.testware.io/api/v1/locations</x-code>
        .
    </p>
    <p>Die Übertragungsart bezieht sich auf die verschiedene http Request Arten beispielsweise
        <x-code type="get">GET</x-code>
        ,
        <x-code type="post">POST</x-code>
        oder
        <x-code type="delete">DELETE</x-code>
        .
    </p>
    <h3 class="text-xl"
        id="api-rest"
    >Was ist REST?</h3>
    <p><strong>REST</strong> steht für <strong>RE</strong>presentational <strong>S</strong>tate
        <strong>T</strong>ransfer. Dies beschreibt einen Architekturansatz, wie verteilte Systeme miteinander kommunizieren können. REST selbst ist dabei allerdings weder Protokoll noch Standard. Als „RESTful“ charakterisierte Implementierungen der Architektur bedienen sich allerdings standardisierter Verfahren, wie HTTP/S, URI, JSON oder XML.
    </p>
    <p>Die unterstützten HTTP-Methoden lauten: </p>
    <ul class="list-none">
        <li>
            <x-code type="get">GET</x-code>
            - fordert Daten vom Server an
        </li>
        <li>
            <x-code type="post">POST</x-code>
            - übermittelt Daten an den Server
        </li>
        <li>
            <x-code type="put">PUT/PATCH</x-code>
            - ändern bestehende Daten auf dem Server
        </li>
        <li>
            <x-code type="delete">DELETE</x-code>
            - löscht bestehende Daten auf dem Server
        </li>
    </ul>


    <h2 id="api-json">JSON Daten</h2>
    <p>Die Daten, welche durch die API zwischen der Datenbank und der Anwendung ausgetauscht werden, sind im weit verbreiteten JSON Format gehalten. JSON ermöglicht, verschachtelte Werte in Textform darzustellen. Dieses vereinfacht die Übertragung komplexerer Datenstrukturen über das Internet.</p>
    <p>JSON ist im einfachsten Fall ein
        <x-code>Schlüssel : Wert</x-code>
        (engl.
        <strong>key : value</strong>) Paar, welches mit einem
        <x-code>:</x-code>
        getrennt und mit
        <x-code>{}</x-code>
        Klammern umschlossen wird. Mehrere Paare werden mit einem Komma getrennt.
    </p>

    <pre><code class="language-json">{
    "key-1" : "value",
    "key-2" : 231.0
}</code></pre>

    <p>Als Werte können praktisch alle Arten von Daten darstellen, wie Texte, Zahlen (Kommazahlen mit
        <x-code>.</x-code>
        statt einem
        <x-code>,</x-code>
        oder auch weitere Schlüssel:Wert Paare.
    </p>

    <pre><code class="language-json">{
    "key" : {
        "subkey" : "value",
        "subkey2" : 231.2,
        "subkey3" : "231.2"
    }
}</code></pre>

    <p>Eine einfache Abfrage der Datenbank per jQuery zur Auflistung aller Betriebe in der Datenbank mittels:</p>

    <pre><code class="language-js">var settings = {
  "url": "https://demo.testware.io/api/v1/location",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "Accept": "application/json",
    "Authorization": "Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
    "Content-Type": "application/json"
  }
};

$.ajax(settings).done(function (response) {
  console.log(response);
});</code></pre>

    <p>Die Antwort der API packt die Daten in ein
        <x-code>data</x-code>
        Objekt (erkennbar duch die Einfassung der Schlüssel: Wert Paare mit
        <x-code>{}</x-code>
        Klammern.
    </p>

    <pre><code class="language-json">{
    "id": 1,
    "name": "Werk Bruchsal",
    "adresse": {
        "strasse": "Christiane-Brandt-Platz",
        "nr": "67",
        "plz": "63550",
        "ort": "Bruchsal"
    }
}</code></pre>

    <p>Eine Sammlung von Datensätzen wird mit
        <x-code>[]</x-code>
        Klammern umfasst. Die einzelnen Datensäte mit
        <x-code>,</x-code>
        getrennt.
    </p>
    <pre><code class="language-json">[
    {
        "id": 1,
        "name": "Werk Bruchsal",
        "adresse": {
            "strasse": "Christiane-Brandt-Platz",
            "nr": "67",
            "plz": "63550",
            "ort": "Bruchsal"
        }
    },
    {
        "id": 2,
        "name": "Werk Brechtersfeld",
        "adresse": {
            "strasse": "Malbachplatz",
            "nr": "1",
            "plz": "08152",
            "ort": "Brechtersfeld"
        }
    },
    {...}
]</code></pre>
    <x-note>
        <h4 class="text-xl">Hinweis</h4>
        <p class="mb-0">Die obige Beschreibung ist für einen schnellen Einstieg einfach gehalten. Eine komplette Beschreibung des JSON Formates finden Sie auf der offiziellen Seite
            <a href="https://www.json.org/json-de.html"
               target="_blank"
            >https://www.json.org/json-de.html
            </a>
            .
        </p>
    </x-note>

    <h2 id="api-script-examples">Codebeispiel für API Zugriff</h2>
    <p>Als Beispiel soll ein neuer Betrieb mit einer dazugehörigen Adresse angelegt werden. Die JSON Daten, welche zur API mit der auf den Endpunkt
        <x-code>https://demo.testware.io/api/v1/location</x-code>
        mit der
        <x-code type="post">POST</x-code>
        Methode gesendet werden sollen lauten:
    </p>

    <pre><code class="language-json">{
    "bezeichner":"kleve021M",
    "name":"Mein neuer Betrieb",
    "adresse":{
        "name_kurz":"klv021",
        "strasse":"Klever Berg",
        "nr":21,
        "plz":"47533",
        "ort":"Kleve"
    }
}</code></pre>

    <p>Der API Zugriff könnte mit folgendem Code ausgeführt werden:</p>
    <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) :'curl'}">
        <div class="sm:hidden">
            <label for="tabs"
                   class="sr-only"
            >Select a tab</label>
            <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
            <select id="tabs"
                    name="tabs"
                    class="block w-full rounded-md border-slate-300 py-2 pl-3 pr-10 text-base focus:border-main-500 focus:outline-none focus:ring-main-500 sm:text-sm"
            >
                <option>My Account</option>

                <option>Company</option>

                <option selected>Team Members</option>

                <option>Billing</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <div class="border-b border-slate-200">
                <nav class="-mb-px flex space-x-8"
                     aria-label="Tabs"
                >
                    <!-- Current: "tab-active", Default: "border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300" -->
                    <a x-on:click.prevent="tab = 'curl' ; window.location.hash ='curl'"
                       href="#"
                       x-bind:class=" {'tab-active' : tab === 'curl', 'tab-inactive' : tab !=='curl'} "
                       class="tab-item"
                    >cURL</a>

                    <a x-on:click.prevent="tab = 'js' ; window.location.hash ='js'"
                       href="#"
                       x-bind:class=" {'tab-active' : tab === 'js', 'tab-inactive' : tab !=='js'} "
                       class="tab-item"
                    >JavaScript</a>

                    <a x-on:click.prevent="tab = 'php' ; window.location.hash ='php'"
                       href="#"
                       x-bind:class=" {'tab-active' : tab === 'php', 'tab-inactive' : tab !=='php'} "
                       class="tab-item"
                    >PHP-curl</a>

                    <a x-on:click.prevent="tab = 'python' ; window.location.hash ='python'"
                       href="#"
                       x-bind:class=" {'tab-active' : tab === 'python', 'tab-inactive' : tab !=='python'} "
                       class="tab-item"
                    >Python</a>

                    <a x-on:click.prevent="tab = 'dart' ; window.location.hash ='dart'"
                       href="#"
                       x-bind:class=" {'tab-active' : tab === 'dart', 'tab-inactive' : tab !=='dart'} "
                       class="tab-item"
                    >Dart</a>


                    <a x-on:click.prevent="tab = 'java' ; window.location.hash ='java'"
                       href="#"
                       x-bind:class=" {'tab-active' : tab === 'java', 'tab-inactive' : tab !=='java'} "
                       class="tab-item"
                    >Java</a>
                </nav>
            </div>
        </div>
        <section x-show="tab === 'curl'">
            <pre><code class="language-bash">curl --location --request POST 'testware.test/api/v1/location' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' \
--header 'Content-Type: application/json' \
--data-raw '{
    "bezeichner": "kleve021M",
    "name": "Mein neuer Betrieb",
    "adresse": {
        "name_kurz": "klv021",
        "strasse": "Klever Berg",
        "nr": 21,
        "plz": "47533",
        "ort": "Kleve"
    }
}'</code></pre>
        </section>
        <section x-show="tab === 'js'">
<pre><code class="language-js">let data = JSON.stringify({"bezeichner":"kleve021M","name":"Mein neuer Betrieb","adresse":{"name_kurz":"klv021","strasse":"Klever Berg","nr":21,"plz":"47533","ort":"Kleve"}});

let xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "https://demo.testware.io/api/v1/location");
xhr.setRequestHeader("Accept", "application/json");
xhr.setRequestHeader("Authorization", "Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
xhr.setRequestHeader("Content-Type", "application/json");

xhr.send(data);</code></pre>
        </section>
        <section x-show="tab === 'php'">
<pre><code class="language-php">$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://demo.testware.io/api/v1/location',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "bezeichner" : "kleve021M",
    "name" : "Mein neuer Betrieb",
    "adresse":{
        "name_kurz" : "klv021",
        "strasse" : "Klever Berg",
        "nr":21,
        "plz":"47533",
        "ort":"Kleve"
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;</code></pre>
        </section>
        <section x-show="tab === 'python'">
            <pre><code class="language-python">import http.client
import json

conn = http.client.HTTPSConnection("testware.test")
payload = json.dumps({
  "bezeichner": "kleve021M",
  "name": "Mein neuer Betrieb",
  "adresse": {
    "name_kurz": "klv021",
    "strasse": "Klever Berg",
    "nr": 21,
    "plz": "47533",
    "ort": "Kleve"
  }
})
headers = {
  'Accept': 'application/json',
  'Authorization': 'Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  'Content-Type': 'application/json'
}
conn.request("POST", "/api/v1/location", payload, headers)
res = conn.getresponse()
data = res.read()
print(data.decode("utf-8"))</code></pre>
        </section>
        <section x-show="tab === 'dart'">
        <pre><code class="language-dart">var headers = {
  'Accept': 'application/json',
  'Authorization': 'Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  'Content-Type': 'application/json'
};
var request = http.Request('POST', Uri.parse('testware.test/api/v1/location'));
request.body = json.encode({
  "bezeichner": "kleve021M",
  "name": "Mein neuer Betrieb",
  "adresse": {
    "name_kurz": "klv021",
    "strasse": "Klever Berg",
    "nr": 21,
    "plz": "47533",
    "ort": "Kleve"
  }
});
request.headers.addAll(headers);

http.StreamedResponse response = await request.send();

if (response.statusCode == 200) {
  print(await response.stream.bytesToString());
}
else {
  print(response.reasonPhrase);
}
</code></pre>
        </section>
        <section x-show="tab === 'java'">
            <pre><code class="language-java">OkHttpClient client = new OkHttpClient().newBuilder()
  .build();
MediaType mediaType = MediaType.parse("application/json");
RequestBody body = RequestBody.create(mediaType, "{\r\n    \"bezeichner\": \"kleve021M\",\r\n    \"name\": \"Mein neuer Betrieb\",\r\n    \"adresse\": {\r\n        \"name_kurz\": \"klv021\",\r\n        \"strasse\": \"Klever Berg\",\r\n        \"nr\": 21,\r\n        \"plz\": \"47533\",\r\n        \"ort\": \"Kleve\"\r\n    }\r\n}");
Request request = new Request.Builder()
  .url("testware.test/api/v1/location")
  .method("POST", body)
  .addHeader("Accept", "application/json")
  .addHeader("Authorization", "Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx")
  .addHeader("Content-Type", "application/json")
  .build();
Response response = client.newCall(request).execute();</code></pre>
        </section>


    </div>


    <h2 id="api-token-make">API Token herstellen</h2>

    <p>Sie können einen API-Token für Ihr Benutzerkonto einfach in der eigenen Kontoübersicht herstellen. Hierzu melden Sie sich in der testWare an. Anschließend klicken auf Ihren Benutzernamen in der oberen rechten Ecke. Aus dem Menü wählen Sie den Eintrag
        <x-code type="dark">Mein Konto</x-code>
        aus.
    </p>

    <img src="/assets/img/screenshots/Screen_user_open_account.png"
         alt="Öffnen der Benutzerseite"
         class="shadow"
    >

    <p>In der Kontoübersicht finden Sie weiter unten den Abschnitt
        <strong>Token für API-Zugang</strong>. Wenn Sie noch keinen Token erstellt haben, wird ein Schalter
        <x-code type="dark">Token für API erzeugen</x-code>
        gezeigt. Mit einem Klick auf diesem Schalter wird der Token erstellt und dem Konto zugeordnet.
    </p>

    <img src="/assets/img/screenshots/Screenshot_User_Set_API_Token.png"
         alt="API Token erstellen"
         class="shadow"
    >

    <p>Den Token können Sie aus dem Textfeld herauskopieren und für ihre jeweilige Anwendung verwenden.</p>

    <x-note type="danger">
        <h4 class="text-xl">Kritischer Hinweis!</h4>
        <p class="mb-0">Mit dem Token erhalten Sie, entsprechend Ihrem Benutzerprofil, vollen Zugriff auf die testWare. Sie sollten daher den Token nicht an andere verteilen.</p>
    </x-note>

    <p>Sollte es erforderlich sein, den Token neu ausstellen zu lassen, können Sie dies mit einem Klick auf den Schalter
        <x-code type="dark"><x-icons.redo class="h-3 inline" /></x-code>
        erreichen.
    </p>
    <img src="/assets/img/screenshots/Screenshot_User_View_API_Token.png"
         alt="Anzeigen des API Token"
         class="shadow"
    >
    <x-note type="warning">
        <h4 class="text-xl">Wichtiger Hinweis!</h4>
        <p class="mb-0">Bitte beachten Sie, dass mit der Ausstellung eines neuen Tokens alle Zugriffe auf die testWare API mit dem neuen Token erfolgen müssen. Zugriffe mit dem alten Token werden abgewiesen. Der alte Token ist nicht mehr reproduzierbar.</p>
    </x-note>
@endsection