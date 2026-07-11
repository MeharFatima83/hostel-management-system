<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:linear-gradient(135deg,#74ebd5,#9face6,#fbc2eb);min-height:100vh;">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow-lg rounded-4">

                <div class="card-header bg-primary text-white text-center">
                    <h3>🏠 Add Room</h3>
                </div>

                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/rooms/store" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label>Room Number</label>
                            <input type="text" name="room_number" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Capacity</label>
                            <input type="number" name="capacity" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Room Type</label>

                            <select name="room_type" class="form-control">
                                <option value="">Select</option>
                                <option>Single</option>
                                <option>Double</option>
                                <option>Triple</option>
                            </select>

                        </div>

                        <div class="mb-3">
                            <label>Rent</label>
                            <input type="number" name="rent" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Status</label>

                            <select name="status" class="form-control">
                                <option>Available</option>
                                <option>Occupied</option>
                            </select>

                        </div>

                        <button class="btn btn-primary w-100">
                            Add Room
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>