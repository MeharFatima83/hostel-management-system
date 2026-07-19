<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>My Room</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body {
            background: #f5f5f5;
        }

        .card {
            margin-top: 50px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .2);
        }

    </style>

</head>


<body>

<div class="container">

    <div class="card">

        <div class="card-header bg-primary text-white">

            <h3>
                My Room Details
            </h3>

        </div>


        <div class="card-body">

            <table class="table table-bordered">

                <tr>

                    <th width="30%">
                        Student Name
                    </th>

                    <td>
                        {{ $student->name }}
                    </td>

                </tr>


                <tr>

                    <th>
                        Room Number
                    </th>

                    <td>

                        @if($allocation && $allocation->room)

                            {{ $allocation->room->room_number }}

                        @else

                            Not Allocated

                        @endif

                    </td>

                </tr>


                <tr>

                    <th>
                        Course
                    </th>

                    <td>
                        {{ $student->course ?? '-' }}
                    </td>

                </tr>


                <tr>

                    <th>
                        Allocation Date
                    </th>

                    <td>

                        @if($allocation)

                            {{ $allocation->allocation_date }}

                        @else

                            -

                        @endif

                    </td>

                </tr>


                <tr>

                    <th>
                        Status
                    </th>

                    <td>

                        @if($allocation && $allocation->status == 'Allocated')

                            <span class="badge bg-success">
                                Allocated
                            </span>

                        @else

                            <span class="badge bg-danger">
                                Not Allocated
                            </span>

                        @endif

                    </td>

                </tr>

            </table>


            <a href="/StudentDashboard"
               class="btn btn-primary">

                ⬅ Back Dashboard

            </a>

        </div>

    </div>

</div>

</body>

</html>