<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    // use HasFactory;

    protected $table = "artikels";

    protected $fillable = [
        'judul',
        'category_id',
        'slug',
        'keterangan',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    
}
