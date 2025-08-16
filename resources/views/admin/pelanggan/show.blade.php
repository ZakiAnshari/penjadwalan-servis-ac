@extends('layouts.admin')
@section('title', 'User')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold d-flex align-items-center my-4">


            <i class="bx bx-user me-2 text-primary" style="font-size: 1.5rem;"></i>
            <span class="text-muted fw-light me-1"></span> Lihat Pelanggan
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
                    <div class="row">
                        <!-- Kartu Kiri (Identitas) -->
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 border border-primary shadow-sm">
                                <div class="card-body position-relative">
                                    <div class="text-center mt-3">
                                        <div class="chat-avatar d-inline-flex mx-auto mb-3">
                                            <img src="{{ asset('backend/assets/img/avatars/1.png') }}" alt="pelanggan-image"
                                                class="user-avatar img-fluid"
                                                style="width: 150px; height: 150px; object-fit: cover; border-radius: 11px; border: 2px solid #0d6efd;">
                                        </div>

                                        <h5 class="mb-1">{{ $pelanggans->nama }}</h5>
                                        <hr class="my-3">

                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <i class="ti ti-mail me-2 text-primary"></i>
                                            <p class="mb-0">{{ $pelanggans->email ?? '-' }}</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <i class="ti ti-phone me-2 text-primary"></i>
                                            <p class="mb-0">{{ $pelanggans->no_hp }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kartu Kanan (Detail Pelanggan) -->
                        <div class="col-lg-8 mb-4">
                            <div class="card h-100 border border-primary shadow-sm">
                                <div class="card-header bg-light border-bottom border-primary">
                                    <h5 class="mb-0 text-primary">Detail Pelanggan</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row border-bottom pb-3 mb-3 mt-4">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Nama Lengkap</p>
                                            <h6 class="mb-0">{{ $pelanggans->nama }}</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Nomor HP</p>
                                            <h6 class="mb-0">{{ $pelanggans->no_hp }}</h6>
                                        </div>
                                    </div>

                                    <div class="row border-bottom pb-3 mb-3">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Email</p>
                                            <h6 class="mb-0">{{ $pelanggans->email ?? '-' }}</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Alamat</p>
                                            <h6 class="mb-0">{{ $pelanggans->alamat }}</h6>
                                        </div>
                                    </div>

                                    <div class="row border-bottom pb-3 mb-3">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Catatan Tambahan</p>
                                            <h6 class="mb-0">{{ $pelanggans->catatan ?? '-' }}</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Jumlah Unit</p>
                                            <h6 class="mb-0">{{ $pelanggans->jumlah_unit ?? '-' }}</h6>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="mb-1 text-muted">Jenis Layanan</p>
                                            <h6 class="mb-0">{{ $pelanggans->jenis_layanan ?? '-' }}</h6>
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
