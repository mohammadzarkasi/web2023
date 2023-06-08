@extends('template')

{{-- ctrl shif i, alt shif f --}}
@section('main-content')
  <div class="d-flex justify-content-between flex-warp flex-md-nowarp align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Mahasiswa {{ $add_count }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="{{ url('/mahasiswa/tambah') }}" class="btn btn-primary">Tambah</a>
    </div>
  </div>
  <h2>Data Mahasiswa</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          {{-- <th>Fakultas</th> --}}
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $counter = 0;
        @endphp
        @foreach ($list_mhs as $item)
          @php
            $counter += 1;
          @endphp
          <tr>
            <td>{{ $counter }}</td>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            {{-- <td>{{ $item->nama_fakultas }}</td> --}}
            <td>
              <a class="btn btn-success btn-sm" href="{{ url('/mahasiswa/detail?id=' . $item->id) }}">Detail</a>
              <a class="btn btn-warning btn-sm" href="{{ url('/mahasiswa/edit?id=' . $item->id) }}">Edit</a>
              <button class="btn btn-sm btn-danger" onclick="dialog_hapus({{ $item->id }})">Hapus</button>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection


@section('js')
  <script type="text/javascript">
    function dialog_hapus(id_mhs) {
      var tanya = confirm('Apakah Anda yakin akan menghapus mahasiswa ini?');
      console.log(tanya);

      if (tanya == true) {

        var form = document.querySelector('#form_hapus');
        var input_id = document.querySelector('#form_hapus #id');
        // console.log(input_id);
        input_id.value = id_mhs;

        form.submit();

      }
    }
  </script>
@endsection
