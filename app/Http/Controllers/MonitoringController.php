<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teknisi;
use App\Models\Pelanggan;
use App\Models\JadwalServis;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $jadwalservice = JadwalServis::with('teknisi')->get(); // <- ini penting
        $pelanggans = Pelanggan::all();
        $teknisis = Teknisi::all();
        $users = User::where('role_id', 3)->get();
        return view('admin.monitoring.index', compact(
            'jadwalservice',
            'pelanggans',
            'teknisis',
            'users'
        ));
    }
}
