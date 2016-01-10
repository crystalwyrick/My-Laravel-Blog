<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayhowdy/{name?}', 'HomeController@sayHowdy');

Route::get('/resume', 'HomeController@resume');

Route::get('/portfolio', 'HomeController@portfolio');

Route::get('/sayhello/{name}', 'HomeController@sayHello($name)');

Route::get('/roll-dice/{guess}', 'HomeController@rollDice');

Route::resource('/posts', 'PostsController');


// this is useful for testing inputs in the URL:
Route::get('/test', function() {
	
	// checks for all keys, returns all values
	dd(Input::all());

	// checks for key, returns value
	// dd(Input::get('name1'));

	// conditional that checks to see if a key exists
	// if (Input::has('name1')) {
	// 	dd('yes it exists');
	// } else {
	// 	dd('no it does not');
	// }

	// checks for key and returns value, returns default is no value is set
	// $name = Input::get('name', 'Bob');
	// echo $name;
});









