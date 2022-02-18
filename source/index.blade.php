@extends('_layouts.main')

@section('maintitle',$page->title)

@section('body')
<div class="p-8" x-data="{ open : false}">
    <h1 class="text-3xl font-bold">Hello world!!!!</h1>
    <button @click="open=!open">Klick</button>
    <div class="p-8">
        <h2 class="text-xl" x-show="open">{{ $page->description }}</h2>
    </div>
</div>
@endsection
