@props([
    'type'=>'code',
    'typeclasses' =>
        [
            'code' => 'text-blue-500 bg-slate-100',
            'btn' => 'text-blue-500 bg-slate-50 border border-blue-600',
            'dark'=>'bg-main-800 text-slate-50',
            'get'=>'bg-green-600 text-slate-50',
            'put'=>'bg-blue-600 text-slate-50',
            'post'=>'bg-yellow-600 text-slate-50',
            'delete'=>'bg-red-600 text-slate-50',
            ]
])

<span {{ $attributes->merge(['class'=>"font-semibold whitespace-nowrap text-xs rounded px-1 py-0.5 flex-inline items-center justify-center $typeclasses[$type]"]) }}>{{ $slot }}</span>