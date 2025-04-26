@extends('layouts.authapp')
@section('title', "Login to your space")

@section('content')

    <section style="margin-top: 200px">

        <div class="sofax-accordion-wrap1 sofax-accordion-wrap3">
            <div class="container">
                <div class="sofax-accordion-section-v2 row">
                    <div class="nb-step1 col-md-12  sofax-accordion-item about-us-section open">
                        <div class="sofax-accordion-header">
                            <h4>1. Check Zip Code Availability</h4>
                            <div class="sofax-active-icon sofax-accordion-btn">
                                <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                            </div>
                        </div>

                        <div class="nb-step1-ct sofax-accordion-body nb-form-wrapper open">
                            <form action="{{route("zipcode.check")}}" id="check-zip-codes-form" method="POST">
                            @csrf

                                <div class="sofax-main-field">
                                    <input type="text" placeholder="Enter Your Postal Code" id="postalCodeInput" value="{{ $postalCode ?? '' }}">
                                </div>
                                <center>
                                    <button class="sofax-default-btn pill sofax-header-btn" data-text="NEXT" >
                                        <span class="button-wraper">NEXT</span>
                                    </button>
                                </center>
                                <p>
                                    <i>
                                        <strong>No credit card required.</strong> <br>
                                        Cancel or reschedule any time
                                    </i>
                                </p>
                            </form>

                            <center id="loaderWrapperStep01" style="display: none">
                                <img id="loaderProgress" src="{{asset("assets/images/newbooking/loader.svg")}}" alt="">
                            </center>

                        </div>
                    </div>

                    <div class="nb-step2 col-md-12  sofax-accordion-item about-us-section">
                        <div class="sofax-accordion-header">
                            <h4>2. Choose Appointment Date And Time</h4>
                            <div class="sofax-active-icon sofax-accordion-btn">
                                <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                            </div>
                        </div>
                        <div class="nb-step2-ct sofax-accordion-body nb-form-wrapper">
                            <p>
                                <i>
                                    Here's our earliest available time. You can also pick another time.
                                </i>
                            </p>

                            <p id="appointment-warning" class="text-danger" style="display: none;">
                                This date and time are already booked. Please choose another.
                            </p>

                            <input type="text" id="datepicker" placeholder="Pick a date"><br><br>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" id="available-time">
                                    <option selected value="">Pick a time period</option>
                                    @foreach($availableTimes as $time)
                                        <option value="{{ $time->time_period }}">{{ $time->time_period }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <center>
                                <a id="save-date-time" class="sofax-default-btn pill sofax-header-btn" data-text="ENTER PICK-UP DETAILS" href="http://127.0.0.1:8000/newbooking">
                                    <span class="button-wraper">ENTER PICK-UP DETAILS</span>
                                </a>
                            </center>
                            <p>
                                <i>
                                    <strong>No credit card required.</strong> <br>
                                    Cancel or reschedule any time
                                </i>
                            </p>
                        </div>
                    </div>

                    <div class="nb-step3 col-md-12  sofax-accordion-item about-us-section ">
                        <div class="sofax-accordion-header">
                            <h4>3. Enter pick-up details</h4>
                            <div class="sofax-active-icon sofax-accordion-btn">
                                <img src="{{asset("assets/images/newbooking/icon9.png")}}" alt="">
                            </div>
                        </div>
                        <div class="nb-step3-ct sofax-accordion-body nb-form-wrapper">
                            <form id="new-booking-form" method="POST">

                                @csrf

                                <input type="hidden" name="zip_code" value="" id="hidden-zip-code">
                                <input type="hidden" name="appointment_date" value="" id="hidden-appointment_date">
                                <input type="hidden" name="appointment_time" value="" id="hidden-appointment_time">

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">This booking is for: <span style="color: red">*</span></label>
                                    <select class="form-select" aria-label="Default select example" name="booking_type">
                                        <option value="Home">Home</option>
                                        <option value="Business">Business</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Address<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="address">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Unit/Apt # (optional)</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="unit_apt">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">City<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="city">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">State<span style="color: red">*</span></label>
                                    <select class="form-select" aria-label="Select State" name="state" id="state">
                                        <option selected disabled>Select a state</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>

                                @guest()
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">First Name<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="first_name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Last Name<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="last_name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email<span style="color: red">*</span></label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                                    </div>
                                @endguest
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Phone Number<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="phone_number">
                                    </div>
                                @guest()
                                    <div class="form-check" style="display: flex ;align-items: center;">
                                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            I will be at the pick-up address
                                        </label>
                                    </div>

                                    <br><br><h4>Onsite Contact Details</h4><br>
                                    <div class="onsiteAddress">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">First Name<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="onside_first_name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Last Name<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="onside_last_name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email<span style="color: red">*</span></label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" name="onside_email_name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Phone Number<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="onside_phone_name">
                                        </div>
                                    </div>
                                @endguest

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">List the items you want removed (optional)</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="removal_items"></textarea>
                                </div>

                                <center>
                                    <button class="sofax-default-btn pill sofax-header-btn" data-text="Book Free Onsite Estimate">
                                        <span class="button-wraper">Book Free Onsite Estimate</span>
                                    </button>
                                    <br><br>
                                    <p style="font-size: 2px">
                                        <i>
                                            *By providing your phone number and email, you agree to receive marketing and customer service communications from RBDS Rubbish Boys Disposal Service Inc. and V.I.P.nk Removal LLC (Collectively V.I.P.nk Removal) and their franchisees by automatic telephone dialing system or other automated technology, including calls, pre-recorded messages, text messages, and emails at the number and email provided. You also consent to receive customer service communications as necessary outside of the standard calling periods. Consent is not a condition of purchase. Message and data rates may apply. Message frequency varies. Reply HELP for HELP or STOP to cancel for text, or click unsubscribe on the email. View our Privacy Policy and Terms. Contact: V.I.P.nk Removal at 301–887 Great Northern Way, Vancouver, BC V5T 4T5.
                                        </i>
                                    </p>
                                </center>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            let isTimeSlotAvailable = false;
            const blockedDates = [];

            // Initialize the datepicker
            $("#datepicker").datepicker({
                dateFormat: "yy-mm-dd",
                beforeShowDay: function (date) {
                    const d = $.datepicker.formatDate("yy-mm-dd", date);
                    return [blockedDates.indexOf(d) === -1];
                }
            });



            $('#check-zip-codes-form').on("submit", function (){
                event.preventDefault();

                let step1=$(".nb-step1");
                let step1Content=$(".nb-step1-ct");
                let step2=$(".nb-step2");
                let step2Content=$(".nb-step2-ct");

                const postalCode = $('#postalCodeInput').val().trim();
                if (postalCode === '') {
                    alert('Please enter your postal code.');
                    return;
                }

                $("#check-zip-codes-form").hide();
                $("#loaderWrapperStep01").show();

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: {
                        postal_code: postalCode,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        $("#loaderWrapperStep01").hide();
                        $("#check-zip-codes-form").show();

                        if (response.found) {
                            console.log("exist");

                            //open next step.
                            step1.removeClass("open");
                            step1Content.hide();

                            step2.addClass("open");
                            step2Content.show();

                            //setup zip_code
                            $('#hidden-zip-code').val(postalCode);

                        } else {
                            alert('Postal code not found. Please enter a valid one.');
                        }
                    },
                    error: function () {
                        alert('Something went wrong. Please reload the page and try again.');
                    }
                });
            });

            $('#save-date-time').on('click', function (e) {
                e.preventDefault();

                let step2=$(".nb-step2");
                let step2Content=$(".nb-step2-ct");
                let step3=$(".nb-step3");
                let step3Content=$(".nb-step3-ct");

                const selectedDate = $('#datepicker').val().trim();
                const selectedTime = $('#available-time').val();

                $('#appointment-warning').hide();

                if (selectedDate === '') {
                    alert('Please pick a date.');
                    return;
                }

                if (selectedTime === 'Pick a time period') {
                    alert('Please select a time period.');
                    return;
                }


                $.ajax({
                    url: '{{ url("/check-appointment-availability") }}',
                    type: 'POST',
                    data: {
                        date: selectedDate,
                        time: selectedTime,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (!response.available) {
                            $('#appointment-warning').show();
                            isTimeSlotAvailable = false;
                            return;
                        }
                        isTimeSlotAvailable = true;

                        ///open next step.
                        step2.removeClass("open");
                        step2Content.hide();

                        step3.addClass("open");
                        step3Content.show();

                        //setup appointment_date&appointment_time
                        $('#hidden-appointment_date').val(selectedDate);
                        $('#hidden-appointment_time').val(selectedTime);
                    }
                });




            });

            $('#new-booking-form').on('submit', function(e) {
                e.preventDefault();

                if (!isTimeSlotAvailable) {
                    alert("Please choose a valid and available date & time before submitting.");
                    return;
                }

                let form = $(this);
                let formData = form.serialize();
                let actionUrl = '{{ route('appointments.store') }}';

                $('.text-danger').remove(); // Clear old errors

                $.ajax({
                    type: 'POST',
                    url: actionUrl,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.message);
                        form.trigger("reset");
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            for (let field in errors) {
                                let input = $('[name="' + field + '"]');
                                input.after('<span class="text-danger">' + errors[field][0] + '</span>');
                            }
                        } else {
                            alert("Something went wrong. Please try again.");
                        }
                    }
                });
            });



        });

    </script>

@endsection
