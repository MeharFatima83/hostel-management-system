<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Authentication;
use App\Http\Controllers\adminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\RoomAllocationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;


/*
|--------------------------------------------------------------------------
| HOME PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| PUBLIC PAGES
|--------------------------------------------------------------------------
*/

// About
Route::get('/about', function () {
    return view('about');
});

// Contact Page
Route::get(
    '/contact',
    [ContactController::class, 'index']
);

// Save Contact Message
Route::post(
    '/contact/store',
    [ContactController::class, 'store']
);


/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
*/

// Register
Route::match(
    ['get', 'post'],
    '/register',
    [Authentication::class, 'register']
);

// Login
Route::match(
    ['get', 'post'],
    '/login',
    [Authentication::class, 'login']
);

// Logout
Route::get(
    '/logout',
    [Authentication::class, 'logout']
);


/*
|--------------------------------------------------------------------------
| STUDENT DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get(
    '/StudentDashboard',
    [StudentDashboardController::class, 'index']
)
->name('dashboard')
->middleware('checklogin');


// My Room
Route::get(
    '/my-room',
    [StudentDashboardController::class, 'myRoom']
)
->middleware('checklogin');


// My Fees
Route::get(
    '/my-fees',
    [StudentDashboardController::class, 'myFees']
)
->middleware('checklogin');


// Student Notices
Route::get(
    '/student-notices',
    [StudentDashboardController::class, 'notices']
)
->middleware('checklogin');


/*
|--------------------------------------------------------------------------
| STUDENT COMPLAINTS
|--------------------------------------------------------------------------
*/

// Student Complaint List
Route::get(
    '/student-complaints',
    [ComplaintController::class, 'studentComplaints']
)
->middleware('checklogin');

// Student Complaint Form
Route::get(
    '/student-complaints/create',
    [ComplaintController::class, 'studentCreate']
)
->middleware('checklogin');

// Save Student Complaint
Route::post(
    '/student-complaints/store',
    [ComplaintController::class, 'studentStore']
)
->middleware('checklogin');


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('admin')->group(function () {


    /*
    |--------------------------------------------------------------------------
    | ADMIN DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/adminDashboard',
        [adminController::class, 'adminDashboard']
    );


    /*
    |--------------------------------------------------------------------------
    | CONTACT MESSAGES - ADMIN
    |--------------------------------------------------------------------------
    */

    // View all contact messages
    Route::get(
        '/contact-messages',
        [ContactMessageController::class, 'index']
    );

    // Delete contact message
    Route::get(
        '/contact-messages/delete/{id}',
        [ContactMessageController::class, 'destroy']
    );


    /*
    |--------------------------------------------------------------------------
    | STUDENT MANAGEMENT
    |--------------------------------------------------------------------------
    */

    // Student List
    Route::get(
        '/students',
        [StudentController::class, 'index']
    );

    // Add Student Form
    Route::get(
        '/students/create',
        [StudentController::class, 'create']
    );

    // Save Student
    Route::post(
        '/students/store',
        [StudentController::class, 'store']
    );

    // Edit Student
    Route::get(
        '/students/edit/{id}',
        [StudentController::class, 'edit']
    );

    // Update Student
    Route::post(
        '/students/update/{id}',
        [StudentController::class, 'update']
    );

    // Delete Student
    Route::get(
        '/students/delete/{id}',
        [StudentController::class, 'destroy']
    );


    /*
    |--------------------------------------------------------------------------
    | ROOM MANAGEMENT
    |--------------------------------------------------------------------------
    */

    // Room List
    Route::get(
        '/rooms',
        [RoomController::class, 'index']
    );

    // Add Room Form
    Route::get(
        '/rooms/create',
        [RoomController::class, 'create']
    );

    // Save Room
    Route::post(
        '/rooms/store',
        [RoomController::class, 'store']
    );

    // Edit Room
    Route::get(
        '/rooms/edit/{id}',
        [RoomController::class, 'edit']
    );

    // Update Room
    Route::post(
        '/rooms/update/{id}',
        [RoomController::class, 'update']
    );

    // Delete Room
    Route::get(
        '/rooms/delete/{id}',
        [RoomController::class, 'destroy']
    );


    /*
    |--------------------------------------------------------------------------
    | ROOM ALLOCATION
    |--------------------------------------------------------------------------
    */

    // Allocation List
    Route::get(
        '/allocations',
        [RoomAllocationController::class, 'index']
    );

    // Allocate Room Form
    Route::get(
        '/allocations/create',
        [RoomAllocationController::class, 'create']
    );

    // Save Allocation
    Route::post(
        '/allocations/store',
        [RoomAllocationController::class, 'store']
    );

    // Edit Allocation
    Route::get(
        '/allocations/edit/{id}',
        [RoomAllocationController::class, 'edit']
    );

    // Update Allocation
    Route::post(
        '/allocations/update/{id}',
        [RoomAllocationController::class, 'update']
    );

    // Delete Allocation
    Route::get(
        '/allocations/delete/{id}',
        [RoomAllocationController::class, 'destroy']
    );


    /*
    |--------------------------------------------------------------------------
    | FEE MANAGEMENT
    |--------------------------------------------------------------------------
    */

    // Fee List
    Route::get(
        '/fees',
        [FeeController::class, 'index']
    );

    // Add Fee Form
    Route::get(
        '/fees/create',
        [FeeController::class, 'create']
    );

    // Save Fee
    Route::post(
        '/fees/store',
        [FeeController::class, 'store']
    );

    // Edit Fee
    Route::get(
        '/fees/edit/{id}',
        [FeeController::class, 'edit']
    );

    // Update Fee
    Route::post(
        '/fees/update/{id}',
        [FeeController::class, 'update']
    );

    // Delete Fee
    Route::get(
        '/fees/delete/{id}',
        [FeeController::class, 'destroy']
    );


    /*
    |--------------------------------------------------------------------------
    | COMPLAINT MANAGEMENT
    |--------------------------------------------------------------------------
    */

    // Complaint List
    Route::get(
        '/complaints',
        [ComplaintController::class, 'index']
    );

    // Edit Complaint
    Route::get(
        '/complaints/edit/{id}',
        [ComplaintController::class, 'edit']
    );

    // Update Complaint
    Route::post(
        '/complaints/update/{id}',
        [ComplaintController::class, 'update']
    );

    // Delete Complaint
    Route::get(
        '/complaints/delete/{id}',
        [ComplaintController::class, 'destroy']
    );


    /*
    |--------------------------------------------------------------------------
    | NOTICE MANAGEMENT
    |--------------------------------------------------------------------------
    */

    // Notice List
    Route::get(
        '/notices',
        [NoticeController::class, 'index']
    );

    // Add Notice Form
    Route::get(
        '/notices/create',
        [NoticeController::class, 'create']
    );

    // Save Notice
    Route::post(
        '/notices/store',
        [NoticeController::class, 'store']
    );

    // Edit Notice
    Route::get(
        '/notices/edit/{id}',
        [NoticeController::class, 'edit']
    );

    // Update Notice
    Route::post(
        '/notices/update/{id}',
        [NoticeController::class, 'update']
    );

    // Delete Notice
    Route::get(
        '/notices/delete/{id}',
        [NoticeController::class, 'destroy']
    );

});