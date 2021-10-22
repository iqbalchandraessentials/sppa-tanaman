<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bhirt',
        'address',
        'identity',
        'npwp',
        'nationality',
        'payment_source',
        'customer_type',
        'customers_id',
    ];
    
    protected $hidden = [
            'id',
            'created_at',
            'updated_at'
    ];
    public function telephone()
    {
        return $this->hasOne(Phone::class, 'customers_id', 'customers_id');
    }
    
    public function additional()
    {
        return $this->hasOne(AdditionalData::class, 'customers_id', 'customers_id');
    }
}
