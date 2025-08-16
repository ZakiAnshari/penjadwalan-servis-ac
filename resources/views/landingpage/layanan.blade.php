@extends('layouts.front_end')
@section('title', 'Layanan')
@section('content')
    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="font-size: 20px;" class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                    Layanan Kami</p>

                <h1 style="font-size: 30px;" class="mb-5">Layanan Profesional Servis dan Jasa Pasang AC oleh Britania
                </h1>


            </div>

            <style>
                .card-img-wrapper {
                    height: 220px;
                    /* Atur tinggi gambar */
                    overflow: hidden;
                }

                .card-img-wrapper img {
                    height: 100%;
                    width: 100%;
                    object-fit: cover;
                }
            </style>
            <div class="row">
                <!-- Servis AC Berkala -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border border-primary border-2 rounded-4 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('/frontend/img/layanan3.jpg') }}" class="card-img-top rounded-top-4"
                                alt="Servis AC Berkala">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Servis AC Berkala</h5>
                            <p class="card-text text-muted">
                                Perawatan rutin AC untuk menjaga performa optimal, termasuk pembersihan unit dan pengecekan
                                freon.
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border border-primary border-2 rounded-4 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('/frontend/img/layanan2.jpg') }}" class="card-img-top rounded-top-4"
                                alt="Isi Freon AC">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Isi & Tambah Freon</h5>
                            <p class="card-text text-muted">Pengisian freon R32, R410A, atau R22 untuk AC yang kurang
                                dingin atau mengalami kebocoran.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border border-primary border-2 rounded-4 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('/frontend/img/pasangbaru.jpg') }}" class="card-img-top rounded-top-4"
                                alt="Pasang AC Baru">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Instalasi / Pasang Baru</h5>
                            <p class="card-text text-muted">Layanan pemasangan unit AC baru dengan penarikan pipa, kabel,
                                dan setting optimal.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border border-primary border-2 rounded-4 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('/frontend/img/bongkarpasang.jpg') }}" class="card-img-top rounded-top-4"
                                alt="Bongkar Pasang AC">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Bongkar Pasang AC</h5>
                            <p class="card-text text-muted">Melayani pemindahan unit AC ke lokasi baru lengkap dengan
                                pemasangan ulang dan uji coba.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border border-primary border-2 rounded-4 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('/frontend/img/perbaikan.jpg') }}" class="card-img-top rounded-top-4"
                                alt="Perbaikan AC">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Perbaikan Kerusakan</h5>
                            <p class="card-text text-muted">Solusi cepat untuk AC bocor, tidak dingin, mati total, atau
                                gangguan lainnya dengan teknisi andal.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border border-primary border-2 rounded-4 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('/frontend/img/kantor.jpg') }}" class="card-img-top rounded-top-4"
                                alt="Servis AC Kantor">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Servis AC Kantor & Gedung</h5>
                            <p class="card-text text-muted">Layanan kontrak untuk servis berkala AC di perkantoran,
                                instansi, dan gedung komersial.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Service End -->
@endsection
