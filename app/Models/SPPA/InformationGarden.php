<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationGarden extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'land_area',
        'hectares',
        'age',
        'spraying_record',
        'fertilization_record',
        'distance',
        'customers_id',
    ];
    
    protected $hidden = [
            'id',
            'created_at',
            'updated_at'
        ];
}
