@extends('layouts.app')
@section('title', "Contact us")

@section('content')
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Contact us</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html">What we take</a></li>
                    /
                    <li aria-current="page"> Contact us</li>
                </ul>
            </nav>

        </div>
    </div>

    <section class="section sofax-section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contactus-authore-wrapper">
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-icon2">
                                <img src="assets/images/contact/icon1.png" alt="">
                            </div>
                            <div class="sofax-iconbox-data2">
                                <h4>Chat with us</h4>
                                <p>We're waiting to help you every Monday-Friday from 9 am to 5 pm EST easily.</p>
                            </div>
                        </div>
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-icon2">
                                <img src="assets/images/contact/icon2.png" alt="">
                            </div>
                            <div class="sofax-iconbox-data2">
                                <h4>Give us a call</h4>
                                <p>QGive us a ring at (+088-234-567-90). Every monday-friday from 9 am to 5 pm.</p>
                            </div>
                        </div>
                        <div class="sofax-iconbox-wrap2">
                            <div class="sofax-iconbox-icon2">
                                <img src="assets/images/contact/icon3.png" alt="">
                            </div>
                            <div class="sofax-iconbox-data2">
                                <h4>Email Us</h4>
                                <p>Drop us an email at example@gmail.com and you'll receive a reply within 24 hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sofax-field-box ml-50">
                        @if(session('success'))
                            <div class="alert alert-success" style="margin-top: 20px;">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- Optionally, show validation errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger" style="margin-top: 20px;">
                                <ul style="margin-bottom: 0;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h3>Send us a message</h3>
                        <form action="{{ route('contact.send') }}" method="POST" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sofax-main-field">
                                        <label>Topic</label>
                                        <select class="form-select required" name="topic" required>
                                            <option value="">Please select a topic</option>
                                            <option value="Customer Service - Home">Customer Service - Home</option>
                                            <option value="Customer Service - National Accounts">Customer Service - National Accounts</option>
                                            <option value="Customer Service - Business">Customer Service - Business</option>
                                            <option value="Franchise Opportunities">Franchise Opportunities</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Public Relations">Public Relations</option>
                                            <option value="Strategic Alliances">Strategic Alliances</option>
                                            <option value="Technical Issues">Technical Issues</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sofax-main-field">
                                        <label>Your Name</label>
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sofax-main-field">
                                        <label>Your Email</label>
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sofax-main-field">
                                        <label>Zip Code</label>
                                        <input type="text" name="zip_code" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sofax-main-field">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="sofax-main-field">
                                        <label>Your Message</label>
                                        <textarea name="message" placeholder="Write Your Comment" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tac">
                                        <button id="sofax-submit-btn" class="mt-30" type="submit">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end faq section -->
    <div class="responsive-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            const form = event.target;

            let allFilled = true;
            form.querySelectorAll("input, select, textarea").forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add("error"); // optional: style red
                    allFilled = false;
                }
            });

            if (!allFilled) {
                event.preventDefault();
                alert("Please fill in all fields.");
            }
        });
    </script>
@endsection
