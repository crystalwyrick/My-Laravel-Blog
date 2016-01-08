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

Route::get('/test' function) {
	// dd(Input::all());
	// dd(Input::('today'));
	if (Input::has('name')) {
		dd('yes it exists');
	} else {
		dd('no it does not');
	}
	}
});







