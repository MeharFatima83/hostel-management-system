<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Complaints</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>My Complaints</h2>

<table class="table table-bordered">

<tr>

<th>Title</th>

<th>Status</th>

</tr>

@forelse($complaints as $complaint)

<tr>

<td>{{ $complaint->title }}</td>

<td>{{ $complaint->status }}</td>

</tr>

@empty

<tr>

<td colspan="2">

No Complaint Found

</td>

</tr>

@endforelse

</table>

<a href="/StudentDashboard" class="btn btn-primary">

⬅ Back Dashboard

</a>

</div>

</body>

</html>