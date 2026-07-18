<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Room List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <!-- Header -->
    <div class="position-relative mb-4 text-center">

        <!-- Back Button -->
        <a href="{{ url('/adminDashboard') }}"
           class="btn btn-secondary position-absolute start-0 top-0">
            ← Back to Admin Dashboard
        </a>

        <!-- Heading -->
        <h2 class="text-primary">
            🏠 Room Management
        </h2>

        <!-- Add Room Button -->
        <a href="{{ url('/rooms/create') }}"
           class="btn btn-primary position-absolute end-0 top-0">
            + Add Room
        </a>

    </div>


    <!-- Success Message -->
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <!-- Room Table -->
    <div class="card shadow">

        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Room No.</th>
                    <th>Capacity</th>
                    <th>Occupied</th>
                    <th>Type</th>
                    <th>Rent</th>
                    <th>Status</th>
                    <th width="180">Action</th>
                </tr>

                </thead>


                <tbody>

                @forelse($rooms as $room)

                <tr>

                    <td>
                        {{ $room->id }}
                    </td>

                    <td>
                        {{ $room->room_number }}
                    </td>

                    <td>
                        {{ $room->capacity }}
                    </td>

                    <td>
                        {{ $room->occupied }}
                    </td>

                    <td>
                        {{ $room->room_type }}
                    </td>

                    <td>
                        ₹{{ $room->rent }}
                    </td>


                    <td>

                        @if($room->status == "Available")

                            <span class="badge bg-success">
                                Available
                            </span>

                        @else

                            <span class="badge bg-danger">
                                Occupied
                            </span>

                        @endif

                    </td>


                    <td>

                        <!-- Edit -->
                        <a href="{{ url('/rooms/edit/'.$room->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>


                        <!-- Delete -->
                        <a href="{{ url('/rooms/delete/'.$room->id) }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Delete this room?')">

                            Delete

                        </a>

                    </td>

                </tr>


                @empty

                <tr>

                    <td colspan="8"
                        class="text-center text-danger">

                        No Rooms Found

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