@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h4 class="fw-bold d-flex align-items-center my-4">
                <i class="bx bx-user me-2 text-primary" style="font-size: 1.5rem;"></i>
                <span class="text-muted fw-light me-1"></span> Data Jadwal Service
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
                            <h5>Table Jadwal Service</h5>
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
                                            <h5 class="modal-title mb-2" id="addProductModalLabel">Tambah Jadwal Service
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <form action="jadwalservice-add" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <!-- Kolom Kiri -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="pelanggan_id" class="form-label">Pilih
                                                                Pelanggan</label>
                                                            <select name="pelanggan_id" id="pelanggan_id"
                                                                class="form-control" required>
                                                                <option value="">-- Pilih Pelanggan --</option>
                                                                @foreach ($pelanggans as $pelanggan)
                                                                    <option value="{{ $pelanggan->id }}"
                                                                        data-alamat="{{ $pelanggan->alamat }}"
                                                                        data-layanan="{{ $pelanggan->jenis_layanan ?? '' }}"
                                                                        data-unit="{{ $pelanggan->jumlah_unit ?? '' }}">
                                                                        {{ $pelanggan->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="teknisi_id" class="form-label">Pilih Teknisi</label>
                                                            <select name="teknisi_id" class="form-control" required>
                                                                <option disabled selected>Pilih Nama Teknisi</option>
                                                                @foreach ($teknisis as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="tanggal_service" class="form-label">Tanggal
                                                                Service</label>
                                                            <input type="date" name="tanggal_service"
                                                                id="tanggal_service" class="form-control" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
                                                            <input type="number" name="jumlah_unit" id="jumlah_unit"
                                                                class="form-control" readonly>
                                                        </div>
                                                    </div>

                                                    <!-- Kolom Kanan -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="jenis_layanan" class="form-label">Jenis
                                                                Layanan</label>
                                                            <input type="text" name="jenis_layanan" id="jenis_layanan"
                                                                class="form-control" readonly>
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="alamat_service" class="form-label">Alamat
                                                                Service</label>
                                                            <textarea name="alamat_service" id="alamat_service" class="form-control" readonly></textarea>
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="catatan" class="form-label">Catatan
                                                                (Opsional)</label>
                                                            <textarea name="catatan" id="catatan" class="form-control" rows="2"></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select name="status" id="status" class="form-control"
                                                                required>
                                                                <option value="Menunggu">Menunggu</option>
                                                                <option value="Diproses">Diproses</option>
                                                                <option value="Selesai">Selesai</option>
                                                            </select>
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
                                        <th>Nama Pelanggan</th>
                                        <th>Nama Teknisi</th>
                                        <th style="width: 12px;">Tanggal Servis</th>
                                        <th>Alamat Servis</th>
                                        <th style="width: 12px;">Status</th>
                                        <th class="text-center" style="width: 12px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($jadwalserviss as $index => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->pelanggan->nama ?? '-' }}</td>
                                            <td>{{ $item->teknisi->nama ?? '-' }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->tanggal_service)->translatedFormat('d F Y') }}
                                            </td>
                                            <td>{{ $item->alamat_service }}</td>
                                            <td>
                                                @if ($item->status === 'Diproses')
                                                    <span class="badge bg-warning text-dark">Diproses</span>
                                                @elseif ($item->status === 'Selesai')
                                                    <span class="badge bg-success">Selesai</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ $item->status }}</span>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="jadwalservice-show/{{ $item->id }}"
                                                    class="btn btn-icon btn-outline-info" title="Lihat Data">
                                                    <i class="bx bx-show"></i> {{-- atau gunakan bx-eye jika bx-show tidak tersedia --}}
                                                </a>

                                                <!-- Tombol Edit -->
                                                <a href="jadwalservice-edit/{{ $item->id }}"
                                                    class="btn btn-icon btn-outline-primary">
                                                    <i class="bx bx-edit-alt"></i>
                                                </a>
                                                <!-- Tombol Hapus -->
                                                <a href="javascript:void(0)"
                                                    onclick="confirmDeleteJadwalService({{ $item->id }}, @js($item->pelanggan->nama))"
                                                    style="display:inline;">
                                                    <button class="btn btn-icon btn-outline-danger">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Belum ada Jadwal Untuk Service.</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>

                            <!-- Pagination -->
                            <div class="d-flex justify-content-end mt-3">
                                {{ $jadwalserviss->appends(request()->input())->links('pagination::bootstrap-4') }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDeleteJadwalService(id, nama) {
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
                    window.location.href = `/jadwalservice-destroy/${id}`;
                }
            });
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pelangganSelect = document.getElementById('pelanggan_id');
            const layananInput = document.getElementById('jenis_layanan');
            const unitInput = document.getElementById('jumlah_unit');
            const alamatTextarea = document.getElementById('alamat_service');

            pelangganSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];

                const alamat = selectedOption.getAttribute('data-alamat');
                const layanan = selectedOption.getAttribute('data-layanan');
                const unit = selectedOption.getAttribute('data-unit');

                // Isi otomatis
                alamatTextarea.value = alamat || '';
                layananInput.value = layanan || '';
                unitInput.value = unit || '';
            });
        });
    </script>
    @include('sweetalert::alert')
@endsection
