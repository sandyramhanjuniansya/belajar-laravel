<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag; // Import model Tag

class Article extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->hasMany(Tag::class); // Menggunakan namespace penuh dan sintaks yang lebih jelas
    }
}