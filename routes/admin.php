<?php

use App\Http\Livewire\Backend\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backend\SiteConfig;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', Admin::class)->name('dashboard');
Route::get('/site-config', SiteConfig::class)->name('siteconfig');
