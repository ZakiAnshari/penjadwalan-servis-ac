<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    protected $fillable = [
        'nama',
        'no_hp',
        'spesialisasi',
        'alamat',
        'status',
    ];


    public function jadwalServis()
    {
        return $this->hasMany(JadwalServis::class);
    }
}
