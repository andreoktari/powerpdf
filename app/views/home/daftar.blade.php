@extends('home.layout')

@section('konten')
<div class="jumbotron">
	<div class="container">
		<legend>Daftar</legend>
		{{Form::open(array('url'=>'register','method'=>'post'))}}
		{{Form::text('nama','',array('class' =>'form-control','placeholder'=>'Nama Anda'))}}<br />
		{{Form::text('username','',array('class' =>'form-control','placeholder'=>'Nama Pengguna Baru'))}}<br />
		{{Form::password('password',array('class' =>'form-control','placeholder'=>'Sandi Baru'))}}<br />
		<i>Dengan mengklik Daftar, Anda setuju dengan <a href="#"><u>Ketentuan</u></a> dan Kebijakan kami.</i><br />
		<div class="btn-group btn-group-justified">
			<div class="btn-group">
				{{Form::submit('Daftar',array('class' =>'btn btn-info'))}}
			</div>
		</div>
		{{Form::close()}}
	</div>
</div>
@stop