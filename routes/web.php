<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyalurController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return redirect()->route('penyalurs.index');
})->name('login');

Route::resource('penyalurs', PenyalurController::class);