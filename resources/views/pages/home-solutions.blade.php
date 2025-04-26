@extends('layouts.app')
@section('title', "Home solutions")

@section('content')

    <!-- end section -->
    <section class=" section sofax-section-padding">
        <div class="container">
            <div class="sofax-section-title center max-width-large">
                <h2 class="mb-3">Get junk removal in 3 easy steps</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="sofax-features-box features-v5 wow fadeInUpX" data-wow-delay="0.1s">
                        <div class="sofax-features-icon">
                            <img src="assets/images/about/icon1.png" alt="">
                        </div>
                        <div class="sofax-features-content">
                            <h4>1. Schedule your appointment</h4>
                            <p>
                                Book your appointment online or by calling us at 973-810-6234. Our team will call or text you 15-30 minutes before the appointment window to let you know when to expect them.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sofax-features-box features-v5 wow fadeInUpX" data-wow-delay="0.2s">
                        <div class="sofax-features-icon">
                            <img src="assets/images/about/icon2.png" alt="">
                        </div>
                        <div class="sofax-features-content">
                            <h4>2. Get an estimate</h4>
                            <p>
                                To give you an accurate price, we offer free, onsite estimates. When we arrive, we’ll take a look at your items and give you an all-inclusive price. There’s no obligation, so you can say no at any time.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sofax-features-box features-v5 wow fadeInUpX" data-wow-delay="0.3s">
                        <div class="sofax-features-icon">
                            <img src="assets/images/about/icon3.png" alt="">
                        </div>
                        <div class="sofax-features-content">
                            <h4>3. Point and watch your junk disappear</h4>
                            <p>
                                You don’t have to do a thing! We’ll remove items right from where they’re located and take care of all the lifting, loading, and cleanup.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="sofax-default-content tac mr-50">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">We take all kinds of junk</h2>
                        </div>
                        <p>We can take just about anything, as long as it’s non-hazardous and can be lifted by our two strong team members.</p>
                    </div>
                    <ul>
                        <li>
                            <a href="{{route("what-we-take")}}" id="customerServiceAnchor">Learn more about what we take</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-5">
                    <div class="sofax-default-content">
                        <div id="sofax-counter"></div>
                        <div class="sofax-counter-wrapperv7 ml-50">
                            <div class="sofax-counter-wrap-v7">
                                <div class="sofax-counter-data-v7">
                                    <img src="{){asset("assets/images/homepage/furniture-icon.svg")}}" alt="">
                                    <p>Furniture</p>
                                </div>
                                <div class="sofax-counter-data-v7">
                                    <img src="{{asset("assets/images/homepage/fridge-icon.svg")}}" alt="">
                                    <p>Appliances</p>
                                </div>
                            </div>
                            <div class="sofax-counter-wrap-v7">
                                <div class="sofax-counter-data-v7">
                                    <img src="{{asset("assets/images/homepage/tv-icon.svg")}}" alt="">
                                    <p>Televisions</p>
                                </div>
                                <div class="sofax-counter-data-v7">
                                    <img src="{{asset("assets/images/homepage/renovations-icon.svg")}}" alt="">
                                    <p>Renovation</p>
                                </div>
                                <div class="sofax-counter-data-v7">
                                    <img src="{{asset("assets/images/homepage/household-icon.svg")}}" alt="">
                                    <p>household</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <section class="section sofax-section-padding2 position-ralatiove bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumbv5 wow fadeInLeft">
                        <img src="{{asset("assets/images/tc2.png")}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac">
                        <h2 class="mb-3">All-inclusive pricing</h2>
                        <p>
                            We charge by volume, which is how much space your items take up in the truck. We have a minimum charge for very small loads; from there, prices go from 1/8th of a truck up to a full truckload. We also have special pricing if you only have one single item. We can give you an exact price once we see the items in person.
                            <br><br>Our prices include <strong style="color: green">everything</strong>
                        </p>
                        <ul>
                            <li>- Junk removal from anywhere—no need to move items out</li>
                            <li>- Our friendly teams, who are fully licensed and insured</li>
                            <li>- All lifting, loading, and cleanup</li>
                            <li>- Disposal and environmental fees</li>
                        </ul>
                        <div id="sofax-counter"></div>

                        <div class="extra-mt tac3 wow fadeInUpX">
                            <a class="sofax-default-btn pill" data-text="Learn more about junk removal Pricing" href="contact-us">
                                <span class="button-wraper">Learn more about junk removal Pricing</span>
                            </a>
                        </div>
                        <div class="sofax-about-shapev5">
                            <img src="assets/images/v5/shape2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <section class="section sofax-section-padding bg-light">
        <div class="container">
            <div class="sofax-section-title center">
                <h2 class="mb-3">Frequently Asked Questions</h2>
            </div>
            <div class="sofax-accordion-wrap1 sofax-accordion-wrap3">
                <div class="sofax-accordion-section-wrapper">
                    <div class="sofax-accordion-section-v2">
                        <div class="sofax-accordion-item about-us-section open">
                            <div class="sofax-accordion-header">
                                <h4>Is V.I.P.nk Removal free?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>V.I.P.nk Removal is a paid service that offers full-service junk removal. That means everything is included in the price—pickup, loading, cleanup, and disposal. You get a single, up-front price before we start, and that’s what you pay—no surprises!</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>How does V.I.P.nk Removal charge for junk removal?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>We charge based on how much space your items take up in our truck, which equals seven pickup trucks. Prices vary by location and a minimum fee applies. Heavy materials like concrete are priced by volume with height restrictions.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>Can I get an exact price before you arrive?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>We can’t give an exact price over the phone since we need to see your items in person. For some single items, we can provide estimates, but final pricing is done onsite with a free, no-obligation estimate.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>Should I tip the junk removal team?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>Tipping is not required but always appreciated! If the team did a great job, feel free to tip them however you see fit.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>What methods of payment do you accept?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>We accept cash and all major credit cards. Some locations may offer additional payment options. You’re only charged after the job is complete.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>What is a no-obligation onsite estimate?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>Our onsite estimate is free and comes with no obligation. We’ll look at your items and provide an exact price. We only proceed if you’re happy with the cost.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>When should I expect you to arrive?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>On the day of your appointment, we’ll call you 15-30 minutes before your 2-hour window to confirm arrival and details.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>How do I cancel or change my appointment?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>Call us at 973-810-6234 anytime to cancel or change your appointment—we’re happy to help!</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>Can you remove my junk if I’m not onsite?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>In some areas, yes! If your items are accessible and we can take payment by phone, we can proceed without you there. Other locations require you to be present.</p>
                            </div>
                        </div>
                    </div>

                    <div class="sofax-accordion-section-v2 mt-24">
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>What items can V.I.P.nk Removal remove?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>We can remove most items two people can lift: mattresses, couches, furniture, electronics, etc. We’ll take it from wherever it’s located—just point!</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>Does V.I.P.nk Removal remove paint?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>Some locations do accept paint, but it must be fully dried. Call us to check your local policy.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>Can you remove large and bulky items?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>Absolutely! As long as two people can lift and load it into our truck, we can remove it.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>What does V.I.P.nk Removal do with all the junk they remove?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>We aim to donate and recycle as much as possible. We follow local laws and try to minimize landfill waste.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>What items does V.I.P.nk Removal not accept?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>We can’t take hazardous or toxic items, car/truck chassis, asbestos, chemicals, or oil drums unless empty with tops/bottoms removed.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>Do you service my region/location?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>We service most major metro areas in the US, Canada, and Australia. Enter your ZIP code on our site to check if we’re in your area.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>Are you licensed and insured?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>Yes, we are fully licensed and insured. Our coverage includes protection for both people and property on every job.</p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>What are your hours of operation?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>Hours vary by location, but many operate on weekdays and weekends. Our call center is open 24/7, 365 days a year. You can always book online.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section sofax-section-padding">
            <div class="container">
                <div class="sofax-section-title center max-width-large">
                    <h2 class="mb-3">We price by single item or by truck volume</h2>
                    <p>
                        For 2 or more items, we price by volume, which is how much space your junk takes up in the truck. If you have only one item, we do offer single item pricing.
                    </p>
                    <div class="sofax-portfolio-menu extra-mt">
                        <ul id="watch-filter-gallery" class="option-set clear-both" data-option-key="filter">
                            <li class="wow fadeInUpX" data-wow-delay="0.2s" data-option-value=".development">Single item</li>
                            <li class="wow fadeInUpX" data-wow-delay="0.4s" data-option-value=".security">Multiple items</li>

                        </ul>
                    </div>
                </div>
                <div class="sofax-portfolio-column" id="sofax-portfolio-grid">
                    <div class="collection-grid-item development">
                        <div class="sofax-portfolio-content-wrap wow fadeInUpX" data-wow-delay="0.2s">
                            <div class="col-md-12">
                                <div class="sofax-features-box wow fadeInUpX position-relatiove customcardPricingSection" data-wow-delay="0.2s">
                                    <div class="sofax-features-content">
                                        <h4>Single item pricing</h4>
                                        <p>If you only have one item, we price the item individually. Examples of pieces with single-item prices:</p>
                                        <ul >
                                            <li style="list-style: disc;">Any size mattress</li>
                                            <li style="list-style: disc;">Any appliance (washer, dryer, BBQ grill, etc.)</li>
                                            <li style="list-style: disc;">Any furniture (sofa, bed frame dining table, etc.)</li>
                                            <li style="list-style: disc;">Any type of TV</li>
                                        </ul>
                                    </div>
                                    <div class="sofax-features-thumb">
                                        <img src="{{asset("assets/images/homepage/couch.svg")}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="collection-grid-item security">
                        <div class="sofax-portfolio-content-wrap wow fadeInUpX" data-wow-delay="0.5s">
                            <div class="col-md-12">
                                <div class="sofax-features-box wow fadeInUpX position-relatiove customcardPricingSection" data-wow-delay="0.2s">
                                    <div class="sofax-features-content">
                                        <h4>Multiple items? We price by volume.</h4>
                                        <p>It’s based on how much space your junk takes up in the truck. We have a minimum charge for very small loads; from there, prices go from 1/8th of a truck up to a full truckload. We can give an exact price when we see the items on site.</p>
                                    </div>
                                    <div class="sofax-features-thumb">
                                        <img src="{{asset("assets/images/homepage/truck.png")}}" alt="" style="height: 300px;">
                                    </div>
                                </div>
                            </div>
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
                        <img src="{{asset("assets/images/tl4.jpg")}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac light-color">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">Repurposing your items for good</h2>
                        </div>
                        <p>Once your items are loaded into the truck, their repurposing journey begins. For us, repurposing means recycling the recyclables and donating the donatables, so as much junk as possible is diverted from landfills. You can rest easy knowing your items are handled properly through responsible junk removal.</p>
                        <div class="extra-mt wow fadeInUpX">
                            <a class="sofax-default-btn pill" data-text="Learn more about how we repurpose" href="contact-us">
                                <span class="button-wraper">Learn more about how we repurpose </span>
                            </a>
                        </div>
                    </div>

                    <br><br>
                    <div class="sofax-about-content-wrap">
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-icon2">
                                <img src="{{asset("assets/images/homepage/recycling-icon.svg")}}" alt="">
                            </div>
                            <div class="sofax-iconbox-data2 aboutv8">
                                <h4 style="color: white">Recycle</h4>
                            </div>
                        </div>
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-icon2">
                                <img src="{{asset("assets/images/homepage/repurpose-icon.svg")}}" alt="">
                            </div>
                            <div class="sofax-iconbox-data2 aboutv8">
                                <h4 style="color: white">Repurpose</h4>
                            </div>
                        </div>
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-icon2">
                                <img src="{{asset("assets/images/homepage/donating-icon.svg")}}" alt="">
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
                    <h2 class="mb-3">Don't just take our word for it</h2>
                    <p>Real customer reviews, typos and all ;)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sofax-testimonial-content-wrap wow fadeInUpX" data-wow-delay="0.1s">
                        <div class="sofax-testimonial-rating">
                            <ul>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="sofax-testimonial-data">
                            <p>I like being able to schedule online. I have used V.I.P.nk Removal many times and the people that come are always courteous and do a great job.</p>
                        </div>
                        <div class="sofax-testimonial-author">
                            <div class="sofax-testimonial-author-thumb">
                                <img src="assets/images/v3/thumb4.png" alt="">
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
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="sofax-testimonial-data">
                            <p>Super friendly and helpful staff. They went above and beyond. Kept me well informed of their timing. Helped clean up my driveway. Great service.</p>
                        </div>
                        <div class="sofax-testimonial-author">
                            <div class="sofax-testimonial-author-thumb">
                                <img src="assets/images/v3/thumb5.png" alt="">
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
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset("assets/images/homepage/starticon.svg")}}" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="sofax-testimonial-data">
                            <p>V.I.P.nk Removal’s local teams are well-equipped to handle any size of decluttering job, allowing REALTORS® to focus on their clients and closing deals.</p>
                        </div>
                        <div class="sofax-testimonial-author">
                            <div class="sofax-testimonial-author-thumb">
                                <img src="assets/images/v3/thumb6.png" alt="">
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
                <a class="sofax-default-btn pill whitespace--normal" data-text="See More Customer’s love" href="contact-us">
                    <span class="button-wraper">See More Customer’s love</span>
                </a>
            </div>
        </div>
    </section>
<!-- 
    <section>
        <div class="d-flex justify-content-center align-items-center" style="margin: 10px;">
            <div>
                <div class="sofax-footer-menu ctaWrapper mb-3">
                    <center>
                        <img class="removalImg" src="{{asset("assets/images/homepage/removal.png")}}" alt="" style="width: 300px;">
                    </center>
                    <h5>We make junk disappear</h5>
                    <div class="sofax-subscription-field5">
                        <form action="{{route("zipcode.check")}}" class="check-zip-codes-form2" method="POST">
                            <input type="text" placeholder="Enter ZIP code" id="postalCodeInput2">
                            <button class="sofax-subcribe-btn2" style="color:white;">CHECK AVAILABILITY</button>
                        </form>
                    </div>
                    <p>24/7 Customer Service 973-810-6234</p>
                </div>
            </div>
        </div>
    </section> -->
    @include('components.cta')


    <script>
        $(document).ready(function () {
            $('.check-zip-codes-form1').on("submit", function (){
                event.preventDefault();


                console.log("dsadasdsad");

                const postalCode = $('#postalCodeInput').val().trim();
                if (postalCode === '') {
                    alert('Please enter your postal code.');
                    return;
                }

                $.ajax({
                    url:  $(this).attr('action'),
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

            $('.check-zip-codes-form2').on("submit", function (){
                event.preventDefault();


                console.log("dsadasdsad");

                const postalCode = $('#postalCodeInput2').val().trim();
                if (postalCode === '') {
                    alert('Please enter your postal code.');
                    return;
                }

                $.ajax({
                    url:  $(this).attr('action'),
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
