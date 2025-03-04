<?php

namespace App\Models\Profil_kota;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sejarah extends Model
{
    use HasFactory;
    
    protected $table = 'sejarah';  
    
    protected $fillable = [
        'title', 
        'asal_usul', 
        'perkembangan_sejarah', 
        'kota_pariaman_saat_ini', 
    ];
}