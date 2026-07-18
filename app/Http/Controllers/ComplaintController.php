<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\Student;

class ComplaintController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */

    // Display All Complaints
    public function index()
    {
        $complaints = Complaint::with('student')->get();

        return view('complaint.index', compact('complaints'));
    }

    // Show Add Complaint Form
    public function create()
    {
        $students = Student::all();

        return view('complaint.create', compact('students'));
    }

    // Store Complaint
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        Complaint::create([
            'student_id' => $request->student_id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'Pending',
        ]);

        return redirect('/complaints')
            ->with('success', 'Complaint Added Successfully');
    }

    // Show Edit Complaint Form
    public function edit($id)
    {
        $complaint = Complaint::findOrFail($id);

        $students = Student::all();

        return view(
            'complaint.edit',
            compact('complaint', 'students')
        );
    }

    // Update Complaint
    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required',
            'status' => 'required|in:Pending,Solved',
        ]);

        $complaint = Complaint::findOrFail($id);

        $complaint->update([
            'student_id' => $request->student_id,
            'status' => $request->status,
        ]);

        return redirect('/complaints')
            ->with('success', 'Complaint Updated Successfully');
    }

    // Delete Complaint
    public function destroy($id)
    {
        Complaint::destroy($id);

        return redirect('/complaints')
            ->with('success', 'Complaint Deleted Successfully');
    }


    /*
    |--------------------------------------------------------------------------
    | STUDENT
    |--------------------------------------------------------------------------
    */

    // Show Student Complaint Form
    public function studentCreate()
    {
        return view('StudentDashboard.createComplaint');
    }

    // Store Student Complaint
    public function studentStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $student = Student::where(
            'user_id',
            session('user_id')
        )->first();

        Complaint::create([
            'student_id' => $student->id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'Pending',
        ]);

        return redirect('/student-complaints')
            ->with('success', 'Complaint Submitted Successfully');
    }

    // Display Student Complaints
    public function studentComplaints()
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
}