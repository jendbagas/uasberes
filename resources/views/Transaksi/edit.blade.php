@extends('layout')
@section('title','Data Transaksi')
@section('content')

<div class="container">
    <div class="row">
      	<div class="col-md-4 col-md-offset-4">
        	<div class="panel panel-default">
          		<div class="panel-heading">Edit Transaksi</div>
          		<div class="panel-body">
		            <form action="" method="post">
		              	{{ csrf_field() }}
		
		              	<div class="form-group">
							<label>ID Anggota</label>
							<input type="text" class="form-control" name="id_anggota" placeholder="ex: id anggota" value="{{$transaksi->id_anggota}}">    	
		              	</div>
		          
		          		<div class="form-group">
							<label>Kode Buku</label>
							<input type="text" class="form-control" name="kode_buku" value="{{$transaksi->kode_buku}}">    	
		              	</div>

			          <div class="form-group">
								<label>Tanggal Pinjam</label>
								<input type="text" class="form-control" name="tgl_pinjam" value="{{$transaksi->tgl_pinjam}}">    	
			              	</div>

			          <div class="form-group">
								<label>Tanggal Kembali</label>
								<input type="text" class="form-control" name="tgl_kembali" value="{{$transaksi->tgl_kembali}}">  	
			              	</div>
		          
		              	<div class="form-group">
		              		<button type="submit" name="submit" class="btn btn-primary">Save</button>
		              	</div>
		            </form>
	            </div>
           	</div>
     	</div>
    </div>
</div>

@endsection