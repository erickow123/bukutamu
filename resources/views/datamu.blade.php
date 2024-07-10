@extends('master')
 
@section('konten')

<style type="text/css">
	.pagination li
	{
		float: left;
		list-style-type: none;
		margin:5px;
	}
</style>


<style media="screen">
  .button{
    width: 100%;
    height: 50px;
  }
  .left{
    float: left;
    display: block;
  }
  .right{
    float: right;
    display: block;
  }
  .tengah{
	float: center;
	display: block;
  }
.button ul a{
  padding: 8px;
  border-radius: 5px;
  background: rgb(240, 128, 128);
  color: white;
}
</style>

<?php 
	$tgl=date('d-m-Y');	
?>
<marquee> <font size="3"><?php echo "Selamat Datang di Buku Tamu Digital Padang Command Center";?></font></marquee>
	
<div class="button">
<ul class="right">
<a href="{{ route('logout') }}" 
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>
</ul>

<ul class="tengah">
<header><center><h2>Buku Tamu Padang Command Center</h2></center></header>
</ul>

</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
</form> 	
	
<form action="/cari" method="GET" class="form-inline">
Cari Tamu :
	<input class="form-control" type="date" name="cari" value="{{old('cari')}}"> 
	<input class="btn btn-primary ml-3" type="submit" value="Cari">
</form>


<br/>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Utusan/Jabatan</th>
			<th>Jumlah Rombongan</th>
			<th>No Hp</th>
			<th>Tujuan Berkunjung</th>
			<th><a href="/nilai">Penilaian</a></th>
			<th>Saran</th>
			<th>Opsi</th>
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
			<td><a href="/tamu/hapus/{{ $t->id_tamu}}">Hapus</a></td>
		</tr>	
		@endforeach
	</table>
	Halaman : {{ $tamu->currentPage() }} <br/>
	Jumlah Data : {{ $tamu->total() }} <br/> 
	{{ $tamu->links() }}
	
	<a href="/datamu">Tampilkan Semua Data Tamu </a>
	</br>
	<a href="/datamu/cetak_pdf" target="_blank">Cetak PDF</a>
	
@endsection