@extends('layouts.app')
@section('title', 'Repurpose & Sustainability - V.I.P.nk Removal')

@section('content')
    @php
        $repurposing = \App\Models\HomeContent::where('section', 'repurposing')->first();
    @endphp

    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Giving Old Items a New Life</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    /
                    <li aria-current="page">Repurpose & Sustainability</li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="sofax-section-padding2 dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="integration-social-icon wow fadeInUpX">
                        <img src="{{ $repurposing && $repurposing->image ? asset('storage/' . $repurposing->image) : asset('assets/images/tl4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac light-color">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">{{ $repurposing->title ?? 'Repurposing your items for good' }}</h2>
                        </div>
                        <p>{{ $repurposing->content ?? 'Once your items are loaded into the truck, their repurposing journey begins. For us, repurposing means recycling the recyclables and donating the donatables, so as much junk as possible is diverted from landfills. You can rest easy knowing your items are handled properly through responsible junk removal.' }}</p>
                        <div class="sofax-about-content-wrap">
                            <div class="sofax-iconbox-wrap2">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('assets/images/homepage/recycling-icon.svg') }}" alt="">
                                </div>
                                <div class="sofax-iconbox-data2 aboutv8">
                                    <h4 style="color: white">Recycle</h4>
                                    <p style="color: white">We sort items like wood, metal, and cardboard for proper recycling.</p>
                                </div>
                            </div>
                            <div class="sofax-iconbox-wrap2">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('assets/images/homepage/repurpose-icon.svg') }}" alt="">
                                </div>
                                <div class="sofax-iconbox-data2 aboutv8">
                                    <h4 style="color: white">Repurpose</h4>
                                    <p style="color: white">Items are reused through donations or creative repurposing.</p>
                                </div>
                            </div>
                            <div class="sofax-iconbox-wrap2">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('assets/images/homepage/donating-icon.svg') }}" alt="">
                                </div>
                                <div class="sofax-iconbox-data2 aboutv8">
                                    <h4 style="color: white">Donate</h4>
                                    <p style="color: white">We partner with local non-profits to donate usable items.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sofax-section-padding2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumbv5 wow fadeInLeft">
                        <iframe width="568" height="319" src="https://www.youtube.com/embed/N29XRkX2ew4" title="What Happens to Your Junk?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac">
                        <h2 class="mb-3">What Happens to All the Junk We Collect?</h2>
                        <p>Wondering what happens to the junk after we haul it away? Check out the video to learn more about our commitment to sustainable junk removal through our repurposing journey. You’ll see how we make sure as many items as possible get recycled or donated.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sofax-section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sofax-content-img box-shadow mb-130 wow fadeInLeft">
                        <img src="{{ asset('assets/images/pages/Repurpose_Page_Image_02.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sofax-default-content tac ml-50 mb-130">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">We Recycle the Recyclables</h2>
                            <p>
                                <strong>What we do:</strong><br>
                                - Recycle wood from furniture, metal from appliances, and cardboard packaging.<br>
                                - Send items to waste-to-energy facilities where applicable.<br>
                                - Leverage transfer stations for efficient processing.<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 order-lg-2">
                    <div class="sofax-content-img2 position-relatiove ml-31 wow fadeInRight">
                        <img src="{{ asset('assets/images/pages/Repurpose_Page_Image_03.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sofax-default-content mr-80 tac fs-19">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">We Donate the Donatables</h2>
                            <p>
                                - Partner with local non-profits and community groups.<br>
                                - Work directly with donation centers.<br>
                                - Host yard/warehouse/garage sales for charity.<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection