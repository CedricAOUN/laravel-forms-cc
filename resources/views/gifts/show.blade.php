<div>
    <h3>Gift Information</h3>
    <p>Name: {{ $gift->name }}</p>
    <p>Price: {{ $gift->price }} USD</p>
    @if ($gift->details)
    <p>Details: {{ $gift->details }}</p>
    @endif
    @if ($gift->url)
    <img src="{{ $gift->url }}" alt="Gift Image" class="max-w-sm mt-4" />
    @endif
</div>
<a href="{{ url()->previous() }}" class="text-[#1675a1] mt-4 inline-block">Back to Gifts List</a>