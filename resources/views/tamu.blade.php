@extends('master')
 
 
@section('konten')
 <!DOCTYPE html>
<html>
<head>
</head>
<body>
<header><h2><center> Buku Tamu Padang Command Center</center></h2></header> 
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
						<br/>	
                            <form action="tamu/store" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" required="required" >
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="umur">Instansi</label>
                                    <input class="form-control" type="text" name="instansi" required="required">
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
		
								
									
									@foreach($nilai as $n)
																	
																			
											<input type="checkbox" class="custom-control-input" name="nilai[]" value="{{$n->id_nilai}}" id="">
											<label>{{ $n->nilai}}</label>										               
										
									@endforeach									
									
								
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