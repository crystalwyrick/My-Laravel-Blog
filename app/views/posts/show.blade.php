@extends('layouts.master')

@section('content')

<h1>{{$post->title}}</h1>
<h3>{{$post->subtitle}}</h3>
<p>{{$post->content}}</p>

<p>Created: {{{$post->created_at->format('l, F jS Y @ h:i:s A')}}}</p>

<p>Created: {{{$post->created_at->diffForHumans() }}}</p>

@stop