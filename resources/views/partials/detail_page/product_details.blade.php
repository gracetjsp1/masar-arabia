<!-- single product section start-->
<div class="single_product_section mb-100 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 my-auto">
                <div class="single_product_gallery">
                    <div class="product_gallery_inner d-flex">
                        <div class="product_gallery_main_img">
                            <div class="gallery_img_list">
                                <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $subCategory->slug . '/' . $subSubCategory->image) }}"
                                    alt="{{ $subSubCategory->alt }}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_details_sidebar">
                    
                    <h2 class="product__title">{{ $subSubCategory->name }} {{ $subSubCategory->sku }}</h2>
                    <div class="price_box">
                        <span class="current_price">SKU : {{ $subSubCategory->sku }}</span><br>
                        <span class="current_price">Category : {{ $subCategory->name }}</span>
                    </div>

                   <div class="product_tab_desc">
                        @php
                        preg_match('/<p[^>]*>(.*?)<\/p>/is', $subSubCategory->description, $matches);
                    @endphp

                        {!! $matches[0] ?? '' !!}
                   </div>
                 

                </div>
            </div>
        </div>
    </div>
</div>
