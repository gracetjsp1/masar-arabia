@extends('layouts.app')
@section('title', $subCategory->seo_title ?: 'Masar Arabia | Precision Instruments & Industrial Solutions')

@section('meta_description', $subCategory->seo_description ?: 'Masar Arabia offers premium instrumentation, industrial solutions, and trading services across Saudi Arabia.')

@section('meta_keywords', $subCategory->seo_keywords ?: 'instrumentation, Saudi Arabia, trading, Masar Arabia, industrial products')
@section('content')
  {{-- Paste your static HTML body content here (starting from the <section id="slider1"> to </footer>) --}}
  {{-- Example: --}}
  @include('partials.subsubcategories.banner')
   @include('partials.subsubcategories.subsubcategory_list')

@endsection

{{-- @section('title', $subCategory->name . ' - Products')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">
        {{ $mainProduct->name }} > {{ $subCategory->name }} – Products
    </h2>

    <div class="row">
        @forelse ($subSubCategories as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if ($product->image)
                        <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/'.$subCategory->slug.'/'  . $product->image) }}"
                             alt="{{ $product->name }}"
                             class="card-img-top"
                             style="height: 200px; object-fit: contain;">
                    @else
                        <img src="{{ asset('images/no-image.png') }}"
                             alt="No Image"
                             class="card-img-top"
                             style="height: 200px; object-fit: contain;">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        @if ($product->sku)
                            <p class="card-text">SKU: {{ $product->sku }}</p>
                        @endif
                        <a href="{{ route('products.detail', [$mainProduct->slug, $subCategory->slug, $product->slug]) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No sub-subcategory products found.</p>
        @endforelse
    </div>
</div>
@endsection --}}
