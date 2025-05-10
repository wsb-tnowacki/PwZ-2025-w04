<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('ogolne.welcome');
})->name('start'); 
Route::get('/kontakt', function () {
    return view('ogolne.kontakt');
})->name('kontakt'); 
Route::get('/onas', function () {
    return view('ogolne.onas');
})->name('onas'); 