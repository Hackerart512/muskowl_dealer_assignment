<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Title</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link
        rel="stylesheet"
        href="{{ asset('assets/front/style.css') }}" />

    @yield('styles')
 


</head>

<body>
    <header class="main-header">
        <div class="header-container">
            <!-- Logo -->
            <div class="logo">
                <img src="{{asset('assets/images/logo.png')}}" alt="Infra.market Concrete">
            </div>

            <!-- Navigation -->
            <nav class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Social Timeline</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Map</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Nearby Concrete Plants</a></li>
                </ul>
            </nav>

            <!-- Language -->
            <div class="language">
                <span class="lang-icon">🌐</span>
                <span class="lang-text">English</span>
                <span class="arrow">▼</span>
            </div>
        </div>
    </header>


    <main class="container-fuild">
        @yield('content')
    </main>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    @yield('scripts')
</body>

</html>