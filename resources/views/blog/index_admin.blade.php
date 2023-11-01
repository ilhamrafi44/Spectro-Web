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
        <div class="col-12 mb-3">
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
                                <form method="POST" action="{{ route('blog.store') }}" id="createBlogForm"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Buat
                                            Blog</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-spectro col-md-12" href="{{ route('category.index') }}">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tambah Kategori
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-spectro col-md-12" href="{{ route('tags.index') }}">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tambah Tags
                    </a>
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
            });
        </script>
        <script>
            // Get a reference to the form and its inputs
            // const createBlogForm = document.getElementById('createBlogForm');
            // const titleInput = document.getElementById('title');
            // const contentInput = document.getElementById('content');
            // const categoryIdInput = document.getElementById('category_id');
            // const tagsInput = document.getElementById('tags');
            // const imageInput = document.getElementById('image');

            // Event listener for form submission
            // createBlogForm.addEventListener('submit', function(e) {
            //     e.preventDefault(); // Prevent the default form submission

            //     // Create a FormData object to serialize the form data
            //     const formData = new FormData(createBlogForm);
            //     console.log('Form data:', formData);

            //     // Send the form data to the server using fetch
            //     fetch("{{ route('blog.store') }}", {
            //             method: 'POST',
            //             body: formData,
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             }
            //         })
            //         .then(response => response.json()) // Parse the response as JSON
            //         .then(data => {
            //             console.log('Response:', response);
            //             return response.json(); // Parse the response as JSON
            //         })
            //         .catch(error => {
            //             console.error(error);
            //         });
            // });
        </script>
    @endpush
@endsection
