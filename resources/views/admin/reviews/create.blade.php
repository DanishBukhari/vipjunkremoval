@extends('adminpanel')

@section('content')
    <div class="row">
        <div class="col-md-12 admin-container">
            <h3>Add New Review</h3>
            <hr>

            <form action="{{ route('admin.reviews.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="review" class="form-label">Review</label>
                    <textarea class="form-control" id="review" name="review" rows="5" required>{{ old('review') }}</textarea>
                    @error('review')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <select class="form-select" id="rating" name="rating" required>
                        <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>1 Star</option>
                        <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>2 Stars</option>
                        <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>3 Stars</option>
                        <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>4 Stars</option>
                        <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>5 Stars</option>
                    </select>
                    @error('rating')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="source" class="form-label">Source (e.g., Google Review)</label>
                    <input type="text" class="form-control" id="source" name="source" value="{{ old('source') }}">
                    @error('source')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar Image</label>
                    <input type="file" class="form-control" id="avatar" name="avatar">
                    @error('avatar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="order" class="form-label">Display Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}">
                    @error('order')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="is_active" class="form-label">Active</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                    @error('is_active')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="sofax-default-btn pill sofax-header-btn" data-text="Save Review">
                    <span class="button-wraper">Save Review</span>
                </button>
            </form>
        </div>
    </div>
@endsection