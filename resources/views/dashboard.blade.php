@php use Carbon\Carbon; @endphp
@extends('layouts.authapp')
@section('title', "Login to your space")

@section('content')
    <section class="sofax-section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sofax-inner-blog-wrap wow fadeInUpX">
                        <div class="sofax-inner-blog-content">
                            <div class="sofax-inner-blog-meta dashboardImageSectionAppointments">
                                <center>
                                    <img src="{{asset("assets/images/tl3.jpg")}}" alt="">
                                </center>
                            </div>
                            <div class="sofax-inner-blog-text">
                                <center>
                                    <a href="single-blog.html">
                                        <h3>Appointments</h3>
                                    </a>
                                </center>
                            </div>
                            <hr>
                            <br><br>
                        </div>

                        <div class="appWraper">
                            @if($appointments->isEmpty())
                                <p>You have no appointments yet.</p>
                            @else
                                @foreach($appointments as $appointment)
                                    @php
                                    //mecabu@mailinator.com
                                        // Split time range
                                        $timeRange = explode('-', $appointment->appointment_time); // ["8:30am ", " 10:30am"]
                                        $startTime = trim($timeRange[0]);
                                        $endTime = trim($timeRange[1]);

                                        // Combine date with times
                                        $start = Carbon::parse($appointment->appointment_date . ' ' . $startTime);
                                        $end = Carbon::parse($appointment->appointment_date . ' ' . $endTime);

                                        // Format for Google Calendar
                                        $startGoogle = $start->format('Ymd\THis\Z');
                                        $endGoogle = $end->format('Ymd\THis\Z');

                                        // Build calendar link
                                        $title = urlencode("Appointment: " . $appointment->booking_type);
                                        $details = urlencode("Booking ID: #00{$appointment->id}\nPhone: {$appointment->phone_number}\nState: {$appointment->state}");
                                        $location = urlencode("{$appointment->address}, {$appointment->city}, {$appointment->state}, {$appointment->zip_code}");

                                        $googleLink = "https://www.google.com/calendar/render?action=TEMPLATE&text=$title&dates=$startGoogle/$endGoogle&details=$details&location=$location";
                                    @endphp


                                    <div class="collection-grid-item business consultancy">
                                        <div class="sofax-career-content-wrapper wow fadeInUpX" data-wow-delay="0.1s">
                                            <div class="sofax-career-content-autohre-wrap">
                                                <div class="sofax-career-content-data">
                                                    <h4>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('D, M d') }}
                                                         | {{$appointment->appointment_time}}
                                                    </h4>
                                                    <p><i>Appointment type</i>: {{ $appointment->booking_type }}</p>
                                                    <a class="d-app" href="{{ $googleLink }}" target="_blank" rel="noopener noreferrer">
                                                        <img src="https://www.gstatic.com/calendar/images/dynamiclogo_2020q4/calendar_24_2x.png" alt="Google Calendar" style="height: 18px; vertical-align: middle;">
                                                        <span style="margin-left: 5px;">Add to Google Calendar</span>
                                                    </a>
                                                </div>

                                                <div class="sofax-career-content-icon">
                                                    <span class="d-app">{{ $appointment->status }}</span>
                                                </div>
                                            </div>
                                            <div class="sofax-career-content-text">
                                                <strong><p>Appointment details</p></strong>
                                                <br>
                                                <strong><p>Pickup Address</p></strong>
                                                <p>
                                                    {{ $appointment->address }}, <br> {{ $appointment->city }}, <br> {{ $appointment->state }},
                                                    <br> {{ $appointment->zip_code }}
                                                </p>
                                                <strong><p>Booking ID</p></strong>
                                                <p>#00{{ $appointment->id }}</p>
                                            </div>
                                            <div class="sofax-career-content-icon-text-wrapper2">
                                                <div class="sofax-career-content-icon-text-wrap">
                                                    <div class="sofax-career-content-icon2">
                                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.05991 2.86033C6.34032 -0.420076 11.6589 -0.420077 14.9393 2.86033C18.2197 6.14073 18.2197 11.4593 14.9393 14.7397L8.99961 20.6794L3.05991 14.7397C-0.220492 11.4593 -0.220492 6.14073 3.05991 2.86033ZM8.99961 11.2C10.3251 11.2 11.3996 10.1255 11.3996 8.80002C11.3996 7.47454 10.3251 6.40002 8.99961 6.40002C7.67413 6.40002 6.59961 7.47454 6.59961 8.80002C6.59961 10.1255 7.67413 11.2 8.99961 11.2Z" fill="#111827" />
                                                        </svg>
                                                    </div>
                                                    <div class="sofax-career-content-text2">
                                                        <h6>State: {{ $appointment->state }}</h6>
                                                    </div>
                                                </div>
                                                <div class="sofax-career-content-icon-text-wrap">
                                                    <div class="sofax-career-content-icon2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                                        </svg>
                                                    </div>
                                                    <div class="sofax-career-content-text2">
                                                        <h6>{{ $appointment->phone_number ?? 'N/A' }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="sofax-inner-blog-sidebar-menu">
                        <div class="sofax-subscription-field-categories">
                            <img src="{{asset("assets/images/auth/download.svg")}}" alt="">
                            <h4>Support:</h4>
                            <strong>
                                Need assistance or have questions? Contact us:
                            </strong>
                            <br>
                            <br>
                            <p>
                                24/7 customer service 973-810-6234
                                VIPJUNKREMOVALNJ@GMAIL.COM
                            </p>
                        </div>

                        <div class="sofax-subscription-field-categories">
                            <img src="{{asset("assets/images/auth/download.svg")}}" alt="">
                            <h4>Got questions?</h4>
                            <ul>
                                <li><a href="{{route("pricing")}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                        </svg> How pricing works</a></li>
                                <li><a href="{{route("what-we-take")}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                        </svg> What we take</a></li>
                                <li><a href="{{route("business-solutions")}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                        </svg> Business solutions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
