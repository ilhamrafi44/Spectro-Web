@extends('layouts.landing')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <!-- Form Pencarian -->
            <form action="" method="GET" class="search-form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari artikel..." name="title">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
            <!-- Daftar Artikel -->
            <div class="row">
                @foreach ($results as $post)
                    <div class="col-md-6 mb-4">
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="card-link text-decoration-none">
                            <div class="card border">
                                <img src="/assets/media/misc/spinner.gif" data-src="{{ asset('storage/' . $post->image) }}" alt="..." class="card-img-top lozad" style="height: 220px; object-fit: cover; object-position: top;">

                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{ $post->title }}</h5>
                                    <p class="card-text">{!! \Illuminate\Support\Str::words($post->content, 20, '...') !!}</p>
                                    <p class="card-text"><small class="text-muted">Last updated
                                        {{ $post->updated_at->diffForHumans() }}</small></p>

                                    <!-- Menambahkan Tags -->
                                    {{-- @foreach ($post->tags as $tag)
                                        <a href="{{ route('blog.tag', ['tag' => $tag->name]) }}" class="badge badge-primary">
                                            {{ $tag->name }}
                                        </a>
                                    @endforeach --}}

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Tampilkan link pagination -->
            @if ($results->count() > 0)
                <div class="d-flex justify-content-center">
                    {{ $results->appends(request()->query())->links() }}

                </div>
            @else
                @include('layouts.data404')
            @endif
        </div>
        <div class="col-12 col-md-4">
            <!-- Bagian Kanan -->
        </div>
    </div>
    <div class="container p-5">
        <div class="row my-3 mx-3">
            <!-- Konten Tambahan -->
        </div>
    </div>
@endsection
