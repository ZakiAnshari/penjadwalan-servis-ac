<?php

namespace App\Http\Controllers;

use App\Models\JadwalServis;
use App\Models\Pelanggan;
use App\Models\Teknisi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pelangganCount = Pelanggan::count();
        $teknisiCount = Teknisi::count();
        $jadwalCount = JadwalServis::count();
        $userCount = User::count();

        return view('admin.dashboard.index', compact(
            'pelangganCount',
            'teknisiCount',
            'jadwalCount',
            'userCount'
        ));
    }
}
