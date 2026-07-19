<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Complaint extends Model
{
    protected $fillable = [
        'id',
        'student_id',
        'title',
        'description',
        'status'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}