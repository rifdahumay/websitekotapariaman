<?php

namespace App\Models\Profil_kota;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visi_Misi extends Model
{
    use HasFactory;

    protected $table = 'visi_misi';

    protected $fillable = [
        'title',
        'visi',
        'misi',
    ];
}
