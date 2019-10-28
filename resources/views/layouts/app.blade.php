<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@stack('meta-title', 'blog') - {{ config('app.name', 'Laravel') }} </title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  	<link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  	<link href="{{ asset ('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  	<link href="{{ asset ('assets/css/clean-blog.min.css') }}" rel="stylesheet">  
  	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	@yield('styles')

  </head>
  <body>
    @include('layouts.shared.navbar')
    @include('layouts.shared.header')

  	@yield('content')

  	@yield('post')

    <hr>
    
    @include('layouts.shared.footer')

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/clean-blog.min.js') }}"></script>

    @yield('javascript')

  </body>
</html>
