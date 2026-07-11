<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('room.index', compact('rooms'));
    }

    public function create()
    {
        return view('room.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required|unique:rooms,room_number',
            'capacity' => 'required',
            'room_type' => 'required',
            'rent' => 'required',
            'status' => 'required',
        ]);

        Room::create([
            'room_number' => $request->room_number,
            'capacity' => $request->capacity,
            'occupied' => 0,
            'room_type' => $request->room_type,
            'rent' => $request->rent,
            'status' => $request->status,
        ]);

        return redirect('/rooms')->with('success', 'Room Added Successfully');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('room.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);

        $room->update([
            'room_number' => $request->room_number,
            'capacity' => $request->capacity,
            'room_type' => $request->room_type,
            'rent' => $request->rent,
            'status' => $request->status,
        ]);

        return redirect('/rooms')->with('success', 'Room Updated Successfully');
    }

    public function destroy($id)
    {
        Room::findOrFail($id)->delete();

        return redirect('/rooms')->with('success', 'Room Deleted Successfully');
    }
}