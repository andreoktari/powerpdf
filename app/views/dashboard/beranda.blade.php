@extends('home.layout')

@section('konten')
<div class="well">
	<h2>Welcome! {{ucwords(Auth::user()->nama)}}</h2>
	<h3>Find Out About We !</h3>
</div>
@stop