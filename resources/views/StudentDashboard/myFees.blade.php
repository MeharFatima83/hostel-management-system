<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>My Fees</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f5f5f5;">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-success text-white">

<h3>Fee Details</h3>

</div>

<div class="card-body">

<table class="table table-bordered">

<tr>

<th>Total Fee</th>

<td>₹{{ $fee->total_fee ?? 0 }}</td>

</tr>

<tr>

<th>Paid Amount</th>

<td>₹{{ $fee->paid_amount ?? 0 }}</td>

</tr>

<tr>

<th>Due Amount</th>

<td>₹{{ $fee->due_amount ?? 0 }}</td>

</tr>

<tr>

<th>Status</th>

<td>{{ $fee->status ?? 'Pending' }}</td>

</tr>

</table>

<a href="/StudentDashboard" class="btn btn-success">

⬅ Back Dashboard

</a>

</div>

</div>

</div>

</body>

</html>