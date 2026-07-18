<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;

            background: linear-gradient(
                135deg,
                #eef2ff,
                #e0e7ff,
                #f5f3ff
            );

            min-height: 100vh;
        }

        .page-wrapper {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 25px;
        }

        .form-card {
            width: 100%;
            max-width: 680px;

            background: #ffffff;

            padding: 28px 32px;

            border-radius: 20px;

            box-shadow: 0 15px 40px rgba(79, 70, 229, 0.18);

            border: 1px solid #e5e7eb;
        }

        /* Heading */

        h2 {
            text-align: center;

            color: #4f46e5;

            margin: 0;

            font-size: 28px;
        }

        .subtitle {
            text-align: center;

            color: #6b7280;

            margin: 7px 0 25px;

            font-size: 14px;
        }

        /* Form Layout */

        .form-group {
            margin-bottom: 15px;
        }

        .row {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 15px;
        }

        label {
            display: block;

            font-weight: 600;

            font-size: 14px;

            color: #374151;

            margin-bottom: 6px;
        }

        input,
        select,
        textarea {
            width: 100%;

            padding: 11px 13px;

            border: 1px solid #d1d5db;

            border-radius: 9px;

            font-size: 14px;

            outline: none;

            transition: 0.25s;

            background: #ffffff;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #6366f1;

            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.12);
        }

        textarea {
            height: 70px;

            resize: vertical;
        }

        /* Error */

        .error-box {
            background: #fee2e2;

            color: #991b1b;

            padding: 11px 14px;

            border-radius: 9px;

            margin-bottom: 16px;

            font-size: 13px;
        }

        /* Success */

        .success-box {
            background: #dcfce7;

            color: #166534;

            padding: 11px 14px;

            border-radius: 9px;

            margin-bottom: 16px;
        }

        /* Bottom Buttons */

        .button-row {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 14px;

            margin-top: 22px;
        }

        .btn {
            display: flex;

            justify-content: center;

            align-items: center;

            padding: 12px;

            border-radius: 9px;

            text-decoration: none;

            font-size: 15px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.25s;

            border: none;
        }

        /* Back Button */

        .back-btn {
            background: #eef2ff;

            color: #4f46e5;

            border: 1px solid #c7d2fe;
        }

        .back-btn:hover {
            background: #e0e7ff;
        }

        /* Add Student Button */

        .submit-btn {
            background: linear-gradient(
                135deg,
                #4f46e5,
                #7c3aed
            );

            color: white;

            box-shadow: 0 5px 12px rgba(79, 70, 229, 0.25);
        }

        .submit-btn:hover {
            transform: translateY(-1px);

            box-shadow: 0 8px 16px rgba(79, 70, 229, 0.3);
        }

        /* Mobile */

        @media (max-width: 600px) {

            .page-wrapper {
                padding: 12px;
            }

            .form-card {
                padding: 22px 18px;
            }

            .row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .button-row {
                grid-template-columns: 1fr;
            }

            h2 {
                font-size: 24px;
            }

        }

    </style>

</head>


<body>

<div class="page-wrapper">

    <div class="form-card">

        <!-- Heading -->

        <h2>
            🎓 Add Student
        </h2>

        <p class="subtitle">
            Fill the student details below
        </p>


        <!-- Validation Errors -->

        @if($errors->any())

            <div class="error-box">

                <ul style="margin:0; padding-left:20px;">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- Success Message -->

        @if(session('success'))

            <div class="success-box">

                {{ session('success') }}

            </div>

        @endif


        <!-- Form -->

        <form action="{{ url('/students/store') }}"
              method="POST">

            @csrf


            <!-- Registered User -->

            <div class="form-group">

                <label>
                    Registered User
                </label>

                <select name="user_id">

                    <option value="">
                        Select User
                    </option>

                    @foreach($users as $user)

                        <option value="{{ $user->id }}"
                            {{ old('user_id') == $user->id ? 'selected' : '' }}>

                            {{ $user->name }}

                        </option>

                    @endforeach

                </select>

            </div>


            <!-- Student Name + Mobile -->

            <div class="row">

                <div class="form-group">

                    <label>
                        Student Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Enter Student Name"
                        value="{{ old('name') }}">

                </div>


                <div class="form-group">

                    <label>
                        Mobile Number
                    </label>

                    <input
                        type="text"
                        name="mobile"
                        placeholder="Enter Mobile Number"
                        value="{{ old('mobile') }}">

                </div>

            </div>


            <!-- Address -->

            <div class="form-group">

                <label>
                    Address
                </label>

                <textarea
                    name="address"
                    placeholder="Enter Address">{{ old('address') }}</textarea>

            </div>


            <!-- Room + Course -->

            <div class="row">

                <div class="form-group">

                    <label>
                        Room Number
                    </label>

                    <input
                        type="text"
                        name="room_number"
                        placeholder="Enter Room Number"
                        value="{{ old('room_number') }}">

                </div>


                <div class="form-group">

                    <label>
                        Course
                    </label>

                    <input
                        type="text"
                        name="course"
                        placeholder="Enter Course"
                        value="{{ old('course') }}">

                </div>

            </div>


            <!-- Gender + Parent Contact -->

            <div class="row">

                <div class="form-group">

                    <label>
                        Gender
                    </label>

                    <select name="gender">

                        <option value="">
                            Select Gender
                        </option>

                        <option value="Male"
                            {{ old('gender') == 'Male' ? 'selected' : '' }}>
                            Male
                        </option>

                        <option value="Female"
                            {{ old('gender') == 'Female' ? 'selected' : '' }}>
                            Female
                        </option>

                        <option value="Other"
                            {{ old('gender') == 'Other' ? 'selected' : '' }}>
                            Other
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Parent Contact
                    </label>

                    <input
                        type="text"
                        name="parent_contact"
                        placeholder="Enter Parent Contact"
                        value="{{ old('parent_contact') }}">

                </div>

            </div>


            <!-- Fees Status -->

            <div class="form-group">

                <label>
                    Fees Status
                </label>

                <select name="fees_status">

                    <option value="">
                        Select Fees Status
                    </option>

                    <option value="Paid"
                        {{ old('fees_status') == 'Paid' ? 'selected' : '' }}>
                        Paid
                    </option>

                    <option value="Pending"
                        {{ old('fees_status') == 'Pending' ? 'selected' : '' }}>
                        Pending
                    </option>

                </select>

            </div>


            <!-- Bottom Buttons -->

            <div class="button-row">

                <!-- Back Button -->

                <a href="{{ url('/adminDashboard') }}"
                   class="btn submit-btn">

                    ← Back to Admin Dashboard

                </a>


                <!-- Add Student Button -->

                <button
                    type="submit"
                    class="btn submit-btn">

                    ➕ Add Student

                </button>

            </div>


        </form>

    </div>

</div>

</body>

</html>