<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Fee;
use App\Models\Notice;
use App\Models\Complaint;

class StudentDashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        $student = Student::where(
            'user_id',
            session('user_id')
        )->first();

        if (!$student) {

            return response("
                <div style='
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    font-family: Arial;
                    background: #f5f7fb;
                '>

                    <div style='
                        background: white;
                        padding: 30px;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                        text-align: center;
                        max-width: 500px;
                    '>

                        <h2 style='color: green;'>
                            Registration Successful!
                        </h2>

                        <p>
                            Your account has been created successfully.
                            <br><br>

                            Please wait for the administrator to create
                            your student profile.

                            <br><br>

                            You will be able to access your dashboard
                            once it is activated.
                        </p>

                        <a href='/logout'
                           style='
                               display: inline-block;
                               margin-top: 15px;
                               padding: 10px 20px;
                               background: #4f46e5;
                               color: white;
                               text-decoration: none;
                               border-radius: 5px;
                           '>

                            OK

                        </a>

                    </div>

                </div>
            ");
        }

        $fee = Fee::where(
            'student_id',
            $student->id
        )->first();

        /*
        |--------------------------------------------------------------------------
        | Get All Notices
        |--------------------------------------------------------------------------
        */

        $notices = Notice::latest()->get();

        $complaint = Complaint::where(
            'student_id',
            $student->id
        )
        ->latest()
        ->first();

        return view(
            'StudentDashboard.index',
            compact(
                'student',
                'fee',
                'notices',
                'complaint'
            )
        );
    }


  public function myRoom()
{
    if (!session()->has('user_id')) {
        return redirect('/login');
    }

    $student = Student::where(
        'user_id',
        session('user_id')
    )->first();

    if (!$student) {
        return redirect('/StudentDashboard');
    }

    // Student ki latest allocated room find karo
    $allocation = \App\Models\RoomAllocation::with('room')
        ->where('student_id', $student->id)
        ->where('status', 'Allocated')
        ->latest()
        ->first();

    return view(
        'StudentDashboard.myRoom',
        compact('student', 'allocation')
    );
}


    public function myFees()
    {
        $student = Student::where(
            'user_id',
            session('user_id')
        )->first();

        $fee = Fee::where(
            'student_id',
            $student->id
        )->first();

        return view(
            'StudentDashboard.myFees',
            compact(
                'student',
                'fee'
            )
        );
    }


    public function complaints()
    {
        $student = Student::where(
            'user_id',
            session('user_id')
        )->first();

        $complaints = Complaint::where(
            'student_id',
            $student->id
        )
        ->latest()
        ->get();

        return view(
            'StudentDashboard.complaints',
            compact('complaints')
        );
    }


    public function notices()
    {
        $notices = Notice::latest()->get();

        return view(
            'StudentDashboard.notices',
            compact('notices')
        );
    }
}