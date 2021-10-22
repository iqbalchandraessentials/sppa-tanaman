<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalData extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_one',
        'field_two',
        'field_three',
        'field_four',
        'customers_id',
    ];
    
    protected $hidden = [
            'id',
            'created_at',
            'updated_at'
    ];
}
