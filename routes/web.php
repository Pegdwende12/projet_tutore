<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Connaissanceimg;
use App\Http\Controllers\Connaissancevideo;
use App\Http\Controllers\Connaissanceresume;
use App\Http\Controllers\Connaissancelien;

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

Route::get('/espacepublic', [Connaissanceimg::class, 'index'])
    ->name('espacepublic'); 


Route::get('/espacepublicVideo', [Connaissancevideo::class,'index']
    )->name('espacepublicVideo');

Route::get('/espacepublicLien', [Connaissancelien::class,'index']
    )->name('espacepublicLien');

Route::get('/espacepublicResume', [Connaissanceresume::class, 'index']
    )->name('espacepublicResume');

Route::get('/', function () {
    return view('Acceuil');
})->name('Acceuil');
