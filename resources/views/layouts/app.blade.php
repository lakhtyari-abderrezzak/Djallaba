<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/logo/hanger-2-svgrepo-com.svg')}}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{ asset('css/icofont.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css')}}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('css/datepicker.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <x-layouts.header />
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    {{-- footer --}}
    <x-layouts.footer />
</body>

</html>
