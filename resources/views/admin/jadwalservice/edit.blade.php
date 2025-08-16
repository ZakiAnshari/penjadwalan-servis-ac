@extends('layouts.admin')
@section('title', 'Edit')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold d-flex align-items-center my-4">


            <i class="bx bx-user me-2 text-primary" style="font-size: 1.5rem;"></i>
            <span class="text-muted fw-light me-1"></span> Edit Jadwal Service
        </h4>
        <div class="card">
            <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-3">
                <a class="mx-4 my-4" href="{{ route('jadwalservice.index') }}">
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
                    <form action="{{ url('jadwalservice-edit/' . $jadwalservice->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <!-- Kolom Kiri -->
                            <div class="col-lg-6">
                                <!-- Pelanggan -->
                                <div class="mb-3">
                                    <label for="pelanggan_id" class="form-label">Nama Pelanggan</label>
                                    <select name="pelanggan_id" id="pelanggan_id" class="form-control" required >
                                        <option value="">-- Pilih Pelanggan --</option>
                                        @foreach ($pelanggans as $pelanggan)
                                            <option value="{{ $pelanggan->id }}"
                                                {{ $jadwalservice->pelanggan_id == $pelanggan->id ? 'selected' : '' }}>
                                                {{ $pelanggan->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <!-- Teknisi -->
                                <div class="mb-3">
                                    <label for="teknisi_id" class="form-label">Nama Teknisi</label>
                                    <select name="teknisi_id" id="teknisi_id" class="form-control" required>
                                        <option value="">-- Pilih Teknisi --</option>
                                        @foreach ($teknisis as $teknisi)
                                            <option value="{{ $teknisi->id }}"
                                                {{ $jadwalservice->teknisi_id == $teknisi->id ? 'selected' : '' }}>
                                                {{ $teknisi->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Tanggal Service -->
                                <div class="mb-3">
                                    <label for="tanggal_service" class="form-label">Tanggal Servis</label>
                                    <input type="date" name="tanggal_service" class="form-control" id="tanggal_service"
                                        value="{{ $jadwalservice->tanggal_service }}" required>
                                </div>
                                <!-- Jumlah Unit -->
                                <div class="mb-3">
                                    <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
                                    <input type="number" name="jumlah_unit" class="form-control" id="jumlah_unit"
                                        min="1" value="{{ $jadwalservice->jumlah_unit }}" required >
                                </div>


                                <!-- Jenis AC -->

                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-lg-6">

                                <!-- Jenis  Layanan -->
                                <div class="mb-3">
                                    <label for="jenis_layanan" class="form-label">Jenis Layanan</label>
                                    <input type="text" name="jumlah_unit" class="form-control" id="jenis_layanan"
                                        min="1" value="{{ $jadwalservice->jenis_layanan }}" required >
                                </div>
                                <!-- Alamat Service -->
                                <div class="mb-3">
                                    <label for="alamat_service" class="form-label">Alamat Servis</label>
                                    <textarea name="alamat_service" class="form-control" id="alamat_service" rows="2" required readonly>{{ $jadwalservice->alamat_service }}</textarea>
                                </div>

                                <!-- Catatan -->
                                <div class="mb-3">
                                    <label for="catatan" class="form-label">Catatan (Opsional)</label>
                                    <textarea name="catatan" class="form-control" id="catatan" rows="2">{{ $jadwalservice->catatan }}</textarea>
                                </div>

                                <!-- Status -->
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="Menunggu"
                                            {{ $jadwalservice->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                        <option value="Diproses"
                                            {{ $jadwalservice->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                        <option value="Selesai"
                                            {{ $jadwalservice->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Tombol -->
                            <div class="text-end btn-page mb-0 mt-4">
                                <a href="{{ route('jadwalservice.index') }}" class="btn btn-outline-secondary">Batal</a>
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
