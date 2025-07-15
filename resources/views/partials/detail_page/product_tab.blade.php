<!-- product tab section start -->
        <div class="product_tab_section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_tab_navigation">
                            <ul class="nav justify-content-center">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#description"
                                        aria-controls="description">Description</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#highlights" aria-controls="highlights">Highlights</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#specification"
                                        aria-controls="specification">Specification</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_page_content_inner tab-content">
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                <div class="product_tab_desc">
                                     {!! $subSubCategory->description !!}

                                </div>
                            </div>
                            <div class="tab-pane fade" id="highlights" role="tabpanel">
                                <div class="pricing-item">

                                    <div class="pricing__content">
                                         {!! $subSubCategory->highlight !!}

                                    </div><!-- /.Pricing-content  -->
                                </div><!-- /.pricing-item -->
                            </div>
                            <div class="tab-pane fade" id="specification" role="tabpanel">
                                 {!! $subSubCategory->specification !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product tab section end -->