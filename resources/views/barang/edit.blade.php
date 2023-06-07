@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        {{-- Formulir untuk membuat pegawai baru --}}
        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            {{-- Token CSRF untuk keamanan --}}
            @csrf
            @method('PUT')
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
                        {{-- Input untuk nama depan --}}
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control " type="text" name="kode_barang" id="kode_barang"
                                value="{{ $barang->kode_barang }}" placeholder="Enter Kode Barang">
                            @error('kode_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Input untuk nama belakang --}}
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control " type="text" name="nama_barang" id="nama_barang"
                                value="{{ $barang->nama_barang }}" placeholder="Nama Barang">
                            @error('nama_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Input untuk email --}}
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control " type="text" name="harga_barang" id="harga_barang"
                                value="{{ $barang->harga_barang }}" placeholder="Enter harga_barang">
                            @error('harga_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Input untuk umur --}}
                        <div class="col-md-6 mb-3">
                            <label for="deksripsi_barang" class="form-label">Deskripsi </label>
                            <input class="form-control " type="text" name="deksripsi_barang" id="deksripsi_barang"
                                value="{{ $barang->deksripsi_barang }}" placeholder="Enter deksripsi_barang">
                            @error('deksripsi_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan_id" class="form-label">Satuan</label>
                        <select name="satuan_id" id="satuan_id" class="form-select">
                            @php
                                $selected = '';
                                if ($errors->any()) {
                                    $selected = old('satuan_id');
                                } else {
                                    $selected = $barang->satuan_id;
                                }
                            @endphp
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}"
                                    {{ $barang->satuan_id == $satuan->id ? 'selected' : '' }}>{{ $satuan->nama_satuan }}
                                </option>
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
                        {{-- Tombol untuk edit --}}
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
