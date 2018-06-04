<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokasi;
use DB;

class LokasiController extends Controller
{
    public function index(){
        $lokasi = lokasi::All();
        // return $jurusan;
        $data = array(
            'lokasi'     => $lokasi
        );
        return view('lokasi.index',$data);
    }
    function create()
    {
    	return view('lokasi.create');
    }

    function store(Request $request)
    {
    	$validatedData =$request->validate([
    		// 'id' => 'required',
    		'nama_lokasi' => 'required'
    	]);

    	$lokasi = new lokasi();
    	// $jurusan->id=$request->id;
    	$lokasi->nama_lokasi=$request->nama_lokasi;
    	$lokasi->save();
    	return redirect('lokasi');
    }

    public function edit(lokasi $lokasi){
        $data = array(
            'lokasi'   => $lokasi
        );
        return view('lokasi.edit',$data);
    }
    public function update(lokasi $lokasi)
    {   
        $lokasi->update([
            // 'id'            => request('id'),
            'nama_lokasi'  => request('nama_lokasi')
        ]);
        return redirect('/lokasi');
    }
    public function destroy(lokasi $lokasi){
        $lokasi->delete();
        return redirect()->route('lokasi.index');
    }
}
