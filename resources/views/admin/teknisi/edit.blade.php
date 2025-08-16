@extends('layouts.admin')
@section('title', 'Edit')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold d-flex align-items-center my-4">


            <i class="bx bx-user me-2 text-primary" style="font-size: 1.5rem;"></i>
            <span class="text-muted fw-light me-1"></span> Edit Teknisi
        </h4>
        <div class="card">
            <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-3">
                <a class="mx-4 my-4" href="{{ route('teknisi.index') }}">
                    <button class="btn btn-outline-primary border-1 rounded-1 px-3 py-1 d-flex align-items-center"
                        data-bs-toggle="tooltip" title="Kembali">
                        <i class="bi bi-arrow-left fs-5 mx-1"></i>
                        <span class="fw-normal">Kembali</span>
                    </button>
                </a>
            </div>


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
                    <form action="{{ url('teknisi-edit/' . $teknisi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <!-- Kolom Kiri -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        value="{{ $teknisi->nama }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No HP</label>
                                    <input type="text" name="no_hp" class="form-control" id="no_hp"
                                        value="{{ $teknisi->no_hp }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="spesialisasi" class="form-label">Spesialisasi (opsional)</label>
                                    <input type="text" name="spesialisasi" class="form-control" id="spesialisasi"
                                        value="{{ $teknisi->spesialisasi }}">
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" class="form-select" id="status" required>
                                        <option value="">Pilih</option>
                                        <option value="Aktif" {{ $teknisi->status == 'Aktif' ? 'selected' : '' }}>Aktif
                                        </option>
                                        <option value="Tidak Aktif"
                                            {{ $teknisi->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat" rows="5" required>{{ $teknisi->alamat }}</textarea>
                                </div>


                            </div>

                            <!-- Tombol -->
                            <div class="text-end btn-page mb-0 mt-4">
                                <a href="{{ route('teknisi.index') }}" class="btn btn-outline-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>


    </div>

    @include('sweetalert::alert')
@endsection
