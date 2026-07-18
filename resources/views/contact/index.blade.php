<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Contact Messages</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#f5f7ff;">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 style="color:#4f46e5;">

            📩 Contact Messages

        </h2>

        <a href="{{ url('/adminDashboard') }}"
           class="btn btn-secondary">

            ← Back to Admin Dashboard

        </a>

    </div>


    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif


    <div class="card shadow">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>ID</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Subject</th>

                            <th>Message</th>

                            <th>Date</th>

                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>

                    @forelse($messages as $message)

                        <tr>

                            <td>{{ $message->id }}</td>

                            <td>{{ $message->name }}</td>

                            <td>{{ $message->email }}</td>

                            <td>{{ $message->subject }}</td>

                            <td>{{ $message->message }}</td>

                            <td>

                                {{ $message->created_at->format('d M Y') }}

                            </td>

                            <td>

                                <a href="{{ url('/contact-messages/delete/'.$message->id) }}"

                                   class="btn btn-danger btn-sm"

                                   onclick="return confirm('Delete this message?')">

                                    🗑 Delete

                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7"
                                class="text-center text-danger">

                                No Messages Found

                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>

</html>