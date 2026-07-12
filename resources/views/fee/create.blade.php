<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Fee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">💰 Add Student Fee</h3>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ url('/fees/store') }}" method="POST">

                @csrf

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


                <div class="mb-3">
                    <label class="form-label">Total Fee</label>

                    <input
                        type="number"
                        name="total_fee"
                        class="form-control"
                        placeholder="Enter Total Fee">

                    @error('total_fee')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Paid Amount</label>

                    <input
                        type="number"
                        name="paid_amount"
                        class="form-control"
                        placeholder="Enter Paid Amount">

                    @error('paid_amount')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Due Amount</label>

                    <input
                        type="number"
                        name="due_amount"
                        class="form-control"
                        placeholder="Enter Due Amount">

                    @error('due_amount')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Payment Date</label>

                    <input
                        type="date"
                        name="payment_date"
                        class="form-control">

                    @error('payment_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="status" class="form-select">

                        <option value="Paid">Paid</option>

                        <option value="Pending">Pending</option>

                    </select>

                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <button class="btn btn-success">
                    Save Fee
                </button>

                <a href="/fees" class="btn btn-secondary">
                    View Fees
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>