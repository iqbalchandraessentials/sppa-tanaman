<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'street',
        'city',
        'province',
        'code_pos',
        'customers_id',
    ];
    
    protected $hidden = [
            'id',
            'created_at',
            'updated_at'
        ];
}
