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
                                @if ($subSubCategories->count())
                                    @foreach ($subSubCategories as $product)
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                                data-wow-duration="1.1s">
                                                <a
                                                    href="{{ route('products.detail', [
                                                        $product->subCategory->mainProduct->slug,
                                                        $product->subCategory->slug,
                                                        $product->slug,
                                                    ]) }}">
                                                    <figure>
                                                        @php
                                                            $imgPath =
                                                                'uploads/products/' .
                                                                $product->subCategory->mainProduct->slug .
                                                                '/' .
                                                                $product->subCategory->slug .
                                                                '/' .
                                                                $product->image;
                                                        @endphp
                                                        <div class="product_thumb">
                                                            @if ($product->image)
                                                                <img src="{{ asset($imgPath) }}"
                                                                    alt="{{ $product->name }}">
                                                            @endif
                                                            {{-- @if (file_exists(public_path($imgPath)))
                                                                <img src="{{ asset($imgPath) }}"
                                                                    alt="{{ $product->name }}">
                                                            @endif --}}
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4>{{ $product->name }} - {{ $product->sku }}</h4>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                        </div>
                                    @endforeach

                                    <!-- Pagination -->
                                    <div class="row w-100">
                                        <div class="w-100 d-flex justify-content-center mt-4">
                                            {{ $subSubCategories->appends(['query' => request('query')])->links() }}
                                        </div>
                                    </div>
                                    <!-- End Pagination -->
                                @else
                                    <div class="alert alert-warning col-12 text-center">
                                        No products found for "<strong>{{ $query }}</strong>".
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!--shop gallery end-->

            </div>
        </div>
    </div>
</div>
