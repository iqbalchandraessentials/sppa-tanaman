<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'code_product',
        'description',
    ];

    public function tanaman()
    {
        return $this->hasOne(Master::class, 'products_id', 'code_product');        
    }
}
