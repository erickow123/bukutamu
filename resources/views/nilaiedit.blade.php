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
					<img width="100%"  src="{{ ('/img/pcc.jpg') }}" >
				</div>
			</center>
			 
			</header> 
			
	<marquee> <font size="3"><?php echo "Selamat Datang di Buku Tamu Digital Padang Command Center";?></font></marquee>
	<a href="/nilai"> Kembali</a>	
	<br/>
	<center>
<h3>Edit Penilaian</h3>
	
	
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
                <div class="card-body">
				@foreach($penilaian as $p)
					<form action="/nilai/update" method="post">
						{{ csrf_field() }}	
						<div class="form-group row">
						<input type="hidden" name="id" value="{{ $p->id_nilai }}"> <br/>
							<label for="nilai" class="col-md-3 col-form-label text-md-right">Penilaian</label>
							<div class="col-md-7">
								<input type="text" class="form-control" required="required" name="nilai" value="{{ $p->nilai }}">   							
							</div>
							<div class="form-group">
								<input class="btn btn-primary" name="simpan" type="submit" value="Simpan">
							</div>
						</div>
					</form>	
				@endforeach
				</div>
            
        </div>
    </div>
</div>
	
	
	</center>
	<hr/>
	<center> <footer>
		<p>&copy; Diskominfo Kota Padang - Padang Command Center 2019</p>
	</footer> </center>
	
			</div>
		</div>
	</div>
</body>
</html>