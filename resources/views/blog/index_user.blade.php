@extends('layouts.landing')

@section('content')
    <style>
        .card-link {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            /* Add shadow to card-link */
            transition: box-shadow 0.2s;
            /* Add a smooth transition to box-shadow */
        }

        .card-link:hover {
            transition: box-shadow 0.2s;

            box-shadow: none;
            /* Remove the shadow on hover */
        }
    </style>
    <div class="row">
        <div class="col-md-8">
            @foreach ($results as $post)
                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="card-link card mb-3">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="..."
                        style="max-height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{!! \Illuminate\Support\Str::words($post->content, 20, '...') !!}</p>
                        <p class="card-text"><small class="text-muted">Last updated
                                {{ $post->updated_at->diffForHumans() }}</small></p>
                    </div>
                </a>
            @endforeach
            @if ($results->count() > 0)
                <!-- Tampilkan link pagination -->
                {{ $results->links() }}
            @else
                @include('layouts.data404')
            @endif
        </div>
        <div class="col-12 col-md-4">






        </div>
    </div>
    <div class="container p-5">
        <div class="row my-3 mx-3">

        </div>
    </div>
@endsection
