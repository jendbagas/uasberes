<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use DB;


class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('transaksis')->where('tgl_dikembalikan','=', null)->get();
        // return $jurusan;
        $data = array(
            'transaksi'     => $transaksi
        );
        return view('transaksi.index',$data);
    }
    function create()
    {
    	return view('transaksi.create');
    }

    function store(Request $request)
    {
    	$validatedData =$request->validate([
    		// 'id' => 'required',
    		'id_anggota' => 'required',
    		'kode_buku'  => 'required',
    		'tgl_pinjam' => 'required',
    		'tgl_kembali' => 'required'
    	]);

    	$transaksi = new transaksi();
    	$transaksi->id_anggota=$request->id_anggota;
    	$transaksi->kode_buku=$request->kode_buku;
    	$transaksi->tgl_pinjam=$request->tgl_pinjam;
    	$transaksi->tgl_kembali=$request->tgl_kembali;
    	$transaksi->save();
    	return redirect('transaksi');
    }

    public function edit(transaksi $transaksi){
        $data = array(
            'transaksi'   => $transaksi
        );
        return view('transaksi.edit',$data);
    }
    public function update(transaksi $transaksi)
    {   
        $transaksi->update([
        $transaksi->id_anggota=$request->id_anggota,
    	$transaksi->kode_buku=$request->kode_buku,
    	$transaksi->tgl_pinjam=$request->tgl_pinjam,
    	$transaksi->tgl_kembali=$request->tgl_kembali
        ]);
        return redirect('/transaksi');
    }
    public function destroy(transaksi $transaksi){
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }

    public function kembali( $transaksi)
    {
    	$fromDB = Transaksi::where('id',$transaksi)->first();
    	$dataTrans = $fromDB->tgl_kembali;
    	$tgl_dikembalikan = date('Y-m-d');
    	$denda=1000;

    	$tglAwal=$dataTrans;
    	$tglAkhir=$tgl_dikembalikan;
    	// memecah string tanggal awal untuk mendapatkan
    	// $pecah1 = explode("-", strtotime($tglAwal));
    	$date1 = date('d', strtotime($tglAwal));
    	$month1 = date('m', strtotime($tglAwal));
    	$year1 = date('Y', strtotime($tglAwal));

    	// memecah string tanggal awal untuk mendapatkan
    	// $pecah2 = explode("-", strtotime($tglAkhir));
    	$date2 = date('d', strtotime($tglAkhir));
    	$month2 = date('m', strtotime($tglAkhir));
    	$year2 = date('Y', strtotime($tglAkhir));

    	// mencari selisih hari dari tanggal awal dan akhir
    	$jd1 = GregorianToJD($month1, $date1, $year1);
    	$jd2 = GregorianToJD($month2, $date2, $year2);

    	$selisih = $jd2 - $jd1;
    	$denda*=$selisih;
	    	if ($denda<=0)
	    	{
	    		$denda = "0";
	    	}
	    	else
	    	{
	    		$denda;
	    	}

	 	$data = array
	 	(
	 		"id" => $fromDB->id,
	 		"tgl_dikembalikan" => $tgl_dikembalikan,
	 		"Denda"	=> $denda
	 	);
	 	$user = Transaksi::find($fromDB->id);
	 	$user ->tgl_dikembalikan = $tgl_dikembalikan;
	 	$user ->denda = $denda;
	 	$user ->save();
	 	return redirect('/pengembalian');   	
    }

    public function pengembalian(transaksi $transaksi)
    {
    	$transaksi = DB::table('transaksis')->where('tgl_dikembalikan','<>', null)->get();
        // return $jurusan;
        $data = array(
            'transaksi'=> $transaksi
        );
    	return view('transaksi.pengembalian',$data);
    }
}
