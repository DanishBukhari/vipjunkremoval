@extends('layouts.authapp')
@section('title', 'Edit Homepage Content')

@section('content')
    <section class="sofax-section-padding2">
        <div class="admin-container">
            <h3>Edit Homepage Content</h3>
            <form action="{{ route('home-content.update', $homeContent->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="section" class="form-label">Section</label>
                    <select class="form-control" id="section" name="section" required>
                        <option value="hero" {{ $homeContent->section === 'hero' ? 'selected' : '' }}>Hero</option>
                        <option value="features" {{ $homeContent->section === 'features' ? 'selected' : '' }}>Features</option>
                        <option value="help" {{ $homeContent->section === 'help' ? 'selected' : '' }}>Help</option>
                        <option value="home-pickup" {{ $homeContent->section === 'home-pickup' ? 'selected' : '' }}>Home Pickup</option>
                        <option value="what-we-take" {{ $homeContent->section === 'what-we-take' ? 'selected' : '' }}>What We Take</option>
                        <option value="business-pickup" {{ $homeContent->section === 'business-pickup' ? 'selected' : '' }}>Business Pickup</option>
                        <option value="who-we-serve" {{ $homeContent->section === 'who-we-serve' ? 'selected' : '' }}>Who We Serve</option>
                        <option value="pricing" {{ $homeContent->section === 'pricing' ? 'selected' : '' }}>Pricing</option>
                        <option value="single-item-pricing" {{ $homeContent->section === 'single-item-pricing' ? 'selected' : '' }}>Single Item Pricing</option>
                        <option value="multiple-items-pricing" {{ $homeContent->section === 'multiple-items-pricing' ? 'selected' : '' }}>Multiple Items Pricing</option>
                        <option value="repurposing" {{ $homeContent->section === 'repurposing' ? 'selected' : '' }}>Repurposing (Global)</option>
                        <option value="testimonials" {{ $homeContent->section === 'testimonials' ? 'selected' : '' }}>Testimonials (Global)</option>
                        <option value="cta" {{ $homeContent->section === 'cta' ? 'selected' : '' }}>Call-to-Action (Global)</option>
                    </select>
                    @error('section')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $homeContent->title) }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="rich-text-editor" name="content" rows="6">{{ old('content', $homeContent->content) }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image/Video (jpg, png, svg, mp4)</label>
                    @if($homeContent->image)
                        <div>
                            @if (pathinfo($homeContent->image, PATHINFO_EXTENSION) === 'mp4')
                                <video src="{{ asset('storage/' . $homeContent->image) }}" width="150" controls></video>
                            @else
                                <img src="{{ asset('storage/' . $homeContent->image) }}" width="150" alt="{{ $homeContent->section }}" />
                            @endif
                        </div>
                    @endif
                    <input type="file" class="form-control" id="image" name="image" accept="image/*,video/mp4">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="sofax-default-btn pill sofax-header-btn" data-text="UPDATE">
                    <span class="button-wraper">UPDATE</span>
                </button>
            </form>
        </div>
    </section>
@endsection