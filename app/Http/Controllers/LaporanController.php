<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teknisi;
use App\Models\Pelanggan;
use App\Models\JadwalServis;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $jadwalservice = JadwalServis::with('teknisi')->get(); // <- ini penting
        $pelanggans = Pelanggan::all();
        $teknisis = Teknisi::all();
        $users = User::where('role_id', 3)->get();
        return view('admin.laporan.index', compact(
            'jadwalservice',
            'pelanggans',
            'teknisis',
            'users'
        ));
    }

    public function cetaklaporan()
    {
        $jadwalservice = JadwalServis::with('teknisi')->get(); // <- ini penting
        $pelanggans = Pelanggan::all();
        $teknisis = Teknisi::all();
        $users = User::where('role_id', 3)->get();
        return view('admin.laporan.cetak', compact(
            'jadwalservice',
            'pelanggans',
            'teknisis',
            'users'
        ));
    }
}
