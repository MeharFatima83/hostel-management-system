<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Complaint</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-danger text-white">
            <h3 class="mb-0">📝 Register Complaint</h3>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ url('/complaints/store') }}" method="POST">

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

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Complaint Title</label>

                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        placeholder="Enter Complaint Title">

                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>

                    <textarea
                        name="description"
                        rows="5"
                        class="form-control"
                        placeholder="Describe your complaint"></textarea>

                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="status" class="form-select">

                        <option value="Pending">Pending</option>
                        <option value="Solved">Solved</option>

                    </select>

                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">
                    Save Complaint
                </button>

                <a href="{{ url('/complaints') }}" class="btn btn-secondary">
                    View Complaints
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>