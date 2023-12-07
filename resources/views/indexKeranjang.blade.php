@extends('master')
@section('title', 'Keranjang Belanja')

@section('konten')
	<h3>Data Keranjang Belanja</h3>
 
	<a href="/keranjangbelanja/tambah"> + Tambah keranjangbelanja Baru</a>
	
	<br/>
	<br/>

	{{-- create search field --}}
	{{-- <form action="/keranjangbelanja/cari" method="GET" class="form-inline">
		<input class="form-control mr-2" type="text" name="cari" placeholder="Cari keranjangbelanja .." value="{{ old('cari') }}">
		<input class="btn btn-primary my-2 my-sm-0" type="submit" value="CARI">
	</form>
	<br/> --}}

 
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th class="text-right">Harga Per Item</th>
			<th class="text-right">Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
            <td>{{ $p->ID }}</td>
            <td>{{ $p->KodeBarang }}</td>
            <td>{{ $p->Jumlah }}</td>
            <td class="text-right">{{ number_format($p->Harga, 0, ',', '.') }}</td>
            <td class="text-right">{{ number_format($p->Harga * $p->Jumlah, 0, ',', '.') }}</td>
            
			<td>
				<a class="btn btn-danger" href="/keranjangbelanja/hapus/{{ $p->ID}}">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection