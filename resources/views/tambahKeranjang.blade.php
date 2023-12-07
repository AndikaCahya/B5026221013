@extends('master')
@section('title', 'Tambah Data Keranjang Belanja')

@section('konten')

    <a href="/keranjangbelanja"> Kembali</a>

    <br />
    <br />

    <form action="/keranjangbelanja/store" class="form-horizontal" method="post">
        {{ csrf_field() }}
        {{-- <div class="form-group">
            <label class="control-label col-sm-2" for="email">ID:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="ID" placeholder="Enter ID" name="ID">
            </div>
        </div> --}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="KodeBarang">Kode Barang:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="KodeBarang" placeholder="Enter Kode Barang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Jumlah">Jumlah:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Jumlah" placeholder="Enter Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Harga">Harga:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Harga" placeholder="Enter Harga" name="Harga">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>


@endsection