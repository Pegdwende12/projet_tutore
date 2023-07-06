<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Connaissanceimg;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/espacepublic/{id}', [Connaissanceimg::class, 'view'])
    ->name('espacepublic');

Route::get('/espacepublic/', [Connaissanceimg::class, 'index'])
    ->name('espacepublic'); 


Route::get('/espacepublicVideo', function () {
    return view('espacepublicVideo');
})->name('espacepublicVideo');

Route::get('/espacepublicLien', function () {
    return view('espacepublicLien');
})->name('espacepublicLien');

Route::get('/espacepublicResume', function () {
    return view('espacepublicResume');
})->name('espacepublicResume');

Route::get('/', function () {
    return view('Acceuil');
})->name('Acceuil');
