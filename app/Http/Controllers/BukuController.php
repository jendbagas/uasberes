<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Lokasi;
use App\Kategori;
use DB;

class BukuController extends Controller
{
	public function index()
	{
        $buku = DB::table('bukus')
        		->leftjoin('kategoris','bukus.id_kategori','=','kategoris.id')
        		->leftjoin('lokasis','bukus.id_lokasi','=','lokasis.id')
        		->select('bukus.*','kategoris.nama_kategori','lokasis.nama_lokasi')
        		->get();
        		
        $data = array(
            'buku'     => $buku,
            'no'       => 1
        );
    return view('buku.index',$data);
	}

    public function create()
    {
    	$kategori = Kategori::All();
    	$lokasi = Lokasi::All();
        $data = array(

        	'kategori'		=> $kategori,
        	'lokasi'		=> $lokasi
        	
        );
        return view('Buku.create',$data);
    }

    public function store()
    {
		Buku::create
				([
		            'kode_buku'     => request('kode_buku'),
		            'judul_buku'    => request('judul_buku'),
		            'pengarang'  	=> request('nama_pengarang'),
		            'tahun_terbit'	=> request('tahun_terbit'),
		            'id_kategori'   => request('id_kategori'),
		            'id_lokasi'    	=> request('id_lokasi'),
		            'stok'  		=> request('stok')
		        ]);
		        return redirect('/buku');
    }

     public function edit(buku $buku)
     {
      // $post = Post::find($id);
        $kategori = Kategori::All();
    	$lokasi = Lokasi::All();
    	// echo($buku);die();
    	// $bukus = Buku::find( $buku);
        $data = array(

        	'kategori'		=> $kategori,
        	'lokasi'		=> $lokasi,
        	'buku'			=> $buku
        	
        );
        return view('Buku.edit',$data);
    }

    public function update(buku $buku)
    {   
        $buku->update([
            'kode_buku'     => request('kode_buku'),
            'judul_buku'    => request('judul_buku'),
            'pengarang'  	=> request('nama_pengarang'),
            'tahun_terbit'	=> request('tahun_terbit'),
            'id_kategori'   => request('id_kategori'),
            'id_lokasi'    	=> request('id_lokasi'),
            'stok'  		=> request('stok')
        ]);
        return redirect('/buku');
    }

    public function destroy(buku $buku){
        $buku->delete();
        return redirect()->route('buku.index');
    }
}
