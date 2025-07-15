@extends('layouts.app')
@section('title', $mainProduct->seo_title ?: 'Masar Arabia | Precision Instruments & Industrial Solutions')

@section('meta_description', $mainProduct->seo_description ?: 'Masar Arabia offers premium instrumentation, industrial solutions, and trading services across Saudi Arabia.')

@section('meta_keywords', $mainProduct->seo_keywords ?: 'instrumentation, Saudi Arabia, trading, Masar Arabia, industrial products')

@section('content')
  {{-- Paste your static HTML body content here (starting from the <section id="slider1"> to </footer>) --}}
  {{-- Example: --}}
  @include('partials.subcategories.banner')
   @include('partials.subcategories.subcategory_list')
 {{-- @include('partials.home.banner')
  @include('partials.home.services')
  @include('partials.home.contact') --}}
@endsection
{{-- @section('title', $mainProduct->name . ' - Subcategories')

@section('content')

         
      
    <div class="container py-4">
        <h2 class="mb-4">{{ $mainProduct->name }} – Subcategories</h2>
        <img src="{{ asset('uploads/products/' .  $mainProduct->slug . '/' .$mainProduct->banner_image) }}"
                                alt="{{  $mainProduct->icon_alt }}">

        
        @if ($mainProduct->main_image && file_exists(public_path('uploads/products/' . $mainProduct->main_image)))
            <img src="{{ asset('uploads/products/' . $mainProduct->main_image) }}" alt="{{ $mainProduct->name }}"
                class="img-fluid mb-4 rounded">
        @endif

        @if (!empty($subCategories) && count($subCategories))
            <div class="row">
                @foreach ($subCategories as $subCategory)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-img">
                                @if ($subCategory->image)
                                    <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/'.$subCategory->slug.'/'  . $subCategory->image) }}"
                                        alt="{{ $subCategory->name }}" class="card-img-top"
                                        style="height:150px; object-fit:cover;">
                                @endif
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $subCategory->name }}</h5>
                                <p class="card-title">{{ $subCategory->description }}</p>
                                <a href="{{ route('products.subsubcategories', [$mainProduct->slug, $subCategory->slug]) }}"
                                    class="btn btn-primary btn-sm mt-2">View Products</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">
                No subcategories found for this product.
            </div>
        @endif
    </div>
@endsection --}}
