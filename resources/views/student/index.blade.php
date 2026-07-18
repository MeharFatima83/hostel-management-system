<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <!-- Back Button -->
        <a href="{{ url('/adminDashboard') }}"
           class="btn btn-secondary">
            ← Back to Admin Dashboard
        </a>


        <!-- Heading -->
        <h2 class="text-primary mb-0">
            🎓 Student Management
        </h2>


        <!-- Add Student Button -->
        <a href="{{ url('/students/create') }}"
           class="btn btn-primary">
            + Add Student
        </a>

    </div>


    <!-- Success Message -->
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <!-- Student Table -->
    <div class="card shadow">

        <div class="card-body">

            <table class="table table-hover table-bordered align-middle">

                <thead class="table-dark">

                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Course</th>
                        <th>Room</th>
                        <th>Parent Contact</th>
                        <th>Fees Status</th>
                        <th width="200">Action</th>

                    </tr>

                </thead>


                <tbody>

                @forelse($students as $student)

                <tr>

                    <td>
                        {{ $student->id }}
                    </td>

                    <td>
                        {{ $student->name }}
                    </td>

                    <td>
                        {{ $student->mobile }}
                    </td>

                    <td>
                        {{ $student->course }}
                    </td>

                    <td>
                        {{ $student->room_number ?? 'Not Allocated' }}
                    </td>

                    <td>
                        {{ $student->parent_contact }}
                    </td>


                    <td>

                        @if($student->fees_status == "Paid")

                            <span class="badge bg-success">
                                Paid
                            </span>

                        @else

                            <span class="badge bg-danger">
                                Pending
                            </span>

                        @endif

                    </td>


                    <td>

                        <!-- Edit -->
                        <a href="{{ url('/students/edit/'.$student->id) }}"
                           class="btn btn-warning btn-sm">

                            ✏️ Edit

                        </a>


                        <!-- Delete -->
                        <a href="{{ url('/students/delete/'.$student->id) }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this student?')">

                            🗑 Delete

                        </a>

                    </td>

                </tr>


                @empty

                <tr>

                    <td colspan="8"
                        class="text-center text-danger">

                        No Students Found

                    </td>

                </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>

</html>