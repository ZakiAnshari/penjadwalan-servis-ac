<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Perhitungan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 13px;
            color: #000;
        }

        .header-logo {
            width: 80px;
            height: auto;
        }

        .kop-text {
            line-height: 1.3;
        }

        .kop-border {
            border-top: 3px solid #000;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #000 !important;
            padding: 8px !important;
        }

        .signature-block {
            margin-top: 60px;
        }

        @media print {
            .no-print {
                display: none;
            }

            .table th,
            .table td {
                font-size: 12px !important;
                border: 1px solid #000 !important;
            }

            .header-logo {
                width: 70px;
            }
        }
    </style>
</head>

<body class="bg-white">

    <div class="container py-3">
        <!-- Kop Surat -->
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-auto">
                <span class="app-brand-logo d-inline-block">
                    <!-- Simple Circle Logo with "B" -->
                    <svg width="50" height="50" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <!-- Bulatan -->
                        <circle cx="50" cy="50" r="48" fill="#696cff" />
                        <!-- Huruf B -->
                        <text x="50%" y="50%" text-anchor="middle" fill="#ffffff" font-size="48"
                            font-family="Arial, sans-serif" font-weight="bold" dominant-baseline="middle">
                            B
                        </text>
                    </svg>
                </span>
            </div>

            <!-- Teks Kop -->
            <div class="col text-center kop-text">
                <h5 class="mb-0 fw-bold text-uppercase">CV Britania Teknik Solok</h5>
                <h6 class="mb-0 text-uppercase">Layanan Servis AC & Perawatan</h6>
                <p class="mb-0 small">
                    Subarangkotobaru Asamjao, Solok, Indonesia, 27361
                </p>
            </div>
        </div>


        <!-- Garis Pembatas -->
        <div class="kop-border"></div>

        <!-- Judul Laporan -->



        <!-- Tabel Data -->
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th style="width: 5px;">No</th>
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
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Tanda Tangan -->
        <div class="row signature-block mt-4">
            <div class="col-6"></div>
            <div class="col-6 text-end">
                <p class="mb-1">{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</p>
                <p class="mb-5">Pemilik</p>
                <p class="fw-bold text-uppercase mb-1">Marwin Jambak Win Jambak</p>
            </div>
        </div>


        <!-- Script Print -->
        <script type="text/javascript">
            window.print();
        </script>
    </div>

</body>

</html>
