@extends('layouts.master')

@section('content')


<div class="box">

	@foreach($posts as $post)
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
        	<a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}: {{{ $post->sub_title }}}</a>
        	<a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->sub_title }}}</a>
        </h2>
        <hr>
    </div>
	{{-- <h3>{{$post->sub_title}}</h3> --}}
	{{-- <p>{{$post->content}}</p> --}}
   {{--  <div class="col-lg-12 text-center">
        <a href="#" class="btn btn-default btn-lg">Read More</a>               
    </div> --}}
	@endforeach

              
   {{--  <div class="col-lg-12 text-center">
		<ul class="pager">
			<li class="previous"><a href="#">← Older</a>
			</li>
			<li class="next"><a href="#">Newer →</a>
			</li>
		</ul>
	</div> --}}
</div>
	{{ $posts->links() }}


@stop