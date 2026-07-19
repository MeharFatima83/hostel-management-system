<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class RoomAllocation extends Model
{
    protected $fillable = [
         'id',  
        'student_id',
        'room_id',
        'allocation_date',
        'status'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}