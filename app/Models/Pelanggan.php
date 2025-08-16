<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = [
        'nama',
        'jenis_layanan',
        'jumlah_unit',
        'alamat',
        'no_hp',
        'email',
        'catatan',
    ];

    public function jadwalServis()
    {
        return $this->hasMany(JadwalServis::class);
    }
}
