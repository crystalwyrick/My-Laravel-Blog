@extends('layouts.master')

@section('content')

@foreach($posts as $post)
<h1><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h1>
<h3>{{$post->subtitle}}</h3>
<p>{{$post->content}}</p>

@endforeach

@stop