<?php

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


/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'BookController@index');
Route::get('/books/{book}', 'BookController@show');
Route::get('/authors/{author}', 'AuthorController@show');

/*
|--------------------------------------------------------------------------
| Admin control panel routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/books', 'Admin\BookController@index');
Route::post('/admin/books', 'Admin\BookController@store');
Route::get('/admin/books/edit/{book}', 'Admin\BookController@edit');
Route::patch('/admin/books/{book}', 'Admin\BookController@update');
Route::delete('/admin/books/{book}', 'Admin\BookController@delete');
