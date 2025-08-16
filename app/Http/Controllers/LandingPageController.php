<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingpage.home');
    }

    public function tentangkami()
    {
        return view('landingpage.tentangkami');
    }

    public function layanan()
    {
        return view('landingpage.layanan');
    }

    public function kontak()
    {
        return view('landingpage.kontak');
    }

    public function store(Request $request)
    {
        // Cek apakah data dengan nama dan alamat yang sama sudah ada
        $exists = Pelanggan::where('nama', $request->nama)
            ->where('alamat', $request->alamat)
            ->exists();

        if ($exists) {
            Alert::warning('Peringatan', 'Data pelanggan dengan nama & alamat ini sudah ada!');
            return back()->withInput(); // biar input tetap terisi
        }

        // Validasi data
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'jenis_layanan' => 'required|string',
            'jumlah_unit' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'email' => 'nullable|email|max:100',
            'catatan' => 'nullable|string',
        ]);

        // Simpan data baru
        Pelanggan::create($data);

        Alert::success('Sukses', 'Data pelanggan berhasil ditambahkan');
        return back();
    }
}
