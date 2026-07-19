<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Fee;
use App\Models\Complaint;
use App\Models\RoomAllocation;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'mobile',
        'address',
        'room_number',
        'course',
        'gender',
        'parent_contact',
        'fees_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function fees()
    {
        return $this->hasMany(Fee::class, 'student_id');
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class, 'student_id');
    }

    public function roomAllocation()
    {
        return $this->hasOne(RoomAllocation::class, 'student_id');
    }
}