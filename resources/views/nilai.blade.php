@extends('master')

@section('title','Data Pegawai')

@section('konten')
	<h3>Nilai Kuliah</h3>
 
	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Data</a>
	
	<br/>
	<br/>
	
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP}}</td>
			<td>{{ $n->NilaiAngka}}</td>
			<td>{{ $n->SKS}}</td>
            <td>{{ $n->NilaiHuruf}}</td>
            <td>{{ $n->Bobot}}</td>
		</tr>
		@endforeach
	</table>
@endsection