@extends('home.layout')

@section('konten')
<div class="jumbotron">
	<div class="container">
		<legend>Login</legend>
		{{ Form::open(array('url' => 'masuk', 'method' => 'post')) }}
		{{ Form::text('username', '',array('class' => 'form-control', 'placeholder' => 'Username Anda')) }}<br />
		{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Sandi Anda')) }}
		<div class="checkbox">
			<label>
				<input type="checkbox">Ingat Saya
			</label>
		</div><br />
		<div class="btn-group btn-group-justified">
			<div class="btn-group">
				{{ Form::submit('Login', array('class' => 'btn btn-success')) }}
			</div>
		</div>
		{{ Form::close() }}
	</div>
</div>
@stop