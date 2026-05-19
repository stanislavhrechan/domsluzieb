<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable = [
        'building_id',
        'floor_number',
    ];

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
