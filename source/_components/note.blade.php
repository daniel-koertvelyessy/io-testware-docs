@props([
    'type'=>'info',
    'typeclasses' =>
        [
            'info'=>'border-main-800 border-l-4 bg-slate-50',
            'sucess'=>'border-green-600 border-l-4 bg-slate-50',

            'warning'=>'border-yellow-600 border-l-4 bg-slate-50',
            'danger'=>'border-red-600 border-l-4 bg-slate-50',
            ]
])

<section {{ $attributes->merge(['class'=>"font-semibold pl-3 pr-1 py-2 mt-4 $typeclasses[$type]"]) }}>{{ $slot }}</section>