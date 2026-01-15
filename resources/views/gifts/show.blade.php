@extends('layouts.app')

@section('content')
<div>
    <h3 class="text-2xl py-2">Gift Information</h3>
    <p>Name: {{ $gift->name }}</p>
    <p>Price: {{ $gift->price }} USD</p>
    @if ($gift->details)
    <p>Details: {{ $gift->details }}</p>
    @endif
    @if ($gift->url)
    <a href="{{ $gift->url }}" class="text-[#1675a1] mt-4 inline-block" target="_blank">URL</a>
    @endif
</div>

<a href="{{ url()->previous() }}" class="text-[#1675a1] mt-4 inline-block">Back to Gifts List</a>
@endsection