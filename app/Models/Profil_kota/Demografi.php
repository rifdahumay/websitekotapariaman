<?php

namespace App\Models\Profil_kota;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demografi extends Model
{
    use HasFactory;

    protected $table = 'demografi';

    protected $fillable = [
        'title',
        'deskripsi',
        'jumlah_penduduk',
        'struktur_umur',
        'komposisi_etnis',
        'sebaran_agama'
    ];
}
