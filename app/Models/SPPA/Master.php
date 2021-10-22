<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Master extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'products_id',
        'customers_id',        
    ];
    protected $hidden = [
        'id',
    ];


    public function tanaman()
    {
        return $this->hasOne(Customer::class,  'customers_id' ,'customers_id');        
    }
}
