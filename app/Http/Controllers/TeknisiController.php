<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TeknisiController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $roles = Roles::all();
        $name = $request->input('name');
        $paginate = $request->input('itemsPerPage', 5);

        $query = Teknisi::query(); // HILANGKAN with('user')

        if (!empty($name)) {
            // Cari berdasarkan nama langsung dari kolom teknisi
            $query->where('nama', 'like', '%' . $name . '%');
        }

        $teknisis = $query->paginate($paginate)->withQueryString();

        return view('admin.teknisi.index', compact('roles', 'user', 'teknisis'));
    }


    public function store(Request $request)
    {
        // Validasi data input
        $data = $request->validate([
            'nama'          => 'required|string|max:100',
            'no_hp'         => 'required|string|max:20',
            'spesialisasi'  => 'nullable|string|max:100',
            'alamat'        => 'required|string|max:255',
            'status'        => 'required|in:Aktif,Tidak Aktif',
        ]);

        // Simpan data ke database
        Teknisi::create($data);

        // Notifikasi sukses
        Alert::success('Sukses', 'Data teknisi berhasil ditambahkan');

        // Redirect ke halaman daftar teknisi
        return redirect()->route('teknisi.index');
    }

    public function edit($id)
    {
        $teknisi = Teknisi::find($id);

        // Validasi apakah data ditemukan
        if (!$teknisi) {
            return redirect()->back()->with('error', 'Data teknisi tidak ditemukan');
        }

        return view('admin.teknisi.edit', compact('teknisi'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama'          => 'required|string|max:100',
            'no_hp'         => 'required|string|max:20',
            'spesialisasi'  => 'nullable|string|max:100',
            'alamat'        => 'required|string|max:255',
            'status'        => 'required|in:Aktif,Tidak Aktif',
        ]);

        $teknisi = Teknisi::findOrFail($id);
        $teknisi->update($data);

        Alert::success('Sukses', 'Data teknisi berhasil diperbarui');
        return redirect()->route('teknisi.index');
    }


    public function destroy($id)
    {

        $teknisi = Teknisi::where('id', $id)->first();
        $teknisi->delete();

        Alert::success('Success', 'Data berhasil di Hapus');
        return redirect()->route('teknisi.index');
    }
}
