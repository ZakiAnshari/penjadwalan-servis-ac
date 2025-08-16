@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    Selamat Datang di Aplikasi Penjadwalan Layanan Servis AC CV Britania Teknik Solok 🎉
                                </h5>
                                <p class="mb-4">
                                    Aplikasi ini membantu pengelolaan jadwal layanan servis AC Anda secara cepat,
                                    terorganisir, dan efisien.
                                </p>

                                <a href="" class="btn btn-sm btn-outline-primary">
                                    Lihat Jadwal Servis
                                </a>

                            </div>

                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('/backend/assets/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- PELANGGAN --}}
            <div class="col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <h5 class="card-title text-center mb-3">Total Pelanggan</h5>
                            <div class="d-flex align-items-center gap-3">
                                <!-- Ganti ikon agar lebih modern -->
                                <i class="bi bi-people-fill text-primary" style="font-size: 3rem;"></i>
                                <span class="badge bg-label-primary rounded-pill"
                                    style="font-size: 1.5rem; padding: 0.5rem 1rem;">
                                    {{ $pelangganCount }}
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            {{-- TEKNISI --}}
            <div class="col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <h5 class="card-title text-center mb-3">Total Teknisi</h5>
                            <div class="d-flex align-items-center gap-3">
                                <!-- Ikon teknisi -->
                                <i class="bi bi-person-gear text-primary" style="font-size: 3rem;"></i>
                                <span class="badge bg-label-primary rounded-pill"
                                    style="font-size: 1.5rem; padding: 0.5rem 1rem;">
                                    {{ $teknisiCount }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- TOTAL JADWAL SERVISE --}}
            <div class="col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <h5 class="card-title text-center mb-3">Total Jadwal Service</h5>
                            <div class="d-flex align-items-center gap-3">
                                <!-- Ikon jadwal -->
                                <i class="bi bi-calendar-check text-primary" style="font-size: 3rem;"></i>
                                <span class="badge bg-label-primary rounded-pill"
                                    style="font-size: 1.5rem; padding: 0.5rem 1rem;">
                                    {{ $jadwalCount }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- TOTAL USER --}}
            <div class="col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <h5 class="card-title text-center mb-3">Total User</h5>
                            <div class="d-flex align-items-center gap-3">
                                <!-- Ikon user -->
                                <i class="bi bi-person-badge-fill text-primary" style="font-size: 3rem;"></i>
                                <span class="badge bg-label-primary rounded-pill"
                                    style="font-size: 1.5rem; padding: 0.5rem 1rem;">
                                    {{ $userCount }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @include('sweetalert::alert')
@endsection
