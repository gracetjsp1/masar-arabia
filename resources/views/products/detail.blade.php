@extends('layouts.app')
@section('title', $subSubCategory->seo_title ?: 'Masar Arabia | Precision Instruments & Industrial Solutions')

@section('meta_description', $subSubCategory->seo_description ?: 'Masar Arabia offers premium instrumentation, industrial solutions, and trading services across Saudi Arabia.')

@section('meta_keywords', $subSubCategory->seo_keywords ?: 'instrumentation, Saudi Arabia, trading, Masar Arabia, industrial products')

@section('content')
  {{-- Paste your static HTML body content here (starting from the <section id="slider1"> to </footer>) --}}
  {{-- Example: --}}
  @include('partials.detail_page.banner')
  @include('partials.detail_page.product_details')
  @include('partials.detail_page.product_tab')

@endsection

@section('content')
<div class="container py-5">
    <h2>{{ $subSubCategory->name }}</h2>
    <p><strong>Main Category:</strong> {{ $mainProduct->name }}</p>
    <p><strong>Subcategory:</strong> {{ $subCategory->name }}</p>
    <p><strong>Description:</strong> {{ $subSubCategory->description }}</p>
    <p><strong>Highlight:</strong> {{ $subSubCategory->highlight }}</p>
    <p><strong>Specification:</strong> {{ $subSubCategory->specification }}</p>
    @if($subSubCategory->sku)
        <p><strong>SKU:</strong> {{ $subSubCategory->sku }}</p>
    @endif

    @if($subSubCategory->image)
        <div class="mb-4">
            <img src="{{ asset('uploads/products/' . $mainProduct->slug .'/' . $subCategory->slug . '/'  . $subSubCategory->image) }}"
                 alt="{{ $subSubCategory->name }}"
                 style="max-width: 100%; height: auto;">
        </div>
    @endif

    <a href="{{ route('products.subsubcategories', [$mainProduct->slug, $subCategory->slug]) }}" class="btn btn-secondary">← Back to Products</a>
</div>
@endsection
