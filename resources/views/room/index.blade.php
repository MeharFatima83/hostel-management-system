<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">🏠 Room Management</h2>

        <a href="/rooms/create" class="btn btn-primary">
            + Add Room
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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

                    <td>{{ $room->id }}</td>
                    <td>{{ $room->room_number }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>{{ $room->occupied }}</td>
                    <td>{{ $room->room_type }}</td>
                    <td>₹{{ $room->rent }}</td>

                    <td>

                        @if($room->status=="Available")

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

                        <a href="/rooms/edit/{{ $room->id }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="/rooms/delete/{{ $room->id }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Delete this room?')">
                            Delete
                        </a>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="8" class="text-center text-danger">
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