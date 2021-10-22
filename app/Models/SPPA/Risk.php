<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;
    protected $fillable = [
        'rate_code',
        'rate',
        'premi',
        'customers_id	',
    ];
    
    protected $hidden = [
            'id',
            'created_at',
            'updated_at'
        ];
}
