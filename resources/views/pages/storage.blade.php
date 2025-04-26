@extends('layouts.app')
@section('title', "Storage")

@section('content')
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Storage</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html">For your needs</a></li>
                    /
                    <li aria-current="page"> Storage</li>
                </ul>
            </nav>

        </div>
    </div>

    <section class="sofax-section-padding5">
        <div class="container">
            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Storage unit cleanout services</h3>
                <p>
                    Storage units are supposed to act as a temporary storage solution for items you don’t need to access regularly. However, many people tend to keep adding items which can lead to junk piling up. Before you know it, you can end up with a storage unit full of items you’ll never use again. If this sounds like your storage unit, it’s time to clean it out and make sure you’re not paying for space you don’t need. Storage clean outs don’t have to be strenuous. In fact, you don’t even have to lift a finger! Our professional teams at V.I.P.nk Removal can handle any storage unit junk removal job, no matter the size.
                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Storage unit cleanout & junk removal made simple.</h3>
                <p>
                    Cleaning out a storage unit by yourself can be pretty daunting. If you need a hand with storage unit junk removal, we’re happy to help! At V.I.P.nk Removal, we’re junk removal experts and have tons of experience cleaning out storage lockers. Storage cleanout services can be easy with our help. The best part is, we’ll do all the heavy lifting for you! If you’re wondering, “how do I find storage unit cleanout services near me?” Then look no further than our friendly Truck Team Members at V.I.P.nk Removal. There’s no need to move items out before we arrive—we’ll remove items right from the storage unit and load it into our truck. All you have to do is point. Storage unit cleanup can be a breeze!
                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>How to get rid of storage unit stuff</h3>
                <p>
                    Are you in the process of cleaning storage units and wondering where to start? Fortunately, storage clean outs can be straightforward if you stay organized. Follow the five steps below for some tips on how to start:
                </p>
                <ol>
                    <li><strong>Get in the right cleaning mood:</strong> Set time aside, get mentally prepared, and bring a helper if needed.</li>
                    <li><strong>Take inventory of items inside:</strong> Scan the unit and list the types of items stored to estimate the time needed.</li>
                    <li><strong>Make different piles when sorting:</strong> Separate items into keep, donate, and throw out piles.</li>
                    <li><strong>Get professional storage cleanout services:</strong> Call a junk removal company like V.I.P.nk Removal to handle bulky or overwhelming loads.</li>
                    <li><strong>Reach out to donation centers:</strong> Donate items in good condition to local thrift stores or charities.</li>
                    <li><strong>Clean out your storage unit regularly:</strong> Organize to keep it clutter-free and easier to clean in the future.</li>
                </ol>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Storage Unit Clean Outs Courtesy of V.I.P.nk Removal</h3>
                <p>
                    If you’re wondering where to start when it comes to storage unit cleanout, check out our helpful list below for some tips!
                </p>
                <ul>
                    <li>1. Assess your storage unit and make a list of the types of items to be sorted.</li>
                    <li>2. Make different piles according to your needs: donation, junk, and “keep”.</li>
                    <li>3. Neatly stack and categorize the items you plan to keep for easier access later.</li>
                    <li>4. For items you want to get rid of, consider recycling or calling V.I.P.nk Removal for pickup.</li>
                    <li>5. Donate reusable items to the nearest donation center (call ahead to confirm acceptance).</li>
                    <li>6. Sweep and tidy the unit so it’s clean and organized.</li>
                </ul>
                <p>
                    Once your storage area is free from clutter, you can relax knowing that the cleanout is done and your space is organized again!
                </p>
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
