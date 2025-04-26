@extends('layouts.authapp')
@section('title', 'Homepage Content Editor')

@section('content')
    <section class="sofax-section-padding2">
        <div class="admin-container">
            <h3>Homepage Content</h3>

            <a class="float-end sofax-default-btn pill sofax-header-btn" data-text="ADD NEW CONTENT" href="{{ route('home-content.create') }}">
                <span class="button-wraper">ADD NEW CONTENT</span>
            </a>
            <br><br><br>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <p><strong>Supported Sections:</strong> hero, features, help, home-pickup, what-we-take, business-pickup, who-we-serve, pricing, single-item-pricing, multiple-items-pricing, repurposing, testimonials, cta</p>

            @foreach ($contents as $content)
                <div class="mb-4 border p-3">
                    <h4>{{ $content->section }}</h4>
                    <h5>{{ $content->title }}</h5>
                    @if ($content->image)
                        @if (pathinfo($content->image, PATHINFO_EXTENSION) === 'mp4')
                            <video src="{{ asset('storage/' . $content->image) }}" width="150" controls></video>
                        @else
                            <img src="{{ asset('storage/' . $content->image) }}" width="150" alt="{{ $content->section }}" />
                        @endif
                    @endif
                    <div>{!! \Illuminate\Support\Str::limit($content->content, 100) !!}</div>

                    <a class="float-end sofax-default-btn pill sofax-header-btn" data-text="EDIT" href="{{ route('home-content.edit', $content->id) }}">
                        <span class="button-wraper">Edit</span>
                    </a>

                    <a style="margin-right: 10px" class="float-end sofax-default-btn pill sofax-header-btn" data-text="DELETE" href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this content?')) { document.getElementById('delete-content-{{ $content->id }}').submit(); }">
                        <span class="button-wraper">DELETE</span>
                    </a>
                    <br><br>

                    <form id="delete-content-{{ $content->id }}" action="{{ route('home-content.destroy', $content->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            @endforeach

            <div class="pagination-wrapper">
                {{ $contents->links() }}
            </div>
        </div>
    </section>
@endsection