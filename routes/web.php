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

Route::get('/', \App\Http\Livewire\Event\Index::class)->name('home');
Route::get('/auth', \App\Http\Livewire\Auth\Index::class)->name('auth');
Route::get('/gracias', \App\Http\Livewire\Auth\Thanks::class)->name('thanks');
Route::get('/sobre-el-evento', \App\Http\Livewire\Event\About::class)->name('about');
Route::get('/agenda', \App\Http\Livewire\Event\Schedule::class)->name('schedule');
Route::get('/expositores', \App\Http\Livewire\Event\Speakers::class)->name('speakers');
Route::get('/aliados', \App\Http\Livewire\Event\Allies::class)->name('allies');
Route::get('/mas-detalles', \App\Http\Livewire\Event\MoreDetails::class)->name('more-details');
Route::get('/revive-las-sesiones', \App\Http\Livewire\Event\Videos::class)->name('videos');
Route::get('/galeria', \App\Http\Livewire\Event\Gallery::class)->name('gallery');
Route::get('/en-vivo', \App\Http\Livewire\Event\Live\Index::class)->name('live');

Route::get('/terminos-y-condiciones', \App\Http\Livewire\TermsAndConditions::class)->name('terms-and-conditions');
Route::get('/politicas-de-privacidad', \App\Http\Livewire\PrivacyPolicies::class)->name('privacy-policies');
Route::get('/politica-de-tratamiento-de-proteccion-de-datos-personales', \App\Http\Livewire\PersonalProtectionData::class)->name('personal-protection-data');
