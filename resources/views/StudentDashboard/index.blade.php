<!DOCTYPE html>
<html>

<head>

    <title>Student Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body {
            background: #f5f6fa;
        }

        .sidebar {
            min-height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .card-box {
            padding: 20px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

    </style>

</head>

<body>

    <div class="container-fluid">

        <div class="row">

            <!-- Sidebar -->

            <div class="col-md-3 sidebar">

                <h3>Hostel Management</h3>

                <hr>

                <a href="/StudentDashboard">
                    Dashboard
                </a>

                <a href="/my-room">
                    My Room
                </a>

                <a href="/my-fees">
                    My Fees
                </a>

                <a href="/student-complaints">
                    Complaints
                </a>

                <a href="/student-notices">
                    Notices
                </a>

                <a href="/logout">
                    Logout
                </a>

            </div>


            <!-- Main Content -->

            <div class="col-md-9 p-4">

                <h2>
                    Welcome, {{ session('user_name') ?? 'Student' }}
                </h2>


                <div class="row mt-4">

                    <!-- My Room -->

                    <div class="col-md-4">

                        <div class="card-box">

                            <h5>My Room</h5>

                            <p>
                                Check your allocated room details.
                            </p>

                            <a href="/my-room"
                               class="btn btn-primary">

                                View Room

                            </a>

                        </div>

                    </div>


                    <!-- Fees -->

                    <div class="col-md-4">

                        <div class="card-box">

                            <h5>Fees</h5>

                            <p>
                                View your fee details.
                            </p>

                            <a href="/my-fees"
                               class="btn btn-success">

                                View Fees

                            </a>

                        </div>

                    </div>


                    <!-- Complaints -->

                    <div class="col-md-4">

                        <div class="card-box">

                            <h5>Complaints</h5>

                            <p>
                                Submit and track complaints.
                            </p>

                            <a href="/student-complaints"
                               class="btn btn-warning">

                                Complaints

                            </a>

                        </div>

                    </div>

                </div>


                <!-- Latest Notices -->

                <div class="card-box mt-4">

                    <h4>
                        Latest Notices
                    </h4>


                    @if (isset($notices) && $notices->count() > 0)

                        @foreach ($notices as $notice)

                            <div class="border p-2 mb-2">

                                <h6>
                                    {{ $notice->title }}
                                </h6>

                                <p>
                                    {{ $notice->description }}
                                </p>

                                <small class="text-muted">
                                    {{ $notice->publish_date }}
                                </small>

                            </div>

                        @endforeach

                    @else

                        <p>
                            No notices available.
                        </p>

                    @endif

                </div>

            </div>

        </div>

    </div>

</body>

</html>