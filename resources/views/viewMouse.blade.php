@extends('master')

@section('title','Data Pegawai')

@section('konten')
@php
function ubahChar($nilai){
    if ($nilai==0){
        return 'Tidak Tersedia';
    } elseif ($nilai == 1){
        return 'Tersedia';
    } else {
        return 'Invalid';
    }
}
@endphp
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>View Mouse</h3>
 
	<a href="/mouse"><input type="submit" value="Kembali" class="btn btn-primary"></a>
	
	<br/>
	<br/>
 
	<h1 style="text-align: center;" class="mb-4">Data Mouse</h1>
    <div class="row">
    <div class="col-4">
        <div class="card" style="width:100%">
            <div class="form-group" style="border: 1px solid #ccc; padding: 40%;">
                <img src="..." class="" alt="..." style="width: 100%;">
            </div>
        </div>
    </div>
    <div class="col-8">
        @foreach($mouse as $p)
        <fieldset disabled>
        <form action="/mouse/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->kodemouse }}">
            <div class="form-group">
                <label for="merkmouse" class="col-sm-2 control-label">Merk</label>
                <div class="col-md-12">
                    <input type="text" required="required" name="merkmouse" value="{{$p->merkmouse}}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="stockmouse" class="col-sm-2 control-label">Stock</label>
                <div class="col-md-12">
                    <input type="text" required="required" name="stockmouse" value="{{$p->stockmouse}}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="tersedia" class="col-sm-2 control-label">Ketersediaan</label>
                <div class="col-md-12">
                <input list="browsers" class="form-control" id="tersedia" name="tersedia" placeholder="Ketersediaan mouse" value="{{ubahChar($p->tersedia)}}">
                    <datalist id="browsers">
                        <option value="0">
                        <option value="1">
                    </datalist>
                </div>
            </div>
        </form>
        </fieldset>
        @endforeach
        <div class="row">
        <div class="text-center col-10 ml-5 mt-3">
                <a href="/mouse" class="btn btn-success" style="width:40%; font-weight:600; font-size:20px">OK</a>
        </div>
        </div>
    </div>
    </div>
    </div>
    
@endsection
 
 
