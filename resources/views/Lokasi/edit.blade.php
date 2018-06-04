@extends('layout')
@section('title','Data Lokasi')
@section('content')

<div class="container">
    <div class="row">
      	<div class="col-md-4 col-md-offset-4">
        	<div class="panel panel-default">
          		<div class="panel-heading">Edit Lokasi</div>
          		<div class="panel-body">
		            <form action="" method="post">
		              	{{ csrf_field() }}
		
		              	<div class="form-group">
							<label>Nama Lokasi</label>
							<input type="text" class="form-control" name="nama_lokasi" value="{{$lokasi->nama_lokasi}}">    	
		              	</div>
		          
		              	<div class="form-group">
		              		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		              	</div>
		            </form>
	            </div>
           	</div>
     	</div>
    </div>
</div>

@endsection