@extends('master')

@section('title','Data Pegawai')

@section('konten')
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Pegawai</h3>
 
	<a href="/pegawaiii"><input type="submit" value="Kembali" class="btn btn-primary"></a>
	
	<br/>
	<br/>
 
	<form action="/pegawaiii/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Pegawai">
            </div>
        </div>
		<div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan Pegawai">
            </div>
        </div>
		<div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Umur</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" id="umur" name="umur" placeholder="Umur Pegawai">
            </div>
        </div>
		<div class="form-group">
            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-4">
            <textarea name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap Pegawai"></textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class = "btn btn-success">
	</form>
@endsection
 
 
