@extends('layouts.front_end')
@section('title', 'Tentang Kami')
@section('content')



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="{{ asset('/frontend/img/w1.webp') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang Kami</p>
                    <h1 style="font-size: 28px;" class="mb-4">Kami Hadir untuk Mempermudah Layanan Servis dan Pemasangan
                        AC Anda</h1>


                    <div class="border rounded p-4 shadow-sm">
                        <nav>
                            <div class="nav nav-tabs mb-4" id="nav-tab" role="tablist">
                                <button class="nav-link active fw-bold px-3 py-2" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Tentang</button>
                                <button class="nav-link fw-bold px-3 py-2" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Misi</button>
                                <button class="nav-link fw-bold px-3 py-2" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Visi</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- Tentang -->
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>BRITANIA hadir sebagai solusi layanan servis dan pemasangan AC yang handal dan
                                    terpercaya.</p>
                                <p class="mb-0">Fokus kami adalah memberikan hasil terbaik dengan kualitas kerja
                                    profesional dan layanan yang cepat.</p>
                            </div>
                            <!-- Misi -->
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <p>Menyediakan layanan servis dan pemasangan AC yang responsif dan profesional dengan harga
                                    terjangkau.</p>
                                <p class="mb-0">Mengutamakan kepuasan pelanggan melalui pengerjaan yang rapi, tepat waktu,
                                    dan tenaga teknisi yang berpengalaman.</p>
                            </div>
                            <!-- Visi -->
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>Menjadi pilihan utama masyarakat dalam layanan servis dan pemasangan AC yang terpercaya
                                    di Sumatera Barat.</p>
                                <p class="mb-0">Membangun reputasi sebagai penyedia jasa yang unggul dalam kualitas dan
                                    teknologi.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <!-- Fitur 1 -->
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center h-100">
                            <div class="flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle bg-primary"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-money-bill text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="mb-1">Tanpa Biaya Tersembunyi</h5>
                                <p class="mb-0 small text-muted">Harga transparan, jelas sejak awal tanpa biaya tambahan
                                    mengejutkan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fitur 2 -->
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center h-100">
                            <div class="flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle bg-primary"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-tools text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="mb-1">Teknisi Profesional</h5>
                                <p class="mb-0 small text-muted">Tim ahli berpengalaman, menjamin kualitas servis dan
                                    instalasi AC terbaik.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fitur 3 -->
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center h-100">
                            <div class="flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle bg-primary"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-headset text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="mb-1">Layanan 24/7</h5>
                                <p class="mb-0 small text-muted">Kapan pun Anda butuh bantuan, tim kami siap sedia membantu
                                    Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- About End -->

@endsection
