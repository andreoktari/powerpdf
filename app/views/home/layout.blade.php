<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang !</title>
	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-theme.css') }}
    {{ HTML::style('css/style.css') }}
</head>
<body>
<div class="navbar navbar-atas">
	<div class="container">
		<div class="navbar-right">
			@if(Auth::check())
			<div class="tombol-keluar">
				<i>{{ucwords(Auth::user()->nama)}}</i>&nbsp
				<a href="logout" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span></a>
			</div>
			@else
			<div class="navbar-brand">
				{{HTML::link('home','Home')}}
			</div>
			{{HTML::link('reg','Daftar',array('class'=>'btn btn-daftar'))}}
			{{HTML::link('login','Masuk',array('class'=>'btn btn-masuk'))}}		
			@endif
		</div>
	</div>
</div>
<div class="col-md-4"></div>
	<div class="col-md-4">
	@yield('konten')
	</div>
<div class="col-md-4"></div>

</body>
</html>