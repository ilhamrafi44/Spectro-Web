@extends('layouts.default')

@section('content')
    @push('page_blog_styles')
        <style>
            /* Custom CSS for fade-in animation */
            .img-preview {
                opacity: 0;
                transition: opacity 0.5s;
            }

            .img-preview.show {
                opacity: 1;
            }
        </style>
    @endpush
    <div class="row d-flex">
        <div class="col-12">
            <form method="POST" action="{{ route('blog.index.filter') }}">
                @csrf
                <div class="row d-flex">
                    <div class="col-md-6">
                        <div class="mb-5">
                            <input type="text" name="title" value="{{ request('title') }}" class="form-control"
                                placeholder="Cari Judul..">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5">
                            <select class="form-select" aria-label="Select example" data-control="select2" name="direction">
                                <option value="asc">Terlama</option>
                                <option value="desc">Terbaru</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="mb-5">
                            <select class="form-select" aria-label="Select example" data-control="select2" name="per_page">
                                <option value="10">10 Data Per Halaman</option>
                                <option value="50">50 Data Per Halaman</option>
                                <option value="100">100 Data Per Halaman</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-spectro col-md-12" type="submit">Cari</button>
                    </div>

                </div>
            </form>
            <div class="row d-flex justify-content-end">
                <div class="col-md-2">
                    <button class="btn btn-spectro col-md-12" data-bs-toggle="modal" data-bs-target="#createPostModal">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tambah Blog
                    </button>
                    <div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createPostModalLabel">Buat Blog</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('blog.store') }}" id="createBlogForm">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Judul</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="Blog Post Title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Kontent</label>
                                            <textarea name="content" class="form-control" id="content" placeholder="Blog Post Content"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tags" class="form-label">Kategori</label>
                                            <select name="category_id" class="form-control" id="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tags" class="form-label">Label</label>
                                            <select name="tags[]" class="form-control" id="tags" multiple>
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Gambar</label>
                                            <input type="file" name="image" class="form-control" id="image">
                                        </div>
                                        <div class="mb-3 text-center">
                                            <div class="image-preview-container">
                                                <img id="imagePreview"
                                                    src="https://img.freepik.com/free-vector/red-prohibited-sign-no-icon-warning-stop-symbol-safety-danger-isolated-vector-illustration_56104-912.jpg"
                                                    alt="Image Preview" class="rounded img-preview"
                                                    style="max-width: 500px;">
                                            </div>
                                        </div>
                                        <!-- Other input fields as needed for your blog post creation -->
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="createPostButton">Buat
                                        Blog</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-spectro col-md-12" data-bs-toggle="modal"
                        data-bs-target="#createCategoryModal">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tambah Kategori
                    </button>
                    <div class="modal fade" id="createCategoryModal" tabindex="-1"
                        aria-labelledby="createPostModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createPostModalLabel">Buat Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('blog.store.category') }}"
                                        id="createCategoryForm">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Nama Kategori...">
                                        </div>
                                        <!-- Other input fields as needed for your blog post creation -->
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="createPostButton">Buat
                                        Kategori</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-spectro col-md-12" data-bs-toggle="modal" data-bs-target="#createTagsModal">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tambah Tags
                    </button>
                    <div class="modal fade" id="createTagsModal" tabindex="-1" aria-labelledby="createPostModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createPostModalLabel">Buat Tag</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('blog.store.tags') }}" id="createTagsForm">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Nama Tags...">
                                        </div>
                                        <!-- Other input fields as needed for your blog post creation -->
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="createPostButton">Buat
                                        Tags</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @foreach ($results as $post)
            <div class="col-md-6 mb-5">
                <div class="card border-1">
                    <div class="card-header">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <div class="card-toolbar">
                            <a href="{{ route('job.detail', ['id' => $post->id]) }}"
                                class="btn btn-sm rounded-pill border m-1 btn-light">
                                Open
                            </a>
                            <a href="{{ route('admin.jobs.update', ['id' => $post->id]) }}"
                                class="btn btn-sm rounded-pill border m-1 btn-warning">
                                Edit
                            </a>
                            <button type="button" class="btn btn-sm rounded-pill border m-1 btn-spectro">
                                Delete
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row d-flex">
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi :
                                                {{ $post->title }}</b></a>
                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Expired :
                                                {{ $post->title }}</b></a>
                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Created :
                                                {{ $post->title }}</b></a>
                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-envelope"></i> <b>Total Pelamar :
                                                {{ $post->count() }}</b></a>
                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-bookmark"></i> <b>Total Dilihat:
                                                {{ $post->count() }}</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if ($results->count() > 0)
            <!-- Tampilkan link pagination -->
            {{ $results->links() }}
        @else
            @include('layouts.data404')
        @endif
    </div>
    @push('page_blog_scripts')
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            CKEDITOR.replace('content');
            $(document).ready(function() {
                $('#tags').select2({
                    placeholder: 'Select Tag',
                });
                $('#category_id').select2({
                    placeholder: 'Select Category',
                });
                $('#image').on('change', function() {
                    const fileInput = this;
                    const imgPreview = document.getElementById('imagePreview');

                    if (fileInput.files && fileInput.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            imgPreview.src = e.target.result;
                            imgPreview.classList.add(
                                'show');
                        };
                        reader.readAsDataURL(fileInput.files[0]);
                    }
                });


                $('#createBlogForm').submit(function(e) {
                    e.preventDefault();
                    const formData = new FormData(this);
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('blog.store') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            console.log(data);
                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
