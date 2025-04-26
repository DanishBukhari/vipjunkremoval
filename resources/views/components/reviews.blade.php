@php
  //  $testimonials = App\Models\Testimonial::first(); // Fetch first testimonial for title/subtitle
    $reviews = App\Models\Review::where('is_active', true)->orderBy('order')->get();
@endphp

<section id="testimonial" class="sofax-section-padding">
    <div class="container">
        <div class="sofax-section-title center max-width-large">
            <div class="tg-heading-subheading animation-style3">
                <h2 class="mb-3">{{ $testimonials->title ?? 'Don\'t just take our word for it' }}</h2>
                <p>{{ $testimonials->content ?? 'Real customer reviews, typos and all ;)' }}</p>
            </div>
        </div>
        <div class="row">
            @forelse($reviews as $index => $review)
                <div class="col-lg-4 col-md-6">
                    <div class="sofax-testimonial-content-wrap wow fadeInUpX" data-wow-delay="{{ 0.1 * ($index + 1) }}s">
                        <div class="sofax-testimonial-rating">
                            <ul>
                                @for($i = 1; $i <= 5; $i++)
                                    <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="sofax-testimonial-data">
                            <p>{{ $review->review }}</p>
                        </div>
                        <div class="sofax-testimonial-author">
                            <div class="sofax-testimonial-author-thumb">
                                <img src="{{ $review->avatar ? asset('storage/' . $review->avatar) : asset('assets/images/v3/default-avatar.png') }}" alt="">
                            </div>
                            <div class="sofax-testimonial-author-data">
                                <h5>{{ $review->name }}</h5>
                                <p>{{ $review->source }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>No reviews available.</p>
                </div>
            @endforelse
        </div>
        <div class="sofax-testimonial-btn">
            <a class="sofax-default-btn pill whitespace--normal" data-text="See More Customer’s love" href="{{ route('reviews') }}">
                <span class="button-wraper">See More Customer’s love</span>
            </a>
        </div>
    </div>
</section>