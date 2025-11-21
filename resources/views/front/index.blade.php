@extends('layouts.front')
 
<style>
/* Background City Image */
.hero-section {
    background: url("city-bg.png") no-repeat center bottom / cover;
    padding: 50px 0;
}

.hero-wrapper{
    max-width: 1706px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
}

/* LEFT IMAGE */
.hero-image {
    width: 50%;
    height: 600px;
    background-image: url("assets/images/hero.png"); /* your left-side showroom image */
    background-size: cover;
    background-position: center;
    border-radius: 5px;
}

/* FORM CONTAINER */
.hero-form {
    width: 45%;
    background: #fff;
    padding: 35px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border: 1px solid #ddd;
    border-radius: 6px;
}

.hero-form h2 {
    font-size: 26px;
    text-align: center;
    margin: 0;
}

.hero-form p {
    text-align: center;
    font-size: 14px;
    color: #666;
}

.hero-form hr {
    margin: 20px 0;
    border: none;
    border-top: 1px solid #eaeaea;
}

/* Inputs */
form input,
form textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    outline: none;
}

.form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.form-row textarea {
    height: 100px;
    resize: none;
}

.submit-btn {
    width: 100%;
    padding: 12px;
    background: #ff4d00;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
}

.submit-btn:hover {
    opacity: 0.9;
}

.bg-patterns{
    background-image: url(assets/images/patterns.png);
    border-radius: 5px;
    background-repeat: repeat;
}

/* slider section  */
.product-portfolio {
    padding: 50px 0;
    text-align: center;
}

.portfolio-title {
    font-size: 34px;
    font-weight: 700; 
}

.product-slider .item {
    position: relative;  
}

.product-slider img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    aspect-ratio: 1/1
}

.product-title {
        background: #f3f3f3;
    padding: 12px 0;
    font-size: 18px;
    font-weight: 600;
    color: #ff4d00;
    position: absolute;
    bottom: -25px;
    left: 50%;
    right: 0px;
    width: 78%;
    transform: translateX(-50%);
}

.wrapper{
    max-width: 1600px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
}
.owl-carousel .owl-stage-outer{
    overflow: unset !important
}
</style>
@section('content')
<section class="hero-section">
    <div class="hero-wrapper">
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
                    <textarea name="requirement" placeholder="Please write your requirement here"></textarea>
                </div>

                <div class="form-row">
                    <input type="text" name="phone" placeholder="Phone Number*" required>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>


        </div>
    </div>
</section>

<section class="product-portfolio bg-patterns">
    <h2 class="portfolio-title">Product Portfolio</h2>

    <div class="wrapper">
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
$(document).ready(function(){
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
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 4 }
        }
    });
});
</script>


<script>
$(document).ready(function () {

    $("#contactForm").on("submit", function (e) {
        e.preventDefault();

        let formData = $(this).serialize() + "&_token={{ csrf_token() }}";

        $.ajax({
            url: "{{ route('contact.submit') }}",
            type: "POST",
            data: formData,
            success: function (response) {

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
                    $("#successAlert").slideUp(300, function () {
                        $(this).remove();
                    });
                }, 3000);

                $("#contactForm")[0].reset();
            },
            error: function () {
                alert("❌ Something went wrong! Please try again.");
            }
        });
    });

});
</script>


@endsection