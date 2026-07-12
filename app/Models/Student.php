<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'mobile',
        'address',
        'room_number',
        'course',
        'gender',
        'parent_contact',
        'fees_status',
    ];

public function roomAllocations()
{
    return $this->hasMany(RoomAllocation::class);
}
}