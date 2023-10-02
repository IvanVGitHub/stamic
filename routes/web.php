<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('main');
Route::get('/uslugi', function () {
    return view('components.pages.landings.uslugi');
})->name('uslugi');
Route::get('/tehnologii', function () {
    return view('components.pages.landings.tehnologii');
})->name('tehnologii');
Route::get('/proekty', function () {
    return view('components.pages.landings.proekty');
})->name('proekty');
Route::get('/kontakty', function () {
    return view('components.pages.landings.kontakty');
})->name('kontakty');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
