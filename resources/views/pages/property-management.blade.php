@extends('layouts.app')
@section('title', "Property Management")

@section('content')
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Property Management</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html"> Business</a></li>
                    /
                    <li aria-current="page"> Property Management</li>
                </ul>
            </nav>

        </div>
    </div>

    <section class="section sofax-section-padding bg-light">
        <div class="container">

            <div class="sofax-section-padding2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="sofax-content-img box-shadow wow fadeInLeft">
                                <img src="{{asset("assets/images/hs1.jpg")}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sofax-default-content tac ml-50">
                                <div class="tg-heading-subheading animation-style3">
                                    <h2 class="mb-3">Unique solutions for property management</h2>
                                    <p>The property management industry has specialized needs, and we’re here to help with tailored junk removal solutions. Our Bulk Trash Program makes it easy to manage large-item disposal, while our Trash Out Program ensures vacant units are quickly cleared and ready for new tenants. Whether you're dealing with illegal dumping, planning a community cleanup, or need regularly scheduled pickups, you can count on our reliable, on-demand service—including after-hours and weekend availability.</p>
                                </div>
                                <div class="extra-mt">
                                    <strong>
                                        We help property managers with:
                                    </strong>

                                    <div class="sofax-iconbox-wrap2">
                                        <div class="sofax-iconbox-icon2">
                                            <img src="{{asset("assets/images/pages/pmc.png")}}" alt="">
                                        </div>
                                        <div class="sofax-iconbox-data2">
                                            <h4>Vacant unit cleanouts
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="sofax-iconbox-wrap2">
                                        <div class="sofax-iconbox-icon2">
                                            <img src="{{asset("assets/images/pages/pmc.png")}}" alt="">
                                        </div>
                                        <div class="sofax-iconbox-data2">
                                            <h4>Dumpster overflow
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="sofax-iconbox-wrap2">
                                        <div class="sofax-iconbox-icon2">
                                            <img src="{{asset("assets/images/pages/pmc.png")}}" alt="">
                                        </div>
                                        <div class="sofax-iconbox-data2">
                                            <h4>Illegal dumping
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="sofax-iconbox-wrap2">
                                        <div class="sofax-iconbox-icon2">
                                            <img src="{{asset("assets/images/pages/pmc.png")}}" alt="">
                                        </div>
                                        <div class="sofax-iconbox-data2">
                                            <h4>Community trash days
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="sofax-iconbox-wrap2">
                                        <div class="sofax-iconbox-icon2">
                                            <img src="{{asset("assets/images/pages/pmc.png")}}" alt="">
                                        </div>
                                        <div class="sofax-iconbox-data2">
                                            <h4>And much more
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="sofax-iconbox-wrap2">
                                        <div class="sofax-iconbox-icon2">
                                            <img src="{{asset("assets/images/pages/pmc.png")}}" alt="">
                                        </div>
                                        <div class="sofax-iconbox-data2">
                                            <h4>Evictions
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="sofax-iconbox-wrap2">
                                        <div class="sofax-iconbox-icon2">
                                            <img src="{{asset("assets/images/pages/pmc.png")}}" alt="">
                                        </div>
                                        <div class="sofax-iconbox-data2">
                                            <h4>Renovation cleanup
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- <section class="sofax-section-padding2 dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="integration-social-icon wow fadeInUpX">

                        <iframe width="552" height="296" src="https://www.youtube.com/embed/N29XRkX2ew4" title="What Happens to Your Junk?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac light-color">
                        <div class="tg-heading-subheading animation-style3">
                            <h2 class="mb-3">Environmentally responsible disposal
                            </h2>
                        </div>
                        <p>We believe in repurposing as many items as possible, through donation and recycling. Our teams work hard to keep items out of landfills, so you can rest easy knowing that your items have been handled responsibly.</p>
                        <div class="extra-mt wow fadeInUpX">
                            <a class="sofax-default-btn pill" data-text="Our approach to repurposing" href="contact-us">
                                <span class="button-wraper">Our approach to repurposing </span>
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
    </section> -->

    <br><br><br>
    <section class="section sofax-section-padding3 position-ralatiove">
        @include('components.whychooseus')
    </section>

    <section id="testimonial" class="sofax-section-padding bg-light">
        @include('components.reviews')
    </section>

    @include('components.cta')

@endsection
