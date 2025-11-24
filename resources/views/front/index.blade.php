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
                            <input type="text" name="phone" placeholder="Phone Number*" required maxlength="10" pattern="\d{10}" title="Enter 10 digit phone number">

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


<section class="py-md-4  py-3 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-md-5">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{asset('assets/images/nashik.png')}}">
                    <h2 class="m-0 fw-bold text-danger">Nashik</h2>
                </div>

                <h5 class="fw-bold">Address</h5>
                <p class="mb-3">
                    Plot no 21/22, Survey No. 272/5 Kailash Nagar,<br>
                    Aurangabad Road Nashik, Maharashtra – 422003
                </p>

                <h5 class="fw-bold">Phone</h5>
                <p class="m-0">
                    <a href="tel:+919606350000" class="text-decoration-none text-primary fw-semibold">
                        +91-9606350000
                    </a>
                </p>
            </div>

            <!-- Map Section -->
            <div class="col-md-7 mt-4 mt-md-0">
                <div class="map-container rounded shadow-sm overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.7668321326743!2d73.78711387572527!3d19.973853981428457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeba84c4f33bb%3A0x28dc9b09bfa3c6b4!2sInfra.Market%20Tiles%20%26%20Sanitaryware%20Store%20-%20Nashik!5e0!3m2!1sen!2sin!4v1700000000000"
                        width="100%"
                        height="350"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="product-portfolio bg-patterns py-md-4  py-3">
    <h2 class="border-heading">Product Portfolio</h2>

    <div class="container">
        <div class="product-slider owl-carousel owl-theme py-md-4  py-3 overflow-hidden">

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

<section class="py-md-4  py-3 our-store">
    <div class="container text-center">

        <!-- Section Title -->
        <h3 class="fw-bold mb-5 text-orange">Technology Drives Our Stores</h3>

        <div class="row justify-content-center g-4">

            <!-- Card 1 -->
            <div class="col-md-5">
                <div style="    box-shadow: 0 5px 9px #e1e1e1 !important;" class="p-4  rounded bg-white h-100">
                    <i class="fa-solid fa-vr-cardboard fa-3x text-orange mb-1"></i>
                    <h5 class="fw-bold text-orange">In-Store VR Tech</h5>
                    <p class="mb-0">
                        Re-Imagine Your Home Interiors At Our Experience Stores Using Our Virtual And
                        Augmented Reality Technology.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-5">
                <div style="    box-shadow: 0 5px 9px #e1e1e1 !important;" class="p-4   rounded bg-white h-100">
                    <i class="fa-solid fa-user-tie fa-3x text-orange mb-1"></i>
                    <h5 class="fw-bold text-orange">Influencer Platform</h5>
                    <p class="mb-0">
                        Enables Influencer Partners (Architects, Plumbers, Contractors Etc.)
                        To Procure Materials And Service Their Customers Effectively.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-md-4  py-3 text-center about-infra-market">
    <div class="container">

        <!-- Title -->
        <h2 class="fw-bold mb-3">About Infra.Market</h2>

        <!-- Description -->
        <p class="mx-auto" style="max-width: 850px; line-height: 1.7;">
            India’s construction leader, Infra.Market, boasts a nationwide network of 200+ concrete plants,
            30+ manufacturing units, 10,000+ retail touchpoints, and 50+ warehouses, ensuring the delivery of
            top-quality ready-mix concrete (RMC) from its Udupi plant. By leveraging technology across the
            industry, Infra.Market offers over 15+ product categories, guaranteeing the highest quality
            construction materials. <br><br>
            The address of this concrete plant is Plot No. 4A, Part-1, Shivally, Industrial Area, Udupi,
            Manipal, Karnataka 576101
        </p>

        <!-- CTA Button -->
        <a href="#contact" class="btn btn-lg fw-bold contact-btn px-5 py-3 mt-4">
            CONTACT US FOR MORE INFORMATION
        </a>

    </div>
</section>
<section class="py-md-4  py-3 text-center">
    <div class="container">

        <h3 class="fw-bold mb-2">Partners & Brands</h3>
        <p class="text-muted mb-4">
            Along with our range of private-labels, we also have a wide assortment of leading brands
        </p>

        <div class="d-flex justify-content-center align-items-center gap-4 brand-slider flex-wrap">


            <!-- Brand Cards -->
            <div class="brand-card shadow-sm p-3">
                <img src="{{asset('assets/images/partner1.png')}}" width="120">
            </div>

            <div class="brand-card shadow-sm p-3">
                <img src="{{asset('assets/images/partner2.png')}}" width="120">
            </div>

            <div class="brand-card shadow-sm p-3">
                <img src="{{asset('assets/images/partner3.png')}}" width="120">
            </div>


        </div>
    </div>
</section>

<section class="py-md-4  py-3 text-center">
    <div class="container">

        <h3 class="border-heading ">View Our Premium Branded Retail Outlets</h3>
        <p class="text-muted mb-4">
            Your one-stop construction solutions partner to assist you in building the house of your dreams!
        </p>

        <!-- YouTube Video Embed -->
        <div class="ratio ratio-16x9 shadow-sm rounded w-75 m-auto">
            <iframe
                src="https://www.youtube.com/embed/abc123"
                title="YouTube video"
                allowfullscreen>
            </iframe>
        </div>

    </div>
</section>

<section class="py-md-4  py-3 bg-white overflow-hidden testimonial-section">
    <div class="container text-center overflow-hidden">

        <h3 class="border-heading mb-4">Testimonials</h3>

        <div class="owl-carousel justify-content-center">

            <!-- Testimonial 1 -->
            <div class=" ">
                <div class="">
                    <img width="80" height="80" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fHww" class="rounded-circle object-fit-cover">
                    <h6 class="fw-bold m-0 theme-color">Mahindra</h6>
                    <p class="testimonial-tooltip">
                        Infra.Market has been very useful for our organisation. We don't back from one distributor to the other for our raw materials... Infra.Market has been very useful for our organisation. We don't back from one distributor to the other for our raw materials..
                    </p>
                </div>
            </div>

            <!-- Testimonial 1 -->
            <div class=" ">
                <div class="">
                    <img width="80" height="80" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fHww" class="rounded-circle object-fit-cover">
                    <h6 class="fw-bold m-0 theme-color">Mahindra</h6>
                    <p class="testimonial-tooltip">
                        Infra.Market has been very useful for our organisation. We don't back from one distributor to the other for our raw materials... Infra.Market has been very useful for our organisation. We don't back from one distributor to the other for our raw materials..
                    </p>
                </div>
            </div>


            <!-- Testimonial 1 -->
            <div class=" ">
                <div class="">
                    <img width="80" height="80" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fHww" class="rounded-circle object-fit-cover">
                    <h6 class="fw-bold m-0 theme-color">Mahindra</h6>
                    <p class="testimonial-tooltip">
                        Infra.Market has been very useful for our organisation. We don't back from one distributor to the other for our raw materials... Infra.Market has been very useful for our organisation. We don't back from one distributor to the other for our raw materials..
                    </p>
                </div>
            </div>



        </div>
    </div>
</section>


<section class="py-md-4  py-3 bg-white">
    <div class="container text-center">
        <h3 class="border-heading">Store Location</h3>
        <div class="row g-4 justify-content-center">
            <!-- Testimonial 1 -->
            <div class="col-md-12">
                <div class="">
                    <div class="">
                        <img src="{{asset('assets/images/location image.png')}}" class="w-100 h-100">
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 text-center overflow-hidden">
    <div class="container overflow-hidden">

        <!-- Nearby Locality Title -->
        <h3 class="fw-bold mb-4">Nearby Locality</h3>

        <!-- Tags -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
            <span class="locality-tag">Shiv Cargo Packers And Movers</span>
            <span class="locality-tag">SPOT ON Hotel Samruddhi Residency</span>
            <span class="locality-tag">Udupi Viewpoint</span>
            <span class="locality-tag">Udupi Group of Institutions, Manipal</span>
            <span class="locality-tag">Industrial Area</span>
            <span class="locality-tag">HELLA INFRA. MARKET</span>
            <span class="locality-tag">Kalyani Concrete</span>
        </div>

        <!-- Contact Button -->
        <a href="#contact" class="btn contact-btn px-5 py-3 mb-5 fw-bold">
            CONTACT US FOR MORE INFORMATION
        </a>

        <!-- Blogs Section -->
        <h3 class="fw-bold  mb-4">Blogs</h3>

        <div class="owl-carousel blog-slider">

            <!-- Blog 1 -->
            <div class="blog-card p-3 shadow-sm bg-white rounded">
                <img src="https://plus.unsplash.com/premium_photo-1663061414669-bb34bcd3ff2f?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 mb-3 rounded">
                <h6 class="fw-bold theme-color">4 Tips to Choose the Right Ceiling Fan</h6>
                <p class="text-muted">In today’s contemporary times, gone are the days when home décor was limited to fancy.</p>
                <a href="#" class="fw-bold theme-color text-decoration-none">READ MORE</a>
            </div>

            <!-- Blog 2 -->
            <div class="blog-card p-3 shadow-sm bg-white rounded">
                <img src="https://plus.unsplash.com/premium_photo-1661962709849-2230a6cd5860?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8VGVjaG5vbG9neSUyMGluJTIwRmFuc3xlbnwwfHwwfHx8MA%3D%3D" class="w-100 mb-3 rounded">
                <h6 class="fw-bold theme-color">Demystifying BLDC Technology in Fans</h6>
                <p class="text-muted">BLDC stands for Brushless Direct Current and as the name implies, it operates on...</p>
                <a href="#" class="fw-bold theme-color text-decoration-none">READ MORE</a>
            </div>

            <!-- Blog 3 -->
            <div class="blog-card p-3 shadow-sm bg-white rounded">
                <img src="https://images.unsplash.com/photo-1505695715220-3a366d958259?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fEZpdmUlMjBSZWFzb25zJTIwdG8lMjBDaG9vc2UlMjBMZWFrfGVufDB8fDB8fHww" class="w-100 mb-3 rounded">
                <h6 class="fw-bold theme-color">Five Reasons to Choose Leak Resist Concrete</h6>
                <p class="text-muted">Waterproofing concrete is essential to prevent water intrusion and structural damage...</p>
                <a href="#" class="fw-bold theme-color text-decoration-none">READ MORE</a>
            </div>

        </div>


        <!-- View All Blogs Button -->
        <a href="#" class="btn view-blogs-btn mt-4 px-4 py-2 rounded-0">View All Blogs</a>

    </div>
</section>









<div class="container mt-5 mb-2">
    <div class="row g-4">
        <!-- Discover More With Us -->
        <div class="col-md-6">
            <h5 class="fw-bold mb-3">Discover More With Us</h5>
            <img
                src="{{asset('assets/images/qr.png')}}"
                alt="QR Code"
                class="img-fluid mb-2"
                style="max-width: 200px;" />
            <p>Tell us about your experience. Scan this QR code to discover more with us.</p>
            <button class="btn btn-orange mb-3 rounded-0">Download QR</button>
            <p class="icon-text mb-0">
                <span class="me-2"><i class="fas fa-qrcode"></i></span> Click on QR code to enlarge
            </p>
        </div>

        <!-- Tags Section -->
        <div class="col-md-6">
            <h5 class="fw-bold mb-3">Tags</h5>
            <div style="border-bottom: 2px solid #dbdbdb;display:flex;align-items:center;gap:10px;flex-wrap:wrap" class="pb-4">
                <button class="tag-btn">RMC Plant In Udupi</button>
                <button class="tag-btn">RMC Concrete Near Me</button>
                <button class="tag-btn">RMC Manufacturers In Udupi</button>
                <button class="tag-btn">RMC Plants Near Me</button>
                <button class="tag-btn">Concrete Mixing Companies Near Me</button>
                <button class="tag-btn">Ready Mix Concrete Companies Near Me</button>
                <button class="tag-btn">Rmc Suppliers Near Me</button>
                <button class="tag-btn">RMC Plants</button>
                <button class="tag-btn">Ready Mix Concrete Suppliers Near Me</button>
                <button class="tag-btn">Ready Mix Concrete</button>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
</div>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="footer-logo">
                    <span class="text-danger fw-bold">INFRA.</span>MARKET
                </div>
                <ul class="list-unstyled">
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">RMC Location</a></li>
                    <li><a href="#">AAC Location</a></li>
                    <li><a href="#">Stories</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <div class="footer-title">Products</div>
                <ul class="list-unstyled">
                    <li><a href="#">Recycled Metal</a></li>
                    <li><a href="#">Ready Mix Concrete</a></li>
                    <li><a href="#">Steel</a></li>
                    <li><a href="#">Plywood</a></li>
                    <li><a href="#">MDF</a></li>
                    <li><a href="#">AAC Blocks</a></li>
                    <li><a href="#">Aggregates & Sand, Gravels</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <div class="footer-title">Contact Us</div>
                <address>
                    <i class="fas fa-location-dot"></i> INFRA MARKET HOUSE,<br />
                    Road No - 162, Opposite Ashar IT Park,<br />
                    Wagle Estate, Thane (W),<br />
                    Maharashtra - 400604
                </address>
                <p>
                    <a href="tel:+919606350000" class="d-block mb-1"><i class="fas fa-phone"></i> +91-9606350000</a>
                    <a href="mailto:support@infra.market"><i class="fas fa-envelope"></i> support@infra.market</a>
                </p>
            </div>

            <div class="col-md-2 mb-4">
                <div class="footer-title">Get In Touch</div>
                <ul class="social-nav d-flex align-items-center m-0 p-0">
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                    <li><i class="fab fa-x-twitter"></i></li>

                </ul>
            </div>
        </div>
    </div>
</footer>





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

    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
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