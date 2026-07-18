<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Room Allocation</title>

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
        <h1 class="text-primary mb-0">
            🏠 Room Allocation
        </h1>


        <!-- Allocate Room Button -->
        <a href="{{ url('/allocations/create') }}"
           class="btn btn-primary">
            + Allocate Room
        </a>

    </div>


    <!-- Success Message -->
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <!-- Allocation Table -->
    <div class="card shadow">

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>

                        <th>ID</th>
                        <th>Student</th>
                        <th>Room</th>
                        <th>Allocation Date</th>
                        <th>Status</th>
                        <th width="180">Action</th>

                    </tr>

                </thead>


                <tbody>

                @forelse($allocations as $allocation)

                    <tr>

                        <td>
                            {{ $allocation->id }}
                        </td>

                        <td>
                            {{ $allocation->student->name ?? 'No Student' }}
                        </td>

                        <td>
                            {{ $allocation->room->room_number ?? 'No Room' }}
                        </td>

                        <td>
                            {{ $allocation->allocation_date }}
                        </td>

                        <td>

                            @if($allocation->status == "Allocated")

                                <span class="badge bg-success">
                                    Allocated
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Vacated
                                </span>

                            @endif

                        </td>

                        <td>

                            <!-- Edit -->
                            <a href="{{ url('/allocations/edit/'.$allocation->id) }}"
                               class="btn btn-warning btn-sm">

                                ✏️ Edit

                            </a>


                            <!-- Delete -->
                            <a href="{{ url('/allocations/delete/'.$allocation->id) }}"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this allocation?')">

                                🗑 Delete

                            </a>

                        </td>

                    </tr>


                @empty

                    <tr>

                        <td colspan="6"
                            class="text-center text-danger">

                            No Allocation Found

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