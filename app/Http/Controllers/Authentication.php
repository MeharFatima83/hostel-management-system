<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
    // Registration
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required|string',
                'mobile' => 'required|digits:10|unique:users,mobile',
                'address' => 'required|string',
                'password' => 'required|min:5',
                'confirm_password' => 'required|same:password',
            ]);

            // Manually generate next user ID
            $nextId = (DB::table('users')->max('id') ?? 0) + 1;

            // Create User
            DB::table('users')->insert([
                'id' => $nextId,
                'name' => $request->name,
                'mobile' => $request->mobile,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'role' => 'student',
            ]);

            return redirect('/login')->with(
                'success',
                'Registration Successful. Please Login.'
            );
        }

        return view('registerUser');
    }

    // Login
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required',
                'password' => 'required',
            ]);

            $user = DB::table('users')
                ->where('name', $request->name)
                ->first();

            if ($user && Hash::check($request->password, $user->password)) {

                session([
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'role' => $user->role,
                ]);

                if ($user->role == 'admin') {
                    return redirect('/adminDashboard');
                }

                return redirect()->route('dashboard');
            }

            return back()->withErrors([
                'name' => 'Invalid Name or Password.'
            ]);
        }

        return view('loginUser');
    }

    // Logout
    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}