<?php

use App\Http\Controllers\DiegoOliverController;
use App\Http\Controllers\PainelController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('diego_oliver.index');
});

Route::resource('diego_oliver', DiegoOliverController::class);

Route::resource('painel', PainelController::class);

// Route::get('/painel', [PainelController::class, 'index'])->name('painel.index');
