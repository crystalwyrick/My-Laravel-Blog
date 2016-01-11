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

// different ways to interact with the database:
Route::get('orm-test', function() {
	// for saving (store)
	$post = new Post;	
	$post->date = 'Tomorrow';
	$post->title = 'Next post';
	$post->subtitle = 'This is a subtitle';
	$post->content  = 'It is super easy to create a new post.';
	$post->image = 'This is an image';
	$post->user_id = 1;
	$post->save();


	// for editing/updating (update)- find me the post with an id of 3
	$post = Post::find(3);
	$post->title = 'updated title';
	$post->save();

	// deleting (destroy)
	$post = Post::find(5);
	$post->delete();

	// showing (show)
	$post = Post::find(1);
	echo $post->title;
	echo $post->content;

	// all posts(index)
	$posts = Post::all();
	dd($posts);

});


// this is useful for testing inputs in the URL:
// Route::get('/test', function() {
	
	// checks for all keys, returns all values
	// dd(Input::all());

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
// });









