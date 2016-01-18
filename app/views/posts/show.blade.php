@extends('layouts.master')

@section('content')

<div class="box">
	<h1>{{$post->title}}</h1>
	<h3>{{$post->subtitle}}</h3>
	<p>{{$post->content}}</p>
	<p>Created: {{{$post->created_at->diffForHumans() }}}</p>
	<button type="submit" class="btn btn-default">	
		<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit this post</a>
	</button>
	<button type="submit" class="btn btn-default">
		<a href="{{ URL::to( 'users/' . $previous ) }}">Previous</a>
	</button>
	<button type="submit" class="btn btn-default">
		<a href="{{ URL::to( 'users/' . $next ) }}">Next</a>
	</button>
</div>

@stop