<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoomAllocation;
use App\Models\Student;
use App\Models\Room;

class RoomAllocationController extends Controller
{
    // Display Allocation List
    public function index()
    {
        $allocations = RoomAllocation::with('student', 'room')->get();

        return view('allocation.index', compact('allocations'));
    }

    // Show Add Allocation Form
    public function create()
    {
        $students = Student::all();
        $rooms = Room::all();

        return view('allocation.create', compact('students', 'rooms'));
    }

    // Store Allocation
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'room_id' => 'required|exists:rooms,id',
            'allocation_date' => 'required|date',
            'status' => 'required|in:Allocated,Vacated',
        ]);

        $nextId = (DB::table('room_allocations')->max('id') ?? 0) + 1;

        RoomAllocation::create([
            'id' => $nextId,
            'student_id' => $request->student_id,
            'room_id' => $request->room_id,
            'allocation_date' => $request->allocation_date,
            'status' => $request->status,
        ]);

        return redirect('/allocations')
            ->with('success', 'Room Allocated Successfully');
    }

    // Show Edit Form
    public function edit($id)
    {
        $allocation = RoomAllocation::findOrFail($id);

        $students = Student::all();
        $rooms = Room::all();

        return view(
            'allocation.edit',
            compact('allocation', 'students', 'rooms')
        );
    }

    // Update Allocation
    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'room_id' => 'required|exists:rooms,id',
            'allocation_date' => 'required|date',
            'status' => 'required|in:Allocated,Vacated',
        ]);

        $allocation = RoomAllocation::findOrFail($id);

        $allocation->update([
            'student_id' => $request->student_id,
            'room_id' => $request->room_id,
            'allocation_date' => $request->allocation_date,
            'status' => $request->status,
        ]);

        return redirect('/allocations')
            ->with('success', 'Room Allocation Updated Successfully');
    }

    // Delete Allocation
    public function destroy($id)
    {
        $allocation = RoomAllocation::findOrFail($id);

        $allocation->delete();

        return redirect('/allocations')
            ->with('success', 'Room Allocation Deleted Successfully');
    }
}