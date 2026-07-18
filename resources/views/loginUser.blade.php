<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login | HostelHub</title>

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

            padding: 25px;

        }


        /* ================= LOGIN CARD ================= */

        .login-card {

            width: 100%;

            max-width: 420px;

            background: rgba(20, 20, 20, 0.95);

            border: 1px solid #555555;

            border-radius: 22px;

            padding: 38px;

            box-shadow:

                0 20px 60px rgba(0, 0, 0, 0.55);

            animation: fadeIn 0.6s ease;

        }


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


        /* ================= LOGO ================= */

        .logo {

            text-align: center;

            font-size: 28px;

            font-weight: bold;

            margin-bottom: 8px;

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


        /* ================= ALERT ================= */

        .success-message {

            background: #292929;

            border: 1px solid #777777;

            color: #ffffff;

            padding: 12px;

            border-radius: 8px;

            text-align: center;

            font-size: 14px;

            margin-bottom: 20px;

        }


        /* ================= FORM ================= */

        .form-group {

            margin-bottom: 20px;

        }


        label {

            display: block;

            color: #eeeeee;

            font-size: 14px;

            font-weight: bold;

            margin-bottom: 8px;

        }


        input {

            width: 100%;

            padding: 14px;

            background: #f5f5f5;

            border: 1px solid #aaaaaa;

            border-radius: 10px;

            color: #111111;

            font-size: 14px;

            outline: none;

            transition: 0.3s;

        }


        input::placeholder {

            color: #777777;

        }


        input:focus {

            border-color: white;

            background: white;

            box-shadow:

                0 0 0 3px rgba(255,255,255,0.12);

        }


        /* ================= ERROR ================= */

        .error-message {

            color: #ff9b9b;

            font-size: 13px;

            margin-top: 6px;

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

                0 8px 20px rgba(255,255,255,0.15);

        }


        /* ================= REGISTER LINK ================= */

        .register-text {

            text-align: center;

            margin-top: 25px;

            color: #bdbdbd;

            font-size: 14px;

        }


        .register-text a {

            color: white;

            text-decoration: none;

            font-weight: bold;

            margin-left: 5px;

        }


        .register-text a:hover {

            text-decoration: underline;

        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 500px) {

            body {

                padding: 20px;

            }


            .login-card {

                padding: 28px 22px;

            }


            .logo {

                font-size: 24px;

            }

        }

    </style>

</head>


<body>


<div class="login-card">


    <!-- LOGO -->

    <div class="logo">

        🏠 Hostel<span>Hub</span>

    </div>


    <p class="subtitle">

        Login to your account

    </p>


    <!-- SUCCESS MESSAGE -->

    @if(session('success'))

        <div class="success-message">

            {{ session('success') }}

        </div>

    @endif


    <!-- LOGIN FORM -->

    <form action="{{ url('/login') }}" method="POST">

        @csrf


        <!-- NAME -->

        <div class="form-group">

            <label>

                Name

            </label>


            <input

                type="text"

                name="name"

                value="{{ old('name') }}"

                placeholder="Enter your name"

                required>


            @error('name')

                <div class="error-message">

                    {{ $message }}

                </div>

            @enderror

        </div>


        <!-- PASSWORD -->

        <div class="form-group">

            <label>

                Password

            </label>


            <input

                type="password"

                name="password"

                placeholder="Enter your password"

                required>


            @error('password')

                <div class="error-message">

                    {{ $message }}

                </div>

            @enderror

        </div>


        <!-- LOGIN BUTTON -->

        <button type="submit">

            Login →

        </button>


    </form>


    <!-- REGISTER -->

    <p class="register-text">

        Don't have an account?

        <a href="{{ url('/register') }}">

            Register

        </a>

    </p>


</div>


</body>

</html>