<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  {{-- Dynamic SEO --}}
  <title>@yield('title', 'Masar Arabia First Trading Company')</title>
  <meta name="description" content="@yield('meta_description', 'Default SEO description for Masar Arabia')">
  <meta name="keywords" content="@yield('meta_keywords', 'industrial, trading, saudi arabia, masar arabia')">

  {{-- Favicon --}}
  <link href="{{ asset('assets/images/favicon/favicon.png') }}" rel="icon">

  {{-- Fonts --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cTeko:400,500,600,700&display=swap">

  {{-- CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <div class="wrapper">
    
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Scroll Top Button --}}
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

    {{-- Search Overlay --}}
    <div class="module__search-container">
      <i class="fa fa-times close-search"></i>
      <div class="justify-content-center">
        <img src="{{ asset('assets/images/logo/logo-dark.png') }}" class="img-fluid">
      </div>
      <form action="{{ route('products.search') }}" method="GET"  role="search" class="module__search-form">
        <input class="form-control search__input me-2 pr-3" type="search" name="query" placeholder="Search products..." required>
                <button class="module__search-btn" type="submit"><i class="fa fa-search"></i></button>
        {{-- <input type="text" class="search__input" placeholder="Type Words Then Enter">
        <button class="module__search-btn"><i class="fa fa-search"></i></button> --}}
      </form>
    </div>
  </div>

  {{-- JS --}}
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>