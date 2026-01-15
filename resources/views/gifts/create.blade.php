<div>
    @if ($errors->any())
    <div style="color: red; margin-bottom: 1rem;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('gifts.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Gift Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required />
        </div>
        <div>
            <label for="price">Price (USD):</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" required />
        </div>
        <div>
            <label for="details">Details:</label>
            <textarea id="details" name="details">{{ old('details') }}</textarea>
        </div>
        <div>
            <label for="url">Gift Image:</label>
            <input type="text" id="url" name="url" value="{{ old('url') }}" />
        </div>
        <button type="submit">Create Gift</button>
    </form>

    <a href="{{ url()->previous() }}" class="text-[#1675a1] mt-4 inline-block">Back to Gifts List</a>
</div>