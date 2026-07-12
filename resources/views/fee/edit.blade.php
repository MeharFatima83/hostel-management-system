<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-warning text-dark">
            <h3 class="mb-0">✏️ Edit Fee</h3>
        </div>

        <div class="card-body">

            <form action="{{ url('/fees/update/'.$fee->id) }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Student</label>

                    <select name="student_id" class="form-select">

                        @foreach($students as $student)

                            <option value="{{ $student->id }}"
                                {{ $fee->student_id == $student->id ? 'selected' : '' }}>

                                {{ $student->name }}

                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Total Fee</label>

                    <input
                        type="number"
                        name="total_fee"
                        class="form-control"
                        value="{{ $fee->total_fee }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Paid Amount</label>

                    <input
                        type="number"
                        name="paid_amount"
                        class="form-control"
                        value="{{ $fee->paid_amount }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Due Amount</label>

                    <input
                        type="number"
                        name="due_amount"
                        class="form-control"
                        value="{{ $fee->due_amount }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Payment Date</label>

                    <input
                        type="date"
                        name="payment_date"
                        class="form-control"
                        value="{{ $fee->payment_date }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="status" class="form-select">

                        <option value="Paid"
                            {{ $fee->status=='Paid' ? 'selected' : '' }}>
                            Paid
                        </option>

                        <option value="Pending"
                            {{ $fee->status=='Pending' ? 'selected' : '' }}>
                            Pending
                        </option>

                    </select>
                </div>

                <button type="submit" class="btn btn-success">
                    Update Fee
                </button>

                <a href="/fees" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>