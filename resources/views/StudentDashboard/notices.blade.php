<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Notices</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Latest Notices</h2>

@forelse($notices as $notice)

<div class="card mb-3">

<div class="card-header bg-warning">

<h4>{{ $notice->title }}</h4>

</div>

<div class="card-body">

<p>{{ $notice->description }}</p>

</div>

</div>

@empty

<div class="alert alert-info">

No Notices Available

</div>

@endforelse

<a href="/StudentDashboard" class="btn btn-primary">

⬅ Back Dashboard

</a>

</div>

</body>

</html>