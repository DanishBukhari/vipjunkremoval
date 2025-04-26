@extends('layouts.app')
@section('title', "blog posts")

@section('content')
    <section>
        <div class="sofax-breadcrumb">
            <div class="container">
                <h1 class="post__title">{{ $post->title }}</h1>
                <nav class="breadcrumbs">
                    <ul>
                        <li><a href="{{ route('blogposts.index') }}">Home</a></li>
                    /
                        <li aria-current="page">Blog Details</li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="container">
            <section class="sofax-section-padding2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sofax-inner-blog-details-wrap">
                                <div class="sofax-inner-blog-details-img wow fadeInUpX">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; height: 400px; object-fit: cover;">
                                </div>
                                <div class="sofax-inner-blog-details-content mt-4">
                                    <p><small><i>Published on {{ $post->created_at->format('F d, Y') }}</i></small></p>
                                    <div class="blog-html-content">
                                        {!! $post->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </section>
@endsection
