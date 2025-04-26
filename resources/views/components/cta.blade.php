@php
    $cta = \App\Models\HomeContent::where('section', 'cta')->first();
@endphp

<section>
    <div class="d-flex justify-content-center align-items-center" style="margin: 10px;">
        <div>
            <div class="sofax-footer-menu ctaWrapper mb-3">
                <center>
                    <img src="{{ $cta && $cta->image ? asset('storage/' . $cta->image) : asset('assets/images/homepage/removal.png') }}" alt="" style="width: 300px; margin:10px;">
                </center>
                <h5>{{ $cta->title ?? 'We make junk disappear' }}</h5>
                <div class="sofax-subscription-field5">
                    <form action="{{ route('zipcode.check') }}" class="check-zip-codes-form2" method="POST">
                        <input type="text" placeholder="Enter ZIP code" id="postalCodeInput2">
                        <button class="sofax-subcribe-btn2" style="color:white;">CHECK AVAILABILITY</button>
                    </form>
                </div>
                <p>{!! $cta->content ?? '24/7 Customer Service 973-810-6234' !!}</p>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $('.check-zip-codes-form2').on("submit", function (event) {
            event.preventDefault();
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