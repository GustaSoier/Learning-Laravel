<?php

use App\Http\Controllers\SairController;
use App\Http\Controllers\SiteController;
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


Route::get('/', [SiteController::class, 'index'])->name('site');

Route::get('/sair', [SiteController::class, 'exit'])->name('sair');

Route::get('/usuarios/{qnt}', [SiteController::class, 'users'])->name('user');
// Route::get('/', function () {
//     return view('bemvindo');
// });
