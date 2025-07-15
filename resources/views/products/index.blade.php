@extends('layouts.app')

@section('title', 'Masar Arabia | Precision Instruments & Industrial Solutions')
@section('meta_description', 'Masar Arabia offers premium instrumentation, industrial solutions, and trading services across Saudi Arabia.')
@section('meta_keywords', 'instrumentation, Saudi Arabia, trading, Masar Arabia, industrial products')

@section('content')
  {{-- Paste your static HTML body content here (starting from the <section id="slider1"> to </footer>) --}}
  {{-- Example: --}}
  @include('partials.main_product.banner')
   @include('partials.main_product.products_list')
 {{-- @include('partials.home.banner')
  @include('partials.home.services')
  @include('partials.home.contact') --}}
@endsection




{{-- @section('content')
    <div class="container">
        <h1 class="text-center mb-4">Our Products</h1>
        @foreach ($mainProducts as $product)
            <img src="{{ asset('uploads/products/' . $product->slug . '/' . $product->banner_image) }}"
                alt="{{ $product->icon_alt }}">
            <img src="{{ asset('uploads/products/' . $product->slug . '/' . $product->icon_image) }}"
                alt="{{ $product->icon_alt }}">
            <h5 class="card-title">{{ $product->name }}</h5>
        @endforeach

        <div class="row">
            @foreach ($mainProducts as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($product->main_image)
                            <img src="{{ asset('uploads/products/' . $product->slug . '/' . $product->main_image) }}"
                                alt="{{ $product->icon_alt }}" class="card-img-top"
                                style="height: 200px; object-fit: contain;">
                        @else
                            <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="card-img-top"
                                style="height: 200px; object-fit: contain;">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p>{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
                            <a href="{{ route('products.subcategories', $product->slug) }}" class="btn btn-primary">
                                View Categories
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
            <form action="{{ route('products.search') }}" method="GET" class="d-flex mb-4" role="search">
                <input class="form-control me-2" type="search" name="query" placeholder="Search products..." required>
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
@endsection --}}
