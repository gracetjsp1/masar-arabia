<section id="blogGrid" class="blog blog-grid">
    <div class="container">
        <div class="row">
            @if (!empty($subCategories) && count($subCategories))
                @foreach ($subCategories as $subCategory)
                    <!-- sub product item #1 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="{{ route('products.subsubcategories', [$mainProduct->slug, $subCategory->slug]) }}">
                            <div class="blog-item">
                                <div class="blog__img">

                                    
                                    @if ($subCategory->image)
                                        <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $subCategory->slug . '/' . $subCategory->image) }}"
                                            alt="{{ $subCategory->alt }}">
                                    @endif
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <h4 class="blog__title product-tittle">{{ $subCategory->name }}
                                    </h4>
                                    <p class="blog__desc product-desc">{{ $subCategory->description }}
                                    </p>
                                    <p class="btn btn__secondary btn__link">
                                        <span>More</span>
                                        <i class="icon-arrow-right"></i>
                                    </p>
                                </div><!-- /.entry-content -->
                            </div>
                        </a><!-- /.sub product item -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            @else
                <div class="alert alert-info">
                    No subcategories found for this product.
                </div>
            @endif
        </div>
    </div>
</section>
