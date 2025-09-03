@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h4 class="fw-bold d-flex align-items-center my-4">
                <i class="bx bx-user me-2 text-primary" style="font-size: 1.5rem;"></i>
                <span class="text-muted fw-light me-1"></span> Data Pelanggan
            </h4>
            <div class="col">
                <div class="card">
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
                            <h5>Table Pelanggan</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Form Search -->
                                <form method="GET" class="d-flex align-items-center my-3" style="max-width: 350px;">
                                    <div class="input-group shadow-sm" style="height: 38px; width: 100%;">
                                        <input type="text" name="name" value="{{ request('name') }}"
                                            class="form-control border-end-0 py-2 px-3" style="font-size: 0.9rem;"
                                            placeholder="Cari nama user..." aria-label="Search">
                                        <button class="btn btn-outline-primary px-3" type="submit"
                                            style="font-size: 0.9rem;">
                                            <i class="bx bx-search"></i>
                                        </button>
                                    </div>
                                </form>


                                <!-- Judul -->
                                <!-- Tombol Aksi -->
                                <div class="d-flex gap-2">
                                    <!-- Tombol Tambah -->
                                    <button type="button"
                                        class="btn btn-outline-success account-image-reset  d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#addProductModal">
                                        <i class="bx bx-plus me-2 d-block"></i>
                                        <span>Tambah</span>
                                    </button>

                                </div>
                            </div>

                            <!-- Modal tambah Data -->
                            <div class="modal fade" id="addProductModal" tabindex="-1"
                                aria-labelledby="addProductModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <!-- Judul -->
                                        <div class="modal-header border-bottom">
                                            <h5 class="modal-title mb-2" id="addProductModalLabel">Tambah Pelanggan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <form action="pelanggan-add" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <!-- Kolom Kiri -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" name="nama" class="form-control"
                                                                id="nama" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="no_hp" class="form-label">No HP</label>
                                                            <input type="text" name="no_hp" class="form-control"
                                                                id="no_hp" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email
                                                                (opsional)</label>
                                                            <input type="email" name="email" class="form-control"
                                                                id="email">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
                                                            <input type="number" name="jumlah_unit" id="jumlah_unit"
                                                                class="form-control" min="1" required>
                                                        </div>

                                                    </div>

                                                    <!-- Kolom Kanan -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="jenis_layanan" class="form-label">Jenis
                                                                Layanan</label>
                                                            <select name="jenis_layanan" id="jenis_layanan"
                                                                class="form-control" required>
                                                                <option value="">-- Pilih Jenis Layanan --</option>
                                                                <option value="Servis AC">Servis AC</option>
                                                                <option value="Isi / Tambah Freon">Isi / Tambah Freon
                                                                </option>
                                                                <option value="Pasang AC Baru">Pasang AC Baru</option>
                                                                <option value="Bongkar Pasang AC">Bongkar Pasang AC</option>
                                                                <option value="Perbaikan AC">Perbaikan AC</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <textarea name="alamat" class="form-control" id="alamat" rows="3" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="catatan" class="form-label">Catatan
                                                                (opsional)</label>
                                                            <textarea name="catatan" class="form-control" id="catatan" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tombol -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Table Data -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 5px">No</th>
                                        <th>Nama</th>
                                        <th style="width: 5px">No HP</th>
                                        <th style="width: 5px">Email</th>
                                        <th>Alamat</th>
                                        <th class="text-center" style="width: 12px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pelanggans as $index => $item)
                                        <tr>
                                            <td>{{ $pelanggans->firstItem() + $loop->index }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                <a href="pelanggan-show/{{ $item->id }}"
                                                    class="btn btn-icon btn-outline-info" title="Lihat Data">
                                                    <i class="bx bx-show"></i> {{-- atau gunakan bx-eye jika bx-show tidak tersedia --}}
                                                </a>

                                                <!-- Tombol Edit -->
                                                <a href="pelanggan-edit/{{ $item->id }}"
                                                    class="btn btn-icon btn-outline-primary">
                                                    <i class="bx bx-edit-alt"></i>
                                                </a>
                                                <!-- Tombol Hapus -->
                                                <a href="javascript:void(0)"
                                                    onclick="confirmDeletePelanggan({{ $item->id }}, @js($item->nama))"
                                                    style="display:inline;">
                                                    <button class="btn btn-icon btn-outline-danger">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Belum ada data pelanggan.</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>

                            <!-- Pagination -->
                            <div class="d-flex justify-content-end mt-3">
                                {{ $pelanggans->appends(request()->input())->links('pagination::bootstrap-4') }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
    @include('sweetalert::alert')
@endsection
