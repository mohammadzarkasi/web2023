<html>
    <head>
        <title>Mahasiswa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    </head>
    <body>
        <header class="navbar navbar-dark sticky-top bg-dark shadow">
            <span class="text-light col-md-3 col-lg-2 px-3">Pemrograman Website 2023</span>
            <div class="col-md-9 col-lg-10">
                
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-3 col-lg-2 bg-body-tertiary d-md-block sidebar collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link">Mahasiswa</a></li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-warp flex-md-nowarp align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1>Mahasiswa</h1>
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
                                    <th>Fakultas</th>
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
                                        <td>{{ $item->nama_fakultas }}</td>
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
                </main>
            </div>
        </div>
        <form id="form_hapus" action="{{ url('/mahasiswa/hapus') }}" method="GET">
            <input id="id" type="hidden" name="id" value=""/>
        </form>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function dialog_hapus(id_mhs){
            var tanya = confirm('Apakah Anda yakin akan menghapus mahasiswa ini?');
            console.log(tanya);

            if(tanya==true){

                var form = document.querySelector('#form_hapus');
                var input_id = document.querySelector('#form_hapus #id');
                // console.log(input_id);
                input_id.value = id_mhs;

                form.submit();

            }
        }
    </script>
</html>