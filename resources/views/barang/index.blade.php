@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                {{-- Kode ini Mendefinisikan variabel $pageTitle yang dilewatkan dari kontroler.  --}}
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    {{-- link haref untuk mengarahkan ke route employees dan diteruskan ke kontroler lalui ke view
                        folder employees lalu ke file create --}}
                    <a href="{{ route('barang.create') }}" class="btn btn-dark">Create Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3 ">
            {{-- Tabel untuk menampilkan data karyawan --}}
            <table class="table table-bordered table-hover table-striped mb-0 ">
                <thead class="thead-dark">
                    {{--  Baris header tabel --}}
                    <tr>
                        <th scope="col">KODE BARANG</th>
                        <th scope="col">NAMA BARANG</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">DESKRIPSI</th>
                        <th scope="col">SATUAN</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    {{-- Looping melalui setiap item barang dalam data barang  --}}
                    @foreach ($barangs as $barang)
                        <tr>
                            <td class=" text-center">{{ $barang->kode_barang }}</td>
                            <td class=" text-center">{{ $barang->nama_barang }}</td>
                            <td class=" text-center">Rp. {{ $barang->harga_barang }}</td>
                            <td>{{ $barang->deksripsi_barang }}</td>
                            <td class=" text-center">{{ $barang->satuan->nama_satuan }}</td>
                            <td>
                                {{-- ACTIONS SECTION --}}
                                @include('barang.actions')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
