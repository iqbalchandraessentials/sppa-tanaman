<?php

namespace App\Models\SPPA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'tsi',
        'loss_record',
        's_date',
        'e_date',
        'customers_id',
    ];
    
    protected $hidden = [
            'id',
            'created_at',
            'updated_at'
    ];

    public function risk()
    {
        return $this->hasMany(Risk::class, 'customers_id', 'customers_id');        
    }

    public function location()
    {
        return $this->hasOne(Location::class, 'customers_id', 'customers_id');
    }

    public function detail()
    {
        return $this->hasOne(InformationGarden::class, 'customers_id', 'customers_id');
    }

    public function risk_area()
    {
        return $this->hasOne(RiskArea::class, 'customers_id', 'customers_id');
    }
    
    public function additionalInfo()
    {
        return $this->hasOne(Consumer::class, 'customers_id', 'customers_id');        
    }
}
