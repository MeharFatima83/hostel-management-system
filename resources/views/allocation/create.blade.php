<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allocate Room</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h3>🏠 Allocate Room</h3>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/allocations/store') }}" method="POST">

                        @csrf

                        <!-- Student -->

                        <div class="mb-3">

                            <label class="form-label">Student</label>

                            <select name="student_id" class="form-select">

                                <option value="">Select Student</option>

                                @foreach($students as $student)

                                    <option value="{{ $student->id }}">
                                        {{ $student->name }}
                                    </option>

                                @endforeach

                            </select>

                            @error('student_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <!-- Room -->

                        <div class="mb-3">

                            <label class="form-label">Room</label>

                            <select name="room_id" class="form-select">

                                <option value="">Select Room</option>

                                @foreach($rooms as $room)

                                    <option value="{{ $room->id }}">
                                        Room {{ $room->room_number }}
                                    </option>

                                @endforeach

                            </select>

                            @error('room_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <!-- Allocation Date -->

                        <div class="mb-3">

                            <label class="form-label">Allocation Date</label>

                            <input type="date"
                                   name="allocation_date"
                                   class="form-control"
                                   value="{{ old('allocation_date') }}">

                            @error('allocation_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <!-- Status -->

                        <div class="mb-3">

                            <label class="form-label">Status</label>

                            <select name="status" class="form-select">

                                <option value="Allocated">Allocated</option>

                                <option value="Vacated">Vacated</option>

                            </select>

                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <button type="submit" class="btn btn-success">
                            Allocate Room
                        </button>

                        <a href="{{ url('/allocations') }}" class="btn btn-secondary">
                            View Allocations
                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>