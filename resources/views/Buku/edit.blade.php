@extends('layout')
@section('title','Data Buku')
@section('content')

<div class="container">
    <div class="row">
      	<div class="col-md-4 col-md-offset-4">
        	<div class="panel panel-default">
          		<div class="panel-heading">Edit Buku</div>
          		<div class="panel-body">
		            <form action="" method="post">
		              	{{ csrf_field() }}
		
		              	<div class="form-group">
							<label>Kode Buku</label>
							<input type="text" class="form-control" name="kode_buku" placeholder="ex: A01" value="{{$buku->kode_buku}}">    	
		              	</div>

		              	<div class="form-group">
							<label>Judul Buku</label>
							<input type="text" class="form-control" name="judul_buku" placeholder="judul" value="{{$buku->judul_buku}}"> 	
		              	</div>

		              	<div class="form-group">
							<label>Pengarang</label>
							<input type="text" class="form-control" name="nama pengarang" placeholder="judul"value="{{$buku->pengarang}}"> 	
		              	</div>

		              	<div class="form-group">
							<label>Tahun Terbit</label>
							<input type="text" class="form-control" name="tahun_terbit" placeholder="judul"value="{{$buku->tahun_terbit}}"> 	
		              	</div>

		              	<div class="form-group">
		              	<label>Kategori</label>
			              	<select class="form-control" name="id_kategori">
			              		<?php foreach($kategori as $k):?>
			              		<option value="<?=$k->id?>"<?=$k->id_kategori==$buku->id_kategori ? "selected":""?>><?=$k->nama_kategori?></option>
				              	<?php endforeach ?>
			              	</select>
		              	</div>

		              	<div class="form-group">
		              	<label>Lokasi</label>
			              	<select class="form-control" name="id_lokasi">
			              		<?php foreach($lokasi as $l):?>
			              		<option value="<?=$l->id?>"<?=$l->id_lokasi==$buku->id_lokasi ? "selected":""?>><?=$l->nama_lokasi?></option>
				              	<?php endforeach ?>
			              	</select>
		              	</div>

		              	<div class="form-group">
							<label>Stok</label>
							<input type="text" class="form-control" name="stok" placeholder="stok" value="{{$buku->stok}}"> 	
		              	</div>
		          
		              	<div class="form-group">
		              		<button type="submit" name="submit" class="btn btn-primary">Save</button>
		              		<button type="reset" name="reset" class="btn btn-default">Reset</button>
		              	</div>

		            </form>
	            </div>
           	</div>
     	</div>
    </div>
</div>

@endsection