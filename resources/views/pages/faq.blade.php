@extends('layouts.app')
@section('title', "FAQS")

@section('content')

    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">FAQ</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    /
                    <li aria-current="page"> FAQ</li>
                </ul>
            </nav>

        </div>
    </div>

    <section class="section sofax-section-padding bg-light">
        <div class="container">
            <div class="sofax-section-title center">
                <h2 class="mb-3">Frequently Asked Questions (FAQs)</h2>
                <p>
                    Here are the answers to some of our customers' most frequently asked questions (FAQs). If you can't find the answer you're looking for, please feel free to contact us.
                </p>
            </div>
            <div class="sofax-accordion-wrap1 sofax-accordion-wrap3">
                <div class="sofax-accordion-section-wrapper">
                    <div class="sofax-accordion-section-v2">
                        <h2 class="mb-3">Pricing and Payment</h2>
                        <br>
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
                    </div>

                    <div class="sofax-accordion-section-v2 mt-24">
                        <h2 class="mb-3">What We Take</h2>
                        <br>
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

                    </div>
                </div>
            </div>

            <br><br>
            <div class="sofax-accordion-wrap1 sofax-accordion-wrap3">
                <div class="sofax-accordion-section-wrapper">
                    <div class="sofax-accordion-section-v2">
                        <h2 class="mb-3">My Appointment
                        </h2>
                        <br>
                        <div class="sofax-accordion-item about-us-section open">
                            <div class="sofax-accordion-header">
                                <h4>How do I cancel or change my appointment?
                                </h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>You can always change or cancel your appointment at any time. Just call us at 973-810-6234 and we'll be happy to help you make changes to your appointment.</p>
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
                                <p>It depends on where you’re located. Some of our franchises are able to get the job done even if you aren't home, as long as the items are easily accessible and the team can take payment over the phone. However, some locations do require you to be at home in order to remove your items.</p>
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
                                <p>
                                    On the day of your appointment with us, our friendly, uniformed truck team members will give you a call or text 25-30 mins before we arrive to let you know we’re on our way.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sofax-accordion-section-v2 mt-24">
                        <h2 class="mb-3">Service and Location Info</h2>
                        <br>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>Do you service my region/location?
                                </h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>
                                    While we don't quite service the entire map, we cover almost every greater metropolitan area across the US, Canada, and Australia. To see if we’re in your neighborhood, you can start a booking by entering your zip code here.
                                </p>
                            </div>
                        </div>
                        <div class="sofax-accordion-item about-us-section">
                            <div class="sofax-accordion-header">
                                <h4>Are you licensed and insured?
                                </h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>Yes, we're fully licenced and insured! We have insurance covering damages to both persons and property for every single booking.</p>
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
                                <h4>What are your hours of operation?</h4>
                                <div class="sofax-active-icon sofax-accordion-btn">
                                    <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                                </div>
                            </div>
                            <div class="sofax-accordion-body">
                                <p>
                                    It varies across our locations, but many of our franchises work both weekends and weekdays. Our call center is open 24-7, 365 days a year, and you can always book online to find an appointment time that works for you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sofax-service-slider">
        <div class="sofax-slider-service-section">
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="{{asset("assets/images/pages/icon1.png")}}" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2 class="mb-3">We make junk disappear</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="{{asset("assets/images/pages/icon1.png")}}" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2 class="mb-3">fast, reliable junk removal services </h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="{{asset("assets/images/pages/icon1.png")}}" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2 class="mb-3">focus on cleanliness</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="{{asset("assets/images/pages/icon1.png")}}" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2 class="mb-3">Same-day service</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="{{asset("assets/images/pages/icon1.png")}}" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2 class="mb-3">Friendly, professional teams</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="{{asset("assets/images/pages/icon1.png")}}" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2 class="mb-3">Repurposing your items for good</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="d-flex justify-content-center align-items-center" style="margin: 10px;">
            <div>
                <div class="sofax-footer-menu ctaWrapper mb-3">
                    <center>
                        <img src="{{asset("assets/images/homepage/removal.png")}}" alt="" style="width: 300px;">
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
    </section>


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
