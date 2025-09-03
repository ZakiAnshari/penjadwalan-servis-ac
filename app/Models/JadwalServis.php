<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalServis extends Model
{
    protected $fillable = [
        'pelanggan_id',
        'teknisi_id',
        'tanggal_service',
        'alamat_service',
        'jumlah_unit',
        'jenis_layanan',
        'catatan',
        'status',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class,'pelanggan_id');
    }

    public function teknisi()
    {
        return $this->belongsTo(Teknisi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
