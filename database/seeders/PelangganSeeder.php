<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        $pelanggan = [
            [
                'nama' => 'Budi Santoso',
                'jenis_layanan' => 'Servis AC Berkala',
                'jumlah_unit' => 2,
                'alamat' => 'Jl. Merdeka No. 10, Padang',
                'no_hp' => '081234567890',
                'email' => 'budi@example.com',
                'catatan' => 'AC sering tidak dingin',
            ],

        ];

        foreach ($pelanggan as $data) {
            Pelanggan::create($data);
        }
    }
}
