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
            <div class="card">
                <div class="card-body">
                    <h5>A propos de l'auteur</h5>
                    <hr />
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate amet ullam excepturi odio
                        impedit
                        saepe nemo repellendus, aut suscipit voluptas omnis quas quisquam accusamus illo laboriosam rerum,
                        totam
                        ea eaque.</p>
                </div>
            </div>
            <br />
            <div class="card">
                <div class="card-body">
                    <h5>Les formations</h5>
                    <hr />
                    <button type="button" class="btn btn-light">Payantes</button>
                    <button type="button" class="btn btn-dark">Gratuites</button>
                </div>
            </div>

            <br />
            <div class="card">
                <div class="card-body">
                    <h5>Présentation</h5>
                    <hr />
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/ZEyAs3NWH4A" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <div class="container p-5">
        <div class="row my-3 mx-3">

        </div>
    </div>
@endsection
