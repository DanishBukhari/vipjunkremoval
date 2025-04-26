@extends('adminpanel')

@section('content')
    <div class="admin-container">
        <h1>Edit Pricing Content</h1>
        <form action="{{ route('admin.pricing-content.update', $pricingContent) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="section">Section</label>
                <input type="text" name="section" id="section" class="form-control @error('section') is-invalid @enderror" value="{{ old('section', $pricingContent->section) }}" required>
                @error('section')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $pricingContent->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content"  id="rich-text-editor" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content', $pricingContent->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
                @if ($pricingContent->image)
                    <img src="{{ asset('storage/' . $pricingContent->image) }}" alt="{{ $pricingContent->title }}" style="max-width: 100px; margin-top: 10px;">
                @endif
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.pricing-content.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection