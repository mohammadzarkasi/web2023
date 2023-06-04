@extends('template')

@section('main-content')

<div class="d-flex justify-content-between flex-warp flex-md-nowarp align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Mahasiswa</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        {{-- <a href="{{ url('/mahasiswa/tambah') }}" class="btn btn-primary">Tambah</a> --}}
    </div>
</div>
<h2>Formulir Mahasiswa</h2>
<form method="POST" action="{{ url('/peserta/' . $form_action) }}" class="form">
    @csrf

    {{-- <input type="hidden" name="id" value="{{ $mhs->id ?? '' }}"/> --}}

    <div class="row form-group mb-4">
        <label class="col-lg-2">ID Mata Kuliah</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="id_mata_kuliah" placeholder="ID Mata Kuliah" value="{{ '' }}" />
        </div>
    </div>

    <div class="row form-group mb-4">
        <label class="col-lg-2">ID Mahasiswa</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="id_mahasiswa" placeholder="ID Mahasiswa" value="{{ '' }}" />
        </div>
    </div>

    <input type='hidden' name="id_fakultas" value="99"/>

    <div class="row form-group">
        <div class="col-lg-12">
            <a href="{{ url('/peserta') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </div>
</form>

@endsection