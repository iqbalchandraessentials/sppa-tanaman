<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskArea extends Model
{
    use HasFactory;
    protected $fillable = [
        'left',
        'right',
        'front',
        'behind',
        'fuel',
        'customers_id' 
    ];
    
    protected $hidden = [
            'id',
            'created_at',
            'updated_at'
        ];

}
