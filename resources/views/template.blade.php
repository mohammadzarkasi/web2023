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
            <div class="col-md-9 col-lg-10 text-light">
                @if (Session::has('login') == true && Session::get('login') == '1')
                    <span>Halo, {{ Session::get('name') }}</span>
                    <a href="{{ url('/logout') }}">Keluar</a>
                @endif
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-3 col-lg-2 bg-body-tertiary d-md-block sidebar collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/matkul') }}">Mata Kuliah</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/peserta') }}">Peserta Matkul</a></li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 col-lg-10 px-md-4">
                    
                    @yield('main-content')
                    
                </main>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    @yield('js')
</html>