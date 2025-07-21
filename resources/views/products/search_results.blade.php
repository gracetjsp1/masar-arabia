@extends('layouts.app')
@section('title', 'Masar Arabia | Precision Instruments & Industrial Solutions')
@section('meta_description', 'Masar Arabia offers premium instrumentation, industrial solutions, and trading services across Saudi Arabia.')
@section('meta_keywords', 'instrumentation, Saudi Arabia, trading, Masar Arabia, industrial products')
@section('content')
  {{-- Paste your static HTML body content here (starting from the <section id="slider1"> to </footer>) --}}
  {{-- Example: --}}
  @include('partials.search.banner')
  @include('partials.search.search_result')
  {{-- @include('partials.home.features')
  @include('partials.home.banner')
  @include('partials.home.services')
  @include('partials.home.contact') --}}
@endsection
{{-- @if ($subSubCategories->count())
    <h4>Products</h4>
    <div class="row">
        @foreach ($subSubCategories as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    @php
                        $imgPath =
                            'uploads/products/' .
                            $product->subCategory->mainProduct->slug .
                            '/' .
                            $product->subCategory->slug .
                            '/' .
                            $product->image;
                    @endphp

                    @if (file_exists(public_path($imgPath)))
                        <img src="{{ asset($imgPath) }}" class="card-img-top" style="height: 200px; object-fit: contain;"
                            alt="{{ $product->name }}">
                    @else
                        <img src="{{ asset('images/no-image.png') }}" class="card-img-top"
                            style="height: 200px; object-fit: contain;" alt="No Image">
                    @endif

                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        @if ($product->sku)
                            <p class="card-text">SKU: {{ $product->sku }}</p>
                        @endif
                        <a href="{{ route('products.detail', [
                            $product->subCategory->mainProduct->slug,
                            $product->subCategory->slug,
                            $product->slug,
                        ]) }}"
                            class="btn btn-sm btn-outline-primary">View Product</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="alert alert-warning">
        No products found for "<strong>{{ $query }}</strong>".
    </div>
@endif --}}
