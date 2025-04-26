@extends('layouts.authapp')
@section('title', "Edit Blog Post")

@section('content')
    <section class="sofax-section-padding2">
        <div class="admin-container">
            <h3>Edit Blog Post</h3>

            <form action="{{ route('admin.blog-posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div>
                    <label>Title:</label>
                    <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label>Current Image:</label><br>
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" width="200" alt="Current image">
                    @endif
                </div>

                <div>
                    <label>Change Image:</label>
                    <input type="file" name="image" accept="image/*">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label>Content:</label>
                    <textarea name="content" class="form-control" id="rich-text-editor" rows="10">{{ old('content', $post->content) }}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button class="sofax-default-btn pill sofax-header-btn" type="submit">Update</button>
            </form>
        </div>
    </section>
@endsection