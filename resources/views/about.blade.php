<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>About Us | HostelHub</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            font-family: Arial, Helvetica, sans-serif;

            background: #f5f5f5;

            color: #111;

        }


        /* ================= NAVBAR ================= */

        .navbar {

            padding: 20px 7%;

            background: #000;

            display: flex;

            justify-content: space-between;

            align-items: center;

            box-shadow: 0 3px 15px rgba(0,0,0,0.25);

        }


        .logo {

            color: white;

            font-size: 24px;

            font-weight: bold;

            letter-spacing: 0.5px;

        }


        .nav-links {

            display: flex;

            gap: 32px;

        }


        .nav-links a {

            text-decoration: none;

            color: #d4d4d4;

            font-weight: 600;

            font-size: 14px;

            transition: 0.3s;

        }


        .nav-links a:hover {

            color: white;

        }


        .register-btn {

            text-decoration: none;

            color: #000;

            background: white;

            padding: 11px 22px;

            border-radius: 8px;

            font-weight: bold;

            transition: 0.3s;

        }


        .register-btn:hover {

            background: #dcdcdc;

            transform: translateY(-2px);

        }


        /* ================= HERO ================= */

        .about-hero {

            padding: 90px 7%;

            text-align: center;

            background:

                radial-gradient(

                    circle at top right,

                    #d6d6d6,

                    transparent 35%

                ),

                #f5f5f5;

        }


        .about-hero h1 {

            font-size: 52px;

            margin-bottom: 20px;

            color: #000;

        }


        .about-hero h1 span {

            color: #555;

        }


        .about-hero p {

            color: #555;

            font-size: 17px;

            max-width: 700px;

            margin: auto;

            line-height: 1.8;

        }


        /* ================= CONTENT ================= */

        .about-content {

            padding: 65px 7%;

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 30px;

        }


        .content-card {

            background: #fff;

            padding: 40px;

            border-radius: 18px;

            border: 1px solid #ddd;

            box-shadow: 0 10px 25px rgba(0,0,0,0.08);

            transition: 0.3s;

        }


        .content-card:hover {

            transform: translateY(-7px);

            box-shadow: 0 15px 35px rgba(0,0,0,0.15);

        }


        .content-card h2 {

            color: #000;

            margin-bottom: 18px;

            font-size: 24px;

        }


        .content-card p {

            color: #555;

            line-height: 1.8;

            font-size: 15px;

        }


        /* ================= FEATURES ================= */

        .features {

            padding: 35px 7% 85px;

            text-align: center;

        }


        .features h2 {

            font-size: 34px;

            margin-bottom: 40px;

            color: #000;

        }


        .feature-grid {

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 22px;

        }


        .feature {

            background: #fff;

            padding: 30px 20px;

            border-radius: 16px;

            border: 1px solid #ddd;

            transition: 0.3s;

        }


        .feature:hover {

            background: #000;

            color: white;

            transform: translateY(-8px);

            box-shadow: 0 12px 25px rgba(0,0,0,0.2);

        }


        .feature:hover h3,

        .feature:hover p {

            color: white;

        }


        .feature-icon {

            font-size: 38px;

            margin-bottom: 15px;

        }


        .feature h3 {

            font-size: 17px;

            margin-bottom: 10px;

            color: #000;

        }


        .feature p {

            color: #666;

            font-size: 13px;

            line-height: 1.6;

        }


        /* ================= FOOTER ================= */

        footer {

            background: #000;

            color: white;

            text-align: center;

            padding: 30px;

        }


        footer strong {

            font-size: 18px;

        }


        footer p {

            color: #aaa;

            margin-top: 10px;

            font-size: 13px;

        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 900px) {

            .feature-grid {

                grid-template-columns: repeat(2, 1fr);

            }

        }


        @media(max-width: 700px) {

            .navbar {

                padding: 18px 5%;

            }


            .nav-links {

                display: none;

            }


            .about-hero {

                padding: 65px 6%;

            }


            .about-hero h1 {

                font-size: 38px;

            }


            .about-content {

                grid-template-columns: 1fr;

                padding: 45px 6%;

            }


            .features {

                padding: 30px 6% 60px;

            }


            .feature-grid {

                grid-template-columns: 1fr;

            }

        }

    </style>

</head>


<body>


<!-- ================= NAVBAR ================= -->

<nav class="navbar">


    <div class="logo">

        🏠 HostelHub

    </div>


    <div class="nav-links">

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


    <a href="{{ url('/register') }}"

       class="register-btn">

        Get Started

    </a>


</nav>



<!-- ================= HERO ================= -->

<section class="about-hero">


    <h1>

        About <span>HostelHub</span>

    </h1>


    <p>

        HostelHub is a simple and smart hostel management

        platform designed to make everyday hostel operations

        easier, faster and more organized.

    </p>


</section>



<!-- ================= ABOUT CONTENT ================= -->

<section class="about-content">


    <div class="content-card">


        <h2>

            🎯 Our Mission

        </h2>


        <p>

            Our mission is to simplify hostel management through

            technology. From student records and room allocation

            to fee tracking and complaints, HostelHub brings

            everything together in one easy-to-use platform.

        </p>


    </div>



    <div class="content-card">


        <h2>

            💡 Why HostelHub?

        </h2>


        <p>

            Traditional hostel management can involve a lot of

            paperwork and manual work. HostelHub helps administrators

            save time and provides students with a convenient way

            to manage their hostel-related needs.

        </p>


    </div>


</section>



<!-- ================= FEATURES ================= -->

<section class="features">


    <h2>

        Everything in One Place

    </h2>


    <div class="feature-grid">


        <div class="feature">


            <div class="feature-icon">

                👨‍🎓

            </div>


            <h3>

                Student Records

            </h3>


            <p>

                Manage student information easily.

            </p>


        </div>



        <div class="feature">


            <div class="feature-icon">

                🛏️

            </div>


            <h3>

                Room Management

            </h3>


            <p>

                Allocate and manage hostel rooms.

            </p>


        </div>



        <div class="feature">


            <div class="feature-icon">

                💰

            </div>


            <h3>

                Fee Tracking

            </h3>


            <p>

                Track paid and pending fees.

            </p>


        </div>



        <div class="feature">


            <div class="feature-icon">

                📢

            </div>


            <h3>

                Complaints & Notices

            </h3>


            <p>

                Keep communication organized.

            </p>


        </div>


    </div>


</section>



<!-- ================= FOOTER ================= -->

<footer>


    <strong>

        🏠 HostelHub

    </strong>


    <p>

        © 2026 Hostel Management System

    </p>


</footer>


</body>

</html>