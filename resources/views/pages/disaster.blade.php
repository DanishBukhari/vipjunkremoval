@extends('layouts.app')
@section('title', "Storage")

@section('content')
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Disaster</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html">For your needs</a></li>
                    /
                    <li aria-current="page"> Disaster</li>
                </ul>
            </nav>

        </div>
    </div>

    <section class="sofax-section-padding5">
        <div class="container">
            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Emergency disaster cleanup services</h3>
                <p>
                    When extreme weather causes damage to your home, V.I.P.nk Removal is ready to help. Our business is equipped with satellite communications and GPS technology, so we can continue to operate even when essential services are down, making V.I.P.nk Removal the most reliable junk removal service around. We’re able to clean up debris caused by weather events safely and efficiently. We can take any non-hazardous items that two people can safely lift. We are your go-to solution for emergency junk removal.
                </p>
                <p>
                    As always, V.I.P.nk Removal promises to handle all of the junk in an environmentally friendly way. We recycle and donate whenever possible, ensuring all items are disposed of properly. Plus, as a worldwide organization and admired brand, you can have the peace of mind that V.I.P.nk Removal prices will not be inflated when demand for disaster cleanup is highest. As the world’s largest junk removal company, we are well equipped to handle emergency debris removal. So if you’re wondering, “where can I find disaster cleanup near me?” we are happy to help! Call or book online for an obligation-free estimate anytime.
                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Types of emergency debris removal we offer</h3>
                <p>
                    While we do not offer restoration work, you can call us or book online anytime to pick up any items that have been damaged by flooding, hurricanes, or fires.
                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Flooded basement cleanup</h3>
                <p>
                    If you require debris removal or need damaged items removed from a flooded basement, our professional Truck Team Members are always happy to help. You don’t have to lift a finger - we will do all the heavy lifting for you. Calling a professional junk removal company is important to handle basement cleanup safely, especially if there are steep stairs in your home that could cause injury.
                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Hurricane & storm cleanup</h3>
                <p>
                    Natural disasters such as hurricanes and storms are unpredictable events that lead to extreme stress. In order to help alleviate some of your stress, our junk removal service is here to help remove any debris or damaged items on your property. With our clean, shiny trucks and professional Truck Team Members, we can handle all of your junk removal needs. If you want even more advice on how to deal with hurricane cleanup, check out these 5 tips for a safe hurricane clean up.
                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Fire damage cleanup</h3>
                <p>
                    Dealing with fire damage cleanup can be an emotionally trying time for you and your family. Fortunately, our Truck Team Members can help remove any debris and fire damaged items from your home. Before making any junk removal decisions, be sure to first check with your insurance company to ensure your claim is processed correctly.
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
