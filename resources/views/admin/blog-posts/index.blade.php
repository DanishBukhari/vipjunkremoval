@extends('layouts.authapp')
@section('title', "Admin panel")

@section('content')
    <section class="sofax-section-padding2">
        <div class="admin-container">
            <h3>Blog Posts</h3>

            <a class="float-end sofax-default-btn pill sofax-header-btn" data-text="ADD NEW POST" href="{{route("admin.blog-posts.create")}}">
                <span class="button-wraper">ADD NEW POST</span>
            </a>
            <br><br>
            <br>

            @foreach ($posts as $post)
                <div class="mb-4 border p-3">
                    <h4>{{ $post->title }}</h4>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" width="150" />
                    @endif
                    <div>{!! Str::limit($post->content, 100) !!}</div>

                    <a class="float-end sofax-default-btn pill sofax-header-btn" data-text="EDIT" href="{{ route('admin.blog-posts.edit', $post->id) }}">
                        <span class="button-wraper">Edit</span>
                    </a>

                    <a style="margin-right: 10px" class="float-end sofax-default-btn pill sofax-header-btn" data-text="DELETE" href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this post?')) { document.getElementById('delete-post-{{ $post->id }}').submit(); }">
                        <span class="button-wraper">DELETE</span>
                    </a>
                    <br><br>

                    <form id="delete-post-{{ $post->id }}" action="{{ route('admin.blog-posts.destroy', $post->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>

                </div>


            @endforeach

            <div class="pagination-wrapper">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
@endsection
