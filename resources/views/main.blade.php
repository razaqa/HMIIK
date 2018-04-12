<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="ltr">
    <head>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="description" content="Description of the page">

        <!-- Apple Devices -->
        <!-- <link rel="apple-touch-icon" href="/custom-icon.png"> -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Online Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="{{ asset('css/vendor/normalize.css') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-v4.0.min.css') }}">
        <!-- Foundation ZURB -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/foundation.min.css') }}"> -->
        <!-- Lightbox -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/lightbox.min.css') }}"> -->
        <!-- Basic Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Navbar Style -->
        <link rel="stylesheet" href="{{ asset('css/_header.css') }}">
        <!-- Footer Style -->
        <link rel="stylesheet" href="{{ asset('css/_footer.css') }}">
        <!-- Default Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @yield('extra-css')
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Google Open Sans -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <title>@yield('title')</title>
    </head>
    <body>
        @include('layouts._header')
        <div class="">
        @yield('content')
        </div>

        <!-- JQuery -->
        <script type="application/javascript" src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <!-- Bootstrap -->
        <script type="application/javascript" src="{{ asset('js/vendor/bootstrap-v4.0.min.js') }}"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

        <!-- PopperJS -->
        <!-- <script type="application/javascript" src="https://unpkg.com/popper.js"></script> -->

        <!-- TooltipJS -->
        <!-- <script type="application/javascript" src="https://unpkg.com/tooltip.js"></script> -->

        <!-- Foundation ZURB -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/what-input.js') }}"></script> -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/foundation.min.js') }}"></script> -->

        <!-- Customization -->
        <script type="application/javascript" src="{{ asset('js/_header.js') }}"></script>
        <script type="application/javascript" src="{{ asset('js/_footer.js') }}"></script>

        @yield('extra-js')

        @include('layouts._footer')
    </body>
</html>
