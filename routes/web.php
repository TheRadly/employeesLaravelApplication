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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Get TreeView page
Route::get('/treeview', 'TreeViewController@TreeView')->name('treeview');

Route::get('/list-employees', 'ListController@ListEmployees')->name('listEmployees');

Route::get('/single-page/{id}', 'SinglePageController@SinglePage')->name('singlePage');

Route::get('create-new-employeer', 'SinglePageController@CreateNewEmployeer')->name('createNewEmployeer');

Auth::routes();