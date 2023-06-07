<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>CV</title>
    @push ('styles')
        <style>
            .container {
                max-width: 500px;
            }
        </style>
    @endpush
    @vite('resources/sass/app.scss')
    @stack('styles')
</head>

<body class="bg-secondary">
    {{-- kolom 1 --}}
    <div class="container mt-5 mb-5">
        <div class="card text-center shadow mb-5">
            <div class="card-body px-4 py-4">
                <img src="{{ Vite::asset('resources/images/aku.jpg') }}" class="rounded-circle w-50 border border-5" />
                <h1 class="mb-0"> Cornelia Angela </h1>
                <span class="fw-light d-block mb-3"> Sistem Informasi </span>
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
            <div class="card-footer bg-white fs-1">
                <a href="https://github.com/Angelaczr" class="text-secondary"><i class="bi bi-github"></a></i>
                <a href="https://www.linkedin.com/in/cornelia-angela-caezaria/" class="text-secondary"><i
                        class="bi bi-linkedin"></a></i>
            </div>
        </div>
        {{-- kolom 2 --}}
        <div class="card shadow mb-5">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-4">Nama</div>
                        <div class="col-8 text-end text-muted">Cornelia Angela Caezaria</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-4">Alamat</div>
                        <div class="col-8 text-end text-muted">Buduran, Sidoarjo Jatim</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-4">Mata Kuliah </div>
                        <div class="col-8 text-end text-muted">Pemograman Framework</div>
                    </div>
                </li>
            </ul>
        </div>
        {{-- kolom 2 --}}
        <div class="card shadow mb-5">
            <div class="card-header">
                Pendidikan
            </div>
            <div class="card-body border border-3">
                <h5 class="card-title">SMK Antartika 2</h5>
                <p class="card-text mb-0">Software Engginering</p>
                <p class="card-text text-muted ">Angkatan 2019</p>
            </div>
            <div class="card-body border border-5">
                <h5 class="card-title">Institute Teknologi Telkom Surabaya</h5>
                <p class="card-text mb-0">Information System</p>
                <p class="card-text text-muted ">Undergraduate</p>
            </div>
        </div>

        <div class="d-grid gap-2">
            <a class="btn btn-dark" href="{{ route('home') }}">Home</a>
        </div>

    </div>
    
    @vite('resources/js/app.js')
</body>

</html>

 {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/laravel.png') }}" alt="image"> --}}
    {{-- <a href="{{ url('/home') }}"
    <a href="#" class="btn btn-primary">Go somewhere</a> --}}
