@extends('layouts.app')
@section('title', "Pricing")

@section('content')
    @php
        $pricingVolume = \App\Models\PricingContent::where('section', 'pricing-volume')->first();
        $singleItem = \App\Models\PricingContent::where('section', 'single-item')->first();
        $multipleItems = \App\Models\PricingContent::where('section', 'multiple-items')->first();
        $truckCapacity = \App\Models\PricingContent::where('section', 'truck-capacity')->first();
        $pricingIncludes = \App\Models\PricingContent::where('section', 'pricing-includes')->first();
        $pricingEstimates = \App\Models\PricingContent::where('section', 'pricing-estimates')->first();
    @endphp

    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Pricing</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html"> Home</a></li>
                    /
                    <li aria-current="page"> Pricing</li>
                </ul>
            </nav>
        </div>
    </div>

   
    <section class="sofax-section-padding2">
        <div class="container-fluid">
            <div class="sofax-section-title center">
                <div class="tg-heading-subheading animation-style3">
                    <h2 class="mb-3">{{ $pricingVolume->title ?? 'We price by single item or by truck volume' }}</h2>
                </div>
            </div>

            <div class="row selectOptionWrapper mb-5 justify-content-center">
                <div class="col-md-4 text-center">
                    <label class="selectOptionsHowHelpUsignle">
                        <input type="radio" name="pricing-option" value="single-item" onclick="handlePricingToggle(this)" checked>
                        Single Item Pricing
                    </label>
                </div>
                <div class="col-md-4 text-center">
                    <label class="selectOptionsHowHelpUsignle">
                        <input type="radio" name="pricing-option" value="multiple-items" onclick="handlePricingToggle(this)">
                        Multiple Items Pricing
                    </label>
                </div>
                <div class="col-md-4 text-center">
                    <label class="selectOptionsHowHelpUsignle">
                        <input type="radio" name="pricing-option" value="what-fits" onclick="handlePricingToggle(this)">
                        What Fits in Truck
                    </label>
                </div>
            </div>
        </div>

        <div class="container content-box" id="single-item-content">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="sofax-features-box wow fadeInUpX position-relative customcardPricingSection" data-wow-delay="0.2s">
                        <div class="sofax-features-content">
                            <h4>{{ $singleItem->title ?? 'Single Item Pricing' }}</h4>
                            <p>{!! \App\Helpers\HtmlHelper::purify($singleItem->content) ?? 'If you only have one item, we price the item individually. Examples of pieces with single-item prices:<ul><li style="list-style: disc;">Any size mattress</li><li style="list-style: disc;">Any appliance (washer, dryer, BBQ grill, etc.)</li><li style="list-style: disc;">Any furniture (sofa, bed frame, dining table, etc.)</li><li style="list-style: disc;">Any type of TV</li></ul>' !!}</p>
                            <div class="sofax-main-field">
                                <label>Enter Zip Code</label>
                                <input type="text" id="zip-code" placeholder="Zip Code" maxlength="5">
                                <button id="check-pricing-btn" class="sofax-default-btn pill sofax-header-btn mt-3" data-text="Check Pricing" onclick="checkPricing()">
                                    <span class="button-wraper">Check Pricing</span>
                                </button>
                                <p id="pricing-result" class="mt-3"></p>
                            </div>
                            <br> <a href="newbooking">Book</a> a Price estimation with us
                        </div>
                        <div class="sofax-features-thumb">
                            <img src="{{ $singleItem && $singleItem->image ? asset('storage/' . $singleItem->image) : asset('assets/images/homepage/couch.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content-box" id="multiple-items-content" style="display:none;">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="sofax-features-box wow fadeInUpX position-relative customcardPricingSection" data-wow-delay="0.2s">
                        <div class="sofax-features-content">
                            <h4>{{ $multipleItems->title ?? 'Multiple Items? We price by volume.' }}</h4>
                            <p>{!! \App\Helpers\HtmlHelper::purify($multipleItems->content) ?? 'It’s based on how much space your junk takes up in the truck. We have a minimum charge for very small loads; from there, prices go from 1/8th of a truck up to a full truckload. We can give an exact price when we see the items on site.' !!}</p>
                            <br> <a href="newbooking">Book</a> a Price estimation with us
                        </div>
                        <!-- <div class="sofax-features-thumb">
                            <img src="{{ $multipleItems && $multipleItems->image ? asset('storage/' . $multipleItems->image) : asset('assets/images/homepage/truck.png') }}" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container content-box" id="what-fits-content" style="display:none;">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="sofax-features-box wow fadeInUpX position-relative customcardPricingSection" data-wow-delay="0.2s">
                        <div class="sofax-features-content">
                            <h4>{{ $truckCapacity->title ?? 'What Fits in Our Truck' }}</h4>
                            <p>{!! \App\Helpers\HtmlHelper::purify($truckCapacity->content) ?? 'Our trucks can handle a variety of junk, from small loads to full truckloads. Examples include furniture, appliances, construction debris, and more. The price depends on the volume, starting at our minimum charge for small loads up to a full truckload.' !!}</p>
                        </div>
                        <div class="sofax-features-thumb">
                            <img src="{{ $truckCapacity && $truckCapacity->image ? asset('storage/' . $truckCapacity->image) : asset('assets/images/homepage/truck-full.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function handlePricingToggle(element) {
                const boxes = document.querySelectorAll('.content-box');
                boxes.forEach(box => box.style.display = 'none');
                document.getElementById(`${element.value}-content`).style.display = 'block';
            }

            // Set default visibility
            document.getElementById('single-item-content').style.display = 'block';
            function checkPricing() {
    const zipInput = document.getElementById('zip-code').value.trim();
    const result = document.getElementById('pricing-result');

    // Validate zip code (5 digits)
    if (!/^\d{5}$/.test(zipInput)) {
        result.innerHTML = '<span style="color: red;">Please enter a valid 5-digit zip code.</span>';
        return;
    }

    // Check pricing
    const zipCodePricing = {
        '07201': 89, '07036': 89, '07205': 89, '07203': 89, '07204': 89, '07083': 89,
        '07008': 89, '08861': 89,
        '07102': 89, '07111': 89, '07017': 89, '07050': 89, '07109': 89, '07003': 89, '07110': 89,
        '07060': 110, '07901': 110, '07922': 110, '07066': 110, '07016': 110, '07076': 110, '07081': 110,
        '07090': 110, '07023': 110, '07027': 110, '07033': 110, '07092': 110, '07974': 110,
        '08901': 110, '08879': 110, '08512': 110, '08816': 110, '08817': 110, '08831': 110, '08902': 110,
        '08857': 110, '08854': 110, '08536': 110, '08852': 110, '07095': 110, '08812': 110, '08828': 110,
        '08904': 110, '08840': 110, '08846': 110, '08850': 110, '08872': 110, '07080': 110, '08882': 110,
        '08884': 110, '07006': 110, '07009': 110, '07021': 110, '07004': 110, '07028': 110, '07039': 110,
        '07040': 110, '07041': 110, '07042': 110, '07068': 110, '07079': 110, '07044': 110, '07052': 110
    };

    const price = zipCodePricing[zipInput];
    if (price) {
        result.innerHTML = `Minimum price for single item pickup: <strong>$${price}</strong>`;
    } else {
        result.innerHTML = '<span style="color: red;">Service not available in this zip code.</span>';
    }
}
        </script>
    </section>

    <section class="sofax-section-padding2 dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="integration-social-icon wow fadeInUpX">
                        <img src="{{ $pricingIncludes && $pricingIncludes->image ? asset('storage/' . $pricingIncludes->image) : asset('assets/images/tl4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac light-color">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">{{ $pricingIncludes->title ?? 'Our prices include everything, all you have to do is point' }}</h2>
                        </div>
                        <p>{!! \App\Helpers\HtmlHelper::purify($pricingIncludes->content) ?? "- Removal from anywhere—no need to move junk outside\n- Friendly team who are fully licensed and insured\n- All loading and clean-up\n- Disposal and environmental fees" !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sofax-section-padding3 text-center">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="sofax-content-img ml-70 box-shadow wow fadeInRight">
                        <img src="{{ $pricingEstimates && $pricingEstimates->image ? asset('storage/' . $pricingEstimates->image) : asset('assets/images/hs1.jpg') }}" class="margin-top:20px" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">{{ $pricingEstimates->title ?? 'How our free, onsite estimates work' }}</h2>
                        </div>
                        <p>{!! \App\Helpers\HtmlHelper::purify($pricingEstimates->content) ?? "- Book online or call 1-855-886-8743.\n- We’ll call or text you 25-30 mins before we arrive to let you know we’re on our way.\n- We'll take a look at the junk and give you an all-inclusive, no-obligation price.\n- We'll remove your items, sweep up the area, and collect payment once we’re done."!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="sofax-section-padding bg-light">
        @include('components.reviews')
    </section>

    @include('components.cta')
@endsection