<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
     {
     	$data_mahasiswa=\App\mahasiswa::all();
     	return view('mahasiswa.index',['data_mahasiswa'=>$data_mahasiswa]); 
     } 
     public function create(Request $Request)
     {
     	$mahasiswa = new Mahasiswa();
     	$mahasiswa->nama = $Request->input('nama');
     	$mahasiswa->alamat = $Request->input('alamat');
     	$mahasiswa->nim = $Request->input('nim');
     	$mahasiswa->save();
     	return redirect()->route('mahasiswa.index');
     	// dd($Request->all());
     	//$mahasiswa = Mahasiswa::create ($Request->all());
     	//dd($mahasiwa);
     	
     }
}
