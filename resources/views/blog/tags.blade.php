@extends('layouts.default')

@section('content')
    <div class="row d-flex">
        <div class="col-12 mb-3">
            <form method="POST" action="{{ route('blog.store.tags') }}" id="createCategoryForm">
                <div class="row d-flex justify-content-end align-items-center">
                    <div class="col-md-10">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nama Tags...">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary mb-3">Buat
                            Tags</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    @foreach ($results as $post)
        <div class="col-md-4 mb-5">
            <div class="card border-1">
                <div class="card-header">
                    <h3 class="card-title">{{ $post->name }}</h3>
                    <div class="card-toolbar">
                        <a href="{{ route('admin.jobs.update', ['id' => $post->id]) }}"
                            class="btn btn-sm rounded-pill border m-1 btn-warning">
                            Edit
                        </a>
                        <form method="post" action="{{ route('blog.destroy.tags', $post) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm rounded-pill border m-1 btn-spectro">
                                Delete
                            </button>
                    </div>
                    </form>

                </div>
                <div class="card-footer">
                    <span class="text-muted"> Total Post : 10</span>
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
