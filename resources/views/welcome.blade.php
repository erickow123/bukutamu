@extends('master')
 
 
@section('konten')
 <!DOCTYPE html>


<html>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/datamu">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<marquee> <font size="3"><?php echo "Selamat Datang Di Padang Command Center, Mohon Mengisi Buku Tamu Digital Kami, Terimakasih, ";?></font></marquee>
<?php $tgl=date('d-m-Y');?>
	<header><h2><center> Buku Tamu Padang Command Center</h2></center></header> 
	<center><?php echo $tgl; ?></center>
	
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mt-2">
                    <div class="card-body">
							
                            <form action="tamu/store" method="post">
                                 {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" required="required" >
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Utusan/Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="jml">Jumlah Rombongan</label>
                                    <input class="form-control" type="number" name="jumlah_rombongan" required="required">
                                </div>
								<div class="form-group">
                                    <label for="umur">No HP</label>
                                    <input class="form-control" type="number" name="no_hp" required="required">
                                </div>
								<div class="form-group">
                                    <label for="alamat">Tujuan Berkunjung</label>
                                    <textarea class="form-control" name="tujuan" required="required"> </textarea>
                                </div>								
								
								Penilaian terhadap PCC	
								<div class="card">
									<div class="card-body">
									@foreach($nilai as $n)									
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="nilai[{{$n->id_nilai}}]" value="{{$n->id_nilai}}" id="Check{{$n->id_nilai}}" >
											<label class="custom-control-label" for="Check{{$n->id_nilai}}">{{ $n->nilai}}</label>
										</div>										
									@endforeach									
									</div>
								</div>							     
									   
								<div class="form-group">
                                    <label for="alamat">Saran/Komentar</label>
                                    <textarea class="form-control" name="saran" required="required"> </textarea>
                                </div>
								
                                <div class="form-group">
                                    <input class="btn btn-primary" name="simpan" type="submit" value="Simpan">
                                </div>
                            </form>	
					</div>
                </div>
            </div>
        </div>
    </div>
 </body>
</html>
 
@endsection