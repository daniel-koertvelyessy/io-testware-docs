<nav class="hidden lg:block fixed w-56 right-0 bg-white border-l-2 py-1 z-10  border-main-800"
     x-bind:class="{'lg:top-0':shrinkNav} "
     x-transition:enter.duration.500ms
     x-transition:leave.duration.400ms
>
        <span class="text-lg ml-3 font-semibold text-slate-400 mb-2">Auf dieser Seite</span>
@foreach($items as $item)
        <x-nav-doc-item level="{{ $item['level']??'0' }}" link="{{ $item['link'] }}">{{ $item['header'] }}</x-nav-doc-item>
@endforeach
</nav>
<select id="docsnavselect"
        class="lg:hidden fixed left-0 bottom-0 w-52 z-10"
        onchange="document.getElementById(document.getElementById('docsnavselect').value).scrollIntoView({behavior:'smooth'})"
>
    <option value="top">Auf dieser Seite</option>
@foreach($items as $item)
    <option value="{{ $item['link'] }}">{{ $item['header'] }}</option>
@endforeach
</select>