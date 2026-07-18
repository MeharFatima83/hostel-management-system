<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Notice</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">📢 Add New Notice</h3>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/notices/store') }}" method="POST">

                        @csrf

                        <!-- Notice Title -->
                        <div class="mb-3">
                            <label class="form-label">Notice Title</label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                placeholder="Enter Notice Title"
                                value="{{ old('title') }}">

                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>

                            <textarea
                                name="description"
                                rows="5"
                                class="form-control"
                                placeholder="Enter Notice Description">{{ old('description') }}</textarea>

                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Publish Date -->
                        <div class="mb-3">
                            <label class="form-label">Publish Date</label>

                            <input
                                type="date"
                                name="publish_date"
                                class="form-control"
                                value="{{ old('publish_date') }}">

                            @error('publish_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-success">
                            💾 Save Notice
                        </button>

                        <a href="{{ url('/notices') }}" class="btn btn-secondary">
                            📋 View Notices
                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>