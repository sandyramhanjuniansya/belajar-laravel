<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota; // Menggunakan namespace penuh untuk model Anggota

class Hadiah extends Model
{
    use HasFactory;

    protected $table = "hadiah";
 
    public function anggota()
    {
        return $this->belongsToMany(Anggota::class); // Menggunakan namespace penuh dan sintaks yang lebih jelas
    }
}