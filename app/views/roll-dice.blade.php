@extends('layouts.master')

@section('content')
    <h1>{{{ $randnum }}}</h1>

    @if ($guess==$randnum)
    	<h1>Good guess!</h1>
    @elseif ($guess<$randnum)
    	<h1>Your guess is too low!</h1>
    @elseif ($guess>$randnum)
    	<h1>Your guess is too high!</h1>
    @endif
@stop
