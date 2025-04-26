@extends('layouts.app')
@section('title', "What we do ?")

@section('content')
<div class="sofax-breadcrumb">
    <div class="container">
        <h1 class="post__title">What We DO</h1>
        <nav class="breadcrumbs">
            <ul>
                <li><a href="index.html">Home</a></li>
                /
                <li aria-current="page"> What We Do</li>
            </ul>
        </nav>

    </div>
</div>

<section class="section sofax-section-padding">
    <div class="container">
        <div class="video" style="display:flex; justify-content:center;">
            <video src="{{asset("assets/images/what-we-do.mp4")}}" autoplay controls style="width: 900px; height:400px; margin:40px;"></video>
        </div>
        <div class="sofax-section-title">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <h2 class="mb-3">We make junk disappear</h2>
                </div>
                <div class="col-xl-5 col-lg-4 d-flex justify-content-end align-items-center">
                    <div class="sofax-aboutus-content-text our-teaminner">
                        <p>
                            V.I.P.nk Removal® is your full-service junk removal company. We offer junk removal services for your home or business. Do you have old furniture, appliances, electronics, tires, construction debris, or yard waste you need to make disappear? V.I.P.nk Removal® can take away almost any material we can fit in our trucks, without you ever lifting a finger. Make space for possibility™️!
                        </p>
                    </div>
                </div>
            </div>
        </div><div class="row d-flex flex-wrap justify-content-center gap-4">
    <a href="newbooking" class="sofax-card text-decoration-none text-dark">
        <h4>Residential</h4>
        <p>Need more space? We’ll take care of all your household junk.</p>
    </a>

    <a href="newbooking" class="sofax-card text-decoration-none text-dark">
        <h4>Renovation</h4>
        <p>Want to avoid the hassle of dumpster rental? Let us do the heavy lifting</p>
    </a>

    <a href="newbooking" class="sofax-card text-decoration-none text-dark">
        <h4>Storage</h4>
        <p>Have junk you need to make disappear? Let us take care of it.</p>
    </a>

    <a href="newbooking" class="sofax-card text-decoration-none text-dark">
        <h4>Disasters</h4>
        <p>Dealing with debris from a disaster? We’re here to help.</p>
    </a>

    <a href="newbooking" class="sofax-card text-decoration-none text-dark">
        <h4>Commercial Junk Removal</h4>
        <p>Need a hand managing junk at work? Give us a call.</p>
    </a>

    <a href="newbooking" class="sofax-card text-decoration-none text-dark">
        <h4>Moving</h4>
        <p>Why pay to move stuff you don’t need? Let us handle it!</p>
    </a>
</div>

    </div>
</section>

<section class="sofax-section-padding2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 order-lg-2">

                <img src="{{asset("assets/images/tl2.png")}}" style="width:500px; height:600px; margin-top:250px; border:none; border-radius:10px;">

            </div>
            <div class="col-lg-7">
                <div class="sofax-default-content mr-50 tac">
                    <h2 class="mb-3">Just point and junk disappears</h2>
                    <div class="extra-mt">
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-data2">
                                <p>Getting rid of your junk is easy!</p>

                                <p>
                                    - We work on your schedule - we come when it's convenient for you.
                                    - We do all the heavy lifting - just point and the junk disappears.
                                    - We'll dispose of your junk responsibly - we donate or recycle where possible.
                                </p>
                            </div>
                        </div>
                        <div class="sofax-iconbox-wrap2">
                            <!-- <div class="sofax-iconbox-icon2">
                                    <img src="assets/images/service/icon3.png" alt="">
                                </div> -->
                            <div class="sofax-iconbox-data2">
                                <h4>All Services</h4>
                                <p>
                                    - Attics<br />
                                    - Basements<br />
                                    - Crawl Spaces<br />
                                    - Disasters<br />
                                    - Estates<br />
                                    - Garages & Carports<br />
                                    - Household Cleanouts<br />
                                    - Pre & Post Moving<br />
                                    - Renovations<br />
                                    - Sheds<br />
                                    - Storage Units
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>
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
    $(document).ready(function() {
        $('.check-zip-codes-form1').on("submit", function() {
            event.preventDefault();


            console.log("dsadasdsad");

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
                success: function(response) {

                    if (response.found) {
                        window.location.href = "/newbooking?postal_code=" + encodeURIComponent(postalCode);
                    } else {
                        alert('Postal code not found. Please enter a valid one.');
                    }
                },
                error: function() {
                    alert('Something went wrong. Please reload the page and try again.');
                }
            });
        });

        $('.check-zip-codes-form2').on("submit", function() {
            event.preventDefault();


            console.log("dsadasdsad");

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
                success: function(response) {

                    if (response.found) {
                        window.location.href = "/newbooking?postal_code=" + encodeURIComponent(postalCode);
                    } else {
                        alert('Postal code not found. Please enter a valid one.');
                    }
                },
                error: function() {
                    alert('Something went wrong. Please reload the page and try again.');
                }
            });
        });

    });
</script>



@endsection