@extends('master')
 
@section('konten')
<marquee> <font size="3"><?php echo "Selamat Datang di Buku Tamu Digital Padang Command Center";?></font></marquee>
<a href="/datamu"> Kembali ke Daftar Tamu</a>
<h3><center>Penilaian Terhadap PCC</center></h3>


	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Penilaian</th>
			<th>Opsi</th>
		</tr>
		<?php $no = 0;?>
		@foreach($penilaian as $n)
		<?php 
		$no++;
		?>
		<tr>
			<td>{{ $no }}</td>
			<td>{{ $n->nilai }}</td>			
			<td>
				<a href="/nilaiedit/{{ $n->id_nilai }}">Edit</a>
				|
				<a href="/nilaihapus/{{ $n->id_nilai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
                <div class="card-body">
					<form action="/nilai/store" method="post">
						{{ csrf_field() }}	
						<div class="form-group row">
							<label for="nilai" class="col-md-3 col-form-label text-md-right">Tambah Penilaian</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nilai" required="required">                                
							</div>
							<div class="form-group">
								<input class="btn btn-primary" name="simpan" type="submit" value="Tambah">
							</div>
						</div>
					</form>	
				</div>
            
        </div>
    </div>
</div>


@endsection