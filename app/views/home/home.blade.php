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
<div class="jumbotron">
	@if(Session::has('pesan'))
	<div class="alert alert-success">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	{{ Session::get('pesan') }}
	</div>  
	@endif
	
	<div class="container">
	<h1>Kumpulan Materi Kuliah</h1><br /><br />
	<h2>Mendaftarlah,</h2>
	<h2>Dapatkan Materi Kuliah Yang Anda Butuhkan</h2><br /><br />
		<div class="btn-group btn-group-justified">
			<div class="btn-group">
				{{HTML::link('reg','Daftar',array('class'=>'btn btn-daftar'))}}
			</div>
			<div class="btn-group">
				{{HTML::link('login','Masuk',array('class'=>'btn btn-masuk'))}}
			</div>
		</div><br /><br /><br /><br /><br /><br />
	<legend><h5><a href="#">Tentang</a>&nbsp&nbsp&nbsp<a href="#">Ketentuan Pengguna</a>&nbsp&nbsp&nbsp<a href="">Media sosial</a></h5></legend>
	<div class="foot">
		<h5>Copyright Andre Oktari</h5>
	</div>
	</div>
</div>
</body>
</html>