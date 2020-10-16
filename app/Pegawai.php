<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pegawai extends Model
{
	public static function data()
	{
		$data = DB::table('pegawai')->get();
		return $data;
	}

	public static function data_one($id)
	{
		$data = DB::table('pegawai')->where('id', $id)->first();
		return $data;
	}

	public static function add_data($request)
	{
		$data_insert = [
			'nama_lengkap' => $request->nama_lengkap,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'email' => $request->email,
			'phone' => $request->phone,
			'pekerjaan' => $request->pekerjaan,
			'gaji' => $request->gaji
		];

		return DB::table('pegawai')->insert($data_insert);
	}

	public static function edit_data($request)
	{
		$data_update = [
			'nama_lengkap' => $request->nama_lengkap,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'email' => $request->email,
			'phone' => $request->phone,
			'pekerjaan' => $request->pekerjaan,
			'gaji' => $request->gaji
		];

		return DB::table('pegawai')->where('id', $request->id)->update($data_update);
	}

	public static function delete_data($request)
	{
		return DB::table('pegawai')->where('id', $request->id)->delete();
	}
}
