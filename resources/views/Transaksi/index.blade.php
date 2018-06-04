@extends('layout')
@section('content')
<div class="col-xs-12">
<div class="box">
  <div class="box-header">
        <a href="{{ url('/transaksi/create') }}" class="btn btn-primary btn-sm">Tambah Transaksi <i class="fa fa-plus"></i></a>
  </div>
  <div class="box-body table-responsive no-padding">
    <div class="container">    
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID Anggota</th>
              <th>Kode Buku</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
            </tr>
          </thead>
          <tbody>
          	<?php foreach($transaksi as $t):?>
            <tr>
            	<td><?=$t->id_anggota?></td>
              <td><?=$t->kode_buku?></td>
              <td><?=$t->tgl_pinjam?></td>
              <td><?=$t->tgl_kembali?></td>

              <td>
	                <a href="{{ route('transaksi.edit', $t->id) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
	                <form action="{{ route('transaksi.destroy',$t->id) }}" method="post">
	                  {{ csrf_field() }}
	                  <input type="hidden" name="_method" value="DELETE">
	                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
	                </form>
                  <a href="{{ route('transaksi.kembali', $t->id) }}" class="btn btn-info btn-sm" style="float:left;">Kembalikan</a>
	            </td>
             </tr>
        	  <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection()