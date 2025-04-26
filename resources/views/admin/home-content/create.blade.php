@extends('layouts.authapp')
@section('title', 'Create Homepage Content')

@section('content')
    <section class="sofax-section-padding2">
        <div class="admin-container">
            <h3>Create Homepage Content</h3>
            <form action="{{ route('home-content.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="section" class="form-label">Section</label>
                    <select class="form-control" id="section" name="section" required>
                        <option value="" disabled selected>Select a section</option>
                        <option value="hero">Hero</option>
                        <option value="features">Features</option>
                        <option value="help">Help</option>
                        <option value="home-pickup">Home Pickup</option>
                        <option value="what-we-take">What We Take</option>
                        <option value="business-pickup">Business Pickup</option>
                        <option value="who-we-serve">Who We Serve</option>
                        <option value="pricing">Pricing</option>
                        <option value="single-item-pricing">Single Item Pricing</option>
                        <option value="multiple-items-pricing">Multiple Items Pricing</option>
                        <option value="repurposing">Repurposing (Global)</option>
                        <option value="testimonials">Testimonials (Global)</option>
                        <option value="cta">Call-to-Action (Global)</option>
                    </select>
                    @error('section')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control"  id="rich-text-editor" name="content" rows="6">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image/Video (jpg, png, svg, mp4)</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*,video/mp4">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="sofax-default-btn pill sofax-header-btn" data-text="SAVE">
                    <span class="button-wraper">SAVE</span>
                </button>
            </form>
        </div>
    </section>
@endsection