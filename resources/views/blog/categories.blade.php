@extends('layouts.default')

@section('content')
    <div class="row d-flex">
        <div class="col-12 mb-3">
            <div class="row d-flex justify-content-end">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('blog.store.category') }}" id="createCategoryForm">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nama Kategori...">
                        </div>
                        <button type="submit" class="btn btn-primary">Buat
                            Kategori</button>
                    </form>
                </div>


            </div>

        </div>
        @foreach ($results as $post)
            <div class="col-md-6 mb-5">
                <div class="card border-1">
                    <div class="card-header">
                        <h3 class="card-title">{{ $post->name }}</h3>
                        <div class="card-toolbar">
                            <a href="{{ route('admin.jobs.update', ['id' => $post->id]) }}"
                                class="btn btn-sm rounded-pill border m-1 btn-warning">
                                Edit
                            </a>
                            <form method="post" action="{{ route('blog.destroy.category', $post) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm rounded-pill border m-1 btn-spectro">
                                    Delete
                                </button>
                        </div>
                        </form>

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
@endsection
