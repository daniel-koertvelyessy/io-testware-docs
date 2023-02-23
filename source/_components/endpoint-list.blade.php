<div class="overflow-hidden bg-white shadow sm:rounded-md">
    <ul role="list" class="list-none divide-y divide-slate-200">
        @foreach($items as $item)
        <li class=" hover:bg-slate-50">
            <a href="#{{ $item['link'] }}"
               class="flex justify-start items-center no-underline px-2 py-3 text-slate-400"
            >
                <span class="w-24">
                    <x-code type="{{ $item['request'] }}">{{ strtoupper($item['request']) }}</x-code>
                </span>
                <span class="text-sm">{{ $item['endpoint'] }}</span>
            </a>
        </li>
        @endforeach
    </ul>
</div>