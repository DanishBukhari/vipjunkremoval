@extends('layouts.app')
@section('title', "Junk Removal in Plainfield, NJ")

@section('content')
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Junk Removal in Plainfield, NJ</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="/">Home</a></li>
                    /
                    <li aria-current="page">Plainfield</li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="sofax-section-padding5">
        <div class="container">
        <div class="sofax-career-details-content terms-condition mb-40" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px;">
    <div style="flex: 1.5; min-width: 300px;">
        <h3>Looking for hassle-free junk removal in Plainfield, NJ?</h3>
        <p>Look no further than V.I.P.nk Removal! We serve Plainfield and the surrounding communities, specializing in reliable, eco-friendly, same-day junk hauling services for homes and businesses. Let us make your junk disappear—quickly and effortlessly.</p>
    </div>
    <div style="flex: 1; min-width: 300px; text-align: right;">
        <img src="assets/images/new2.jpeg" alt="Junk Removal South Amboy" style="border-radius: 20px; width: 100%; max-width: 400px; height: auto;">
    </div>
</div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>How our junk removal service works</h3>
                <p>
                    1. Schedule your <a href="newbooking">appointment online</a> or by calling +1 973-810-6234.<br>
                    2. Our truck team will call you 15–30 minutes before your scheduled appointment window to let you know what time we’ll arrive.<br>
                    3. We'll take a look at the items you want removed and give you an all-inclusive price.<br>
                    4. Watch your junk disappear! We do all the heavy lifting, sweep up the area, and collect payment when we're done.
                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Responsible junk disposal and recycling in Plainfield, NJ</h3>
                <p>Our dedication to responsible disposal drives everything we do. We focus on giving new life to items in good condition through repurposing, and for anything that can’t be reused, we make sure it’s recycled at local facilities right here in Plainfield. This is our way of contributing to a cleaner, more sustainable community.</p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>What we take</h3>
                <p>We're a full-service junk removal company, which means we'll take anything non-hazardous that two people can lift. If you don’t need it, we can remove it from your Plainfield home or business. Items we take include (but are not limited to):</p>
                <ul>
                    <li>Furniture</li>
                    <li>Mattresses</li>
                    <li>Electronics</li>
                    <li>TVs</li>
                    <li>Computers</li>
                    <li>Appliances</li>
                    <li>Refrigerators</li>
                    <li>Scrap metal</li>
                    <li>Yard waste</li>
                    <li>Pianos</li>
                    <li>Tires</li>
                    <li>Treadmills</li>
                    <li>Barbeque grills</li>
                    <li>Carpets</li>
                    <li>And so much more!</li>
                </ul>
                <p>If you don't see your item above, check our full list of items <a href="what-we-take"> we take</a>. We come when it’s convenient for you, so you can have your space back as quickly as possible.</p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Up-front pricing</h3>
                <p>Getting a price is easy with V.I.P.nk Removal. We price based on volume, but also have discounted options for single item removals such as any size of mattress, appliances, or other furniture.</p>
                <p>Have more questions on how we price? We've got more info on our junk removal <a href="pricing"> pricing page</a>.</p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Contact Us</h3>
                <p>Phone: +1 973-810-6234<br>
                Email: <a href="mailto:vipjunkremovalnj@gmail.com">vipjunkremovalnj@gmail.com</a></p>
            </div>
        </div>
    </section>

    <section id="testimonial" class="sofax-section-padding bg-light">
        @include('components.reviews')
    </section>

    @include('components.cta')
@endsection