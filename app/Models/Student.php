<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'mobile',
        'address',
        'room_number',
        'course',
        'gender',
        'parent_contact',
        'fees_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function roomAllocation()
    {
        return $this->hasOne(RoomAllocation::class);
    }
}