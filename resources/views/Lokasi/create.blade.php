@extends('layout')
@section('title','Data Lokasi')
@section('content')

<div class="container">
    <div class="row">
      	<div class="col-md-4 col-md-offset-4">
        	<div class="panel panel-default">
          		<div class="panel-heading">Tambah Lokasi</div>
          		<div class="panel-body">
		            <form action="{{ url('/lokasi/create') }}" method="post">
		              	{{ csrf_field() }}
		
		              	<div class="form-group">
							<label>Lokasi</label>
							<input type="text" class="form-control" name="nama_lokasi" placeholder="ex: Rak 1">    	
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