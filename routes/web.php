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

Route::get('/', 'EmployeesController@index');
Route::post('/register', 'EmployeesController@register');
Route::get('/listed', 'EmployeesController@listed');
Route::get('/detail/{id}', 'EmployeesController@detail');


 