<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterRate extends Model
{
    use HasFactory;
    protected $fillable = [
        'rate_code	',
        'rate	',
        'rate_name',
        'rate_description',
    ];
    
    protected $hidden = [
            'id',
            'created_at',
            'updated_at'
        ];
}
