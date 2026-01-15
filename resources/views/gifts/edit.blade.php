<div>
    <form method="post" action="{{ route('gifts.update', $gift) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Gift Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $gift->name) }}" required />
        </div>
        <div>
            <label for="price">Price (USD):</label>
            <input type="number" id="price" name="price" value="{{ old('price', $gift->price) }}" required />
        </div>
        <div>
            <label for="details">Details:</label>
            <textarea id="details" name="details">{{ old('details', $gift->details) }}</textarea>
        </div>
        <div>
            <label for="url">Gift Image:</label>
            <input type="text" id="url" name="url" value="{{ old('url', $gift->url) }}" />
        </div>
        <button type="submit">Update Gift</button>
    </form>
    <a href="{{ url()->previous() }}" class="text-[#1675a1] mt-4 inline-block">Back to Gifts List</a>
</div>