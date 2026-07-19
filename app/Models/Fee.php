<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Fee extends Model
{
    protected $fillable = [
        'id',
        'student_id',
        'total_fee',
        'paid_amount',
        'due_amount',
        'payment_date',
        'status'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
