<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hadiah; // Menggunakan namespace penuh untuk model Hadiah

class Anggota extends Model
{
    use HasFactory;

    protected $table = "anggota";
    
    public function hadiah()
    { 
        return $this->belongsToMany(Hadiah::class); // Menggunakan namespace penuh dan sintaks yang lebih jelas
   }
}