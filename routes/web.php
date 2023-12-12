<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(
    App\Http\Controllers\NoteController::class
)->group(function () {
    Route::get('/notes', 'index');
    Route::get('/notes/create', 'create');
    Route::post('/notes', 'store');
    Route::get('/notes/{note}/show', 'show');
    Route::get('/notes/{note}/edit', 'edit');
    Route::put('/notes/{note}', 'update');
    Route::get('/notes/{note_id}/delete', 'destroy');
});
