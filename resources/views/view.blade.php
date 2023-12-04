@extends('master')

@section('title','Data Pegawai')

@section('konten')
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>View Pegawai</h3>
 
	<a href="/pegawaiii"><input type="submit" value="Kembali" class="btn btn-primary"></a>
	
	<br/>
	<br/>
 
	<div class="row">
        <div class="col-4">
            <div class="card" style="width:100%">
                <img src ="{{ asset('assets\img\me.jpg')}}">
                <div class="card-body">
                    <h4 class="card-title text-center">Foto Pegawai</h4>
                </div>
            </div>
        </div>
        <div class="col-8">
        @foreach($pegawaiii as $p)
        <fieldset disabled>
        <form action="/pegawaiii/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-12">
                    <input type="text" required="required" name="nama" value="{{$p->pegawai_nama}}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
                <div class="col-sm-12">
                    <input type="text" required="required" name="jabatan" value="{{$p->pegawai_jabatan}}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="umur" class="col-sm-2 control-label">Umur</label>
                <div class="col-sm-12">
                    <input type="number" required="required" name="umur" value="{{$p->pegawai_umur}}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-12">
                    <textarea required="required" name="alamat" class="form-control">{{$p->pegawai_alamat}}
                    </textarea>
                </div>
            </div>
        </form>
        </fieldset>
        @endforeach
        <div class="row">
        <div class="text-center col-10 ml-5 mt-3">
                <a href="/pegawaiii" class="btn btn-success" style="width:40%; font-weight:600; font-size:20px">OK</a>
        </div>
    </div>
    </div>
    
@endsection
 
 
