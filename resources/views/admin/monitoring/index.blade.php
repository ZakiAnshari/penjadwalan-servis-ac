@extends('layouts.admin')
@section('title', 'Monitoring')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold mb-4">Monitoring Jadwal Servis</h4>

        <div class="card p-4">
            <div class="">

                <div class="row">
                    @forelse ($jadwalservice as $jadwal)
                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-transparent border border-primary mb-3">
                                <!-- Header -->
                                <div class="card-header border-bottom border-light text-center">
                                    <strong>{{ $jadwal->teknisi->nama ?? 'Belum ditentukan' }}</strong>
                                </div>

                                <!-- Body -->
                                <div class="card-body">
                                    <h5 class="card-title text-white">Jadwal Servis</h5>

                                    <div class="mb-3">
                                        <label class="form-label">Jadwal Service</label>
                                        <input type="text" class="form-control"
                                            value="{{ \Carbon\Carbon::parse($jadwal->tanggal_service)->format('d F Y') }}"
                                            readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" rows="2" readonly>{{ $jadwal->alamat_service }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Jenis Layanan</label>
                                        <input type="text" class="form-control" value="{{ $jadwal->jenis_layanan }}"
                                            readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Jumlah Unit</label>
                                        <input type="text" class="form-control" value="{{ $jadwal->jumlah_unit }}"
                                            readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        @if ($jadwal->status === 'Selesai')
                                            <button class="btn btn-success w-100" disabled>{{ $jadwal->status }}</button>
                                        @elseif ($jadwal->status === 'Diproses')
                                            <button class="btn btn-danger w-100" disabled>{{ $jadwal->status }}</button>
                                        @else
                                            <input type="text" class="btn btn-warning w-100"
                                                value="{{ $jadwal->status }}" readonly>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="card bg-transparent border border-secondary mb-3">
                                <div class="card-header text-center">
                                    <strong>Jadwal Kosong</strong>
                                </div>
                                <div class="card-body text-center text-muted">
                                    <p>Tidak ada jadwal servis yang tersedia.</p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>



            </div>

        </div>
    </div>
@endsection
