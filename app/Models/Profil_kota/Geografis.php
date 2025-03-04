<?php

namespace App\Models\Profil_kota;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Geografis extends Model
{
    use HasFactory;
    
    protected $table = 'geografis';  

    // Add the new fields to the $fillable array
    protected $fillable = [
        'title', 
        'location_boundary',  // For Location and Boundary
        'topography_climate', // For Topography and Climate
        'area_population',    // For Area and Population
        'image',              // For Image
    ];
}