@extends('layouts.app')

@section('title', 'Masar Arabia | Precision Instruments & Industrial Solutions')
@section('meta_description', 'Masar Arabia offers premium instrumentation, industrial solutions, and trading services across Saudi Arabia.')
@section('meta_keywords', 'instrumentation, Saudi Arabia, trading, Masar Arabia, industrial products')

@section('content')
  {{-- Paste your static HTML body content here (starting from the <section id="slider1"> to </footer>) --}}
  {{-- Example: --}}
  @include('partials.home.slider')
  @include('partials.home.features')
  @include('partials.home.banner')
  @include('partials.home.services')
  @include('partials.home.contact')
@endsection
