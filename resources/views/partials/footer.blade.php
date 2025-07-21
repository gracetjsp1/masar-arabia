    <!-- ========================
      Footer
    ========================== -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 footer__widget footer__widget-about">
                        <h6 class="footer__widget-title">Quick Contact</h6>
                        <div class="footer__widget-content">
                            <p class="color-gray">If you have any questions or need help, feel free to contact with our
                                team.</p>
                            <p class="footer__contact-phone">
                                <i class="icon-phone"></i>
                                <a href="tel:+966126576896">966 12 657 6896</a>
                            </p>
                            <p class="color-gray">Masar Arabia First Trading Company Othman Bin Afan Street, PO Box No. 16301 Jeddah 22234,
                                Saudi
                                Arabia</p>
                            <ul class="social__icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->
                        </div>
                    </div><!-- /.col-xl-3 -->
                    <div
                        class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2 offset-xl-1 footer__widget footer__widget-nav">
                        <h6 class="footer__widget-title">Company</h6>
                        <div class="footer__widget-content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="/products">Products</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div><!-- /.footer-widget-content -->
                    </div><!-- /.col-xl-2 -->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-5 col-xl-5 footer__widget footer__widget-nav">
                        <h6 class="footer__widget-title">Our Products</h6>
                        <div class="footer__widget-content">
                            @php
                                $half = ceil($mainProducts->count() / 2);
                                $firstHalf = $mainProducts->take($half);
                                $secondHalf = $mainProducts->slice($half);
                            @endphp
                            <div class="d-flex  flex-row d-flex">
                                <div>
                                    <nav>
                                        <ul class="list-unstyled pr-5">
                                            @foreach ($firstHalf as $product)
                                                <li><a href="{{ route('products.subcategories', $product->slug) }}">
                                                        {{ $product->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <nav>
                                        <ul class="list-unstyled pl-3">
                                            @foreach ($secondHalf as $product)
                                                <li><a href="{{ route('products.subcategories', $product->slug) }}">{{ $product->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>

                            </div>

                        </div><!-- /.footer-widget-content -->
                    </div><!-- /.col-xl-2 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <img src="{{ asset('assets/images/logo/logo-light.png') }}" alt="logo">
                    </div><!-- /.col-lg-3 -->
                    <div class="col-sm-12 col-md-9 col-lg-9 text-right">
                        <div class="footer__copyright">
                            <nav>
                                <ul class="footer__copyright-links list-unstyled d-flex flex-wrap justify-content-end">
                                    <li><a href="#">Terms & Conditions </a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <!-- <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Employee login</a></li> -->
                                </ul>
                            </nav>
                            <p class="mb-0"> &copy; Masar Arabia First Trading Company, All Rights Reserved. With Love
                                by
                                <a href="#">Water Creative Studio Pvt. Ltd.</a>
                            </p>

                        </div><!-- /.Footer-copyright -->
                    </div><!-- /.col-lg-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.Footer-bottom -->
    </footer><!-- /.Footer -->
