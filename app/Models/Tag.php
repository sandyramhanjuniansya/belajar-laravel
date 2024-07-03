<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function article()
    {
        return $this->belongsTo(Article::class); // Menggunakan namespace penuh dan sintaks yang lebih jelas
    }
}