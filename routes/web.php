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

Route::get('/', 'App\Http\Controllers\PaginasController@index')->name('/');
Route::get('/add-contact', 'App\Http\Controllers\PaginasController@addContact')->name('add-contact')->middleware('auth');
Route::get('/contact-details', 'App\Http\Controllers\PaginasController@contactDetails')->name('contact-details')->middleware('auth');
Route::get('/edit-contact/{id}', 'App\Http\Controllers\PaginasController@editContact')->name('edit-contact')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
