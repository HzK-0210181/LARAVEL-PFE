<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
<<<<<<< HEAD
        'group_id'
    ];
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
=======
    ];
>>>>>>> 2c1d119 (laravel backend api)
}
