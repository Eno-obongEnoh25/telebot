<?php

use App\Http\Controllers\FilesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('telebot', [FilesController::class, 'addFile'])->name('telebot');
Route::get('telebot', [FilesController::class, 'getFile']);

Route::get('bot', [FilesController::class, 'getUpdates']);
