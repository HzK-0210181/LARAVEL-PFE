<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'zone_id'
    ];
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
    public function worker()
    {
        return $this->hasMany(Worker::class);
    }
}
