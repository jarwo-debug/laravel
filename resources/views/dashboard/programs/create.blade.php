@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Program</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/programs" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    required autofocus value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Category</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($kategoris as $kategori)
                        @if (old('kategori_id') == $kategori->id)
                            <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                        @else
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="url-link" class="form-label">Link URL Youtube</label>
                <input type="text" class="form-control @error('url_link') is-invalid @enderror" id="url_link"
                    name="url_link" required autofocus value="{{ old('url_link') }}">
                @error('url_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descriptiom" class="form-label">Deskripsi</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" required autofocus value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Thumbnail</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/programs/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

            function getId(url) {
                var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
                var match = url.match(regExp);

                if (match && match[2].length == 11) {
                    return match[2];
                } else {
                    return 'error';
                }
            }

            var myId = getId('http://www.youtube.com/watch?v=zbYf5_S7oJo');

            $('#myId').html(myId);

            $('#myCode').html('<iframe width="560" height="315" src="//www.youtube.com/embed/' + myId +
                '" frameborder="0" allowfullscreen></iframe>');
        }
    </script>
@endsection
