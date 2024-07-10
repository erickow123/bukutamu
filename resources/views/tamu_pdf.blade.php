<!DOCTYPE html>
<html>
<head>
	<title>Daftar Tamu PCC</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Daftar Tamu Padang Command Center</h4>
	</center>
 
	<table class="table table-bordered" border=1 >
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Utusan/Jabatan</th>
			<th>Jumlah Rombongan</th>
			<th>No Hp</th>
			<th>Tujuan Berkunjung</th>
			<th>Penilaian</th>
			<th>Saran</th>
			
		</tr>
		<?php $no = 0;?>
		@foreach($tamu as $t)
		<?php 
		$no++;
		$nilai = DB::table('penilaian')->get();
		$n = explode(";",$t->id_nilai);
		?>
		<tr>
			<td>{{ $no }}</td>
			<td>{{ $t->tanggal }}</td>
			<td>{{ $t->nama_tamu }} </td>
			<td>{{ $t->jabatan }}</td>
			<td>{{ $t->jumlah_rombongan }}</td>
			<td>{{ $t->no_hp }}</td>
			<td>{{ $t->tujuan }}</td>
			<td>  
				@foreach($nilai as $n1)
						@if(in_array($n1->id_nilai, $n))
							 <label>- {{ $n1->nilai}}</label></br> 
						@endif 
				@endforeach
			</td>
			<td>{{ $t->saran }}</td>
			
		</tr>	
		@endforeach
	</table>
	
