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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/espacepublic', function () {
    return view('espacepublic');
})->name('espacepublic');

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
