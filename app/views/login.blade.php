@extends('layouts.master')

@section('content')

<h1>Login</h1>



{{ Form::open(array('action' => 'HomeController@postLogin')) }}

		<div class="form-group {{ ($errors->has('email')) ? 'has-error' : ''}}">
			{{ Form::label('email', 'Email') }}
			{{ $errors->first('email', '<span class="help-block">:message</span>') }}
			{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email address']) }}
		</div>

		<div class="form-group {{ ($errors->has('password')) ? 'has-error' : ''}}">
			{{ Form::label('password', 'Password') }}
			{{ $errors->first('password', '<span class="help-block">:message</span>') }}
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter your password']) }}
		</div>
	
  		<button type="submit" class="btn btn-default">Submit</button>
	{{ Form::close() }}

@stop