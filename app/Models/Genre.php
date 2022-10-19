<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Movie;

class Genre extends Model
{
    use HasFactory;


    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
