<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function sayHowdy($name = '')
	{
		if($name == '') {
			return "Hello, web surfer!";
		}
		return "Howdy, $name!";
	}
	
	public function resume()
	{
		return View::make('resume');
	}
	
	public function portfolio()
	{
		return View::make('portfolio');
	}
	public function home()
	{
		return View::make('home');
	}
	
	public function sayHello($name)
	{
		return View::make('my-first-view');
	}
	
	public function rollDice($guess = null)
	{
		$randnum = mt_rand(1,6);
		$data = array('guess' => $guess, 'randnum' => $randnum);
		return View::make('roll-dice')->with($data);
	}

	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin()
	{
		$email 		= Input::get('email');
		$password 	= Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		return Redirect::intended('/');
		} else {
    		// login failed, go back to the login screen
    		Session::flash('errorMessage', 'Login Failed!');
    		return Redirect::back()->withInput();
}
	}
	public function getLogout()
	{
		Auth::logout();
		return Redirect::action('HomeController@showWelcome');
	}





}
