@extends('layouts.master')

@section('content')


<h1>{{$post->title}}</h1>
<h3>{{$post->subtitle}}</h3>
<p>{{$post->content}}</p>


@stop