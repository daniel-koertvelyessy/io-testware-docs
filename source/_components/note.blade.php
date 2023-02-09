@props([
    'type'=>'info',
    'typeclasses' =>
        [
            'info'=>'border-main-800 border-l-4 bg-slate-100',
            'sucess'=>'border-green-600 border-l-4 bg-slate-100',

            'warning'=>'border-yellow-600 border-l-4 bg-slate-100',
            'danger'=>'border-red-600 border-l-4 bg-slate-100',
            ]
])

<section {{ $attributes->merge(['class'=>"font-semibold text-xs pl-3 pr-1 py-2 mt-4 $typeclasses[$type]"]) }}>{{ $slot }}</section>