@extends('layouts.front_end')
@section('title', 'Kontak')
@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kontak Kami</p>
                    <h1 class="display-5 mb-4">Punya Pertanyaan? Hubungi Tim Service AC Kami</h1>
                    <p class="mb-4">
                        Kami siap membantu segala kebutuhan perawatan dan perbaikan AC Anda, mulai dari pengecekan,
                        pembersihan, hingga penggantian sparepart.
                        Kirim pesan melalui formulir di bawah ini atau hubungi kami langsung untuk respon cepat.
                    </p>
                    <form action="{{ route('pelangganpesan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama Lengkap" required>
                                    <label for="nama">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="no_hp" name="no_hp"
                                        placeholder="Nomor Telepon / WhatsApp" required>
                                    <label for="no_hp">Nomor Telepon / WhatsApp</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email (Opsional)">
                                    <label for="email">Email (Opsional)</label>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="jenis_layanan" name="jenis_layanan" required>
                                        <option value="" selected disabled>Pilih Layanan</option>
                                        <option value="servis">Servis AC</option>
                                        <option value="isi-freon">Isi / Tambah Freon</option>
                                        <option value="pasang-baru">Pasang AC Baru</option>
                                        <option value="bongkar-pasang">Bongkar Pasang AC</option>
                                        <option value="perbaikan">Perbaikan AC</option>
                                    </select>
                                    <label for="jenis_layanan">Jenis Layanan</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="jumlah_unit" name="jumlah_unit"
                                        placeholder="Jumlah Unit AC" required>
                                    <label for="jumlah_unit">Jumlah Unit AC</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Detail Alamat" style="height: 100px" required></textarea>
                                    <label for="alamat">Detail Alamat</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="catatan" name="catatan" placeholder="Catatan (Opsional)" style="height: 100px"></textarea>
                                    <label for="catatan">Catatan</label>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-primary py-3 px-5 w-100" type="submit">Kirim Permintaan</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.416897027037!2d100.67209109999999!3d-0.8127669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2b3386e267dba7%3A0xda53446306207cad!2sBRITANIA%20SERVIS%20Dan%20JASA%20PASANG%20AC!5e0!3m2!1sid!2sid!4v1754686963063!5m2!1sid!2sid"
                            width="600" height="602" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
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
