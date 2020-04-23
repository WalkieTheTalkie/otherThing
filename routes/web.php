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
Route::any ( '/searchResults', function () {
    $q = Request::get ( 'q' );
    $student = \App\Students::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'major', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $student ) > 0)
        return view ( 'searchResults' )->withDetails ( $student )->withQuery ( $q );
    else
        return view ( 'searchResults' )->withMessage ( 'No Details found. Try to search again !' );
} );



Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/why', 'something@index')
    ->name('why')
    ->middleware('auth');
