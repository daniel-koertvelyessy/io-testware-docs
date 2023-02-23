<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) :'{{ $open  }}'}">

    <div class="border-b border-slate-200">
        <nav class="-mb-px flex space-x-8"
             aria-label="Tabs"
        >
            <a x-on:click.prevent="tab = 'request' ; window.location.hash ='request'"
               href="#"
               x-bind:class=" {'tab-active' : tab === 'request', 'tab-inactive' : tab !=='request'} "
               class="tab-item"
            >Senden
            </a>

            <a x-on:click.prevent="tab = 'response' ; window.location.hash ='response'"
               href="#"
               x-bind:class=" {'tab-active' : tab === 'response', 'tab-inactive' : tab !=='response'} "
               class="tab-item"
            >Antwort
            </a>
        </nav>
    </div>

    <section x-show="tab === 'request'">{{ $request }}</section>
    <section x-show="tab === 'response'">{{ $response }}</section>
</div>