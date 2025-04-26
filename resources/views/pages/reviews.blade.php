@extends('layouts.app')
@section('title', 'Customer Reviews - V.I.P.nk Removal')

@section('content')
    @php
        $testimonials = \App\Models\HomeContent::where('section', 'testimonials')->first();
    @endphp

    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Reviews</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    /
                    <li aria-current="page">Reviews</li>
                </ul>
            </nav>
        </div>
    </div>

    <section id="testimonial" class="sofax-section-padding">
        <div class="container">
            <div class="sofax-section-title center max-width-large">
                <div class="tg-heading-subheading animation-style3">
                    <h2 class="mb-3">{{ $testimonials->title ?? 'Don\'t just take our word for it' }}</h2>
                    <p>{{ $testimonials->content ?? 'Real customer reviews, typos and all ;)' }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sofax-testimonial-content-wrap wow fadeInUpX" data-wow-delay="0.1s">
                        <div class="sofax-testimonial-rating">
                            <ul>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="sofax-testimonial-data">
                            <p>I like being able to schedule online. I have used V.I.P.nk Removal many times and the people that come are always courteous and do a great job.</p>
                        </div>
                        <div class="sofax-testimonial-author">
                            <div class="sofax-testimonial-author-thumb">
                                <img src="{{ asset('assets/images/v3/thumb4.png') }}" alt="">
                            </div>
                            <div class="sofax-testimonial-author-data">
                                <h5>Janet Wenzelburger</h5>
                                <p>Google Review</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sofax-testimonial-content-wrap wow fadeInUpX" data-wow-delay="0.2s">
                        <div class="sofax-testimonial-rating">
                            <ul>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="sofax-testimonial-data">
                            <p>Super friendly and helpful staff. They went above and beyond. Kept me well informed of their timing. Helped clean up my driveway. Great service.</p>
                        </div>
                        <div class="sofax-testimonial-author">
                            <div class="sofax-testimonial-author-thumb">
                                <img src="{{ asset('assets/images/v3/thumb5.png') }}" alt="">
                            </div>
                            <div class="sofax-testimonial-author-data">
                                <h5>Kristin Hall</h5>
                                <p>Google Review</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sofax-testimonial-content-wrap wow fadeInUpX" data-wow-delay="0.3s">
                        <div class="sofax-testimonial-rating">
                            <ul>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/homepage/starticon.svg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="sofax-testimonial-data">
                            <p>V.I.P.nk Removal’s local teams are well-equipped to handle any size of decluttering job, allowing REALTORS® to focus on their clients and closing deals.</p>
                        </div>
                        <div class="sofax-testimonial-author">
                            <div class="sofax-testimonial-author-thumb">
                                <img src="{{ asset('assets/images/v3/thumb6.png') }}" alt="">
                            </div>
                            <div class="sofax-testimonial-author-data">
                                <h5>Rhonny Barragan</h5>
                                <p>VP, Strategic Alliances</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection