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
Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');
Route::resource('home', 'Students');

Route::get('/search', function () {
    return view('search');
});
Route::post('/searchResults', ['as'=>'searchResults', 'uses' => 'Students@searchStudent']);


Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/why', 'something@index')
    ->name('why')
    ->middleware('auth');
