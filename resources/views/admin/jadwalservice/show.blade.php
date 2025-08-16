@extends('layouts.admin')
@section('title', 'User')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold d-flex align-items-center my-4">


            <i class="bx bx-user me-2 text-primary" style="font-size: 1.5rem;"></i>
            <span class="text-muted fw-light me-1"></span> Lihat Jadwal Service
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
                    <div class="row">
                        <!-- Kartu Kiri (Identitas Pelanggan) -->
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 border border-primary shadow-sm">
                                <div class="position-relative">
                                    <div class="card-header bg-light border-bottom border-primary">
                                        <h5 class="mb-0 text-primary">Pelanggan</h5>

                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="chat-avatar d-inline-flex mx-auto mb-3">
                                            <img src="{{ asset('backend/assets/img/avatars/1.png') }}" alt="pelanggan-image"
                                                class="user-avatar img-fluid"
                                                style="width: 150px; height: 150px; object-fit: cover; border-radius: 11px; border: 2px solid #0d6efd;">
                                        </div>

                                        <h5 class="mb-1">{{ $jadwalservice->pelanggan->nama }}</h5>
                                        <hr class="my-3">

                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <i class="ti ti-mail me-2 text-primary"></i>
                                            <p class="mb-0">{{ $jadwalservice->pelanggan->email ?? '-' }}</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <i class="ti ti-phone me-2 text-primary"></i>
                                            <p class="mb-0">{{ $jadwalservice->pelanggan->no_hp }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kartu Kanan (Detail Jadwal dan Pelanggan) -->
                        <div class="col-lg-8 mb-4">
                            <div class="card h-100 border border-primary shadow-sm">
                                <div class="card-header bg-light border-bottom border-primary">
                                    <h5 class="mb-0 text-primary">Detail Jadwal Servis [ {{ $jadwalservice->teknisi->nama }}
                                        ]</h5>

                                </div>
                                <div class="card-body">
                                    <div class="row border-bottom pb-3 mb-3 mt-4">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Nama Teknisi</p>
                                            <h6 class="mb-0">
                                                <h6 class="mb-0">{{ $jadwalservice->teknisi->nama }}</h6>
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Tanggal Servis</p>
                                            <h6 class="mb-0">
                                                {{ \Carbon\Carbon::parse($jadwalservice->tanggal_service)->translatedFormat('d F Y') }}
                                            </h6>
                                        </div>

                                    </div>

                                    <div class="row border-bottom pb-3 mb-3">
                                        
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Jumlah Unit</p>
                                            <h6 class="mb-0">{{ $jadwalservice->jumlah_unit }}</h6>
                                        </div>
                                    </div>

                                    <div class="row border-bottom pb-3 mb-3">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">No HP Teknisi</p>
                                            <h6 class="mb-0">{{ $jadwalservice->teknisi->no_hp ?? '-' }}</h6>
                                        </div>

                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Status</p>
                                            <h6 class="mb-0">{{ $jadwalservice->status }}</h6>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Catatan Tambahan</p>
                                            <h6 class="mb-0">{{ $jadwalservice->catatan ?? '-' }}</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Alamat Servis</p>
                                            <h6 class="mb-0">{{ $jadwalservice->alamat_service }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>


    </div>

    @include('sweetalert::alert')
@endsection
