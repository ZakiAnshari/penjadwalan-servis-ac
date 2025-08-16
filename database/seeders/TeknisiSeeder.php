<?php

namespace Database\Seeders;

use App\Models\Teknisi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeknisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teknisis = [
            [
                'nama' => 'Riyanda Fitra',
                'no_hp' => '081234567890',
                'spesialisasi' => 'Instalasi AC',
                'alamat' => 'Jl. Merdeka No. 1, Padang',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Andi Wijaya',
                'no_hp' => '081234567891',
                'spesialisasi' => 'Service AC',
                'alamat' => 'Jl. Veteran No. 45, Padang',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Rudi Hartono',
                'no_hp' => '081234567892',
                'spesialisasi' => 'Pembersihan AC',
                'alamat' => 'Jl. Diponegoro No. 23, Padang',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Joko Purnomo',
                'no_hp' => '081234567893',
                'spesialisasi' => 'Instalasi Listrik',
                'alamat' => 'Jl. Sisingamangaraja No. 12, Padang',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Eko Prasetyo',
                'no_hp' => '081234567894',
                'spesialisasi' => 'Service Kulkas',
                'alamat' => 'Jl. Proklamasi No. 5, Padang',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Agus Saputra',
                'no_hp' => '081234567895',
                'spesialisasi' => 'Instalasi AC',
                'alamat' => 'Jl. Sudirman No. 8, Padang',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Slamet Riyadi',
                'no_hp' => '081234567896',
                'spesialisasi' => 'Service AC',
                'alamat' => 'Jl. Gajah Mada No. 18, Padang',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Hendra Gunawan',
                'no_hp' => '081234567897',
                'spesialisasi' => 'Instalasi Listrik',
                'alamat' => 'Jl. Thamrin No. 32, Padang',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Fajar Nugraha',
                'no_hp' => '081234567898',
                'spesialisasi' => 'Pembersihan AC',
                'alamat' => 'Jl. Imam Bonjol No. 25, Padang',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Dedi Mulyadi',
                'no_hp' => '081234567899',
                'spesialisasi' => 'Service AC',
                'alamat' => 'Jl. Pattimura No. 11, Padang',
                'status' => 'Aktif',
            ],
        ];

        foreach ($teknisis as $teknisi) {
            Teknisi::create($teknisi);
        }
    }
}
