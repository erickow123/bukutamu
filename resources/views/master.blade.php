<!DOCTYPE html>
<html>

<head>
	<title>Padang Command Center</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>

<body>
	
	<div class="container">
		<div class="card">
			<div class="card-body">
			<center> <header>
					
				<div>
					<img width="100%"  src="{{ ('img/pcc.jpg') }}" >
				</div>
			</center>
			 
			</header> 
			
	
 
	<!-- bagian judul halaman blog -->
	<center> <h3> @yield('judul_halaman') </h3> </center>
	<!-- bagian konten blog -->
	@yield('konten')
	<hr/>

	
	
	
	<center> <footer>
		<p> &copy; Diskominfo Kota Padang - Padang Command Center 2019</p>
	</footer> </center>
	
			</div>
		</div>
	</div>
</body>
</html>