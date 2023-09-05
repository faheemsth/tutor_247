<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Bootstrap Css file -->
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">

  <!-- font awesome icons -->
  <link rel="stylesheet" href="{{ asset('assets/webicons/css/all.css') }}">


   <!-- Styles -->
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/findatutor.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/find-tutor.css') }}">

    
    <!-- Slick slider CSS  -->
  <link rel="stylesheet" href="{{ asset('vendor/slick/slick-style.css') }}">

  <!-- range slider -->
  <link rel="stylesheet" href="{{ asset('assets/css/rSlider.min.css') }}">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/intlInputPhone.min.css')}}"> --}}
</head>
<body>
    <div id="app">
        @include('layouts/buttons')
        @include('layouts/topbar')
        @include('layouts/navbar')

        <main>
            @yield('content')
        </main>

        @include('layouts/footer')
    </div>

    <!-- jquery file -->
<script src="{{ asset('vendor/jquery/jquery3.7.0.js') }}"></script>
<!-- Slick slider jquery  -->
<script src="{{ asset('vendor/slick/slick-slide.js') }}"></script>
<!-- Bootstrap js file -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<!-- main js file -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="{{ asset('assets/js/intlInputPhone.min.js') }}"></script>
<script src="{{ asset('assets/js/intlInputPhone.js') }}"></script>



</body>
</html>

