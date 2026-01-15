<?php

use App\Http\Controllers\GiftController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GiftController::class, 'index']);

Route::group(['prefix' => 'gifts'], function () {
    Route::get('/create', [GiftController::class, 'create'])->name('gifts.create');
    Route::post('/', [GiftController::class, 'store'])->name('gifts.store');
    Route::get('/{gift}', [GiftController::class, 'show'])->name('gifts.show');
    Route::get('/{gift}/edit', [GiftController::class, 'edit'])->name('gifts.edit');
    Route::put('/{gift}', [GiftController::class, 'update'])->name('gifts.update');
    Route::delete('/{gift}/delete', [GiftController::class, 'destroy'])->name('gifts.delete');
});
