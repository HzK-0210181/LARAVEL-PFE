<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'service_id',
        'Date',
        'car_type_id',
        'zone_id'
    ];
    public function cartype()
    {
        return $this->hasOne(CarType::class);
    }
    public function service()
    {
        return $this->hasOne(Service::class);
    }
    public function zone()
    {
        return $this->hasOne(Zone::class);
    }
}
