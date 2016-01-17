<?php

class PostsController extends \BaseController {
	public function __construct()
	{
		// avoid overriding the function in your BaseController:
		parent::__construct();

		// $this->beforeFilter('auth', array('only' => array('create', 'store',)));
		// OR:
		$this->beforeFilter('auth', array('except' => array('index', 'show',)));
		// better because the list is shorter
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('user');

		if (Input::has('search')) {
			$search = Input::get('search');
			$query->where('title', 'like', "%{search}")->orWhere('content', 'like', "%{search}%");
		}

		$query->orderBy('created_at', 'desc');
		// gives us back a collection - eloquent collection
		// $posts = Post::all();

		// gives us a a pagination collection:
		// $posts = Post::paginate(4);

		// gives us back a builder collection:
		$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(4);

		return View::make('posts.index')->with('posts', $posts);

		// ****add search box****

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post) {
			App::abort(404);
		}
		return View::make('posts.show')->with('post', $post);
	} 


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    	$post = new Post();
    	$post->user_id = Auth::id();
    	Log::info('This is useful info', Input::all());
    	return $this->validateAndSave($post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
    	return $this->validateAndSave($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return Redirect::action("PostsController@index");
	}

	protected function validateAndSave($post) 
	{
		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);

    	// attempt validation
    	if ($validator->fails()) {

    		return Redirect::back()->withInput()->withErrors($validator);
       		// validation failed, redirect to the post create page with validation errors and old inputs
    	} else {
        // validation succeeded, create and save the post
    	}

		$post->title = Input::get('title');
		$post->subtitle = Input::get('subtitle');
		$post->content = Input::get('content');
		$post->image = 'image';
		// set up user email? 
		$result = $post->save();

		if($result) {
			return Redirect::action('PostsController@show', $post->id);
		} else {
			return Redirect::back()->withInput();

		}
	}

	
}
