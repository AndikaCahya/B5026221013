@extends('master')

@section('title','Nilai Kuliah')

@section('konten')
 
	<h3>Tambah Data</h3>
 
	<a href="/nilaikuliah"><input type="submit" value="Kembali" class="btn btn-primary"></a>
	
	<br/>
    <br/>
 
	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="NRP" class="col-sm-2 control-label">NRP :</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="NRP" name="NRP" placeholder="NRP Mahasiswa">
            </div>
        </div>
		<div class="form-group">
            <label for="NilaiAngka" class="col-sm-2 control-label">Nilai Angka :</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka" placeholder="Nilai Angka Mahasiswa">
            </div>
        </div>
		<div class="form-group">
            <label for="SKS" class="col-sm-2 control-label">SKS :</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" id="SKS" name="SKS" placeholder="SKS Mahasiswa">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class = "btn btn-success">
	</form>
@endsection
 
 
