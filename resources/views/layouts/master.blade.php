<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
	
<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<!-- Primary Meta Tags -->
		<title>@yield('title', 'NKAC CONSULTING WA - Conseil en Entreprise')</title>
        <meta name="title" content="@yield('title', 'NKAC CONSULTING WA - Conseil en Entreprise')">
        <meta name="description" content="@yield('meta_description', '')">
        <meta name="keywords" content="@yield('meta_keywords', '')">
        <meta name="author" content="Quickdev">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="@yield('title', 'NKAC CONSULTING WA - Conseil en Entreprise')">
        <meta property="og:description" content="@yield('meta_description', '')">
        <meta property="og:image" content="@yield('meta_image', asset('assets/img/master/nkac-social.jpg'))">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="@yield('title', 'NKAC CONSULTING WA - Conseil en Entreprise')">
        <meta property="twitter:description" content="@yield('meta_description', '')">
        <meta property="twitter:image" content="@yield('meta_image', asset('assets/img/master/nkac-social.jpg'))">

		<!-- ==============================================
		FAVICON
		=============================================== -->  
        <link rel="shortcut icon" href="{{asset('assets/img/master/favicon.png')}}">
             
		<!-- ==============================================
		CSS
		=============================================== -->  
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/modern-carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- Font Awesome 5 local -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        
        <!-- AOS Library for scroll animations -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        <script src="{{asset('assets/js/modernizr-custom.js')}}"></script>
        
	</head>
    
<body>
    
    <!-- LOADER -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
    <!-- LOADER -->

    @include('partials._header')
    
    @yield('content')
    
    @include('partials._footer')
    
    <!-- AOS JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('assets/js/modern-carousel.js')}}"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out-cubic',
            once: true,
            offset: 50
        });
    </script>

    @yield('scripts')
    
    </body>
    

</html>