<article class="border px-2 py-4 bg-slate-100 flex flex-col justify-between">
<div>
    <h2 class="text-2xl pb-3 mb-3 border-b">{{ $header??'Mehr' }}</h2>
    <p class="p-0 mt-1">{{ $slot }}</p>
</div>
    <a href="{{ $link??'#' }}" class="block text-right">jetzt lesen</a>
</article>