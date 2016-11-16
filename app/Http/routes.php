<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => ['web']], function () {
	
	Route::get('/', function () {
	$menus =  App\Menu::all();
    return view('index', compact('menus'));
});


});


Route::group(['middleware' => 'web'], function () {

Route::auth();

Route::get('/admin', 'HomeController@index');

Route::resource('home','MenuController@index');
Route::resource('crear-menu','MenuController@create');
Route::resource('crear','MenuController@store');
Route::resource('eliminar','MenuController@destroy');
});
/*Route::get('/menu', function () {
   return view('menu');
});*/



/*Route::get('api/menu',function(){
	return Datatables::eloquent(App\User::query())->make(true);
});*/