@extends('layouts.admin')
@section('title', 'Edit')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold d-flex align-items-center my-4">


            <i class="bx bx-user me-2 text-primary" style="font-size: 1.5rem;"></i>
            <span class="text-muted fw-light me-1"></span> Edit Pelanggan
        </h4>
        <div class="card">
            <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-3">
                <a class="mx-4 my-4" href="{{ route('pelanggan.index') }}">
                    <button class="btn btn-outline-primary border-1 rounded-1 px-3 py-1 d-flex align-items-center"
                        data-bs-toggle="tooltip" title="Kembali">
                        <i class="bi bi-arrow-left fs-5 mx-1"></i>
                        <span class="fw-normal">Kembali</span>
                    </button>
                </a>
            </div>


            <div class="card-body">
                <div class="text-nowrap">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ url('pelanggan-edit/' . $pelanggan->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <!-- Kolom Kiri -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        value="{{ $pelanggan->nama }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No HP</label>
                                    <input type="text" name="no_hp" class="form-control" id="no_hp"
                                        value="{{ $pelanggan->no_hp }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email (opsional)</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        value="{{ $pelanggan->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
                                    <input type="number" name="jumlah_unit" id="jumlah_unit" class="form-control"
                                        min="1" value="{{ $pelanggan->jumlah_unit }}" required>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="jenis_layanan" class="form-label">Jenis Layanan</label>
                                    <select name="jenis_layanan" id="jenis_layanan" class="form-control" required>
                                        <option value="">-- Pilih Jenis Layanan --</option>
                                        <option value="Servis AC"
                                            {{ $pelanggan->jenis_layanan == 'Servis AC' ? 'selected' : '' }}>Servis AC
                                        </option>
                                        <option value="Isi / Tambah Freon"
                                            {{ $pelanggan->jenis_layanan == 'Isi / Tambah Freon' ? 'selected' : '' }}>Isi /
                                            Tambah Freon</option>
                                        <option value="Pasang AC Baru"
                                            {{ $pelanggan->jenis_layanan == 'Pasang AC Baru' ? 'selected' : '' }}>Pasang AC
                                            Baru</option>
                                        <option value="Bongkar Pasang AC"
                                            {{ $pelanggan->jenis_layanan == 'Bongkar Pasang AC' ? 'selected' : '' }}>
                                            Bongkar
                                            Pasang AC</option>
                                        <option value="Perbaikan AC"
                                            {{ $pelanggan->jenis_layanan == 'Perbaikan AC' ? 'selected' : '' }}>Perbaikan
                                            AC
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat" rows="3" required>{{ $pelanggan->alamat }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="catatan" class="form-label">Catatan (opsional)</label>
                                    <textarea name="catatan" class="form-control" id="catatan" rows="3">{{ $pelanggan->catatan }}</textarea>
                                </div>
                            </div>

                            <!-- Tombol -->
                            <div class="text-end btn-page mb-0 mt-4">
                                <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>


    </div>

    @include('sweetalert::alert')
@endsection
