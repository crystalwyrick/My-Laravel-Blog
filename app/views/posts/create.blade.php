@extends('layouts.master')

@section('content')

	{{ Form::open(array('action' => 'PostsController@store')) }}

		<div class="form-group {{ ($errors->has('title')) ? 'has-error' : ''}}">
			{{ $errors->first('title', '<span class="help-block">:message</span>') }}
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your blog title']) }}
		</div>

		<div class="form-group {{ ($errors->has('subtitle')) ? 'has-error' : ''}}">
			{{ $errors->first('subtitle', '<span class="help-block">:message</span>') }}
			{{ Form::label('subtitle', 'Subtitle') }}
			{{ Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Enter your subtitle']) }}
		</div>
		<div class="form-group  {{ ($errors->has('content')) ? 'has-error' : ''}}">
			{{ $errors->first('content', '<span class="help-block">:message</span>') }}
			{{ Form::label('content', 'Content') }}
			{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
		</div>
  		<button type="submit" class="btn btn-default">Submit</button>
	{{ Form::close() }}

@stop