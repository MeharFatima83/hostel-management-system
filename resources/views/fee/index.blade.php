<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">💰 Fee Management</h2>

        <a href="{{ url('/fees/create') }}" class="btn btn-primary">
            + Add Fee
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
                    <th>Total Fee</th>
                    <th>Paid Amount</th>
                    <th>Due Amount</th>
                    <th>Payment Date</th>
                    <th>Status</th>
                    <th width="180">Action</th>

                </tr>

                </thead>

                <tbody>

                @forelse($fees as $fee)

                    <tr>

                        <td>{{ $fee->id }}</td>

                        
                        <td>{{ $fee->student->name ?? 'No Student Assigned' }}</td>

                        <td>₹{{ $fee->total_fee }}</td>

                        <td>₹{{ $fee->paid_amount }}</td>

                        <td>₹{{ $fee->due_amount }}</td>

                        <td>{{ $fee->payment_date }}</td>

                        <td>

                            @if($fee->status=="Paid")

                                <span class="badge bg-success">
                                    Paid
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Pending
                                </span>

                            @endif

                        </td>

                        <td>

                            <a href="{{ url('/fees/edit/'.$fee->id) }}"
                               class="btn btn-warning btn-sm">
                                ✏️ Edit
                            </a>

                            <a href="{{ url('/fees/delete/'.$fee->id) }}"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this fee record?')">
                                🗑 Delete
                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="8" class="text-center text-danger">

                            No Fee Records Found

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