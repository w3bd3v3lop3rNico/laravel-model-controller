<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as PageController;

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

Route::get('/',[PageController::class, 'index'])->name('homepage');

Route::get('/aboutUs', [PageController::class, 'aboutUs'])->name('aboutus');

Route::get('/faq', [PageController::class, 'faq'])->name('faq');
