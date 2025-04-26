@extends('layouts.app')
@section('title', "Moving")

@section('content')
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Moving</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html">For your needs</a></li>
                    /
                    <li aria-current="page"> Moving</li>
                </ul>
            </nav>

        </div>
    </div>

    <section class="sofax-section-padding5">
        <div class="container">
            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>We offer pre and post moving Junk Removal!
                </h3>
                <p>When you’re faced with cleaning out an entire house for a move, the task can seem a bit overwhelming. At V.I.P.nk Removal, our moving junk removal service simplifies the moving process for you. We’re experts at home cleanouts and can get the job done quickly and efficiently.
                </p>
            </div>
            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>How to clean out a house before & after moving
                </h3>
                <p>
                    1. When you’re moving, you want to plan ahead as much as possible. To help you with this, refer to our moving checklist to help guide you. It’s best to break the process into steps to make it less overwhelming. Keep in mind, you should take inventory of your items by moving through your home, room by room BEFORE you start packing boxes — this will prepare you for what’s to come when it’s finally time to pack. To help simplify the moving process, refer to our moving checklist below and use the printable moving checklist to take with you as you pack!
                </p>
            </div>
            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>Before you move
                </h3>
                <p>
                    2. Designate a ‘purge pile’ in your home for all the items you wish to discard. <br>
                    3. Start by taking inventory of each room and placing any obvious discard items in the purge pile.
                    <br>
                    4. Move one room at a time, taking everything out from its stored location..
                    <br>
                    5. Take a good look at the items before you part ways to ensure you have no regrets when you discard them.
                    <br>
                    5. Take a good look at the items before you part ways to ensure you have no regrets when you discard them.
                    <br>
                    6. Set aside the items that you have an emotional attachment to, but aren’t sure if they will be able to fit with you in the moving truck. If you have to part with them, check out how you can get rid of sentimental clutter in five easy steps. When you know which items you will be packing, organize them by category and box them up.
                    <br>

                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>During your move
                </h3>
                <p>
                    7. While you’re moving, there shouldn’t be much packing going on. This is the time to reap the benefits of planning ahead and pre-packing your belongings!
                    8. Pack your emotionally-charged items if you have extra space in your moving vehicle, otherwise, place them in your purge pile.<br>
                    9. When the house has been emptied of boxes, quickly go through each room and tidy up. This will help later during the post-moving purge process.<br>
                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <h3>After your move
                </h3>
                <p>
                    10. So you have an empty house and one, or many, purge piles laying around. You can either clean it all up yourself or call a junk removal company to do it for you.<br>
                    11. If you decide to do it yourself, you’ll have to pick up all of your junk and place it in your vehicle. Then take it to the proper recycling center or waste management facility. Our advice, save yourself part of the trouble and call our junk removal experts at V.I.P.nk Removal to purge your house for you. We offer same-day service for all cleanouts so you can focus on your move, and send your junk packing!<br>
                    <br>
                </p>
            </div>

            <div class="sofax-career-details-content terms-condition mb-40">
                <!-- <h3>Stay stress-free with our <a href="{{asset("assets/files/gj_moving_checklist_2019.pdf")}}">printable moving checklist!</a></h3> -->
                <h3>Your moving day purging specialists</h3>
               <p>
                   V.I.P.nk Removal offers junk removal service you can rely on. Our teams are professionals who understand that dealing with house cleanouts can be stressful. They’ll ensure your home is cleared out swiftly, so you can enjoy your clutter free home.
                   <br>
                   We also understand the need for a quick resolution with house cleanouts, which is why we always show up on time. Our team will promptly provide you with an on-site estimate after taking a look at the size of the job. We price based on the volume of space your junk takes up in the truck, so you’ll never pay more than you should.
               </p>
            </div>

        </div>
    </section>
    

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
