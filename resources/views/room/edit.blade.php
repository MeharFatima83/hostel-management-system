<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Room</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:linear-gradient(135deg,#74ebd5,#9face6,#fbc2eb);min-height:100vh;">

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow-lg">

<div class="card-header bg-warning">

<h3 class="text-center">
✏ Edit Room
</h3>

</div>

<div class="card-body">

<form action="/rooms/update/{{ $room->id }}" method="POST">

@csrf

<div class="mb-3">

<label>Room Number</label>

<input
type="text"
name="room_number"
class="form-control"
value="{{ $room->room_number }}">

</div>

<div class="mb-3">

<label>Capacity</label>

<input
type="number"
name="capacity"
class="form-control"
value="{{ $room->capacity }}">

</div>

<div class="mb-3">

<label>Room Type</label>

<select
name="room_type"
class="form-control">

<option value="Single"
{{ $room->room_type=="Single" ? 'selected' : '' }}>
Single
</option>

<option value="Double"
{{ $room->room_type=="Double" ? 'selected' : '' }}>
Double
</option>

<option value="Triple"
{{ $room->room_type=="Triple" ? 'selected' : '' }}>
Triple
</option>

</select>

</div>

<div class="mb-3">

<label>Rent</label>

<input
type="number"
name="rent"
class="form-control"
value="{{ $room->rent }}">

</div>

<div class="mb-3">

<label>Status</label>

<select
name="status"
class="form-control">

<option value="Available"
{{ $room->status=="Available" ? 'selected' : '' }}>
Available
</option>

<option value="Occupied"
{{ $room->status=="Occupied" ? 'selected' : '' }}>
Occupied
</option>

</select>

</div>

<button class="btn btn-warning w-100">
Update Room
</button>

<br><br>

<a href="/rooms" class="btn btn-secondary w-100">
Back
</a>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>