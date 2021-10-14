<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'metro_station_id', 'object_type_id',

        'name', 'price', 'coords',

        'description', 'full_description',

        'org_form', 'square', 'ownership_type',
        'rents', 'shares_sold', 'with_license'
    ];

    public function metro_stations()
    {
        return $this->belongsToMany(MetroStation::class);
    }

    public function object_types()
    {
        return $this->belongsToMany(ObjectType::class);
    }
}
