<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h2>Form Procurements</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ $action }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @if ($action == route('administrator.store'))
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" maxlength="100" name="title" required type="text" value="{{ $procurement->title ?? null }}">
                                    @error('title')
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Thumbnail</label>
                                    <input accept="image/*" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" required type="file" value="{{ $procurement->thumbnail ?? null }}">
                                    @error('thumbnail')
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('thumbnail') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @else
                                @method('patch')
                            @endif
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea class="form-control @error('desc') is-invalid @enderror" id="content" name="desc" required>{{ $procurement->desc ?? null }}</textarea>
                                @error('desc')
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
    <script>
        var editor = new FroalaEditor("#content", {
            toolbarButtons: [
                ['fontSize', 'bold', 'italic', 'underline', 'strikeThrough'],
                ['alignLeft', 'alignCenter', 'alignRight', 'alignJustify', 'textColor', 'backgroundColor'],
                ['formatOLSimple', 'formatUL', 'insertLink'],
            ]
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 300,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline']],
                    ['insert', ['picture', 'link']],
                    ['para', ['ul', 'ol', 'paragraph']],
                ]
            });
        });
    </script>

</body>

</html>
