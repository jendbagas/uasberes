@extends('layout')
@section('content')
<div class="col-xs-12">
<div class="box">
  <div class="box-header">
        <a href="{{ url('/buku/create') }}" class="btn btn-primary btn-sm">Tambah Buku <i class="fa fa-plus"></i></a>
  </div>
  <div class="box-body table-responsive no-padding">
    <div class="container">    
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Buku</th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Lokasi</th>
              <th>Stok</th>
            </tr>
          </thead>
          <tbody>
          	<?php foreach($buku as $b):?>
            <tr>
            	<td><?=$no++?></td>
            	<td><?=$b->kode_buku?></td>
            	<td>
                  <?=$b->judul_buku?>
                  <br>
                  <span style="font-size:10px;font-style:italic;color:grey">
                    Pengarang: <?=$b->pengarang?>; Tahun Terbit: <?=$b->tahun_terbit?>
              </td>
              <td><?=$b->nama_kategori?></td>
              <td><?=$b->nama_lokasi?></td>
              <td><?=$b->stok?></td>
              <td>
	                <a href="{{ route('buku.edit', $b->id) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
	                <form action="{{ route('buku.destroy',$b->id) }}" method="post">
	                  {{ csrf_field() }}
	                  <input type="hidden" name="_method" value="DELETE">
	                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
	                </form>
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