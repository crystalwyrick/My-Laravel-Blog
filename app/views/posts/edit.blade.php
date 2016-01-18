@extends('layouts.master')

@section('content')


	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
		<div class="form-group {{ ($errors->has('title')) ? 'has-error' : ''}}">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your blog title']) }}
		</div>

		<div class="form-group {{ ($errors->has('subtitle')) ? 'has-error' : ''}}">
			{{ Form::label('subtitle', 'Subtitle') }}
			{{ Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Enter your subtitle']) }}
		</div>

		<div class="form-group  {{ ($errors->has('content')) ? 'has-error' : ''}}">
			{{ Form::label('content', 'Content') }}
			{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
		</div>

	  	<button type="submit" class="btn btn-default">Submit Changes</button>
	{{ Form::close() }}

	{{ Form::model($post, array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
		<button class="delete-button btn btn-danger">Delete Post</button>
	{{ Form::close() }}

	
@stop