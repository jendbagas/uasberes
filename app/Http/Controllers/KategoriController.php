<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use DB;

class KategoriController extends Controller
{
    public function index(){
        $kategori = kategori::All();
        // return $jurusan;
        $data = array(
            'kategori'     => $kategori
        );
        return view('kategori.index',$data);
    }
    function create()
    {
    	return view('kategori.create');
    }

    function store(Request $request)
    {
    	$validatedData =$request->validate([
    		// 'id' => 'required',
    		'nama_kategori' => 'required'
    	]);

    	$kategori = new kategori();
    	// $jurusan->id=$request->id;
    	$kategori->nama_kategori=$request->nama_kategori;
    	$kategori->save();
    	return redirect('kategori');
    }

    public function edit(kategori $kategori){
        $data = array(
            'kategori'   => $kategori
        );
        return view('kategori.edit',$data);
    }
    public function update(kategori $kategori)
    {   
        $kategori->update([
            // 'id'            => request('id'),
            'nama_kategori'  => request('nama_kategori')
        ]);
        return redirect('/kategori');
    }
    public function destroy(kategori $kategori){
        $kategori->delete();
        return redirect()->route('kategori.index');
    }
}