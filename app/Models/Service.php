<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'text',
        'prix'
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
