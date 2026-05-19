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
        'status',
    ];

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }
}
