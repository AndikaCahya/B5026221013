@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
<div class="container text-center">
		@foreach($chat as $p)
		<tr>
			<td>{!! $p->pesan !!}</td>
		</tr>
		@endforeach
</div>
@endsection
