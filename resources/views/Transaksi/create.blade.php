@extends('layout')
@section('title','Data Transaksi')
@section('content')

<div class="container">
    <div class="row">
      	<div class="col-md-4 col-md-offset-4">
        	<div class="panel panel-default">
          		<div class="panel-heading">Tambah Transaksi</div>
          		<div class="panel-body">
		            <form action="{{ url('/transaksi/create') }}" method="post">
		              	{{ csrf_field() }}
		
		              	<div class="form-group">
							<label>ID Anggota</label>
							<input type="text" class="form-control" name="id_anggota" placeholder="ex: id anggota">    	
		              	</div>
		          
		          		<div class="form-group">
							<label>Kode Buku</label>
							<input type="text" class="form-control" name="kode_buku" placeholder="ex: A01">    	
		              	</div>

			          <div class="form-group">
								<label>Tanggal Pinjam</label>
								<input type="date" class="form-control" name="tgl_pinjam" value="{{date('Y-m-d')}}">    	
			              	</div>

			          <div class="form-group">
								<label>Tanggal Kembali</label>
								<input type="date" class="form-control" name="tgl_kembali" value="{{date('Y-m-d',strtotime('+5days'))}}">    	
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