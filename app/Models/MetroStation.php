<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetroStation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

//    public function businesses()
//    {
//        return $this->hasMany(Business::class);
//    }
    public function businesses()
    {
        return $this->belongsToMany(Business::class);
    }
}
