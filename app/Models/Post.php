<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'contenue', 'image', 'prix'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

}
