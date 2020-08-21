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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('calculadora', function(){
    return view('calculadora');
});
*/

Route::get('calculadora', 'CalController@calculadora');

Route::post('suma', ['as' => 'result.suma', 'uses' => 'CalController@suma']);

Route::post('resta', ['as' => 'result.resta', 'uses' => 'CalController@resta']);

Route::post('multip', ['as' => 'result.multip', 'uses' => 'CalController@multip']);

Route::post('div', ['as' => 'result.div', 'uses' => 'CalController@div']);

Route::post('pow', ['as' => 'result.pow', 'uses' => 'CalController@pow']);