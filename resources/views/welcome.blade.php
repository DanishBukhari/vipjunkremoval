@extends('layouts.app')
@section('title', "V.I.P.nk Removal is your Full-Service Junk Removers! Just Point, We Do The Rest - Book Your Free Estimate Online Now - We're ready to help with junk removal today.")

@section('content')
    @php
        $hero = \App\Models\HomeContent::where('section', 'hero')->first();
        $features = \App\Models\HomeContent::where('section', 'features')->first();
        $help = \App\Models\HomeContent::where('section', 'help')->first();
        $homePickup = \App\Models\HomeContent::where('section', 'home-pickup')->first();
        $whatWeTake = \App\Models\HomeContent::where('section', 'what-we-take')->first();
        $businessPickup = \App\Models\HomeContent::where('section', 'business-pickup')->first();
        $whoWeServe = \App\Models\HomeContent::where('section', 'who-we-serve')->first();
        $pricing = \App\Models\HomeContent::where('section', 'pricing')->first();
        $singleItemPricing = \App\Models\HomeContent::where('section', 'single-item-pricing')->first();
        $multipleItemsPricing = \App\Models\HomeContent::where('section', 'multiple-items-pricing')->first();
        $repurposing = \App\Models\HomeContent::where('section', 'repurposing')->first();
        $testimonials = \App\Models\HomeContent::where('section', 'testimonials')->first();
        $cta = \App\Models\HomeContent::where('section', 'cta')->first();
    @endphp

    <div id="home" class="section sofax-section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="sofax-hero-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" alt="Sparkles" aria-hidden="true" class="absolute -bottom-16 -right-10 origin-bottom-right lg:-left-8 lg:-top-8"><g fill="#A5D3EE"><path d="M54 19.64c-5.454 0-8.707-3.253-8.707-8.707 0-.666-.533-1.2-1.2-1.2s-1.2.534-1.2 1.2c0 5.454-3.253 8.707-8.707 8.707-.666 0-1.2.533-1.2 1.2s.534 1.2 1.2 1.2c5.454 0 8.707 3.253 8.707 8.707 0 .666.533 1.2 1.2 1.2s1.2-.534 1.2-1.2c0-5.454 3.253-8.707 8.707-8.707.666 0 1.2-.533 1.2-1.2s-.534-1.2-1.2-1.2M38.747 49.693c-2.387-.613-3.4-2.346-2.774-4.733a.664.664 0 0 0-.48-.813.664.664 0 0 0-.813.48c-.613 2.386-2.347 3.4-4.733 2.773a.664.664 0 0 0-.814.48c-.093.36.12.72.48.813 2.387.614 3.4 2.347 2.774 4.734-.094.36.12.72.48.813s.72-.12.813-.48c.613-2.387 2.347-3.4 4.733-2.773.36.093.72-.12.814-.48a.664.664 0 0 0-.48-.814M19.12 24.587a.92.92 0 0 0-1.28 0c-2.372 2.373-5.092 2.373-7.466 0a.92.92 0 0 0-1.28 0 .893.893 0 0 0 0 1.28c2.374 2.373 2.374 5.093 0 7.466a.893.893 0 0 0 0 1.28c.36.36.934.36 1.28 0 2.374-2.373 5.094-2.373 7.467 0 .36.36.933.36 1.28 0a.893.893 0 0 0 0-1.28c-2.373-2.373-2.373-5.093 0-7.466a.92.92 0 0 0 0-1.28"></path></g></svg>
                        <h1 class="slider-custom-anim-left" data-ani="slider-custom-anim-left" data-ani-delay="0.3s">{{ $hero->title ?? 'We make junk disappear' }}</h1>
                        <p>{!! $hero->content ?? 'Offering fast, reliable junk removal services with a focus on cleanliness, convenience, and customer satisfaction across every step.' !!}</p>
                        <div class="extra-mt">
                            <div class="sofax-app-wrap position-relatiove">
                                <div class="homepageZipForm">
                                    <form action="{{ route('zipcode.check') }}" class="check-zip-codes-form1" method="POST">
                                        <input type="text" placeholder="Enter ZIP code" id="postalCodeInput">
                                        <button id="sofax-subscription-btn" style="margin-left: 10px;" type="submit">CHECK AVAILABILITY</button>
                                    </form>
                                </div>
                                <div class="hero2-shape">
                                    <img src="{{ asset('assets/images/homepage/shape1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sofax-hero-thumb2 wow fadeInUpX">
                        <img src="{{ $hero && $hero->image ? asset('storage/' . $hero->image) : asset('assets/images/vipjunkremoval.jpg') }}" alt="" style="margin-top: 30px; border: none; border-radius: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="aboutversoin8 sofax-section-padding2 bg-light">
        <div class="sofax-section-title center">
            <div class="tg-heading-subheading animation-style3">
                <h2 class="mb-3">{{ $features->title ?? 'Junk removal made easy' }}</h2>
            </div>
        </div>

        <div class="sofax-features-section-v8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sofax-iconbox-wrap2 features-vr8 wow fadeInUpX" data-wow-delay="0.1s">
                            <div class="sofax-iconbox-data2" style="display:flex; flex-direction: column; justify-content: center; align-items: center;">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('assets/images/homepage/same-day-service-truck-icon.svg') }}" alt="">
                                </div>
                                <h4>Same-day service</h4>
                                <p class="text-center">Book today. We'll call before we arrive</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sofax-iconbox-wrap2 features-vr8 wow fadeInUpX" data-wow-delay="0.2s">
                            <div class="sofax-iconbox-data2" style="display:flex; flex-direction: column; justify-content: center; align-items: center;">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('assets/images/homepage/get-free-estimate-icon.svg') }}" alt="">
                                </div>
                                <h4>Get a free estimate</h4>
                                <p class="text-center">No hidden fees. No deposit. No obligation to continue</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sofax-iconbox-wrap2 features-vr8 wow fadeInUpX" data-wow-delay="0.3s">
                            <div class="sofax-iconbox-data2" style="display:flex; flex-direction: column; justify-content: center; align-items: center;">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('assets/images/homepage/gotjunk-hat-icon.svg') }}" alt="">
                                </div>
                                <h4>Friendly, professional teams</h4>
                                <p class="text-center">We'll take care of everything and sweep up when we're done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <div class="container-fluid">mark
            <div class="sofax-section-title center">
                <div class="tg-heading-subheading animation-style3">
                    <h2 class="mb-3">{{ $help->title ?? 'What can we help you with?' }}</h2>
                </div>
            </div>

            <div class="row selectOptionWrapper mb-5">
                <div class="col-md-4">
                    <label class="selectOptionsHowHelpUsignle">
                        <input type="radio" name="pickup-option" value="home" onclick="handleCheckboxClick(this)" checked>
                        Home pickup
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="selectOptionsHowHelpUsignle">
                        <input type="radio" name="pickup-option" value="business" onclick="handleCheckboxClick(this)">
                        Business pickup
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="selectOptionsHowHelpUsignle">
                        <input type="radio" name="pickup-option" value="pricing" onclick="handleCheckboxClick(this)">
                        Pricing information
                    </label>
                </div>
            </div>
        </div>

        <div class="container content-box" id="home-content" style="display:none; margin-top: 10px;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sofax-content-thumb mr-80 box-shadow wow fadeInUpX">
                        <img src="{{ $homePickup && $homePickup->image ? asset('storage/' . $homePickup->image) : asset('assets/images/loading.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">{{ $homePickup->title ?? 'Leave the heavy lifting to us' }}</h2>
                        </div>
                        <p>{!! $homePickup->content ?? 'We’ll be there whenever you need us. We offer flexible scheduling and you can easily book junk removal online or by phone. There’s no need to move items ahead of time—we can pick them up from anywhere in your home and we’ll do all the lifting and loading. We’ll even sweep up when we’re done!' !!}</p>
                        <ul>
                            <li>
                                <a href="{{ route('home-solutions') }}" id="customerServiceAnchor">Learn about our Residential Home Solutions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <br><br><br>

            <div class="row">
                <div class="col-lg-7">
                    <div class="sofax-default-content tac mr-50">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">{{ $whatWeTake->title ?? 'What we take' }}</h2>
                        </div>
                        <p>{!! $whatWeTake->content ?? 'We can take just about anything, as long as it’s non-hazardous and can be lifted by our two strong team members.' !!}</p>
                    </div>
                    @if($whatWeTake && $whatWeTake->image)
                        <video src="{{ asset('storage/' . $whatWeTake->image) }}" controls autoplay style="height: 350px; margin:10px;"></video>
                    @else
                        <video src="{{asset('storage/home-images/what-we-do.mp4')}}" controls autoplay style="height: 350px; margin:10px;"></video>
                    @endif
                    <ul>
                        <li>
                            <a href="{{ route('what-we-take') }}" id="customerServiceAnchor">Learn more about what we take</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-5">
                    <div class="sofax-default-content">
                        <div id="sofax-counter"></div>
                        <div class="sofax-counter-wrapperv7 ml-50">
                            <div class="sofax-counter-wrap-v7">
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('furniture') }}','_self')">
                                    <img src="{{ asset('assets/images/homepage/furniture-icon.svg') }}" alt="">
                                    <p>Furniture</p>
                                </div>
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('appliances') }}','_self')">
                                    <img src="{{ asset('assets/images/homepage/fridge-icon.svg') }}" alt="">
                                    <p>Appliances</p>
                                </div>
                            </div>
                            <div class="sofax-counter-wrap-v7">
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('televisions') }}','_self')">
                                    <img src="{{ asset('assets/images/homepage/tv-icon.svg') }}" alt="">
                                    <p>Televisions</p>
                                </div>
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('renovation') }}','_self')">
                                    <img src="{{ asset('assets/images/homepage/renovations-icon.svg') }}" alt="">
                                    <p>Renovation</p>
                                </div>
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('household') }}','_self')">
                                    <img src="{{ asset('assets/images/homepage/household-icon.svg') }}" alt="">
                                    <p>Household</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content-box" id="business-content" style="display:none; margin-top: 10px;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sofax-content-thumb mr-80 box-shadow wow fadeInUpX">
                        <img src="{{ $businessPickup && $businessPickup->image ? asset('storage/' . $businessPickup->image) : asset('assets/images/j2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">{{ $businessPickup->title ?? 'Convenient, reliable junk removal for businesses' }}</h2>
                        </div>
                        <p>{!! $businessPickup->content ?? 'With our on-demand service, we’re there whenever you need us. Enjoy convenient and flexible scheduling, off-hours service (including weekends), and easily book recurring pickups. We’ll focus on clearing clutter so you can focus on your business.' !!}</p>
                        <ul>
                            <li>
                                <a href="{{ route('business-solutions') }}" id="customerServiceAnchor">Learn about our Business Solutions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <br><br><br>

            <div class="row">
                <div class="col-lg-7">
                    <div class="sofax-default-content tac mr-50">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">{{ $whoWeServe->title ?? 'Who we serve' }}</h2>
                        </div>
                        <p>{!! $whoWeServe->content ?? 'We help your business get rid of junk the easy and responsible way – no matter the type or size of your business.' !!}</p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="sofax-default-content">
                        <div id="sofax-counter"></div>
                        <div class="sofax-counter-wrapperv7 ml-50">
                            <div class="sofax-counter-wrap-v7">
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('property-management') }}','_self')">
                                    <img src="{{ asset('assets/images/homepage/property-management-icon.svg') }}" alt="">
                                    <p>Property Management</p>
                                </div>
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('professional-services') }}' , '_self')">
                                    <img src="{{ asset('assets/images/homepage/professional-services-icon.svg') }}" alt="">
                                    <p>Professional Services</p>
                                </div>
                            </div>
                            <div class="sofax-counter-wrap-v7">
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('retail-hospitality') }}','_self')">
                                    <img src="{{ asset('assets/images/homepage/retail-and-hospitality-icon.svg') }}" alt="">
                                    <p>Retail & Hospitality</p>
                                </div>
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('construction-manufacturing') }}','_self')">
                                    <img src="{{ asset('assets/images/homepage/construction-and-manufacturing-icon_0.svg') }}" alt="">
                                    <p>Construction & Manufacturing</p>
                                </div>
                                <div class="sofax-counter-data-v7" onclick="window.open('{{ route('education-healthcare') }}','_self')">
                                    <img src="{{ asset('assets/images/homepage/education-and-healthcare-icon.svg') }}" alt="">
                                    <p>Education & Healthcare</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content-box" id="pricing-content" style="margin-top: 10px;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sofax-content-thumb mr-80 box-shadow wow fadeInUpX">
                        <img src="{{ $pricing && $pricing->image ? asset('storage/' . $pricing->image) : asset('assets/images/tc1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">{{ $pricing->title ?? 'We price by single item or by truck volume' }}</h2>
                        </div>
                        <p>{!! $pricing->content ?? 'For 2 or more items, we price by volume, which is how much space your junk takes up in the truck. Rates start at our minimum charge for very small loads up to a full truckload. If you have only one item, we do offer single item pricing. Checkout this video with our Founder, Brian Scudamore to learn how onsite estimates work.' !!}</p>
                        <ul>
                            <li>
                                <a href="{{ route('pricing') }}" id="customerServiceAnchor">Learn more about junk removal pricing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <br><br><br>

            <div class="row">
                <div class="col-md-6">
                    <div class="sofax-features-box wow fadeInUpX position-relatiove customcardPricingSection" data-wow-delay="0.2s">
                        <div class="sofax-features-content">
                            <h4>{{ $singleItemPricing->title ?? 'Single item pricing' }}</h4>
                            <p>{!! $singleItemPricing->content ?? 'If you only have one item, we price the item individually. Examples of pieces with single-item prices:<ul><li style="list-style: disc;">Any size mattress</li><li style="list-style: disc;">Any appliance (washer, dryer, BBQ grill, etc.)</li><li style="list-style: disc;">Any furniture (sofa, bed frame dining table, etc.)</li><li style="list-style: disc;">Any type of TV</li></ul>' !!}</p>
                        </div>
                        <div class="sofax-features-thumb">
                            <img src="{{ $singleItemPricing && $singleItemPricing->image ? asset('storage/' . $singleItemPricing->image) : asset('assets/images/homepage/couch.svg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="sofax-features-box wow fadeInUpX position-relatiove customcardPricingSection" data-wow-delay="0.2s">
                        <div class="sofax-features-content">
                            <h4>{{ $multipleItemsPricing->title ?? 'Multiple items? We price by volume.' }}</h4>
                            <p>{!! $multipleItemsPricing->content ?? 'It’s based on how much space your junk takes up in the truck. We have a minimum charge for very small loads; from there, prices go from 1/8th of a truck up to a full truckload. We can give an exact price when we see the items on site.' !!}</p>
                        </div>
                        <div class="sofax-features-thumb">
                            <img src="{{ $multipleItemsPricing && $multipleItemsPricing->image ? asset('storage/' . $multipleItemsPricing->image) : asset('assets/images/homepage/truck.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sofax-section-padding2 dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="integration-social-icon wow fadeInUpX">
                        <img src="{{ $repurposing && $repurposing->image ? asset('storage/' . $repurposing->image) : asset('assets/images/tl4.jpg') }}" alt="" style="border:none; border-radius:10px;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac light-color">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">{{ $repurposing->title ?? 'Repurposing your items for good' }}</h2>
                        </div>
                        <p>{!! $repurposing->content ?? 'Once your items are loaded into the truck, their repurposing journey begins. For us, repurposing means recycling the recyclables and donating the donatables, so as much junk as possible is diverted from landfills. You can rest easy knowing your items are handled properly through responsible junk removal.' !!}</p>
                        <div class="extra-mt wow fadeInUpX">
                            <a class="sofax-default-btn pill" data-text="Learn more about how we repurpose" href="{{ route('repurpose-sustainability') }}">
                                <span class="button-wraper">Learn more about how we repurpose</span>
                            </a>
                        </div>
                    </div>

                    <br><br>
                    <div class="sofax-about-content-wrap">
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-icon2">
                                <img src="{{ asset('assets/images/homepage/recycling-icon.svg') }}" alt="">
                            </div>
                            <div class="sofax-iconbox-data2 aboutv8">
                                <h4 style="color: white">Recycle</h4>
                            </div>
                        </div>
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-icon2">
                                <img src="{{ asset('assets/images/homepage/repurpose-icon.svg') }}" alt="">
                            </div>
                            <div class="sofax-iconbox-data2 aboutv8">
                                <h4 style="color: white">Repurpose</h4>
                            </div>
                        </div>
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-icon2">
                                <img src="{{ asset('assets/images/homepage/donating-icon.svg') }}" alt="">
                            </div>
                            <div class="sofax-iconbox-data2 aboutv8">
                                <h4 style="color: white">Donate</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="sofax-section-padding">
        <div class="container">
            <div class="sofax-section-title center max-width-large">
                <div class="tg-heading-subheading animation-style3">
                    <h2 class="mb-3">{{ $testimonials->title ?? 'Don\'t just take our word for it' }}</h2>
                    <p>{!! $testimonials->content ?? 'Real customer reviews, typos and all ;' !!}</p>
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
            <div class="sofax-testimonial-btn">
                <a class="sofax-default-btn pill whitespace--normal" data-text="See More Customer’s love" href="{{ route('reviews') }}">
                    <span class="button-wraper">See More Customer’s love</span>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="d-flex justify-content-center align-items-center" style="margin: 10px;">
            <div>
                <div class="sofax-footer-menu ctaWrapper mb-3">
                    <center>
                        <img src="{{ $cta && $cta->image ? asset('storage/' . $cta->image) : asset('assets/images/homepage/removal.png') }}" alt="" style="width: 300px; margin:10px;">
                    </center>
                    <h5>{{ $cta->title ?? 'We make junk disappear' }}</h5>
                    <div class="sofax-subscription-field5">
                        <form action="{{ route('zipcode.check') }}" class="check-zip-codes-form2" method="POST">
                            <input type="text" placeholder="Enter ZIP code" id="postalCodeInput2">
                            <button class="sofax-subcribe-btn2" style="color:white;">CHECK AVAILABILITY</button>
                        </form>
                    </div>
                    <p>{!! $cta->content ?? '24/7 Customer Service 973-810-6234' !!}</p>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br><br>
    <script>
        $(document).ready(function () {
            $('.check-zip-codes-form1').on("submit", function (event) {
                event.preventDefault();
                const postalCode = $('#postalCodeInput').val().trim();
                if (postalCode === '') {
                    alert('Please enter your postal code.');
                    return;
                }

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: {
                        postal_code: postalCode,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (response.found) {
                            window.location.href = "/newbooking?postal_code=" + encodeURIComponent(postalCode);
                        } else {
                            alert('Postal code not found. Please enter a valid one.');
                        }
                    },
                    error: function () {
                        alert('Something went wrong. Please reload the page and try again.');
                    }
                });
            });

            $('.check-zip-codes-form2').on("submit", function (event) {
                event.preventDefault();
                const postalCode = $('#postalCodeInput2').val().trim();
                if (postalCode === '') {
                    alert('Please enter your postal code.');
                    return;
                }

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: {
                        postal_code: postalCode,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (response.found) {
                            window.location.href = "/newbooking?postal_code=" + encodeURIComponent(postalCode);
                        } else {
                            alert('Postal code not found. Please enter a valid one.');
                        }
                    },
                    error: function () {
                        alert('Something went wrong. Please reload the page and try again.');
                    }
                });
            });
        });
    </script>
@endsection