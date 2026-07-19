<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Room;
use App\Models\Fee;
use App\Models\Complaint;
use App\Models\Notice;
use App\Models\RoomAllocation;
use App\Models\ContactMessage;

class adminController extends Controller
{
    public function adminDashboard()
    {
        $totalStudents = Student::count();

        $totalRooms = Room::count();

        $occupiedRooms = RoomAllocation::where(
            'status',
            'Allocated'
        )->count();

        $vacantRooms = $totalRooms - $occupiedRooms;

        $totalUsers = User::count();

        $totalMessages = ContactMessage::count();

        $totalComplaints = Complaint::count();

        $pendingComplaints = Complaint::where(
            'status',
            'Pending'
        )->count();

        $totalNotices = Notice::count();

        $totalFeesCollected = Fee::where(
            'status',
            'Paid'
        )->sum('paid_amount');

        $pendingFees = Fee::where(
            'status',
            'Pending'
        )->sum('due_amount');


        return view(
            'adminDashboard',
            compact(

                'totalStudents',

                'totalRooms',

                'occupiedRooms',

                'vacantRooms',

                'totalUsers',

                'totalMessages', 

                'totalComplaints',

                'pendingComplaints',

                'totalNotices',

                'totalFeesCollected',

                'pendingFees'

            )
        );
    }
}