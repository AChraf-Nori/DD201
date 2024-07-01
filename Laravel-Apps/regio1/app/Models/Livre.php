<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'pages', 'description', 'image', 'categorie_id'];

    public function catogorie() {
        return $this->belongsTo(Categorie::class);
    }
}
