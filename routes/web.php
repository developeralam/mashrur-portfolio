<?php

use App\Http\Livewire\Frontend\Home;
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

Route::get('/', Home::class);

// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', function () {
//     return view('livewire.backend.home');
// })->name('admin.dashboard');
