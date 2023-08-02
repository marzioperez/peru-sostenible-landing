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
