@extends('layout')
@section('content')
<div class="col-xs-12">
<div class="box">
  <div class="box-header">
        <a href="{{ url('/kategori/create') }}" class="btn btn-primary btn-sm">Tambah Kategori <i class="fa fa-plus"></i></a>
  </div>
  <div class="box-body table-responsive no-padding">
    <div class="container">    
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama Kategori</th>
            </tr>
          </thead>
          <tbody>
          	<?php foreach($kategori as $k):?>
            <tr>
            	<td><?=$k->nama_kategori?></td>
              <td>
	                <a href="{{ route('kategori.edit', $k->id) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
	                <form action="{{ route('kategori.destroy',$k->id) }}" method="post">
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