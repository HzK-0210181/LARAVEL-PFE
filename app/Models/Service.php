<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======
    protected $fillable=[
        'libelle',
        'description',
        'text',
        'prix'
    ];
>>>>>>> 2c1d119 (laravel backend api)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
