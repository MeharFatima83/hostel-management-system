<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>HostelHub | Hostel Management System</title>


    <style>

        /* ================= RESET ================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #000;
            color: #fff;
        }


        /* ================= NAVBAR ================= */

        .navbar {

            width: 100%;

            padding: 20px 7%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            background: #000;

            border-bottom: 1px solid #222;

            position: sticky;

            top: 0;

            z-index: 1000;

        }


        .logo {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 23px;

            font-weight: bold;

            color: #fff;

        }


        .logo-icon {

            width: 42px;

            height: 42px;

            border-radius: 12px;

            background: #fff;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #000;

            font-size: 22px;

            transition: 0.3s;

        }


        .logo-icon:hover {

            transform: rotate(8deg) scale(1.1);

        }


        .nav-links {

            display: flex;

            gap: 30px;

            align-items: center;

        }


        .nav-links a {

            text-decoration: none;

            color: #aaa;

            font-size: 14px;

            font-weight: 600;

            transition: 0.3s;

        }


        .nav-links a:hover {

            color: #fff;

        }


        .nav-login {

            text-decoration: none;

            color: #fff;

            font-weight: bold;

            margin-right: 18px;

            transition: 0.3s;

        }


        .nav-login:hover {

            color: #aaa;

        }


        .nav-register {

            text-decoration: none;

            color: #000;

            background: #fff;

            padding: 11px 20px;

            border-radius: 8px;

            font-weight: bold;

            font-size: 14px;

            transition: 0.3s;

        }


        .nav-register:hover {

            background: #ccc;

            transform: translateY(-3px);

        }


        /* ================= HERO ================= */

        .hero {

            min-height: 580px;

            padding: 80px 7%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 50px;

            background:

                radial-gradient(

                    circle at 80% 20%,

                    #242424,

                    transparent 35%

                ),

                #000;

        }


        .hero-content {

            width: 50%;

        }


        .badge {

            display: inline-block;

            padding: 9px 16px;

            background: #1d1d1d;

            color: #fff;

            border: 1px solid #444;

            border-radius: 30px;

            font-size: 13px;

            font-weight: bold;

            margin-bottom: 22px;

        }


        .hero h1 {

            font-size: 56px;

            line-height: 1.1;

            margin-bottom: 22px;

            color: #fff;

        }


        .hero h1 span {

            color: #999;

        }


        .hero p {

            color: #999;

            font-size: 17px;

            line-height: 1.7;

            max-width: 530px;

            margin-bottom: 32px;

        }


        .hero-buttons {

            display: flex;

            gap: 15px;

        }


        .primary-btn {

            text-decoration: none;

            background: #fff;

            color: #000;

            padding: 15px 25px;

            border-radius: 8px;

            font-weight: bold;

            transition: 0.3s;

        }


        .primary-btn:hover {

            background: #dcdcdc;

            transform: translateY(-4px);

            box-shadow:

                0 10px 30px

                rgba(255,255,255,0.15);

        }


        .secondary-btn {

            text-decoration: none;

            background: transparent;

            color: #fff;

            padding: 15px 25px;

            border-radius: 8px;

            font-weight: bold;

            border: 1px solid #555;

            transition: 0.3s;

        }


        .secondary-btn:hover {

            background: #fff;

            color: #000;

        }


        /* ================= HERO VISUAL ================= */

        .hero-visual {

            width: 48%;

            height: 400px;

            position: relative;

        }


        .building {

            position: absolute;

            width: 390px;

            height: 300px;

            right: 30px;

            bottom: 25px;

            background:

                linear-gradient(

                    135deg,

                    #333,

                    #050505

                );

            border: 1px solid #555;

            border-radius: 35px;

            transform: rotate(-5deg);

            box-shadow:

                0 25px 50px

                rgba(255,255,255,0.08);

        }


        .building::before {

            content: "🏠";

            position: absolute;

            font-size: 150px;

            top: 55px;

            left: 110px;

            filter:

                grayscale(1)

                brightness(0)

                invert(1);

        }


        .building-card {

            position: absolute;

            background: #fff;

            color: #000;

            border-radius: 14px;

            padding: 16px 20px;

            box-shadow:

                0 12px 30px

                rgba(255,255,255,0.12);

            transition: 0.3s;

        }


        .building-card:hover {

            transform: translateY(-7px);

        }


        .card-one {

            top: 30px;

            left: 0;

        }


        .card-two {

            right: 0;

            bottom: 20px;

        }


        .building-card strong {

            display: block;

            color: #000;

            font-size: 14px;

            margin-bottom: 5px;

        }


        .building-card span {

            color: #555;

            font-size: 12px;

        }


        /* ================= STATS ================= */

        .stats {

            padding: 45px 7%;

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 20px;

            background: #0d0d0d;

            border-top: 1px solid #222;

            border-bottom: 1px solid #222;

        }


        .stat {

            padding: 20px;

            border-right: 1px solid #333;

            transition: 0.3s;

        }


        .stat:hover {

            transform: translateY(-5px);

        }


        .stat:last-child {

            border-right: none;

        }


        .stat h2 {

            color: #fff;

            font-size: 30px;

            margin-bottom: 7px;

        }


        .stat p {

            color: #888;

            font-size: 14px;

        }


        /* ================= FEATURES ================= */

        .features {

            padding: 90px 7%;

            text-align: center;

            background: #000;

        }


        .features h2 {

            font-size: 36px;

            margin-bottom: 12px;

            color: #fff;

        }


        .features > p {

            color: #888;

            margin-bottom: 45px;

        }


        .feature-grid {

            display: grid;

            grid-template-columns:

                repeat(4, 1fr);

            gap: 22px;

        }


        .feature-card {

            background: #111;

            padding: 30px 22px;

            border-radius: 16px;

            text-align: left;

            border: 1px solid #2c2c2c;

            transition: 0.3s;

        }


        .feature-card:hover {

            transform: translateY(-9px);

            border-color: #fff;

            box-shadow:

                0 15px 35px

                rgba(255,255,255,0.08);

        }


        .feature-icon {

            width: 50px;

            height: 50px;

            border-radius: 12px;

            background: #fff;

            color: #000;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 23px;

            margin-bottom: 20px;

        }


        .feature-card h3 {

            font-size: 17px;

            margin-bottom: 10px;

            color: #fff;

        }


        .feature-card p {

            color: #888;

            font-size: 13px;

            line-height: 1.6;

        }


        /* ================= FOOTER ================= */

        footer {

            background: #0d0d0d;

            color: white;

            padding: 35px 7%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            border-top: 1px solid #222;

        }


        footer strong {

            font-size: 17px;

        }


        footer p {

            color: #777;

            font-size: 13px;

            margin-top: 8px;

        }


        .footer-links {

            display: flex;

            gap: 25px;

        }


        .footer-links a {

            color: #888;

            text-decoration: none;

            font-size: 13px;

            transition: 0.3s;

        }


        .footer-links a:hover {

            color: #fff;

        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 900px) {

            .hero {

                flex-direction: column;

                text-align: center;

            }


            .hero-content,

            .hero-visual {

                width: 100%;

            }


            .hero p {

                margin-left: auto;

                margin-right: auto;

            }


            .hero-buttons {

                justify-content: center;

            }


            .feature-grid {

                grid-template-columns:

                    repeat(2, 1fr);

            }

        }


        @media(max-width: 600px) {

            .navbar {

                padding: 18px 5%;

            }


            .nav-links {

                display: none;

            }


            .hero {

                padding: 60px 5%;

            }


            .hero h1 {

                font-size: 38px;

            }


            .hero-visual {

                height: 330px;

            }


            .building {

                width: 280px;

                height: 220px;

                right: 20px;

            }


            .building::before {

                font-size: 100px;

                left: 85px;

            }


            .stats {

                grid-template-columns:

                    repeat(2, 1fr);

            }


            .feature-grid {

                grid-template-columns: 1fr;

            }


            footer {

                flex-direction: column;

                gap: 20px;

                text-align: center;

            }

        }

    </style>

</head>


<body>


    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">


        <div class="logo">


            <div class="logo-icon">

                🏠

            </div>


            HostelHub


        </div>


        <div class="nav-links">


            <a href="#features">

                Features

            </a>


            <a href="{{ url('/about') }}">

                About

            </a>


            <a href="{{ url('/contact') }}">

                Contact

            </a>


        </div>


        <div>


            <a href="{{ url('/login') }}"

               class="nav-login">

                Login

            </a>


            <a href="{{ url('/register') }}"

               class="nav-register">

                Get Started

            </a>


        </div>


    </nav>


    <!-- ================= HERO ================= -->

    <section class="hero">


        <div class="hero-content">


            <div class="badge">

                ✨ Smart Hostel Management

            </div>


            <h1>

                Manage your hostel.

                <span>

                    Simplify your life.

                </span>

            </h1>


            <p>

                A simple and powerful platform to manage

                students, rooms, fees, complaints and

                important notices — all in one place.

            </p>


            <div class="hero-buttons">


                <a href="{{ url('/register') }}"

                   class="primary-btn">

                    Get Started →

                </a>


                <a href="{{ url('/login') }}"

                   class="secondary-btn">

                    Student Login

                </a>


            </div>


        </div>


        <!-- HERO VISUAL -->

        <div class="hero-visual">


            <div class="building">

            </div>


            <div class="building-card card-one">


                <strong>

                    🛏️ Room Management

                </strong>


                <span>

                    Easy room allocation

                </span>


            </div>


            <div class="building-card card-two">


                <strong>

                    📊 Dashboard

                </strong>


                <span>

                    Everything in one place

                </span>


            </div>


        </div>


    </section>


    <!-- ================= STATS ================= -->

    <section class="stats">


        <div class="stat">


            <h2>

                100%

            </h2>


            <p>

                Digital Management

            </p>


        </div>


        <div class="stat">


            <h2>

                24/7

            </h2>


            <p>

                Easy Access

            </p>


        </div>


        <div class="stat">


            <h2>

                5+

            </h2>


            <p>

                Management Features

            </p>


        </div>


        <div class="stat">


            <h2>

                1

            </h2>


            <p>

                Simple Platform

            </p>


        </div>


    </section>


    <!-- ================= FEATURES ================= -->

    <section class="features"

             id="features">


        <h2>

            Everything you need

        </h2>


        <p>

            Powerful features to make hostel management simple.

        </p>


        <div class="feature-grid">


            <div class="feature-card">


                <div class="feature-icon">

                    🛏️

                </div>


                <h3>

                    Room Allocation

                </h3>


                <p>

                    Manage room availability and allocate

                    rooms to students easily.

                </p>


            </div>


            <div class="feature-card">


                <div class="feature-icon">

                    👨‍🎓

                </div>


                <h3>

                    Student Management

                </h3>


                <p>

                    Keep all student information organized

                    in one secure place.

                </p>


            </div>


            <div class="feature-card">


                <div class="feature-icon">

                    💰

                </div>


                <h3>

                    Fee Management

                </h3>


                <p>

                    Track paid fees, pending payments and

                    student fee records.

                </p>


            </div>


            <div class="feature-card">


                <div class="feature-icon">

                    📢

                </div>


                <h3>

                    Complaints & Notices

                </h3>


                <p>

                    Manage student complaints and share

                    important hostel announcements.

                </p>


            </div>


        </div>


    </section>


    <!-- ================= FOOTER ================= -->

    <footer>


        <div>


            <strong>

                🏠 HostelHub

            </strong>


            <p>

                © 2026 Hostel Management System

            </p>


        </div>


        <div class="footer-links">


            <a href="{{ url('/') }}">

                Home

            </a>


            <a href="{{ url('/about') }}">

                About

            </a>


            <a href="{{ url('/contact') }}">

                Contact

            </a>


        </div>


    </footer>


</body>

</html>