@extends('layouts.authapp')
@section('title', "Admin panel")

@section('content')
    <section class="sofax-section-padding2">
       <div class="admin-container">
           <h3>Create New Blog Post</h3><br>

           <form action="{{ route('blog-posts.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="mb-3">
                   <label>Title</label>
                   <input type="text" name="title" class="form-control" required>
               </div>

               <div class="mb-3">
                   <label>Image (optional)</label>
                   <input type="file" name="image" class="form-control">
               </div>

               <div class="mb-3">
                   <label>Content</label>
                   <textarea name="content" class="form-control" id="rich-text-editor" rows="10"></textarea>
               </div>

               <button class="sofax-default-btn pill sofax-header-btn">Save Post</button>
           </form>
       </div>
    </section>

@endsection
