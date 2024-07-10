<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PDF;

class TamuuController extends Controller
{
	
	public function store(Request $request)
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
	}	
}