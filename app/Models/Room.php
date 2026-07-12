<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Room extends Model
{
    protected $fillable = [
        'room_number',
        'capacity',
        'occupied',
        'room_type',
        'rent',
        'status'
    ];

public function roomAllocations()
{
    return $this->hasMany(RoomAllocation::class);
}
}