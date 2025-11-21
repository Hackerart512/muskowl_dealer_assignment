@extends('layouts.front')


@section('content')

<section class="hero-section">
    <div class="container-fuild">

        <div class="">
            <div class="hero-wrapper mx-4">
                <!-- Left Side Image -->
                <div class="hero-image"></div>

                <!-- Right Side Form -->
                <div class="hero-form">
                    <h2>Get In Touch</h2>
                    <p>Write to us with your Query and we shall get back</p>

                    <div id="formMessage"></div>

                    <form id="contactForm">
                        <div class="form-row">
                            <input type="text" name="name" placeholder="Name*" required>
                            <input type="text" name="location" placeholder="Onsite Location*" required>
                        </div>

                        <div class="form-row">
                            <input type="email" name="email" placeholder="Email Id*" required>
                            <input type="text" name="phone" placeholder="Phone Number*" required>
                        </div>
                        
                        <div class="form-row">
                            <textarea name="requirement" placeholder="Please write your requirement here"></textarea>
                        </div>

                        <button type="submit" class="submit-btn">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>

 

<section class="product-portfolio bg-patterns">
    <h2 class="portfolio-title">Product Portfolio</h2>

    <div class="container">
        <div class="product-slider owl-carousel owl-theme py-5 overflow-hidden">

            <div class="item">
                <img src="https://media.istockphoto.com/id/2208218412/photo/man-choosing-tile-among-different-samples-in-store-closeup.webp?a=1&b=1&s=612x612&w=0&k=20&c=WO6I8zGbjZK-zM4TBg3i036-Vw5772L0N-ZZJSBIE7s=" alt="Tiles">
                <div class="product-title">Tiles</div>
            </div>

            <div class="item">
                <img src="https://plus.unsplash.com/premium_photo-1682343508475-0eef05734cf5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGxpZ2huaXQlMjBsYW1wfGVufDB8fDB8fHww" alt="Electricals and Lighting">
                <div class="product-title">Electricals and Lighting</div>
            </div>

            <div class="item">
                <img src="https://images.unsplash.com/photo-1734242693686-163802c60900?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8U2FuaXRhcnl3YXJlJTIwJTI2JTIwQmF0aCUyMEZpdHRpbmdzfGVufDB8fDB8fHww" alt="Sanitaryware & Bath Fittings">
                <div class="product-title">Sanitaryware & Bath Fittings</div>
            </div>

            <div class="item">
                <img src="https://images.unsplash.com/photo-1679244333535-cb805b7b8fb7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Q2VtZW50aXRpb3VzJTIwcHJvZHVjdHN8ZW58MHx8MHx8fDA%3D" alt="Cementitious products">
                <div class="product-title">Cementitious products</div>
            </div>

        </div>

    </div>

</section>


<!-- 1. jQuery (must be first) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- 2. Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- 3. Your Slider Init Script -->
<script>
    $(document).ready(function() {
        $('.product-slider').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            navText: [
                '<span class="owl-prev-btn">‹</span>',
                '<span class="owl-next-btn">›</span>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
</script>


<script>
    $(document).ready(function() {

        $("#contactForm").on("submit", function(e) {
            e.preventDefault();

            let formData = $(this).serialize() + "&_token={{ csrf_token() }}";

            $.ajax({
                url: "{{ route('contact.submit') }}",
                type: "POST",
                data: formData,
                success: function(response) {

                    // Beautiful alert box
                    let alertBox = `
                    <div class="mb-2" id="successAlert" 
                         style="
                            background:#d4edda;
                            color:#155724;
                            padding:12px 18px;
                            margin-top:10px;
                            border-left:5px solid #28a745;
                            border-radius:6px;
                            font-size:15px;
                            font-weight:500;
                            display:none;
                        ">
                        ✔ ${response.message}
                    </div>
                `;

                    $("#formMessage").html(alertBox);

                    // Show animation
                    $("#successAlert").slideDown(300);

                    // Remove message after 3 seconds
                    setTimeout(() => {
                        $("#successAlert").slideUp(300, function() {
                            $(this).remove();
                        });
                    }, 3000);

                    $("#contactForm")[0].reset();
                },
                error: function() {
                    alert("❌ Something went wrong! Please try again.");
                }
            });
        });

    });
</script>


@endsection