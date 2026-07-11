<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
     public function adminDashboard()
    {
        $totalStudents=User:: where('role','student')->count();
        return view('/adminDashboard',compact('totalStudents'));
    }
}
