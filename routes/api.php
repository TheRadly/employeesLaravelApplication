<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// API: GetEmployeers
Route::get('get-employeers/{id}', 'ApiController@GetEmployeers');

// API: GetListEmployeers
Route::post('get-list-employeers', 'ApiController@GetListEmployeers');

// API: GetCurrentEmployeer
Route::post('get-current-employeer', 'ApiController@GetCurrentEmployeer');
