<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @endif
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

    <div class="dark:text-white">
        <h3 class="text-2xl py-2">Gifts</h3>
        <a href="{{ route('gifts.create') }}" class="text-[#1675a1] mb-4 inline-block">Create New Gift</a>
        <div class="flex-column space-y-3">
            @foreach ($gifts as $gift)
            <div>
                <p>{{ $gift->name }} - {{ $gift->price }} USD</p>
                <div class="flex gap-4">
                    <a class="text-[#1675a1]" href="{{ route('gifts.show', $gift) }}">View Gift</a>
                    <a class="text-[#1675a1]" href="{{ route('gifts.edit', $gift) }}">Edit Gift</a>
                    <form action="{{ route('gifts.delete', $gift) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-[#a11616]" onclick="return confirm('Are you sure you want to delete this gift?')">Delete Gift</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>