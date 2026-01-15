@extends('layouts.app')

@section('content')
<h3 class="text-2xl py-2">Gifts</h3>
<a href="{{ route('gifts.create') }}" class="text-[#1675a1] mb-4 inline-block">Create New Gift</a>
<div class="flex-column space-y-3">
    @foreach ($gifts as $gift)
    <div>
        <p>{{ $gift->name }} - {{ $gift->price }} USD</p>
        <div class="flex gap-4">
            <a class="text-[#1675a1]" href="{{ route('gifts.show', $gift) }}">View Gift</a>
            <a class="text-[#1675a1]" href="{{ route('gifts.edit', $gift) }}">Edit Gift</a>
            <form action="{{ route('gifts.destroy', $gift) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-[#a11616]" onclick="return confirm('Are you sure you want to delete this gift?')">Delete Gift</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection