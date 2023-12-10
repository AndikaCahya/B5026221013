@extends('master')

@section('title','Data Pegawai')

@section('konten')
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Mouse</h3>
 
	<a href="/mouse"><input type="submit" value="Kembali" class="btn btn-primary"></a>
	
	<br/>
	<br/>
 
	<form action="/mouse/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="merkmouse" class="col-sm-2 control-label">Merk</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="merkmouse" name="merkmouse" placeholder="Merk Mouse">
            </div>
        </div>
		<div class="form-group">
            <label for="stockmouse" class="col-sm-2 control-label">Stock</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" id="stockmouse" name="stockmouse" placeholder="Stock Mouse">
            </div>
        </div>
		<div class="form-group">
            <label for="tersedia" class="col-sm-2 control-label">Ketersediaan</label>
            <div class="col-sm-4">
            <input list="browsers" class="form-control" id="tersedia" name="tersedia" placeholder="Ketersediaan mouse">
            <datalist id="browsers">
                <option value="0">
                <option value="1">
            </datalist>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class = "btn btn-success">
	</form>
@endsection