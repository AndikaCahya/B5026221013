@extends('master')

@section('title','Data Pegawai')

@section('konten')
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Mouse</h3>
 
	<a href="/mouse"><input type="submit" value="Kembali" class="btn btn-primary"></a>
	
	<br/>
	<br/>
 
	@foreach($mouse as $p)
	<form action="/mouse/update" method="post" class="form-horizontal" role="form">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodemouse }}">
		<div class="form-group">
			<label for="merkmouse" class="col-sm-2 control-label">Merk</label>
			<div class="col-sm-4">
				<input type="text" required="required" name="merkmouse" value="{{$p->merkmouse}}" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="stockmouse" class="col-sm-2 control-label">Stock</label>
			<div class="col-sm-4">
				<input type="text" required="required" name="stockmouse" value="{{$p->stockmouse}}" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="tersedia" class="col-sm-2 control-label">Status Barang</label>
			<div class="col-sm-4">
				<input type="number" required="required" name="tersedia" value="{{$p->tersedia}}" class="form-control">
                <datalist id="browsers">
                    <option value="0">
                    <option value="1">
                </datalist>
			</div>
		</div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
@endsection