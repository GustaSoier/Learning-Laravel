<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/read', [PostController::class, 'read']);

Route::get('/posts/all', [PostController::class, 'all']);

Route::get('/', function () {
    return view('welcome');
});
