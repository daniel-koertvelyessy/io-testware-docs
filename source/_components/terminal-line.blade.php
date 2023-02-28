@props([
    'dir' => false,
    'path' => '~',
    'type' => 'info',
    'typebg' =>[
        'info' => '',
        'error' => 'bg-red-600 text-white w-full'
]
])
<span {{ $attributes->merge(['class'=>"$typebg[$type]"]) }}>
@if($dir)
    <span class="text-green-400">computer:{{ $path }}$</span>
@endif
<span class="flex-1 pl-2">
    {{ $slot }}
</span>
</span>