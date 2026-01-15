<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    function index()
    {
        $allGifts = Gift::all();
        return view('welcome', ['gifts' => $allGifts]);
    }

    function show(Gift $gift)
    {
        return view('gifts.show', ['gift' => $gift]);
    }

    function create()
    {
        return view('gifts.create');
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50|min:3',
            'price' => 'required|decimal:0,2|min:0',
            'details' => 'nullable|string',
            'url' => 'nullable|string|url:http,https',
        ]);

        Gift::create($validated);

        return redirect('/');
    }

    function edit(Gift $gift)
    {
        return view('gifts.edit', ['gift' => $gift]);
    }

    function update(Request $request, Gift $gift)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50|min:3',
            'price' => 'required|decimal:0,2|min:0',
            'details' => 'nullable|string',
            'url' => 'nullable|string|url:http,https',
        ]);

        $gift->update($validated);

        return redirect('/');
    }

    function destroy(Gift $gift)
    {
        $gift->delete();
        return redirect('/');
    }
}
