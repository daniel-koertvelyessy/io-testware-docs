<div class="text-base flex justify-between items-center {{ $noborder??'border-y border-slate-200 px-2 py-3' }}">
    <span class="text-pink-600">{{ $key }}</span>
    @if($type === 'Datum')
        <div>
            <span class="bg-slate-500 rounded-md text-white px-1.5 py-0.5 text-sm">{{ strtoupper($type) }}</span>
            <span class="text-slate-600 mr-4">{{ date('Y-m-d') }}</span>
            <span class="bg-slate-500 rounded-md text-white px-1.5 py-0.5 text-sm">STRING</span>
        </div>
    @else
        <span class="bg-slate-500 rounded-md text-white px-1.5 py-0.5 text-sm">{{ strtoupper($type) }}</span>
    @endif

</div>