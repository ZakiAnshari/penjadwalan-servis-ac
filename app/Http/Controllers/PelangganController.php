<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $roles = Roles::all();

        $name = $request->input('name');
        $paginate = $request->input('itemsPerPage', 5); // default 5

        $query = Pelanggan::query(); // <-- ganti dari User menjadi Pelanggan

        if (!empty($name)) {
            $query->where(function ($q) use ($name) {
                $q->where('nama', 'LIKE', '%' . $name . '%')
                    ->orWhere('id', 'LIKE', '%' . $name . '%');
            });
        }

        $pelanggans = $query->paginate($paginate)->withQueryString();

        return view('admin.pelanggan.index', compact('roles', 'user', 'pelanggans'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'jenis_layanan' => 'required|string',
            'jumlah_unit' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'email' => 'nullable|email|max:100',
            'catatan' => 'nullable|string',
        ]);

        Pelanggan::create($data);

        Alert::success('Sukses', 'Data pelanggan berhasil ditambahkan');
        return back();
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);

        // Validasi apakah data ditemukan
        if (!$pelanggan) {
            return redirect()->back()->with('error', 'Data pelanggan tidak ditemukan');
        }

        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama'     => 'required|string|max:100',
            'no_hp'    => 'required|string|max:20',
            'jenis_layanan'    => 'required|string|max:20',
            'jumlah_unit'    => 'required|string|max:20',
            'email'    => 'nullable|email|max:100',
            'alamat'   => 'required|string',
            'catatan'  => 'nullable|string',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($data);

        Alert::success('Sukses', 'Data pelanggan berhasil diperbarui');
        return redirect()->route('pelanggan.index');
    }

    public function destroy($id)
    {

        $pelanggan = Pelanggan::where('id', $id)->first();
        $pelanggan->delete();

        Alert::success('Success', 'Data berhasil di Hapus');
        return redirect()->route('pelanggan.index');
    }

    public function show($id)
    {
        $pelanggans = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.show', compact('pelanggans'));
    }
}
