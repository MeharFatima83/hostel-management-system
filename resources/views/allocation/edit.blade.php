<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Allocation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-warning">
                    <h3>✏️ Edit Room Allocation</h3>
                </div>

                <div class="card-body">

                    <form action="{{ url('/allocations/update/'.$allocation->id) }}" method="POST">

                        @csrf

                        <!-- Student -->

                        <div class="mb-3">

                            <label class="form-label">Student</label>

                            <select name="student_id" class="form-select">

                                @foreach($students as $student)

                                    <option value="{{ $student->id }}"
                                    {{ $allocation->student_id==$student->id ? 'selected':'' }}>

                                        {{ $student->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <!-- Room -->

                        <div class="mb-3">

                            <label class="form-label">Room</label>

                            <select name="room_id" class="form-select">

                                @foreach($rooms as $room)

                                    <option value="{{ $room->id }}"
                                    {{ $allocation->room_id==$room->id ? 'selected':'' }}>

                                        Room {{ $room->room_number }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <!-- Allocation Date -->

                        <div class="mb-3">

                            <label class="form-label">Allocation Date</label>

                            <input
                                type="date"
                                name="allocation_date"
                                class="form-control"
                                value="{{ $allocation->allocation_date }}">

                        </div>

                        <!-- Status -->

                        <div class="mb-3">

                            <label class="form-label">Status</label>

                            <select name="status" class="form-select">

                                <option value="Allocated"
                                {{ $allocation->status=='Allocated' ? 'selected':'' }}>
                                    Allocated
                                </option>

                                <option value="Vacated"
                                {{ $allocation->status=='Vacated' ? 'selected':'' }}>
                                    Vacated
                                </option>

                            </select>

                        </div>

                        <button class="btn btn-success">
                            Update Allocation
                        </button>

                        <a href="{{ url('/allocations') }}" class="btn btn-secondary">
                            Back
                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>