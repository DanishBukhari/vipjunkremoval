@extends('adminpanel')

@section('content')
    <div class="admin-container">
        <h1>Pricing Content Management</h1>
        <a href="{{ route('admin.pricing-content.create') }}" class="btn btn-primary mb-3">Add New Section</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Section</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contents as $content)
                    <tr>
                        <td>{{ $content->section }}</td>
                        <td>{{ $content->title }}</td>
                        <td>{{ Str::limit($content->content, 100) }}</td>
                        <td>
                            @if ($content->image)
                                <img src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->title }}" style="max-width: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.pricing-content.edit', $content) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.pricing-content.destroy', $content) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection