<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('albums/{id}', [App\Http\Controllers\AlbumController::class, 'viewAlbum']);
Route::get('songs/{id}', [App\Http\Controllers\SongController::class, 'viewSong']);
Route::post('comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');;
