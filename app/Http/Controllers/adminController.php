<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Room;
use App\Models\Fee;
use App\Models\Booking;
use App\Models\Complaint;
use App\Models\Notice;

class adminController extends Controller
{
    public function adminDashboard()
    {
        // Dashboard Statistics
        
        $totalStudents = Student::count();
        $totalRooms = Room::count();

        $totalFeesCollected = Fee::where('status', 'Paid')
                                ->sum('paid_amount');

        $pendingFees = Fee::where('status', 'Pending')->count();

        return view('adminDashboard', compact(
            'totalStudents',
            'totalRooms',
            'totalFeesCollected',
            'pendingFees'
        ));

        $totalStudents = Student::count();

        $totalRooms = Room::count();

        $totalUsers = User::count();

        $totalBookings = Booking::count();

        $totalComplaints = Complaint::count();

        $totalNotices = Notice::count();

        $totalFeesCollected = Fee::where('status', 'Paid')
                                 ->sum('paid_amount');

        $pendingFees = Fee::where('status', 'Pending')
                          ->count();

        return view('adminDashboard', compact(
            'totalStudents',
            'totalRooms',
            'totalUsers',
            'totalBookings',
            'totalComplaints',
            'totalNotices',
            'totalFeesCollected',
            'pendingFees'
        ));
    }
}