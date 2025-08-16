@extends('layouts.admin')
@section('title', 'Laporan')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <h5 class="pb-2 border-bottom">Table Laporan</h5>
                            <div class="d-flex justify-content-end align-items-center">
                                <!-- Tombol Aksi -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="{{ route('laporan.cetak') }}" class="btn btn-warning d-flex align-items-center"
                                        role="button" target="_blank">
                                        <i class="bx bx-printer me-1"></i> Cetak
                                    </a>
                                </div>
                            </div>
                            <!-- Table Data -->
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Tanggal Memesan</th>
                                        <th>Teknisi</th>
                                        <th>Tanggal Servis</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @forelse ($jadwalservice as $jadwal)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $jadwal->pelanggan->nama ?? '-' }}</td>
                                            <td>
                                                {{ $jadwal->pelanggan->created_at ? $jadwal->pelanggan->created_at->translatedFormat('d F Y') : '-' }}
                                            </td>
                                            <td>{{ $jadwal->teknisi->nama ?? 'Belum ditentukan' }}</td>
                                            <td>
                                                {{ $jadwal->tanggal_service ? \Carbon\Carbon::parse($jadwal->tanggal_service)->translatedFormat('d F Y') : '-' }}
                                            </td>
                                            <td>{{ $jadwal->status ?? '-' }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted">
                                                Tidak ada data jadwal servis
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('sweetalert::alert')
@endsection
