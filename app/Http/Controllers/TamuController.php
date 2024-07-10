<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PDF;

class TamuController extends Controller
{
	
	/*public function store(Request $request)
	{
		$nilai = $request->get('nilai');
		if ($nilai == 0)
		{ $ni = 0;}
		else
		{
		$ni = implode(";",$nilai);
		}		
		
		$tgl=date('Y-m-d');
		DB::table('tamu')->insert([
		'nama_tamu' => $request->nama,
		'jabatan' => $request->jabatan,
		'jumlah_rombongan' => $request->jumlah_rombongan,
		'no_hp' => $request->no_hp,
		'tujuan' => $request->tujuan,
		'saran' => $request->saran,
		'tanggal' => $tgl,
		'id_nilai' => $ni,
		]);
		
		return redirect('/');		
	}	*/
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
    public function index()
	{
		$nilai = DB::table('penilaian')->get();
		return view('tamu',['nilai' => $nilai]);
	}
	
	public function home()
	{
		return view('home');
	}
	
	public function nilai()
	{
		$nilai = DB::table('penilaian')->get();
    	return view('nilai',['penilaian' => $nilai]);		
	}
	
	public function nilaitambah()
	{
		return view('nilaitambah');		
	}
		
	public function nilaistore(Request $request)
	{
		DB::table('penilaian')->insert([
		'nilai' => $request->nilai		
		]);
	
		return redirect('/nilai');		
	}
	
	public function nilaiedit($id)
	{		
		$nilai = DB::table('penilaian')->where('id_nilai',$id)->get();
		
		return view('nilaiedit',['penilaian' => $nilai]);
	}
	
	public function nilaiupdate(Request $request)
	{		
		DB::table('penilaian')->where('id_nilai',$request->id)->update([
		'nilai' => $request->nilai
		]);
		return redirect('/nilai');
	}
	
	public function nilaihapus($id)
	{
	DB::table('penilaian')->where('id_nilai',$id)->delete();
	return redirect('/nilai');
	}
	
	
	public function datamu()
	{
		$tamu = DB::table('tamu')->orderbydesc('tanggal')->paginate(5);
		return view('datamu',['tamu' => $tamu]);
	}
	
	public function hapus($id)
	{
	DB::table('tamu')->where('id_tamu',$id)->delete();
		
	return redirect('/datamu');
	}
	
	public function cari(Request $request)
	{
		$cari =$request->cari;
		$tamu = DB::table('tamu')->where('tanggal','like',"%".$cari."%")->orderbydesc('tanggal')->paginate(5);
		return view('datamu',['tamu' => $tamu]);
	}
	
	public function cetak_pdf()
    {
    	$tamu = DB::table('tamu')->orderbydesc('tanggal')->get();
    	$pdf = PDF::loadview('tamu_pdf',['tamu'=>$tamu]);
		
		return $pdf->stream();
		
    }

}

?>