@php $level = $level ?? 0 @endphp

<ul class="my-0 list-none list-inside">
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
</ul>
