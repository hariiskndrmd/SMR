<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;

    protected $fillable = ['id','product_id','image'];

    protected $table = 'images';
    protected $casts = [
        'image' => 'string',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class , 'product_id');
    }
}
