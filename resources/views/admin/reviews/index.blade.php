@extends('adminpanel')

@section('content')
    <div class="row">
        <div class="col-md-12 admin-container">
            <h3>Manage Reviews</h3>
            <hr>
            <a href="{{ route('admin.reviews.create') }}" class="sofax-default-btn pill sofax-header-btn mb-4 " data-text="Add New Review">
                <span class="button-wraper">Add New Review</span>
            </a>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($reviews->isEmpty())
                <p>No reviews yet.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Review</th>
                            <th>Rating</th>
                            <th>Source</th>
                            <th>Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $review)
                            <tr>
                                <td>{{ $review->id }}</td>
                                <td>{{ $review->name }}</td>
                                <td>{{ Str::limit($review->review, 50) }}</td>
                                <td>{{ $review->rating }} stars</td>
                                <td>{{ $review->source }}</td>
                                <td>{{ $review->is_active ? 'Yes' : 'No' }}</td>
                                <td>
                                    <a href="{{ route('admin.reviews.edit', $review) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection