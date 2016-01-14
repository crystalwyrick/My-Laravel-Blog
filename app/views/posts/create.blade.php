@extends('layouts.master')

@section('content')

	{{ Form::open(array('action' => 'PostsController@store')) }}

		<div class="form-group {{ ($errors->has('title')) ? 'has-error' : ''}}">
			{{ Form::label('title', 'Title') }}
			{{ $errors->first('title', '<span class="help-block">:message</span>') }}
			{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your blog title']) }}
		</div>

		<div class="form-group {{ ($errors->has('subtitle')) ? 'has-error' : ''}}">
			{{ Form::label('subtitle', 'Subtitle') }}
			{{ $errors->first('subtitle', '<span class="help-block">:message</span>') }}
			{{ Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Enter your subtitle']) }}
		</div>
		<div class="form-group  {{ ($errors->has('content')) ? 'has-error' : ''}}">
			{{ Form::label('content', 'Content') }}
			{{ $errors->first('content', '<span class="help-block">:message</span>') }}
			{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
		</div>
  		<button type="submit" class="btn btn-default">Submit</button>
	{{ Form::close() }}

@stop