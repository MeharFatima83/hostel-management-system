<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fee;
use App\Models\Student;

class FeeController extends Controller
{
    // Display Fee List
    public function index()
    {
        $fees = Fee::with('student')->get();

        return view(
            'fee.index',
            compact('fees')
        );
    }

    // Show Add Fee Form
    public function create()
    {
        $students = Student::all();

        return view(
            'fee.create',
            compact('students')
        );
    }

    // Store Fee
    public function store(Request $request)
    {
        $request->validate([
            'student_id'   => 'required',
            'total_fee'    => 'required',
            'paid_amount'  => 'required',
            'due_amount'   => 'required',
            'payment_date' => 'required',
            'status'       => 'required'
        ]);

        // Generate ID manually for TiDB
        $feeId = (DB::table('fees')->max('id') ?? 0) + 1;

        Fee::create([
            'id'           => $feeId,
            'student_id'   => $request->student_id,
            'total_fee'    => $request->total_fee,
            'paid_amount'  => $request->paid_amount,
            'due_amount'   => $request->due_amount,
            'payment_date' => $request->payment_date,
            'status'       => $request->status,
        ]);

        return redirect('/fees')
            ->with(
                'success',
                'Fee Added Successfully'
            );
    }

    // Show Edit Form
    public function edit($id)
    {
        $fee = Fee::findOrFail($id);

        $students = Student::all();

        return view(
            'fee.edit',
            compact(
                'fee',
                'students'
            )
        );
    }

    // Update Fee
    public function update(
        Request $request,
        $id
    ) {
        $fee = Fee::findOrFail($id);

        $fee->update($request->all());

        return redirect('/fees')
            ->with(
                'success',
                'Fee Updated Successfully'
            );
    }

    // Delete Fee
    public function destroy($id)
    {
        Fee::destroy($id);

        return redirect('/fees')
            ->with(
                'success',
                'Fee Deleted Successfully'
            );
    }
}