<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    
    protected $fillable = [
        'floor_id',
        'apartment_number',
        'rooms',
        'area',
        'coords',
        'status',
    ];

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }
}
