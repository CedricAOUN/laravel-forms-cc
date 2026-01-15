<?php

namespace App\Http\Controllers;

use App\Http\Requests\GiftPostRequest;
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

    function store(GiftPostRequest $request)
    {
        $validated = $request->validated();

        Gift::create($validated);

        return redirect('/');
    }

    function edit(Gift $gift)
    {
        return view('gifts.edit', ['gift' => $gift]);
    }

    function update(GiftPostRequest $request, Gift $gift)
    {
        $validated = $request->validated();

        $gift->update($validated);

        return redirect('/');
    }

    function destroy(Gift $gift)
    {
        $gift->delete();
        return redirect('/');
    }
}
