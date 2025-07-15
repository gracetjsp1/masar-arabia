<section id="blogGrid" class="blog blog-grid">
    <div class="container">
        <div class="row">
            <!-- Product Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                @foreach ($mainProducts as $product)
                    <a href="{{ route('products.subcategories', $product->slug) }}">
                        <div class="blog-item">
                            <div class="blog__img">
                                @if ($product->main_image)
                                    <img src="{{ asset('uploads/products/' . $product->slug . '/' . $product->main_image) }}"
                                        alt="{{ $product->icon_alt }}" alt="{{ $product->main_alt }}">
                                @endif
                                {{-- <img src="assets/images/product/Moisture Temp Humidity.png" alt="blog image"> --}}

                            </div><!-- /.entry-img -->
                            <div class="blog__content">
                                <h4 class="blog__title">{{ $product->name }}
                                </h4>
                                <p class="blog__desc">{{ \Illuminate\Support\Str::limit($product->description, 500) }}
                                </p>
                                <p class="btn btn__secondary btn__link">
                                    <span>More</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                            </div><!-- /.entry-content -->
                        </div>
                    </a><!-- /.product-item -->
                   @endforeach
            </div><!-- /.col-lg-4 -->
        </div>
    </div>
</section>
