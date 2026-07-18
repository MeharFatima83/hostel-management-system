<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Contact Us | HostelHub</title>

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

            min-height: 100vh;

        }


        /* ================= NAVBAR ================= */

        .navbar {

            height: 72px;

            padding: 0 7%;

            background: #000;

            display: flex;

            justify-content: space-between;

            align-items: center;

            box-shadow: 0 3px 15px rgba(0,0,0,0.25);

        }


        .logo {

            color: white;

            font-size: 23px;

            font-weight: bold;

            letter-spacing: 0.5px;

        }


        .nav-links {

            display: flex;

            gap: 30px;

        }


        .nav-links a {

            text-decoration: none;

            color: #d4d4d4;

            font-size: 14px;

            font-weight: 600;

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

            font-size: 14px;

            transition: 0.3s;

        }


        .register-btn:hover {

            background: #dcdcdc;

            transform: translateY(-2px);

        }


        /* ================= CONTACT SECTION ================= */

        .contact-section {

            max-width: 1150px;

            margin: auto;

            padding: 80px 30px;

            display: grid;

            grid-template-columns: 0.9fr 1.1fr;

            gap: 70px;

            align-items: center;

        }


        /* ================= LEFT SIDE ================= */

        .contact-info h1 {

            font-size: 50px;

            line-height: 1.2;

            margin-bottom: 20px;

            color: #000;

        }


        .contact-info h1 span {

            color: #555;

        }


        .contact-info > p {

            color: #555;

            line-height: 1.8;

            max-width: 440px;

            margin-bottom: 35px;

            font-size: 15px;

        }


        .info-box {

            display: flex;

            align-items: center;

            gap: 16px;

            margin-bottom: 23px;

        }


        .info-icon {

            width: 50px;

            height: 50px;

            border-radius: 12px;

            background: #000;

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;

            transition: 0.3s;

        }


        .info-box:hover .info-icon {

            background: #444;

            transform: scale(1.08);

        }


        .info-box strong {

            display: block;

            margin-bottom: 5px;

            font-size: 15px;

            color: #000;

        }


        .info-box span {

            color: #666;

            font-size: 14px;

        }


        /* ================= FORM CARD ================= */

        .contact-form {

            background: #fff;

            padding: 38px;

            border-radius: 18px;

            border: 1px solid #ddd;

            box-shadow: 0 15px 35px rgba(0,0,0,0.10);

        }


        .contact-form h2 {

            color: #000;

            font-size: 25px;

            margin-bottom: 25px;

        }


        /* ================= FORM GROUP ================= */

        .form-group {

            margin-bottom: 18px;

        }


        label {

            display: block;

            margin-bottom: 7px;

            font-size: 14px;

            font-weight: bold;

            color: #111;

        }


        input,

        textarea {

            width: 100%;

            padding: 13px 14px;

            border: 1px solid #ccc;

            border-radius: 8px;

            font-size: 14px;

            outline: none;

            font-family: Arial, Helvetica, sans-serif;

            transition: 0.3s;

            background: #fafafa;

        }


        input:focus,

        textarea:focus {

            border-color: #000;

            background: white;

            box-shadow: 0 0 0 3px rgba(0,0,0,0.08);

        }


        textarea {

            height: 120px;

            resize: vertical;

        }


        /* ================= ALERTS ================= */

        .success-message {

            background: #e5e5e5;

            color: #111;

            padding: 12px 14px;

            border-radius: 8px;

            margin-bottom: 22px;

            font-size: 14px;

            border-left: 4px solid #000;

        }


        .error-message {

            background: #f0f0f0;

            color: #222;

            padding: 12px 14px;

            border-radius: 8px;

            margin-bottom: 22px;

            font-size: 14px;

            border-left: 4px solid #555;

        }


        .error-message p {

            margin-bottom: 4px;

        }


        .error-message p:last-child {

            margin-bottom: 0;

        }


        /* ================= BUTTON ================= */

        button {

            width: 100%;

            padding: 14px;

            border: none;

            border-radius: 8px;

            color: white;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            background: #000;

            transition: 0.3s;

        }


        button:hover {

            background: #333;

            transform: translateY(-2px);

            box-shadow: 0 8px 18px rgba(0,0,0,0.20);

        }


        /* ================= FOOTER ================= */

        footer {

            background: #000;

            color: white;

            text-align: center;

            padding: 30px;

            margin-top: 20px;

        }


        footer strong {

            font-size: 18px;

        }


        footer p {

            color: #aaa;

            margin-top: 8px;

            font-size: 13px;

        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 800px) {

            .contact-section {

                grid-template-columns: 1fr;

                gap: 40px;

                padding: 55px 25px;

            }


            .contact-info h1 {

                font-size: 40px;

            }

        }


        @media(max-width: 600px) {

            .navbar {

                padding: 0 20px;

            }


            .nav-links {

                display: none;

            }


            .register-btn {

                padding: 9px 15px;

                font-size: 13px;

            }


            .contact-form {

                padding: 25px;

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



<!-- ================= CONTACT SECTION ================= -->

<section class="contact-section">


    <!-- LEFT SIDE -->

    <div class="contact-info">


        <h1>

            Let's <span>Connect.</span>

        </h1>


        <p>

            Have a question, suggestion or need help?

            Send us a message and our team will get back

            to you as soon as possible.

        </p>


        <div class="info-box">


            <div class="info-icon">

                📧

            </div>


            <div>

                <strong>

                    Email

                </strong>


                <span>

                    support@hostelhub.com

                </span>

            </div>


        </div>


        <div class="info-box">


            <div class="info-icon">

                📞

            </div>


            <div>

                <strong>

                    Phone

                </strong>


                <span>

                    +91 98765 43210

                </span>

            </div>


        </div>


        <div class="info-box">


            <div class="info-icon">

                📍

            </div>


            <div>

                <strong>

                    Location

                </strong>


                <span>

                    India

                </span>

            </div>


        </div>


    </div>



    <!-- RIGHT SIDE FORM -->

    <div class="contact-form">


        <h2>

            Send us a Message

        </h2>


        @if(session('success'))

            <div class="success-message">

                {{ session('success') }}

            </div>

        @endif


        @if($errors->any())

            <div class="error-message">

                @foreach($errors->all() as $error)

                    <p>

                        {{ $error }}

                    </p>

                @endforeach

            </div>

        @endif


        <form

            action="{{ url('/contact/store') }}"

            method="POST">

            @csrf


            <div class="form-group">


                <label>

                    Your Name

                </label>


                <input

                    type="text"

                    name="name"

                    placeholder="Enter your name"

                    value="{{ old('name') }}"

                    required>


            </div>


            <div class="form-group">


                <label>

                    Email Address

                </label>


                <input

                    type="email"

                    name="email"

                    placeholder="Enter your email"

                    value="{{ old('email') }}"

                    required>


            </div>


            <div class="form-group">


                <label>

                    Subject

                </label>


                <input

                    type="text"

                    name="subject"

                    placeholder="Enter subject"

                    value="{{ old('subject') }}"

                    required>


            </div>


            <div class="form-group">


                <label>

                    Message

                </label>


                <textarea

                    name="message"

                    placeholder="Write your message..."

                    required>{{ old('message') }}</textarea>


            </div>


            <button type="submit">

                Send Message →

            </button>


        </form>


    </div>


</section>



<!-- ================= FOOTER ================= -->

<footer>


    <strong>

        🏠 HostelHub

    </strong>


    <p>

        Smart Hostel Management System © 2026

    </p>


</footer>


</body>

</html>