<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Hostel Management Dashboard</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>


<style>

/* ================= GLOBAL ================= */

* {

    margin: 0;

    padding: 0;

    box-sizing: border-box;

    font-family: Arial, Helvetica, sans-serif;

}

body {

    background:

        radial-gradient(

            circle at top right,

            #e2e2e2,

            transparent 35%

        ),

        #f4f4f4;

    color: #222222;

}


/* ================= MAIN CONTAINER ================= */

.container {

    display: flex;

    min-height: 100vh;

}


/* ================= SIDEBAR ================= */

.sidebar {

    width: 250px;

    background: #222222;

    color: #ffffff;

    position: fixed;

    height: 100vh;

    overflow-y: auto;

    box-shadow:

        5px 0 20px rgba(0,0,0,0.12);

}


/* ================= LOGO ================= */

.logo {

    padding: 25px 15px;

    font-size: 23px;

    font-weight: bold;

    text-align: center;

    color: #ffffff;

    border-bottom: 1px solid #444444;

}


/* ================= SIDEBAR MENU ================= */

.sidebar ul {

    list-style: none;

    padding: 20px 12px;

}


.sidebar ul li {

    margin: 6px 0;

}


.sidebar ul li a {

    display: flex;

    align-items: center;

    gap: 13px;

    text-decoration: none;

    color: #d2d2d2;

    padding: 13px 15px;

    border-radius: 10px;

    transition: 0.3s;

    font-size: 15px;

}


.sidebar ul li a i {

    width: 20px;

    text-align: center;

}


.sidebar ul li a:hover {

    background: #3b3b3b;

    color: #ffffff;

    transform: translateX(5px);

}


/* ================= MAIN ================= */

.main {

    margin-left: 250px;

    width: calc(100% - 250px);

}


/* ================= NAVBAR ================= */

.navbar {

    height: 70px;

    background: #ffffff;

    display: flex;

    justify-content: space-between;

    align-items: center;

    padding: 0 30px;

    border-bottom: 1px solid #dddddd;

    box-shadow:

        0 4px 15px rgba(0,0,0,0.06);

}


.navbar h2 {

    color: #333333;

    font-size: 23px;

}


.admin {

    font-weight: bold;

    color: #555555;

    font-size: 14px;

}


.admin i {

    font-size: 20px;

    margin-right: 7px;

    color: #555555;

}


/* ================= CARDS ================= */

.cards {

    display: grid;

    grid-template-columns:

        repeat(auto-fit, minmax(220px, 1fr));

    gap: 22px;

    padding: 30px;

}


.card {

    padding: 25px;

    border-radius: 18px;

    color: #222222;

    background: #ffffff;

    border: 1px solid #dddddd;

    box-shadow:

        0 8px 22px rgba(0,0,0,0.08);

    transition: 0.3s;

}


.card:hover {

    transform: translateY(-6px);

    box-shadow:

        0 14px 28px rgba(0,0,0,0.14);

}


.card i {

    font-size: 34px;

    margin-bottom: 15px;

    color: #444444;

}


.card h3 {

    margin-bottom: 10px;

    color: #555555;

    font-size: 16px;

}


.card h1 {

    font-size: 32px;

    color: #222222;

}


/* ================= CARD ACCENTS ================= */

.blue {

    border-top: 5px solid #555555;

}


.orange {

    border-top: 5px solid #777777;

}


.green {

    border-top: 5px solid #666666;

}


.red {

    border-top: 5px solid #888888;

}


.purple {

    border-top: 5px solid #444444;

}


.pink {

    border-top: 5px solid #999999;

}


.dark {

    border-top: 5px solid #222222;

}


.sky {

    border-top: 5px solid #777777;

}


.contact {

    border-top: 5px solid #555555;

}


/* ================= WELCOME ================= */

.welcome {

    margin: 0 30px 30px;

    background: #ffffff;

    padding: 27px;

    border-radius: 18px;

    border: 1px solid #dddddd;

    box-shadow:

        0 7px 20px rgba(0,0,0,0.07);

}


.welcome h2 {

    color: #333333;

    margin-bottom: 12px;

    font-size: 22px;

}


.welcome p {

    color: #666666;

    line-height: 28px;

}


/* ================= ACTIONS ================= */

.actions {

    margin-top: 25px;

    display: flex;

    flex-wrap: wrap;

    gap: 12px;

}


.actions a {

    text-decoration: none;

    padding: 11px 17px;

    border-radius: 9px;

    background: #333333;

    color: #ffffff;

    transition: 0.3s;

    font-weight: bold;

    font-size: 14px;

}


.actions a i {

    margin-right: 6px;

}


.actions a:hover {

    background: #555555;

    transform: translateY(-3px);

}


/* ================= TABLE ================= */

.system-table {

    width: 100%;

    margin-top: 20px;

    border-collapse: collapse;

    overflow: hidden;

    border-radius: 10px;

}


.system-table th {

    padding: 14px;

    text-align: left;

    background: #333333;

    color: #ffffff;

}


.system-table td {

    padding: 14px;

    border-bottom: 1px solid #eeeeee;

    color: #555555;

}


.system-table tr:nth-child(even) {

    background: #f7f7f7;

}


.system-table tr:hover {

    background: #eeeeee;

}


.active-status {

    color: #555555;

    font-weight: bold;

}


/* ================= RESPONSIVE ================= */

@media(max-width: 900px) {

    .sidebar {

        width: 220px;

    }

    .main {

        margin-left: 220px;

        width: calc(100% - 220px);

    }

}


@media(max-width: 768px) {

    .sidebar {

        position: relative;

        width: 100%;

        height: auto;

    }


    .main {

        margin-left: 0;

        width: 100%;

    }


    .container {

        display: block;

    }


    .navbar {

        padding: 0 20px;

    }


    .navbar h2 {

        font-size: 19px;

    }


    .admin {

        font-size: 12px;

    }


    .cards {

        padding: 20px;

    }


    .welcome {

        margin: 0 20px 25px;

    }

}


@media(max-width: 500px) {

    .navbar {

        height: auto;

        padding: 18px;

        gap: 10px;

        align-items: flex-start;

        flex-direction: column;

    }


    .cards {

        grid-template-columns: 1fr;

    }


    .welcome {

        padding: 22px;

    }


    .actions a {

        width: 100%;

        text-align: center;

    }

}

</style>

</head>


<body>


<div class="container">


<!-- ================= SIDEBAR ================= -->

<div class="sidebar">


<div class="logo">

🏠 Hostel Admin

</div>


<ul>


<li>

<a href="{{ url('/adminDashboard') }}">

<i class="fa-solid fa-chart-line"></i>

Dashboard

</a>

</li>


<li>

<a href="{{ url('/students') }}">

<i class="fa-solid fa-users"></i>

Students

</a>

</li>


<li>

<a href="{{ url('/rooms') }}">

<i class="fa-solid fa-bed"></i>

Rooms

</a>

</li>


<li>

<a href="{{ url('/allocations') }}">

<i class="fa-solid fa-house"></i>

Room Allocation

</a>

</li>


<li>

<a href="{{ url('/fees') }}">

<i class="fa-solid fa-money-bill-wave"></i>

Fee Management

</a>

</li>


<li>

<a href="{{ url('/complaints') }}">

<i class="fa-solid fa-circle-exclamation"></i>

Complaints

</a>

</li>


<li>

<a href="{{ url('/notices') }}">

<i class="fa-solid fa-bullhorn"></i>

Notice Board

</a>

</li>


<li>

<a href="{{ url('/contact-messages') }}">

<i class="fa-solid fa-envelope"></i>

Contact Messages

</a>

</li>


<li>

<a href="/logout">

<i class="fa-solid fa-right-from-bracket"></i>

Logout

</a>

</li>


</ul>


</div>


<!-- ================= MAIN ================= -->

<div class="main">


<!-- ================= NAVBAR ================= -->

<div class="navbar">


<h2>

Admin Dashboard

</h2>


<div class="admin">

<i class="fa-solid fa-circle-user"></i>

Welcome Admin

</div>


</div>


<!-- ================= DASHBOARD CARDS ================= -->

<div class="cards">


<div class="card blue">

<i class="fa-solid fa-user-graduate"></i>

<h3>

Total Students

</h3>

<h1>

{{ $totalStudents }}

</h1>

</div>


<div class="card orange">

<i class="fa-solid fa-bed"></i>

<h3>

Total Rooms

</h3>

<h1>

{{ $totalRooms }}

</h1>

</div>


<div class="card green">

<i class="fa-solid fa-house-user"></i>

<h3>

Occupied Rooms

</h3>

<h1>

{{ $occupiedRooms }}

</h1>

</div>


<div class="card red">

<i class="fa-solid fa-door-open"></i>

<h3>

Vacant Rooms

</h3>

<h1>

{{ $vacantRooms }}

</h1>

</div>


<div class="card purple">

<i class="fa-solid fa-money-bill-wave"></i>

<h3>

Fees Collected

</h3>

<h1>

₹{{ $totalFeesCollected }}

</h1>

</div>


<div class="card pink">

<i class="fa-solid fa-clock"></i>

<h3>

Pending Fees

</h3>

<h1>

₹{{ $pendingFees }}

</h1>

</div>


<div class="card dark">

<i class="fa-solid fa-bullhorn"></i>

<h3>

Total Notices

</h3>

<h1>

{{ $totalNotices }}

</h1>

</div>


<div class="card sky">

<i class="fa-solid fa-triangle-exclamation"></i>

<h3>

Total Complaints

</h3>

<h1>

{{ $totalComplaints }}

</h1>

</div>


<div class="card contact">

<i class="fa-solid fa-envelope"></i>

<h3>

Contact Messages

</h3>

<h1>

{{ $totalMessages }}

</h1>

</div>


</div>


<!-- ================= WELCOME ================= -->

<div class="welcome">


<h2>

Welcome to Smart Hostel Management System 👋

</h2>


<p>

Manage students, rooms, room allocations, fee records,
complaints, notices and user messages from one place.
This dashboard gives you a quick overview of hostel activities.

</p>


<div class="actions">


<a href="{{ url('/students/create') }}">

<i class="fa-solid fa-user-plus"></i>

Add Student

</a>


<a href="{{ url('/rooms/create') }}">

<i class="fa-solid fa-bed"></i>

Add Room

</a>


<a href="{{ url('/allocations/create') }}">

<i class="fa-solid fa-house-user"></i>

Allocate Room

</a>


<a href="{{ url('/fees/create') }}">

<i class="fa-solid fa-money-bill-wave"></i>

Add Fee

</a>


<a href="{{ url('/complaints') }}">

<i class="fa-solid fa-triangle-exclamation"></i>

View Complaints

</a>


<a href="{{ url('/notices/create') }}">

<i class="fa-solid fa-bullhorn"></i>

Add Notice

</a>


<a href="{{ url('/contact-messages') }}">

<i class="fa-solid fa-envelope"></i>

View Messages

</a>


</div>


</div>


<!-- ================= SYSTEM SUMMARY ================= -->

<div class="welcome">


<h2>

📊 System Summary

</h2>


<table class="system-table">


<tr>

<th>

Module

</th>


<th>

Status

</th>

</tr>


<tr>

<td>

Student Management

</td>


<td class="active-status">

✔ Active

</td>

</tr>


<tr>

<td>

Room Management

</td>


<td class="active-status">

✔ Active

</td>

</tr>


<tr>

<td>

Room Allocation

</td>


<td class="active-status">

✔ Active

</td>

</tr>


<tr>

<td>

Fee Management

</td>


<td class="active-status">

✔ Active

</td>

</tr>


<tr>

<td>

Complaint Management

</td>


<td class="active-status">

✔ Active

</td>

</tr>


<tr>

<td>

Notice Board

</td>


<td class="active-status">

✔ Active

</td>

</tr>


<tr>

<td>

Contact Messages

</td>


<td class="active-status">

✔ Active

</td>

</tr>


</table>


</div>


</div>


</div>


</body>

</html>