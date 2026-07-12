<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fee;
use App\Models\Student;

class FeeController extends Controller
{
    public function index()
    {
        $fees = Fee::with('student')->get();
        return view('fee.index',compact('fees'));
    }

    public function create()
    {
        $students = Student::all();
        return view('fee.create',compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id'=>'required',
            'total_fee'=>'required',
            'paid_amount'=>'required',
            'due_amount'=>'required',
            'payment_date'=>'required',
            'status'=>'required'
        ]);

        Fee::create($request->all());

        return redirect('/fees')->with('success','Fee Added Successfully');
    }

    public function edit($id)
    {
        $fee=Fee::findOrFail($id);
        $students=Student::all();

        return view('fee.edit',compact('fee','students'));
    }

    public function update(Request $request,$id)
    {
        $fee=Fee::findOrFail($id);

        $fee->update($request->all());

        return redirect('/fees')->with('success','Fee Updated Successfully');
    }

    public function destroy($id)
    {
        Fee::destroy($id);

        return redirect('/fees')->with('success','Fee Deleted Successfully');
    }
}