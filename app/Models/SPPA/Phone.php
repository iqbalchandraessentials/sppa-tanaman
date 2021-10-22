<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $fillable = [
        'home	',
        'office',
        'hp',
        'fax',
        'customers_id	',
    ];
    
    protected $hidden = [
            'id',
            'created_at',
            'updated_at'
        ];
}
