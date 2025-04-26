@extends('adminpanel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Edit Review</h3>
            <hr>

            <form action="{{ route('admin.reviews.update', $review) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $review->name) }}" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="review" class="form-label">Review</label>
                    <textarea class="form-control" id="review" name="review" rows="5" required>{{ old('review', $review->review) }}</textarea>
                    @error('review')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <select class="form-select" id="rating" name="rating" required>
                        <option value="1" {{ old('rating', $review->rating) == 1 ? 'selected' : '' }}>1 Star</option>
                        <option value="2" {{ old('rating', $review->rating) == 2 ? 'selected' : '' }}>2 Stars</option>
                        <option value="3" {{ old('rating', $review->rating) == 3 ? 'selected' : '' }}>3 Stars</option>
                        <option value="4" {{ old('rating', $review->rating) == 4 ? 'selected' : '' }}>4 Stars</option>
                        <option value="5" {{ old('rating', $review->rating) == 5 ? 'selected' : '' }}>5 Stars</option>
                    </select>
                    @error('rating')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="source" class="form-label">Source (e.g., Google Review)</label>
                    <input type="text" class="form-control" id="source" name="source" value="{{ old('source', $review->source) }}">
                    @error('source')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar Image</label>
                    <input type="file" class="form-control" id="avatar" name="avatar">
                    @if($review->avatar)
                        <p>Current: <img src="{{ asset('storage/' . $review->avatar) }}" alt="Avatar" width="50"></p>
                    @endif
                    @error('avatar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="order" class="form-label">Display Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $review->order) }}">
                    @error('order')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="is_active" class="form-label">Active</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $review->is_active) ? 'checked' : '' }}>
                    @error('is_active')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="sofax-default-btn pill sofax-header-btn" data-text="Update Review">
                    <span class="button-wraper">Update Review</span>
                </button>
            </form>
        </div>
    </div>
     <!-- Include Summernote CSS and JS -->
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 400,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview']],
                ],
                placeholder: 'Enter content here...',
                codemirror: { // Optional: for code view
                    theme: 'monokai'
                },
                callbacks: {
                    onChange: function(contents) {
                        $('#content').val(contents); // Update textarea
                    }
                }
            });
        });
    </script>
@endsection