<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="text-danger">📝 Complaint Management</h2>

        <a href="{{ url('/complaints/create') }}" class="btn btn-primary">
            + Add Complaint
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    <div class="card shadow">

        <div class="card-body">

            <table class="table table-hover table-bordered align-middle">

                <thead class="table-dark">

                    <tr>

                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th width="180">Action</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($complaints as $complaint)

                    <tr>

                        <td>{{ $complaint->id }}</td>

                        <td>
                            {{ optional($complaint->student)->name ?? 'No Student' }}
                        </td>

                        <td>{{ $complaint->title }}</td>

                        <td>{{ $complaint->description }}</td>

                        <td>

                            @if($complaint->status == 'Pending')

                                <span class="badge bg-warning text-dark">
                                    Pending
                                </span>

                            @else

                                <span class="badge bg-success">
                                    Solved
                                </span>

                            @endif

                        </td>

                        <td>

                            <a href="{{ url('/complaints/edit/'.$complaint->id) }}"
                               class="btn btn-warning btn-sm">
                                ✏️ Edit
                            </a>

                            <a href="{{ url('/complaints/delete/'.$complaint->id) }}"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure you want to delete this complaint?')">
                                🗑 Delete
                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center text-danger">

                            No Complaints Found

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