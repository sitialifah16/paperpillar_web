<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informasi;

class IdentitasController extends Controller
{
    public function daftar()
    {
    	return view('pages.daftar');
	}
	

	
	
	

    public function daftarMhs (Request $request){
    	$mhs = new Informasi;

    	$mhs->nim = $request->nim;
    	$mhs->jurusan = $request->jurusan;
    	$mhs->fakultas = $request->fakultas;
    	$mhs->save();

    	return redirect('/daftar');
	}
	
	public function tampilMhs()
	{
		$informasi = informasi::all();

		return view('pages.tampil', ['informasi' => $informasi]);
	}
}
