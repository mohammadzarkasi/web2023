@extends('template')

@section('main-content')

<div class="d-flex justify-content-between flex-warp flex-md-nowarp align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Mahasiswa</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        {{-- <a href="{{ url('/mahasiswa/tambah') }}" class="btn btn-primary">Tambah</a> --}}
    </div>
</div>
<h2>Detail Mahasiswa</h2>
<div class="form">

    <div class="row form-group mb-4">
        <label class="col-lg-1">NIM</label>
        <div class="col-lg-4">
            <input type="text" readonly class="form-control" name="nim" placeholder="NIM" value="{{ $mhs->nim ?? '' }}" />
        </div>
    </div>

    <div class="row form-group mb-4">
        <label class="col-lg-1">Nama</label>
        <div class="col-lg-4">
            <input type="text" readonly class="form-control" name="nama" placeholder="Nama Mahasiswa" value="{{ $mhs->nama ?? '' }}" />
        </div>
    </div>

    <div class="row form-group">
        <div class="col-lg-12">
            <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Kembali</a>

        </div>
    </div>
</div>

@endsection