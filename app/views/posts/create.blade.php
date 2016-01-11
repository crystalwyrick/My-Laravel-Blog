@extends('layouts.master')

@section('content')
<form role="form" method="POST" action="{{{ action('PostsController@store') }}}">
	<div class="form-group">
	  <label for="usr">Title:</label>
	  <input type="text" name="title" class="form-control" id="usr" value="{{{ Input::old('title') }}}">
	</div>
	<div class="form-group">
	  <label for="usr">Subtitle:</label>
	  <input type="text" name="subtitle" class="form-control" id="usr" value="{{{ Input::old('subtitle') }}}">
	</div>
	<div class="form-group">
	  <label for="comment">Body:</label>
	  <textarea class="form-control" name="content" rows="10" id="comment">{{{ Input::old('content') }}}</textarea>
	</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

@stop