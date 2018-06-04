@extends('layout')
@section('content')
<div class="col-xs-12">
<div class="box">
  <div class="box-header">
        <a href="{{ url('/lokasi/create') }}" class="btn btn-primary btn-sm">Tambah Lokasi <i class="fa fa-plus"></i></a>
  </div>
  <div class="box-body table-responsive no-padding">
    <div class="container">    
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama Lokasi</th>
            </tr>
          </thead>
          <tbody>
          	<?php foreach($lokasi as $l):?>
            <tr>
            	<td><?=$l->nama_lokasi?></td>
              <td>
	                <a href="{{ route('lokasi.edit', $l->id) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
	                <form action="{{ route('lokasi.destroy',$l->id) }}" method="post">
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