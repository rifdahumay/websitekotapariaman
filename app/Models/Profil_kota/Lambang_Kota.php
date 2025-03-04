<?php

namespace App\Models\Profil_kota;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lambang_Kota extends Model
{
    use HasFactory;

    protected $table = 'lambang_kota'; 
    protected $fillable = [
        'image',  
        'deskripsi',  
    ];
}