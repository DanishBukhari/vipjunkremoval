@extends('layouts.app')
@section('title', "blog posts")

@section('content')
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Our Blog</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li aria-current="page"> Our Blog</li>
                </ul>
            </nav>

        </div>
    </div>

    <section class="sofax-section-padding2">
        <div class="container">
            <div class="row">
                @forelse($posts as $post)
                    <div class="col-lg-12 mb-4">
                        <div class="sofax-inner-blog-wrap wow fadeInUpX">
                            <div class="sofax-inner-blog-img" style="height: 300px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="height: 100%; width: 100%; object-fit: cover;">
                            </div>
                            <div class="sofax-inner-blog-content">
                                <div class="sofax-inner-blog-meta">
                                    <a href="{{ route('blogposts.show', $post->id) }}">
                                        <ul>
                                            <li>{{ $post->created_at->format('F d, Y') }}</li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="sofax-inner-blog-text">
                                    <a href="{{ route('blogposts.show', $post->id) }}">
                                        <h3>{{ $post->title }}</h3>
                                    </a>
                                    <p>{!! Str::limit(strip_tags($post->content), 200) !!}</p>
                                </div>
                                <a class="sofax-icon-btn sofax-blog-icon-btn" href="{{ route('blogposts.show', $post->id) }}">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">No blog posts found.</p>
                @endforelse
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center mt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>

    </section>

@endsection
