<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notice Management</title>

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

        <!-- Page Heading -->
        <h2 class="text-primary">
            📢 Notice Management
        </h2>

        <!-- Add Notice Button -->
        <a href="{{ url('/notices/create') }}"
           class="btn btn-primary position-absolute end-0 top-0">
            + Add Notice
        </a>

    </div>


    <!-- Success Message -->
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <!-- Notice Table -->
    <div class="card shadow">

        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Publish Date</th>
                        <th width="180">Action</th>
                    </tr>

                </thead>


                <tbody>

                @forelse($notices as $notice)

                    <tr>

                        <td>
                            {{ $notice->id }}
                        </td>

                        <td>
                            {{ $notice->title }}
                        </td>

                        <td>
                            {{ $notice->description }}
                        </td>

                        <td>
                            {{ $notice->publish_date }}
                        </td>

                        <td>

                            <!-- Edit Button -->
                            <a href="{{ url('/notices/edit/'.$notice->id) }}"
                               class="btn btn-warning btn-sm">
                                ✏️ Edit
                            </a>


                            <!-- Delete Button -->
                            <a href="{{ url('/notices/delete/'.$notice->id) }}"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this notice?')">

                                🗑 Delete

                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5"
                            class="text-center text-danger">

                            No Notices Found

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