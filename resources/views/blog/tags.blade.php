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
    <div class="row d-flex">
        @foreach ($results as $post)
            <div class="col-md-4 mb-5">
                <div class="card border-1">
                    <div class="card-header">
                        <h3 class="card-title">{{ $post->name }}</h3>
                        <div class="card-toolbar">
                            <a class="btn btn-sm rounded-pill border m-1 btn-warning" data-bs-toggle="collapse"
                                href="#collapseExample{{ $post->id }}" role="button" aria-expanded="false"
                                aria-controls="collapseExample{{ $post->id }}">
                                Edit
                            </a>
                            <form method="post" action="{{ route('blog.destroy.tags', $post) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm rounded-pill border m-1 btn-spectro">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample{{ $post->id }}">
                        <div class="card-body border m-5">

                            <form action="{{ route('blog.update.tags') }}" method="post">
                                @csrf
                                <div class="mb-5">
                                    <label for="" class="form-label">Update Name</label>
                                    <input type="hidden" value="{{ $post->id }}" name="id">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $post->name }}">
                                </div>
                                <button type="submit" class="btn btn-primary"> Save</button>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        @endforeach
    </div>
    @if ($results->count() > 0)
        <!-- Tampilkan link pagination -->
        {{ $results->links() }}
    @else
        @include('layouts.data404')
    @endif
@endsection
