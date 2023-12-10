@extends('master')

@section('title','Data Pegawai')

@section('konten')
@php
function ubahChar($nilai){
    if ($nilai==0){
        return 'Tidak';
    } elseif ($nilai == 1){
        return 'Ya';
    } else {
        return 'Invalid';
    }
}
@endphp
	<h2>www.malasngoding.com</h2>
	<h3>Data Mouse</h3>
 
	<a href="/mouse/tambahMouse" class="btn btn-primary"> + Tambah Data Mouse</a>
	
	<br/>

	<p>Cari Data Mouse :</p>
	<form action="/mouse/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Mouse .." value="{{ old('cari', isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary mt-2" type="submit" value="CARI">
	</form>

	<br/>
	
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Mouse</th>
			<th>Merk Mouse</th>
			<th>Stock Mouse</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($mouse as $p)
		<tr>
			<td>{{ $p->kodemouse }}</td>
			<td>{{ $p->merkmouse }}</td>
			<td>{{ $p->stockmouse }}</td>
			<td>{{ubahChar ($p->tersedia) }}</td>
			<td>
				<a href="/mouse/viewMouse/{{ $p->kodemouse }}" class="btn btn-success">View</a>	
				|
				<a href="/mouse/editMouse/{{ $p->kodemouse }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mouse/hapus/{{ $p->kodemouse }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{$mouse->links()}}
@endsection