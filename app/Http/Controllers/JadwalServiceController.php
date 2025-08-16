<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Teknisi;
use App\Models\Pelanggan;
use App\Models\JadwalServis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JadwalServiceController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $roles = Roles::all();
        $pelanggans = Pelanggan::all();
        $teknisis = Teknisi::all();

        $name = $request->input('name');
        $paginate = $request->input('itemsPerPage', 5);

        $query = JadwalServis::with('teknisi'); // eager load relasi teknisi

        if (!empty($name)) {
            $query->where(function ($q) use ($name) {
                $q->where('nama', 'LIKE', '%' . $name . '%')
                    ->orWhere('id', 'LIKE', '%' . $name . '%');
            });
        }

        $jadwalserviss = $query->paginate($paginate)->withQueryString();

        return view('admin.jadwalservice.index', compact('roles', 'user', 'jadwalserviss', 'pelanggans', 'teknisis'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'pelanggan_id'     => 'required|exists:pelanggans,id',
            'teknisi_id'       => 'required|exists:teknisis,id',
            'tanggal_service'  => 'required|date',
            'alamat_service'   => 'required|string',
            'jumlah_unit'      => 'required|integer|min:1',
            'jenis_layanan'    => 'required|string|max:20',
            'catatan'          => 'nullable|string',
            'status'           => 'required|string',
        ]);

        // Cek apakah kombinasi pelanggan dan teknisi sudah memiliki jadwal di tanggal yang sama
        $cekDuplikat = JadwalServis::where('pelanggan_id', $data['pelanggan_id'])
            ->where('teknisi_id', $data['teknisi_id'])
            ->whereDate('tanggal_service', $data['tanggal_service'])
            ->exists();

        if ($cekDuplikat) {
            Alert::error('Gagal', 'Pelanggan dan teknisi tersebut sudah memiliki jadwal servis pada tanggal yang sama.');
            return back()->withInput();
        }

        // Simpan data baru
        JadwalServis::create($data);

        Alert::success('Sukses', 'Data jadwal servis berhasil ditambahkan');
        return redirect()->route('jadwalservice.index');
    }


    public function edit($id)
    {
        $jadwalservice = JadwalServis::find($id);
        $pelanggans = Pelanggan::all();
        $teknisis = Teknisi::all();

        // Validasi apakah data ditemukan
        if (!$jadwalservice) {
            return redirect()->back()->with('error', 'Data pelanggan tidak ditemukan');
        }

        return view('admin.jadwalservice.edit', compact('jadwalservice', 'pelanggans', 'teknisis'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'pelanggan_id'     => 'required|exists:pelanggans,id',
            'teknisi_id'       => 'required|exists:teknisis,id',
            'tanggal_service'  => 'required|date',
            'alamat_service'   => 'required|string',
            'jumlah_unit'      => 'required|integer|min:1',
            'jenis_layanan'    => 'required|string|max:20',
            'catatan'          => 'nullable|string',
            'status'           => 'required|string',
        ]);

        // Cek apakah kombinasi pelanggan dan teknisi sudah memiliki jadwal pada tanggal yang sama (selain yang sedang diedit)
        $cekDuplikat = JadwalServis::where('id', '!=', $id)
            ->where('pelanggan_id', $data['pelanggan_id'])
            ->where('teknisi_id', $data['teknisi_id'])
            ->whereDate('tanggal_service', $data['tanggal_service'])
            ->exists();

        if ($cekDuplikat) {
            Alert::error('Gagal', 'Jadwal tidak dapat diperbarui karena pelanggan dan teknisi tersebut sudah memiliki jadwal lain pada tanggal yang sama.');
            return back()->withInput();
        }

        $jadwal = JadwalServis::findOrFail($id);
        $jadwal->update($data);

        Alert::success('Sukses', 'Data jadwal servis berhasil diperbarui');
        return redirect()->route('jadwalservice.index');
    }


    public function show($id)
    {
        $jadwalservice = JadwalServis::findOrFail($id);
        $teknisis = Teknisi::all();

        return view('admin.jadwalservice.show', compact('jadwalservice', 'teknisis'));
    }

    public function destroy($id)
    {

        $jadwalservice = JadwalServis::where('id', $id)->first();
        $jadwalservice->delete();

        Alert::success('Success', 'Data berhasil di Hapus');
        return redirect()->route('jadwalservice.index');
    }
}
