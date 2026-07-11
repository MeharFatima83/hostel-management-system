<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'mobile' => 'required|unique:students,mobile',
        'address' => 'required',
        'room_number' => 'required',
        'course' => 'required',
        'gender' => 'required',
        'parent_contact' => 'required',
        'fees_status' => 'required',
    ]);

    $student = Student::create([
        'name' => $request->name,
        'mobile' => $request->mobile,
        'address' => $request->address,
        'room_number' => $request->room_number,
        'course' => $request->course,
        'gender' => $request->gender,
        'parent_contact' => $request->parent_contact,
        'fees_status' => $request->fees_status,
    ]);

    return redirect('/students/create')
    ->with('success', 'Student added successfully.');
}



public function index()
{
    $students = Student::all();

    return view('student.index', compact('students'));
}
public function edit($id)
{
    $student = Student::findOrFail($id);

    return view('student.edit', compact('student'));
}

public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);

    $student->update([
        'name' => $request->name,
        'mobile' => $request->mobile,
        'address' => $request->address,
        'room_number' => $request->room_number,
        'course' => $request->course,
        'gender' => $request->gender,
        'parent_contact' => $request->parent_contact,
        'fees_status' => $request->fees_status,
    ]);

    return redirect('/students')->with('success', 'Student Updated Successfully');
}

public function destroy($id)
{
    $student = Student::findOrFail($id);

    $student->delete();

    return redirect('/students')->with('success', 'Student Deleted Successfully');
}
 }