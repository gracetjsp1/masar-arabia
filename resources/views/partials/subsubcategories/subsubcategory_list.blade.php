<!-- product page section start -->
<div class="product_page_section mb-100 mt-100">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 order-1 order-lg-2">



                <!--shop gallery start-->
                <div class="product_page_gallery">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="grid">
                            <div class="row grid__product">
                                @forelse ($subSubCategories as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                            data-wow-duration="1.1s">
                                            <a href="{{ route('products.detail', [$mainProduct->slug, $subCategory->slug, $product->slug]) }}">
                                                <figure>
                                                    <div class="product_thumb">
                                                        @if ($product->image)
                                                            <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $subCategory->slug . '/' . $product->image) }}"
                                                                alt="{{ $product->name }}">
                                                        @endif
                                                    </div>

                                                    <figcaption class="product_content text-center">
                                                        <h4>{{ $product->name }} - {{ $product->sku }}
                                                        </h4>
                                                        <!-- <div class="price_box">
                                                                <span class="current_price">PCE-GMM 10</span>
                                                            </div> -->
                                                    </figcaption>

                                                </figure>
                                            </a>
                                        </article>
                                    </div>
                                @empty
                                    <p>No sub-subcategory products found.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
