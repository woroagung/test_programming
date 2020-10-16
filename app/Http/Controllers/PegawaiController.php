<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
	public function index(){
		$data['pegawai'] = Pegawai::data();
		return view('pegawai', $data);
	}   

	public function add_data(Request $request){
		if ($request->nama_lengkap) {
			if (Pegawai::add_data($request)) {
				return redirect()->route('PegawaiController');
			}
		}
		
		return view('addPegawai');
	}

	public function edit_data(Request $request){
		$data['pegawai'] = Pegawai::data_one($request->id);
		return view('editPegawai', $data);
	}

	public function edit_data_process(Request $request){
		Pegawai::edit_data($request);
		return redirect()->route('PegawaiController');
	}

	public function delete_data_process(Request $request){
		Pegawai::delete_data($request);
		return redirect()->route('PegawaiController');
	}
}
