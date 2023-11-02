@extends('layouts.landing')

@section('content')
@section('seo')
    <meta name="description" content="{{ $blogPost->excerpt }}">
    <meta property="og:title" content="{{ $blogPost->title }}">
    <meta property="og:description" content="{{ $blogPost->excerpt }}">
    <meta property="og:image" content="{{ asset('storage/' . $blogPost->image) }}">
    <meta property="og:url" content="{{ route('blog.show', ['slug' => $blogPost->slug]) }}">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blogPost->title }}">
    <meta name="twitter:description" content="{{ $blogPost->excerpt }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $blogPost->image) }}">

    <!-- WhatsApp Tags -->
    <meta property="article:published_time" content="{{ $blogPost->created_at->toW3cString() }}">

    <!-- LinkedIn Tags -->
    <meta property="article:published_time" content="{{ $blogPost->created_at->toW3cString() }}">
    <meta property="article:section" content="Article">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .social-share {
            display: flex;
            justify-content: space-between;
            max-width: 300px;
            /* Adjust the maximum width to your liking */
        }

        .share-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            padding: 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        .share-button i {
            font-size: 24px;
        }

        .facebook:hover {
            background-color: #1877F2;
            color: #fff;
        }

        .twitter:hover {
            background-color: #1DA1F2;
            color: #fff;
        }

        .whatsapp:hover {
            background-color: #25D366;
            color: #fff;
        }

        .linkedin:hover {
            background-color: #2867B2;
            color: #fff;
        }
    </style>
@endsection
<article>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <center>
                            <div
                                style="width: 900px; height: 600px; display: flex; justify-content: center; align-items: center;">
                                <img src="{{ asset('storage/' . $blogPost->image) }}" class="img-fluid"
                                    alt="{{ $blogPost->title }}" style="max-width: 100%; max-height: 100%;">
                            </div>
                        </center>
                        <h1 class="card-title">{{ $blogPost->title }}</h1>
                        <p>Category: {{ $blogPost->category->name }}</p>
                        <p>Tags:
                            @foreach ($blogPost->tags as $tag)
                                {{ $tag->name }}@if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </p>
                        <p>{!! $blogPost->content !!}</p>
                        <span>Bagikan artikel ini : </span>
                        <div class="social-share">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.show', ['slug' => $blogPost->slug]) }}"
                                class="share-button facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                                Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ route('blog.show', ['slug' => $blogPost->slug]) }}"
                                class="share-button twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                                Twitter
                            </a>
                            <a href="whatsapp://send?text={{ route('blog.show', ['slug' => $blogPost->slug]) }}"
                                class="share-button whatsapp" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                WhatsApp
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?url={{ route('blog.show', ['slug' => $blogPost->slug]) }}"
                                class="share-button linkedin" target="_blank">
                                <i class="fab fa-linkedin"></i>
                                LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection
