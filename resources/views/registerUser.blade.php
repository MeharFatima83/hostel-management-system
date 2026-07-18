<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Registration | HostelHub</title>


    <style>

        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

        }


        body {

            font-family: Arial, Helvetica, sans-serif;

            min-height: 100vh;

            background:

                radial-gradient(

                    circle at 15% 20%,

                    #555555 0%,

                    transparent 28%

                ),

                radial-gradient(

                    circle at 85% 80%,

                    #3d3d3d 0%,

                    transparent 30%

                ),

                linear-gradient(

                    135deg,

                    #222222,

                    #3a3a3a,

                    #1b1b1b

                );

            color: white;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 30px;

        }


        /* ================= REGISTER CARD ================= */

        .register-card {

            width: 100%;

            max-width: 480px;

            background: rgba(20, 20, 20, 0.95);

            border: 1px solid #555555;

            border-radius: 22px;

            padding: 38px;

            box-shadow:

                0 20px 60px rgba(0, 0, 0, 0.55);

            animation: fadeIn 0.6s ease;

        }


        /* ================= ANIMATION ================= */

        @keyframes fadeIn {

            from {

                opacity: 0;

                transform: translateY(20px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }


        /* ================= HEADER ================= */

        .logo {

            text-align: center;

            font-size: 28px;

            font-weight: bold;

            margin-bottom: 10px;

            color: #ffffff;

        }


        .logo span {

            color: #bdbdbd;

        }


        .subtitle {

            text-align: center;

            color: #bdbdbd;

            font-size: 14px;

            margin-bottom: 30px;

        }


        /* ================= FORM ================= */

        .form-group {

            margin-bottom: 18px;

        }


        label {

            display: block;

            margin-bottom: 8px;

            font-size: 14px;

            font-weight: bold;

            color: #eeeeee;

        }


        input,

        textarea {

            width: 100%;

            padding: 14px;

            background: #f5f5f5;

            border: 1px solid #aaaaaa;

            border-radius: 10px;

            color: #111111;

            font-size: 14px;

            outline: none;

            transition: 0.3s;

            font-family: Arial, Helvetica, sans-serif;

        }


        input::placeholder,

        textarea::placeholder {

            color: #777777;

        }


        input:focus,

        textarea:focus {

            border-color: white;

            background: white;

            box-shadow:

                0 0 0 3px rgba(255, 255, 255, 0.12);

        }


        textarea {

            height: 90px;

            resize: none;

        }


        /* ================= BUTTON ================= */

        button {

            width: 100%;

            padding: 14px;

            border: none;

            border-radius: 10px;

            background: white;

            color: #111111;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;

            margin-top: 5px;

        }


        button:hover {

            background: #dddddd;

            transform: translateY(-2px);

            box-shadow:

                0 8px 20px rgba(255, 255, 255, 0.15);

        }


        /* ================= SUCCESS MESSAGE ================= */

        .success-message {

            background: #292929;

            border: 1px solid #777777;

            color: #ffffff;

            padding: 12px;

            border-radius: 8px;

            margin-top: 18px;

            text-align: center;

            font-size: 14px;

        }


        /* ================= ERROR MESSAGE ================= */

        .error-list {

            margin-top: 18px;

            padding: 12px 15px;

            background: #292929;

            border: 1px solid #666666;

            border-radius: 8px;

        }


        .error-list li {

            color: #ff9b9b;

            font-size: 13px;

            margin-bottom: 5px;

        }


        .error-list li:last-child {

            margin-bottom: 0;

        }


        /* ================= LOGIN LINK ================= */

        .login-text {

            text-align: center;

            margin-top: 24px;

            font-size: 14px;

            color: #bdbdbd;

        }


        .login-text a {

            color: white;

            text-decoration: none;

            font-weight: bold;

            margin-left: 5px;

        }


        .login-text a:hover {

            text-decoration: underline;

        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 550px) {

            body {

                padding: 20px;

            }


            .register-card {

                padding: 28px 22px;

            }


            .logo {

                font-size: 24px;

            }

        }

    </style>

</head>


<body>


<div class="register-card">


    <!-- HEADER -->

    <div class="logo">

        🏠 Hostel<span>Hub</span>

    </div>


    <p class="subtitle">

        Create your student account

    </p>


    <!-- REGISTER FORM -->

    <form action="{{ url('/register') }}" method="POST">

        @csrf


        <!-- NAME -->

        <div class="form-group">

            <label>

                Full Name

            </label>


            <input

                type="text"

                name="name"

                placeholder="Enter your full name"

                value="{{ old('name') }}"

                required>

        </div>


        <!-- MOBILE -->

        <div class="form-group">

            <label>

                Mobile Number

            </label>


            <input

                type="text"

                name="mobile"

                placeholder="Enter mobile number"

                value="{{ old('mobile') }}"

                required>

        </div>


        <!-- ADDRESS -->

        <div class="form-group">

            <label>

                Address

            </label>


            <textarea

                name="address"

                placeholder="Enter your address"

                required>{{ old('address') }}</textarea>

        </div>


        <!-- PASSWORD -->

        <div class="form-group">

            <label>

                Password

            </label>


            <input

                type="password"

                name="password"

                placeholder="Create password"

                required>

        </div>


        <!-- CONFIRM PASSWORD -->

        <div class="form-group">

            <label>

                Confirm Password

            </label>


            <input

                type="password"

                name="confirm_password"

                placeholder="Confirm password"

                required>

        </div>


        <!-- BUTTON -->

        <button type="submit">

            Create Account →

        </button>


        <!-- SUCCESS MESSAGE -->

        @if(session('success'))

            <div class="success-message">

                {{ session('success') }}

            </div>

        @endif


        <!-- ERRORS -->

        @if($errors->any())

            <ul class="error-list">

                @foreach($errors->all() as $error)

                    <li>

                        {{ $error }}

                    </li>

                @endforeach

            </ul>

        @endif


        <!-- LOGIN -->

        <p class="login-text">

            Already have an account?

            <a href="{{ url('/login') }}">

                Login

            </a>

        </p>


    </form>

</div>


</body>

</html>