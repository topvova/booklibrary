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

Route::get('/admin/authors', 'Admin\AuthorController@index');
Route::post('/admin/authors', 'Admin\AuthorController@store');
Route::get('/admin/authors/edit/{book}', 'Admin\AuthorController@edit');
Route::patch('/admin/authors/{book}', 'Admin\AuthorController@update');
Route::delete('/admin/authors/{book}', 'Admin\AuthorController@delete');
