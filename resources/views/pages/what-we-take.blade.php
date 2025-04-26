@extends('layouts.app')
@section('title', "What we take")

@section('content')
    @php
        $whatWeTakeTitle = \App\Models\WhatWeTakeContent::where('section', 'what-we-take-title')->first();
        $itemCards = \App\Models\WhatWeTakeContent::where('section', 'item-cards')->first();
        $accordionTitle = \App\Models\WhatWeTakeContent::where('section', 'accordion-title')->first();
        $accordionContent = \App\Models\WhatWeTakeContent::where('section', 'accordion-content')->first();
        $exceptions = \App\Models\WhatWeTakeContent::where('section', 'exceptions')->first();
        $itemCardsData = $itemCards && $itemCards->content ? json_decode($itemCards->content, true) : [
            'refrigerators' => ['title' => 'Refrigerators & Freezers', 'items' => "- Top Freezer Refrigerators\n- Side-By-Side Refrigerators\n- French Door Refrigerators", 'image' => 'assets/images/pages/WWT_4card_icon_Fridge.svg'],
            'mattresses' => ['title' => 'Mattresses & Springboards', 'items' => "- Memory Foam Mattresses\n- Box Springs\n- Gel & Pillow Top Mattresses", 'image' => 'assets/images/pages/WWT_4card_icon_Mattress_0.svg'],
            'furniture' => ['title' => 'Furniture', 'items' => "- Couches\n- Filing Cabinets\n- Dining Tables\n- Dressers\n- Bookcases\n- Coffee Tables", 'image' => 'assets/images/pages/WWT_4card_icon_Sofa.svg'],
            'televisions' => ['title' => 'Televisions', 'items' => "- Flat Screen Televisions\n- Rear Projection TVs\n- DVD/Blu-Ray Players", 'image' => 'assets/images/pages/WWT_4card_icon_TV.svg'],
        ];
        $accordionData = $accordionContent && $accordionContent->content ? json_decode($accordionContent->content, true) : [
            'appliances' => ['title' => 'Appliances', 'content' => "We take all types of appliances, below are some examples:\n- Air Conditioners\n- Dishwasher\n- Clothes Dryers\n- Freezers\n- Space Heaters\n- Stoves & Ovens\n- Water Heaters\n- Washing Machines\n- Blenders\n- Fans\n- Toasters\n- Microwaves"],
            'household' => ['title' => 'Household', 'content' => "We take all types of household related items, below are some examples:\n\n**BBQ & Grills**:\n- Old & Broken Grills\n- Used Charcoal\n\n**Carpet & Rugs**:\n- Floor Coverings\n- Wool Carpeting\n\n**Hot Tubs**:\n- Hot Tub Covers\n- Steel & Fiberglass Tubs\n\n**Yard Waste**:\n- Tree Trunks\n- Weeds & Plants\n\n**Household Trash**:\n- Organic Waste\n- Household Trash"],
            'office-cleanouts' => ['title' => 'Office Cleanouts', 'content' => "We take all types of office cleanout items, below are some examples:\n- Chairs\n- Desks\n- Computers\n- Storage devices\n- Laser or Inkjet Printers\n- Cabinets\n- Drawers\n- Couches\n- Books"],
            'furniture' => ['title' => 'Furniture', 'content' => "We take all types of furniture, below are some examples:\n- Couches\n- Sofa Beds\n- Dining Tables\n- Bookcases\n- Dressers\n- Beds\n- Coffee Tables\n- Outdoor/Patio Furniture"],
            'mattress springboards' => ['title' => 'Mattress & Springboards', 'content' => "We take all types of mattresses & springboards, below are some examples:\n- Foam Mattresses\n- Box Springs\n- Gel & Pillow Top Mattresses\n- Memory Foam Mattresses"],
            'renovation-construction' => ['title' => 'Renovation & Construction', 'content' => "We take all types of renovation related items, below are some examples:\n\n**Renovation Waste**:\n- Concrete\n- Insulation\n\n**Glass**:\n- Broken Glass\n- Mirrors\n\n**Scrap Metals**:\n- Automotive Parts\n- Cast Iron"],
            'refrigerators-freezers' => ['title' => 'Refrigerators & Freezers', 'content' => "We take all types of fridges and freezers, below are some examples:\n- Top Freezer Refrigerators\n- Side-By-Side Refrigerators\n- Bottom Freezer Refrigerator\n- French Door Refrigerators\n- Compact Refrigerators\n- Mini Fridge & Freezers"],
            'televisions-tv' => ['title' => 'Televisions & TV', 'content' => "We take all types of televisions & TVs, below are some examples:\n- LED or LCD TVs\n- Plasma Televisions\n- Flat Screen Televisions\n- Smart TVs\n- DVD/Blu-Ray Players\n- Portable DVD Players\n- Projectors\n- Cables And Connectors\n- Remotes\n- TV Antennas\n- VCRs\n- Wall Mounts"],
            'home-cleanouts' => ['title' => 'Home Cleanouts', 'content' => "We take all types of home cleanout items, below are some examples:\n- Tenant move outs (when they leave junk behind)\n- Eviction cleanouts\n- Illegal dumping\n- Dumpster overflow\n- Storage room cleanouts\n- Community/Building junk days\n- Chairs"],
            'junk-disposal' => ['title' => 'What does V.I.P.nk Removal do with all the junk they remove?', 'content' => "We aim to donate and recycle as much as possible. We follow local laws and try to minimize landfill waste."],
            'exercise' => ['title' => 'Exercise', 'content' => "We take all types of exercise equipment, below are some examples:\n\n**Bicycles**:\n- Mountain Bikes\n- Adult Tricycles\n\n**Treadmills**:\n- Stationary Bikes\n- Elliptical Trainers\n\n**Exercise Equipment**:\n- Barbells & Dumbells\n- Stair-Steppers"],
            'electronics' => ['title' => 'Electronics', 'content' => "We take all types of electronics, below are some examples:\n\n**Computer & Notebooks**:\n- Laptops And Notebooks\n- Desktop Computers\n\n**Printers, Scanners & Copiers**:\n- Laser or Inkjet Printers\n- 3D Printers & Print Medium"],
            'recreation' => ['title' => 'Recreation', 'content' => "We take all types of recreation related items, below are some examples:\n\n**Playsets & Trampolines**:\n- Large, Old & Broken Trampolines\n- Playground Equipment\n\n**Pool Tables**:\n- Snooker Tables\n- Pool or Billiard Tables"],
            'bbq-grills' => ['title' => 'BBQ & Grills', 'content' => "We take all types of BBQ & grills, below are some examples:\n- Old & Broken Grills\n- Used Charcoal\n- Outdoor & Portable Grills\n- Charcoal & Gas BBQs"],
            'pianos' => ['title' => 'Pianos', 'content' => "We take all types of pianos, below are some examples:\n- Grand or Baby Grand Pianos\n- Upright Pianos\n- Organs & Console Pianos\n- Digital Pianos & Keyboards\n- Parlor Pianos\n- Toy Pianos"],
            'hot-tubs' => ['title' => 'Hot Tubs', 'content' => "We take all types of hot tubs, below are some examples:\n- Hot Tub Covers\n- Steel & Fiberglass Tubs\n- Hot Tubs\n- Above Ground Spas"],
            'tires-rubber' => ['title' => 'Tires & Rubber', 'content' => "We take all types of tires & rubber, below are some examples:\n- Car & Truck Tires\n- Motorcycle Tires\n- Bicycle Tires\n- Rubber Parts\n- Heavy Duty Tires\n- All-Season & Touring Tires"],
        ];
    @endphp

    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">What We Take</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html"> Home</a></li>
                    /
                    <li aria-current="page"> What We Take</li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="section sofax-section-padding">
        <div class="container">
            <div class="sofax-section-title center max-width-large">
                <h2 class="mb-3">{{ $whatWeTakeTitle->title ?? 'What we take as part of our junk pick-up services' }}</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach (['refrigerators', 'mattresses', 'furniture', 'televisions'] as $key)
                    <div class="col-lg-6 col-md-6">
                        <div class="sofax-features-box features-v5 wow fadeInUpX" data-wow-delay="0.{{ $loop->index }}s">
                            <div class="sofax-features-icon">
                                <img src="{{ asset($itemCardsData[$key]['image']) }}" alt="">
                            </div>
                            <div class="sofax-features-content">
                                <h4>{{ $itemCardsData[$key]['title'] }}</h4>
                                <p>{!! \App\Helpers\HtmlHelper::purify($itemCardsData[$key]['items']) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section sofax-section-padding bg-light">
        <div class="container">
            <div class="sofax-section-title center">
                <h2 class="mb-3">{{ $accordionTitle->title ?? 'Wondering if we can take your items?' }}</h2>
                <p>{!! \App\Helpers\HtmlHelper::purify($accordionTitle->content) ?? 'Take a look at all the types of junk we remove.' !!}</p>
            </div>
            <div class="sofax-accordion-wrap1 sofax-accordion-wrap3">
                <div class="sofax-accordion-section-wrapper">
                    <div class="sofax-accordion-section-v2">
                        <br>
                        @foreach (['appliances', 'household', 'office-cleanouts', 'furniture', 'mattress-springboards', 'renovation-construction'] as $key)
                            <div class="sofax-accordion-item about-us-section {{ $loop->first ? 'open' : '' }}">
                                <div class="sofax-accordion-header">
                                    <h4>{{ $accordionData[$key]['title'] }}</h4>
                                    <div class="sofax-active-icon sofax-accordion-btn">
                                        <img src="{{ asset('assets/images/newbooking/icon9.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="sofax-accordion-body">
                                    <p>{!! \App\Helpers\HtmlHelper::purify($accordionData[$key]['content']) !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="sofax-accordion-section-v2 mt-24">
                        <br>
                        @foreach (['refrigerators-freezers', 'televisions-tv', 'home-cleanouts', 'junk-disposal', 'exercise'] as $key)
                            <div class="sofax-accordion-item about-us-section">
                                <div class="sofax-accordion-header">
                                    <h4>{{ $accordionData[$key]['title'] }}</h4>
                                    <div class="sofax-active-icon sofax-accordion-btn">
                                        <img src="{{ asset('assets/images/newbooking/icon9.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="sofax-accordion-body">
                                    <p>{!! \App\Helpers\HtmlHelper::purify($accordionData[$key]['content']) !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br><br>
            <div class="sofax-accordion-wrap1 sofax-accordion-wrap3">
                <div class="sofax-accordion-section-wrapper">
                    <div class="sofax-accordion-section-v2">
                        <br>
                        @foreach (['electronics', 'recreation', 'bbq-grills'] as $key)
                            <div class="sofax-accordion-item about-us-section {{ $loop->first ? 'open' : '' }}">
                                <div class="sofax-accordion-header">
                                    <h4>{{ $accordionData[$key]['title'] }}</h4>
                                    <div class="sofax-active-icon sofax-accordion-btn">
                                        <img src="{{ asset('assets/images/newbooking/icon9.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="sofax-accordion-body">
                                    <p>{!! \App\Helpers\HtmlHelper::purify($accordionData[$key]['content']) !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="sofax-accordion-section-v2 mt-24">
                        <br>
                        @foreach (['pianos', 'hot-tubs', 'tires-rubber'] as $key)
                            <div class="sofax-accordion-item about-us-section">
                                <div class="sofax-accordion-header">
                                    <h4>{{ $accordionData[$key]['title'] }}</h4>
                                    <div class="sofax-active-icon sofax-accordion-btn">
                                        <img src="{{ asset('assets/images/newbooking/icon9.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="sofax-accordion-body">
                                    <p>{!! \App\Helpers\HtmlHelper::purify($accordionData[$key]['content']) !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section sofax-section-padding2 position-ralatiove bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumbv5 wow fadeInLeft">
                        <img src="{{ $exceptions && $exceptions->image ? asset('storage/' . $exceptions->image) : asset('assets/images/tl3.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac">
                        <h2 class="mb-3">{{ $exceptions->title ?? 'We take everything except:' }}</h2>
                        <p>{!! \App\Helpers\HtmlHelper::purify($exceptions->content ?? "- Chemicals, solvents & oils\n- Asbestos\n- Storage & oil drums\n- Oil & waste storage tanks\n\nNot sure if your items are non-hazardous? You can book a free, onsite estimate so we can see your items in person.\nOr, if you have questions about your items, give us a call: 973-810-6234") !!}</p>
                        <div id="sofax-counter"></div>
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