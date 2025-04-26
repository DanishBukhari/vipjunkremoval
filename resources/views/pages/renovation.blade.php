@extends('layouts.app')
@section('title', "Renovation")

@section('content')
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Renovation</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html">For your needs</a></li>
                    /
                    <li aria-current="page"> Renovation</li>
                </ul>
            </nav>

        </div>
    </div>

    <section class="sofax-section-padding5">
        <div class="container">
            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Pre and post-renovation cleaning service</h3>
                <p>
                    Whether it’s a whole new room, a quick update to a bathroom, or installing new flooring in your kitchen, renovating your home can be a lot of work. While it’s fun and exciting to build new things, it’s usually a lot less thrilling when you have to clean up.
                    <br>
                    Renovations can create a big mess with all kinds of garbage and waste to get rid of. Our post-renovation cleaning professionals will quickly take care of any renovation debris from your project, so you can enjoy the building and skip the cleaning.
                </p>
            </div>
            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>V.I.P.nk Removal’s professional cleaning after renovation
                </h3>
                <p>
                    Most of the waste that comes from renovating a home can’t be left at the curb with your household trash, as there’s often too much of it for your waste management service to handle. While you could rent a dumpster, they can be costly, require a permit, and they take up space in your yard or on the street. Instead of tackling post-construction cleanup on your own, consider professional cleaning after your renovation. At V.I.P.nk Removal we can take care of it for you so you can save your energy and your time. For more information comparing V.I.P.nk Removal to dumpsters, checkout our dumpster comparison guide.
                    <br>
                    If your  in learning more about V.I.P.nk Removal, check out our FAQ section which is full of interesting details and facts about our service and how we operate!
                </p>
            </div>
            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Post renovation cleaning tips
                </h3>
                <p>
                    Renovations are messy and while you work to improve your home, it can be easy to forget about the post remodel cleaning. It may seem unimportant, but the post-renovation clean up is necessary to keep your family members safe and enable you to enjoy your newly remodeled home.
                    <br>
                    Here are 8 post remodeling cleaning tips:

                </p>
                <ol>
                    <li>1. Remove all trash. Collect the renovation waste into a purge pile and discard it.</li>
                    <li>2. Clean the walls. If your walls are newly painted, dry dust them. If the old paint remains, use a damp rag to wipe them down. Use a broom or duster to reach high places. For wallpapers, vacuum with a brush attachment.</li>
                    <li>3. Vacuum. Be thorough and vacuum your floors two to three times.&nbsp;</li>
                    <li>4. Sweep and mop. Clean and disinfect the floor before walking barefoot in the area.</li>
                    <li>5. Clean the vents. These collect a lot of dust, use warm water with soap to wash.</li>
                    <li>6. Wipe light fixtures and fans. Remove the ceiling fan and its blades to thoroughly clean it, unless you had a new one installed.</li>
                    <li>7. Wipe down all surfaces with a damp rag. This ensures the last of the particles are taken care of.</li>
                    <li>8. Change the air filters. Renovations cause particles to collect in the air that can get trapped by your air filter, so change the filter regardless of how old it is.&nbsp;</li>
                </ol>
                <br>

                <p>Remodeling your home is a lot of work and that’s before you consider the post-remodel cleaning. If you start tidying up and realize it’s too much to handle, call our professionals at V.I.P.nk Removal to take care of your post-renovation cleaning.</p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Residential construction & renovation clean up services
                </h3>
                <p>Our teams are fully insured and make residential construction cleanup easy. We can take all types of renovation debris, including wood, drywall, metal, fixtures, appliances, old furniture, tiles, carpeting, and more. We try to ensure all of these items are properly disposed of, which means recycling and donating when possible.</p>
                <p>Best of all, we’ll do all the heavy lifting for you. We’ll pick up your junk right from where it’s located and load it into our truck - you won’t have to lift a finger. All you have to do is point!</p>

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
