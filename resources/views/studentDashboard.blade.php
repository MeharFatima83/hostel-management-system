<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Student Dashboard | HostelHub</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
      rel="stylesheet">

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


<style>

/* ================= GLOBAL ================= */

* {
    box-sizing: border-box;
}

body {

    margin: 0;

    font-family: Arial, Helvetica, sans-serif;

    min-height: 100vh;

    background:

        radial-gradient(
            circle at top right,
            #e1e1e1,
            transparent 35%
        ),

        #f4f4f4;

    color: #222222;

}


/* ================= NAVBAR ================= */

.navbar {

    background: #222222;

    padding: 15px 0;

    box-shadow:
        0 5px 20px rgba(0,0,0,0.15);

}

.navbar-brand {

    color: #ffffff !important;

    font-size: 21px;

    font-weight: bold;

}

.nav-link {

    color: #d6d6d6 !important;

    font-size: 14px;

    font-weight: 600;

    margin-left: 12px;

    transition: 0.3s;

}

.nav-link:hover {

    color: #ffffff !important;

}


/* ================= MOBILE NAVBAR ================= */

.navbar-toggler {

    border: 1px solid #777777;

}

.navbar-toggler-icon {

    filter: invert(1);

}


/* ================= MAIN CONTAINER ================= */

.dashboard-container {

    padding-top: 45px;

    padding-bottom: 50px;

}


/* ================= WELCOME ================= */

.welcome-title {

    font-size: 30px;

    font-weight: bold;

    color: #222222;

    margin-bottom: 35px;

}

.welcome-title span {

    color: #777777;

}


/* ================= COMMON CARD ================= */

.card {

    border: 1px solid #dddddd;

    border-radius: 18px;

    background: #ffffff;

    transition: 0.3s;

    box-shadow:

        0 8px 25px rgba(0,0,0,0.08);

    height: 100%;

}

.card:hover {

    transform: translateY(-5px);

    box-shadow:

        0 14px 28px rgba(0,0,0,0.14);

}


/* ================= CARD ICON ================= */

.card-icon {

    width: 58px;

    height: 58px;

    border-radius: 15px;

    background: #eeeeee;

    color: #333333;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 24px;

    margin-bottom: 18px;

}


/* ================= CARD TITLE ================= */

.card h4 {

    font-size: 20px;

    font-weight: bold;

    color: #222222;

    margin-bottom: 18px;

}


/* ================= CARD TEXT ================= */

.card p {

    color: #666666;

    font-size: 14px;

    margin-bottom: 10px;

}

.card strong {

    color: #333333;

}


/* ================= STATUS BADGE ================= */

.status-badge {

    display: inline-block;

    padding: 6px 12px;

    border-radius: 20px;

    background: #eeeeee;

    color: #444444;

    font-size: 12px;

    font-weight: bold;

}


/* ================= PROFILE CARD ================= */

.profile-card {

    border-top: 4px solid #333333;

}


/* ================= ROOM CARD ================= */

.room-card {

    border-top: 4px solid #666666;

}


/* ================= FEE CARD ================= */

.fee-card {

    border-top: 4px solid #888888;

}


/* ================= NOTICE CARD ================= */

.notice-card {

    background: #eeeeee;

    border: 1px solid #d5d5d5;

}


/* ================= COMPLAINT CARD ================= */

.complaint-card {

    background: #ffffff;

    border: 1px solid #d5d5d5;

}


/* ================= NOTICE TITLE ================= */

.notice-card h5 {

    color: #222222;

    font-weight: bold;

    margin-bottom: 10px;

}


/* ================= EMPTY TEXT ================= */

.empty-text {

    color: #888888;

    font-style: italic;

}


/* ================= RESPONSIVE ================= */

@media(max-width: 768px) {

    .navbar-nav {

        margin-top: 15px;

    }

    .nav-link {

        margin-left: 0;

        padding: 8px 0;

    }

    .welcome-title {

        font-size: 25px;

    }

}

</style>

</head>


<body>


<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg">

<div class="container">


<a class="navbar-brand"
   href="/StudentDashboard">

🏠 HostelHub

</a>


<button

class="navbar-toggler"

type="button"

data-bs-toggle="collapse"

data-bs-target="#navbarMenu">

<span class="navbar-toggler-icon"></span>

</button>


<div class="collapse navbar-collapse"
     id="navbarMenu">


<ul class="navbar-nav ms-auto">


<li class="nav-item">

<a class="nav-link"

href="/StudentDashboard">

Home

</a>

</li>


<li class="nav-item">

<a class="nav-link"

href="/my-room">

My Room

</a>

</li>


<li class="nav-item">

<a class="nav-link"

href="/my-fees">

My Fees

</a>

</li>


<li class="nav-item">

<a class="nav-link"

href="/student-complaints">

Complaints

</a>

</li>


<li class="nav-item">

<a class="nav-link"

href="/student-notices">

Notices

</a>

</li>


<li class="nav-item">

<a class="nav-link"

href="/logout">

Logout

</a>

</li>


</ul>


</div>

</div>

</nav>


<!-- ================= MAIN ================= -->

<div class="container dashboard-container">


<h2 class="welcome-title">

Welcome,

<span>{{ $student->name }}</span> 👋

</h2>


<div class="row g-4">


<!-- ================= PROFILE ================= -->

<div class="col-md-4">

<div class="card profile-card p-4">


<div class="card-icon">

<i class="fa-solid fa-user"></i>

</div>


<h4>

My Profile

</h4>


<p>

<strong>Name:</strong>

{{ $student->name }}

</p>


<p>

<strong>Course:</strong>

{{ $student->course ?? 'Not Assigned' }}

</p>


<p>

<strong>Mobile:</strong>

{{ $student->mobile }}

</p>


<span class="status-badge">

Student Account

</span>


</div>

</div>


<!-- ================= ROOM ================= -->

<div class="col-md-4">

<div class="card room-card p-4">


<div class="card-icon">

<i class="fa-solid fa-bed"></i>

</div>


<h4>

My Room

</h4>


<p>

<strong>Room Number:</strong>


@if($student->room_number)

{{ $student->room_number }}

@else

Not Allocated

@endif


</p>


<p>

<strong>Status:</strong>


@if($student->room_number)

<span class="status-badge">

Allocated

</span>

@else

<span class="status-badge">

Not Allocated

</span>

@endif


</p>


</div>

</div>


<!-- ================= FEE ================= -->

<div class="col-md-4">

<div class="card fee-card p-4">


<div class="card-icon">

<i class="fa-solid fa-money-bill"></i>

</div>


<h4>

Fee Status

</h4>


<p>

<strong>Total:</strong>

₹{{ $fee->total_fee ?? 0 }}

</p>


<p>

<strong>Due:</strong>

₹{{ $fee->due_amount ?? 0 }}

</p>


<p>

<strong>Status:</strong>

<span class="status-badge">

{{ $fee->status ?? 'Pending' }}

</span>

</p>


</div>

</div>


<!-- ================= NOTICE ================= -->

<div class="col-md-6">

<div class="card notice-card p-4">


<div class="card-icon">

<i class="fa-solid fa-bullhorn"></i>

</div>


<h4>

Latest Notice

</h4>


@if($notice)


<h5>

{{ $notice->title }}

</h5>


<p>

{{ $notice->description }}

</p>


@else


<p class="empty-text">

No Notice Available

</p>


@endif


</div>

</div>


<!-- ================= COMPLAINT ================= -->

<div class="col-md-6">

<div class="card complaint-card p-4">


<div class="card-icon">

<i class="fa-solid fa-triangle-exclamation"></i>

</div>


<h4>

Complaint Status

</h4>


@if($complaint)


<p>

<strong>Title:</strong>

{{ $complaint->title }}

</p>


<p>

<strong>Status:</strong>


<span class="status-badge">

{{ $complaint->status }}

</span>


</p>


@else


<p class="empty-text">

No Complaint Found

</p>


@endif


</div>

</div>


</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>