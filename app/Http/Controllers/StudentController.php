<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

class StudentController extends Controller
{
    // Show Student List
    public function index()
    {
        $students = Student::with('user')->get();

        return view('student.index', compact('students'));
    }

    // Show Add Student Form
  // Show Add Student Form
public function create()
{
    $users = User::where('role', 'student')
                 ->whereDoesntHave('student')
                 ->get();

    return view('student.create', compact('users'));
}

    // Store Student
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required',
            'mobile' => 'required|unique:students,mobile',
            'address' => 'required',
            'room_number' => 'required',
            'course' => 'required',
            'gender' => 'required',
            'parent_contact' => 'required',
            'fees_status' => 'required',
        ]);

        Student::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'room_number' => $request->room_number,
            'course' => $request->course,
            'gender' => $request->gender,
            'parent_contact' => $request->parent_contact,
            'fees_status' => $request->fees_status,
        ]);

        return redirect('/students')
            ->with('success', 'Student Added Successfully');
    }

    // Show Edit Form
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        $users = User::all();

        return view('student.edit', compact('student', 'users'));
    }

    // Update Student
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required',
            'mobile' => 'required|unique:students,mobile,' . $id,
            'address' => 'required',
            'room_number' => 'required',
            'course' => 'required',
            'gender' => 'required',
            'parent_contact' => 'required',
            'fees_status' => 'required',
        ]);

        $student->update([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'room_number' => $request->room_number,
            'course' => $request->course,
            'gender' => $request->gender,
            'parent_contact' => $request->parent_contact,
            'fees_status' => $request->fees_status,
        ]);

        return redirect('/students')
            ->with('success', 'Student Updated Successfully');
    }

    // Delete Student
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect('/students')
            ->with('success', 'Student Deleted Successfully');
    }
}