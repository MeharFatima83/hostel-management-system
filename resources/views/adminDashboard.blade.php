<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#eef2ff,#fdfbfb,#f3f9ff);
        }

        .container{
            display:flex;
            min-height:100vh;
        }

        /* Sidebar */

        .sidebar{
            width:250px;
            background:linear-gradient(to bottom,#4f46e5,#7c3aed);
            color:white;
            padding:25px;
        }

        .logo{
            text-align:center;
            font-size:24px;
            font-weight:bold;
            margin-bottom:40px;
        }

        .sidebar ul{
            list-style:none;
        }

        .sidebar ul li{
            margin:18px 0;
        }

        .sidebar ul li a{
            text-decoration:none;
            color:white;
            display:block;
            padding:12px;
            border-radius:10px;
            transition:.3s;
        }

        .sidebar ul li a:hover{
            background:rgba(255,255,255,.2);
            padding-left:18px;
        }

        /* Main */

        .main{
            flex:1;
        }

        /* Navbar */

        .navbar{
            height:70px;
            background:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 30px;
            box-shadow:0 3px 10px rgba(0,0,0,.08);
        }

        .navbar h2{
            color:#4f46e5;
        }

        .admin{
            font-weight:bold;
            color:#555;
        }

        /* Cards */

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:25px;
            padding:30px;
        }

        .card{
            color:white;
            border-radius:18px;
            padding:25px;
            transition:.3s;
            cursor:pointer;
            box-shadow:0 10px 20px rgba(0,0,0,.15);
        }

        .card:hover{
            transform:translateY(-8px);
        }

        .card i{
            font-size:35px;
            margin-bottom:15px;
        }

        .card h1{
            margin-top:10px;
            font-size:35px;
        }

        .students{
            background:linear-gradient(135deg,#36d1dc,#5b86e5);
        }

        .rooms{
            background:linear-gradient(135deg,#ff9966,#ff5e62);
        }

        .booking{
            background:linear-gradient(135deg,#11998e,#38ef7d);
        }

        .complaint{
            background:linear-gradient(135deg,#fc4a1a,#f7b733);
        }

        /* Welcome */

        .welcome{
            margin:0 30px 30px;
            background:white;
            border-radius:18px;
            padding:25px;
            box-shadow:0 8px 15px rgba(0,0,0,.08);
        }

        .welcome h2{
            color:#4f46e5;
            margin-bottom:10px;
        }

        .welcome p{
            color:#666;
            line-height:25px;
        }

        @media(max-width:768px){

            .container{
                flex-direction:column;
            }

            .sidebar{
                width:100%;
            }

        }

    </style>

</head>
<body>

<div class="container">

    <!-- Sidebar -->

    <div class="sidebar">

        <div class="logo">
            🏠 Hostel Admin
        </div>

        <ul>

            <li><a href="#"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>

            <li><a href="#"><i class="fa-solid fa-users"></i> Students</a></li>

            <li><a href="#"><i class="fa-solid fa-bed"></i> Rooms</a></li>

            <li><a href="#"><i class="fa-solid fa-calendar-check"></i> Bookings</a></li>

            <li><a href="#"><i class="fa-solid fa-triangle-exclamation"></i> Complaints</a></li>

            <li><a href="#"><i class="fa-solid fa-bullhorn"></i> Notice Board</a></li>

            <li><a href="#"><i class="fa-solid fa-money-bill-wave"></i> Fee Management</a></li>

            <li><a href="#"><i class="fa-solid fa-user"></i> Profile</a></li>

            <li><a href="/logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>

        </ul>

    </div>

    <!-- Main -->

    <div class="main">

        <div class="navbar">

            <h2>Admin Dashboard</h2>

            <div class="admin">
                <i class="fa-solid fa-circle-user"></i>
                Welcome Admin
            </div>

        </div>

        <!-- Cards -->

        <div class="cards">

            <div class="card students">
                <i class="fa-solid fa-user-graduate"></i>
                <h1>{{$totalStudents}}</h1>
               
            </div>

            <div class="card rooms">
                <i class="fa-solid fa-bed"></i>
                <h3>Total Rooms</h3>
                <h1>60</h1>
            </div>

            <div class="card booking">
                <i class="fa-solid fa-calendar-check"></i>
                <h3>Total Bookings</h3>
                <h1>42</h1>
            </div>

            <div class="card complaint">
                <i class="fa-solid fa-circle-exclamation"></i>
                <h3>Complaints</h3>
                <h1>9</h1>
            </div>

        </div>

        <div class="welcome">

            <h2>Welcome to Smart Hostel Management System 👋</h2>

            <p>
                This dashboard allows the hostel administrator to manage
                students, rooms, bookings, complaints, fees, notices and
                monitor hostel activities from one place.
            </p>

        </div>

    </div>

</div>

</body>
</html>