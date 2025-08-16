@extends('layouts.front_end')
@section('title', 'Home')
@section('content')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="position-relative">
                        <img class="w-100" style="height: 100vh; object-fit: cover;"
                            src="{{ asset('/frontend/img/w2.webp') }}" alt="Image">
                        <!-- Overlay gelap -->
                        <div class="position-absolute top-0 start-0 w-100 h-100"
                            style="background-color: rgba(0, 0, 0, 0.7);">
                        </div>
                        <!-- Konten teks -->
                        <div class="carousel-caption d-flex align-items-center h-100">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-8">
                                        <p class="d-inline-block border border-white rounded text-white fw-semi-bold py-1 px-3 animated slideInDown"
                                            style="font-size: 28px;">
                                            Selamat Datang di CV BRITANIA TEKNIK
                                        </p>
                                        <h3 class="mb-4 text-white animated slideInDown" style="font-size: 52px;">
                                            BRITANIA SERVIS | JASA PASANG AC
                                        </h3>
                                        <a href="#" class="btn btn-primary py-2 px-4 animated slideInDown">Lihat
                                            Layanan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Navigasi -->
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


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


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5 bg-primary">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Jumlah Pelanggan -->
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">200</h1>
                    <span class="fs-5 text-white">Pelanggan</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>

                <!-- Jumlah Servis Selesai -->
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-tools fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">150</h1>
                    <span class="fs-5 text-white">Servis Diselesaikan</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>

                <!-- Jumlah Teknisi -->
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-user-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">12</h1>
                    <span class="fs-5 text-white">Teknisi Aktif</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>

                <!-- Testimoni atau Ulasan Positif -->
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-star fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">200</h1>
                    <span class="fs-5 text-white">Ulasan Positif</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div>

    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kenapa Memilih Kami</p>
                    <h1 class="display-5 mb-4">Alasan Mengapa BRITANIA Jadi Pilihan Terbaik!</h1>
                    <p class="mb-4">
                        BRITANIA Servis dan Jasa Pasang AC memberikan pelayanan profesional dan tepat waktu dengan teknisi
                        berpengalaman serta harga yang transparan dan bersahabat.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#layanan">Lihat Layanan</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-clock fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Respon Cepat</h4>
                                        <p class="mb-3">Tim kami siap melayani kebutuhan Anda dengan waktu respon yang
                                            cepat dan profesional.</p>
                                        <a class="fw-semi-bold" href="#">Selengkapnya <i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-headset fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Bantuan & Konsultasi</h4>
                                        <p class="mb-3">Dapatkan panduan serta konsultasi gratis untuk memilih jenis
                                            layanan yang sesuai dengan kebutuhan Anda.</p>
                                        <a class="fw-semi-bold" href="#">Selengkapnya <i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Layanan Bergaransi</h4>
                                <p class="mb-3">Kami memberikan garansi untuk setiap layanan servis dan pemasangan demi
                                    kepuasan Anda.</p>
                                <a class="fw-semi-bold" href="#">Selengkapnya <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


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

    <!-- Callback Start -->
    <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                                Hubungi Kami
                            </p>
                            <h1 style="font-size: 35px;" class="mb-5">Form Pemesanan Layanan Servis & Pasang AC</h1>
                            <p class="text-muted">
                                Isi formulir di bawah ini untuk melakukan pemesanan atau konsultasi layanan BRITANIA SERVIS
                                DAN JASA PASANG AC.
                            </p>
                        </div>
                        <form action="pelangganpesan-add" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nama"
                                            placeholder="Nama Lengkap" name="nama">
                                        <label for="nama">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobile"
                                            placeholder="Nomor Telepon / WhatsApp" name="no_hp">
                                        <label for="mobile">Nomor Telepon / WhatsApp</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Email (Opsional)" name="email">
                                        <label for="email">Email (Opsional)</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="serviceType" name="jenis_layanan" required>
                                            <option value="" selected disabled>Pilih Layanan</option>
                                            <option value="servis">Servis AC</option>
                                            <option value="isi-freon">Isi / Tambah Freon</option>
                                            <option value="pasang-baru">Pasang AC Baru</option>
                                            <option value="bongkar-pasang">Bongkar Pasang AC</option>
                                            <option value="perbaikan">Perbaikan AC</option>
                                        </select>
                                        <label for="serviceType">Jenis Layanan</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="jumlah_unit"
                                            placeholder="Jumlah Unit AC" name="jumlah_unit">
                                        <label for="jumlah_unit">Jumlah Unit AC</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Tuliskan detail alamat atau keluhan AC" id="message"
                                            style="height: 70px" name="alamat"></textarea>
                                        <label for="message">Detail Alamat</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Tuliskan Catatan yang ingin disampaikan" id="message"
                                            style="height: 70px" name="catatan"></textarea>
                                        <label for="message">Catatan</label>
                                    </div>
                                </div>

                                <!-- Tombol Kirim Permintaan -->
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kirim Permintaan</button>
                                </div>

                                <!-- Tombol WhatsApp -->
                                <div class="col-12 text-center">
                                    <a href="https://wa.me/6281234567890?text=Halo%20Britania%20Servis%2C%20saya%20ingin%20memesan%20layanan%20servis%20AC."
                                        target="_blank" class="btn btn-success w-100 py-3 mt-2">
                                        <i class="fab fa-whatsapp me-2"></i> Hubungi via WhatsApp
                                    </a>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->

    <!-- Harga Service AC Start -->
    <div class="container-fluid my-5 pt-5">
        <div class="container">
            <div class="text-center mb-5">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                    Daftar Harga
                </p>
                <h1 style="font-size: 35px;">Harga Layanan Servis & Pasang AC</h1>
                <p class="text-muted">
                    Berikut adalah daftar harga estimasi layanan BRITANIA SERVIS. Harga dapat berubah sesuai kondisi di
                    lapangan.
                </p>
            </div>

            <div class="table-responsive wow fadeInUp" data-wow-delay="0.2s">
                <table class="table table-bordered table-hover  align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Jenis Layanan</th>
                            <th>Deskripsi</th>
                            <th>Harga Mulai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Servis AC</td>
                            <td>Pembersihan unit indoor & outdoor, pengecekan freon, dan perawatan ringan.</td>
                            <td>Rp 100.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Isi / Tambah Freon</td>
                            <td>Penambahan freon R32 / R410A sesuai kebutuhan unit AC.</td>
                            <td>Rp 150.000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pasang AC Baru</td>
                            <td>Instalasi unit baru lengkap dengan pipa, bracket, dan pengaturan posisi.</td>
                            <td>Rp 450.000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Bongkar Pasang AC</td>
                            <td>Membongkar unit lama dan memasang kembali di lokasi baru.</td>
                            <td>Rp 350.000</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Perbaikan AC</td>
                            <td>Perbaikan masalah AC seperti bocor, tidak dingin, atau mati total.</td>
                            <td>Mulai Rp 200.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Harga Service AC End -->


    {{-- GALLERY --}}
    <style>
        .gallery-item img {
            width: 100%;
            height: 250px;
            /* tinggi seragam */
            object-fit: cover;
            /* biar gambar tidak ketarik/gepeng */
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }
    </style>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Galeri Kami</p>
                <h1 class="display-5 mb-5">Dokumentasi Pekerjaan</h1>
            </div>
            <div class="row g-4">
                <!-- Gambar 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset('/frontend/img/10.jpg') }}" alt="Service AC 1" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="{{ asset('/frontend/img/10.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset('/frontend/img/11.jpg') }}" alt="Service AC 1" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="{{ asset('/frontend/img/11.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset('/frontend/img/12.jpg') }}" alt="Service AC 1" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="{{ asset('/frontend/img/12.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset('/frontend/img/13.jpg') }}" alt="Service AC 1" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="{{ asset('/frontend/img/13.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset('/frontend/img/14.jpg') }}" alt="Service AC 1" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="{{ asset('/frontend/img/14.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset('/frontend/img/15.jpg') }}" alt="Service AC 1" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="{{ asset('/frontend/img/15.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset('/frontend/img/16.jpg') }}" alt="Service AC 1" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="{{ asset('/frontend/img/16.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset('/frontend/img/17.jpg') }}" alt="Service AC 1" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="{{ asset('/frontend/img/17.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-item">
                        <img src="{{ asset('/frontend/img/18.jpg') }}" alt="Service AC 1" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="{{ asset('/frontend/img/18.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Bootstrap -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">
                    <img src="" class="img-fluid rounded" id="modalImage" alt="Preview">
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk ganti gambar modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const imageModal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');

            imageModal.addEventListener('show.bs.modal', function(event) {
                const triggerImage = event.relatedTarget;
                const imageSrc = triggerImage.getAttribute('data-bs-image');
                modalImage.src = imageSrc;
            });
        });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDeletePelanggan(id, nama) {
            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: `"${nama}" akan dihapus secara permanen!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `/pelanggan-destroy/${id}`;
                }
            });
        }
    </script>
    @include('sweetalert::alert')

@endsection
