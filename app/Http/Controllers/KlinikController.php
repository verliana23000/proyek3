<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Apps\Models\KlinikModel;

class KlinikController extends Controller
{
	public function klinik()
	{
		$data = Klinik::all();
		return view('admin_klinik.konten.klinik', compact('data'));
	}
}

public function create( Request $request) {
	$request->validate([
            'nama_klinik'	=> 'required|string|min:3',
            'alamat'		=> 'required',
            'no_hp'			=> 'required',
            'deskripsi'		=> 'required',
            'logo'			=> 'required',

        ],
        [
			'nama_klinik.required'		=> 'Nama Klinik harus diisi',
	        'alamat.required'			=> 'Alamat harus diisi',
	        'no_hp.required'			=> 'No hp harus diisi',
	        'deskripsi.required'		=> 'Deskripsi harus diisi',
	        'logo.required'				=> 'Logo harus diisi',
	        'max'                       => 'panjang karakter maksimal 100',
        ]);

        $data = $request->only('nama_klinik','alamat','no_hp','deskripsi','logo');

        Klinik::create($data);
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

public function show($id){

}

public function update(Request $request, $id){
	$request->validate([
		'nama_klinik'	=> 'required|string|min:3',
        'alamat'		=> 'required',
        'no_hp'			=> 'required',
        'deskripsi'		=> 'required',
        'logo'			=> 'required',		

	],
	[
		'nama_klinik.required'		=> 'Nama Klinik harus diisi',
        'alamat.required'			=> 'Alamat harus diisi',
        'no_hp.required'			=> 'No hp harus diisi',
        'deskripsi.required'		=> 'Deskripsi harus diisi',
        'logo.required'				=> 'Logo harus diisi',
        'max'                       => 'panjang karakter maksimal 100',
        ]);

		$data = $request->only('nama_klinik','alamat','no_hp','deskripsi','logo');

        Klinik::whereIdKlinik($id)->update($data);
        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $data = Klinik::findOrFail($id);
        try {
            $data->delete();
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Gagal Dihapus');
        }
    }
}