<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h2>Manage Procurements</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-primary btn-sm" href="{{ route('administrator.create') }}">Add New</a>
                        <table class="table table-bordered mt-2">
                            <thead>
                                <tr>
                                    <th class="fit-content">#</th>
                                    <th>Title</th>
                                    <th>Thumbnail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($procurements as $procurement)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $procurement->title }}</td>
                                        <td><img class="img-thumbnail" src="{{ asset('assets/img/thumbnail/' . $procurement->thumbnail) }}" width="200px"></td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{ route('administrator.edit', $procurement->id) }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('administrator.destroy', $procurement->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
