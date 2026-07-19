<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;

class RoomController extends Controller
{
    // Display All Rooms
    public function index()
    {
        $rooms = Room::all();

        return view(
            'room.index',
            compact('rooms')
        );
    }

    // Show Add Room Form
    public function create()
    {
        return view('room.create');
    }

    // Store Room
    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required|unique:rooms,room_number',
            'capacity'    => 'required',
            'room_type'   => 'required',
            'rent'        => 'required',
            'status'      => 'required',
        ]);

        // Generate ID manually for TiDB
        $roomId = (DB::table('rooms')->max('id') ?? 0) + 1;

        Room::create([
            'id'          => $roomId,
            'room_number'  => $request->room_number,
            'capacity'    => $request->capacity,
            'occupied'    => 0,
            'room_type'   => $request->room_type,
            'rent'        => $request->rent,
            'status'      => $request->status,
        ]);

        return redirect('/rooms')
            ->with(
                'success',
                'Room Added Successfully'
            );
    }

    // Show Edit Form
    public function edit($id)
    {
        $room = Room::findOrFail($id);

        return view(
            'room.edit',
            compact('room')
        );
    }

    // Update Room
    public function update(
        Request $request,
        $id
    ) {
        $room = Room::findOrFail($id);

        $room->update([
            'room_number' => $request->room_number,
            'capacity'    => $request->capacity,
            'room_type'   => $request->room_type,
            'rent'        => $request->rent,
            'status'      => $request->status,
        ]);

        return redirect('/rooms')
            ->with(
                'success',
                'Room Updated Successfully'
            );
    }

    // Delete Room
    public function destroy($id)
    {
        Room::findOrFail($id)->delete();

        return redirect('/rooms')
            ->with(
                'success',
                'Room Deleted Successfully'
            );
    }
}