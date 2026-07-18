<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Messages | HostelHub</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>

        body {
            background: #f4f7fc;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            max-width: 1200px;
        }

        .page-header {
            background: white;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .page-header h2 {
            color: #4f46e5;
            font-weight: bold;
        }

        .message-card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .table th {
            background: #4f46e5;
            color: white;
        }

        .table td {
            vertical-align: middle;
        }

        .message-text {
            max-width: 300px;
            word-wrap: break-word;
        }

        .back-btn {
            background: #6d5dfc;
            border: none;
            color: white;
            border-radius: 8px;
            padding: 10px 18px;
            text-decoration: none;
            font-weight: bold;
        }

        .back-btn:hover {
            background: #4f46e5;
            color: white;
        }

    </style>

</head>

<body>

<div class="container mt-5">

    <!-- HEADER -->

    <div class="page-header mb-4">

        <div class="d-flex justify-content-between align-items-center">

            <div>

                <h2>
                    <i class="fa-solid fa-envelope"></i>
                    Contact Messages
                </h2>

                <p class="text-muted mb-0">
                    Messages received from website visitors
                </p>

            </div>

            <a href="{{ url('/adminDashboard') }}"
               class="back-btn">

                <i class="fa-solid fa-arrow-left"></i>
                Back to Dashboard

            </a>

        </div>

    </div>


    <!-- SUCCESS MESSAGE -->

    @if(session('success'))

        <div class="alert alert-success">

            <i class="fa-solid fa-check-circle"></i>

            {{ session('success') }}

        </div>

    @endif


    <!-- MESSAGES TABLE -->

    <div class="card message-card">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead>

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

                            <td>
                                {{ $message->id }}
                            </td>

                            <td>
                                <strong>
                                    {{ $message->name }}
                                </strong>
                            </td>

                            <td>
                                {{ $message->email }}
                            </td>

                            <td>
                                {{ $message->subject }}
                            </td>

                            <td class="message-text">

                                {{ $message->message }}

                            </td>

                            <td>

                                {{ $message->created_at->format('d M Y') }}

                            </td>

                            <td>

                                <a href="{{ url('/contact-messages/delete/'.$message->id) }}"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure you want to delete this message?')">

                                    <i class="fa-solid fa-trash"></i>
                                    Delete

                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7"
                                class="text-center text-danger py-4">

                                <i class="fa-solid fa-envelope-open"></i>

                                No Contact Messages Found

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