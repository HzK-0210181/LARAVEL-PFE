<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======
    protected $fillable=[
        'type',
        'margin'
    ];
>>>>>>> 2c1d119 (laravel backend api)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
