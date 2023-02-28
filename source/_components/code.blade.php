@props([
    'type'=>'code',
    'typeclasses' =>
        [
            'code' => 'text-blue-500 bg-slate-100 text-xs ',
            'btn' => 'text-blue-500 bg-slate-50 border border-blue-600 text-xs ',
            'dark'=>'bg-main-800 text-slate-50 text-xs ',
            'get'=>'bg-green-600 text-slate-50 text-xs ',
            'put'=>'bg-blue-600 text-slate-50 text-xs ',
            'post'=>'bg-yellow-600 text-slate-50 text-xs ',
            'delete'=>'bg-red-600 text-slate-50 text-xs ',
            'key'=>'text-pink-600 text-base',
            'type' => 'bg-slate-500 rounded-md text-white px-1.5 py-0.5 text-sm',
            'terminal' => 'bg-gray-800 px-2 py-0.5 text-yellow-300 font-base'
            ]
])

<span {{ $attributes->merge(['class'=>"font-semibold whitespace-nowrap rounded px-1 py-0.5 flex-inline items-center justify-center $typeclasses[$type]"]) }}>{{ $slot }}</span>