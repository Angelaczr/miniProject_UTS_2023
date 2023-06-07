@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        {{-- Formulir untuk membuat barang  baru --}}
        <form action="{{ route('barang.store') }}" method="POST">
            {{-- Token CSRF untuk keamanan --}}
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    {{-- @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                               {{ $error }}
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif --}}

                    {{-- Judul dan ikon --}}
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        {{-- Input untuk kode barang --}}
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror" type="text"
                                name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}"
                                placeholder="Enter Kode Barang">
                            @error('kode_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Input untuk nama barang --}}
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror" type="text"
                                name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}"
                                placeholder="Enter Nama Barang">
                            @error('nama_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Input untuk harga barang --}}
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('harga_barang') is-invalid @enderror" type="text"
                                name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}"
                                placeholder="Enter Harga Barang">
                            @error('harga_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Input untuk Deskripsi barang --}}
                        <div class="col-md-6 mb-3">
                            <label for="deksripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control @error('deksripsi_barang') is-invalid @enderror" type="text"
                                name="deksripsi_barang" id="deksripsi_barang" value="{{ old('deksripsi_barang') }}"
                                placeholder="Enter Deskripsi Barang">
                            @error('deksripsi_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan_id" class="form-label">SATUAN</label>
                        <select name="satuan_id" id="satuan_id" class="form-select">
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}"
                                    {{ old('satuan_id') == $satuan->id ? 'selected' : '' }}>
                                    {{ $satuan->nama_satuan }}</option>
                            @endforeach
                        </select>
                        @error('satuan_id')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <hr>
                    <div class="row">
                        {{-- Tombol untuk batal --}}
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        {{-- Tombol untuk simpan --}}
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
