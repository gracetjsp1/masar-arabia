 <!-- =========================
        Header
    =========================== -->
 <header id="header" class="header header-transparent">
     <nav class="navbar navbar-expand-lg sticky-navbar">
         <div class="container">
             <a class="navbar-brand" href="index.html">
                 <img src="{{ asset('assets/images/logo/logo-light.png') }}" class="logo-light" alt="logo">
                 <img src="{{ asset('assets/images/logo/logo-dark.png') }}" class="logo-dark" alt="logo">
             </a>
             <button class="navbar-toggler" type="button">
                 <span class="menu-lines"><span></span></span>
             </button>
             <div class="collapse navbar-collapse" id="mainNavigation">
                 <ul class="navbar-nav ml-5">
                     <li class="nav__item">
                         <a href="/" class="dropdown-toggle nav__item-link active">Home</a>
                         <!-- <i class="fa fa-angle-right" data-toggle="dropdown"></i> -->
                     </li><!-- /.nav-item -->
                     <li class="nav__item with-dropdown">
                         <a href="/products" class="dropdown-toggle nav__item-link">Products</a>
                         <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                         <ul class="dropdown-menu wide-dropdown-menu">
                             <li class="nav__item">

                                 @php
                                     $half = ceil($mainProducts->count() / 2);
                                     $firstHalf = $mainProducts->take($half);
                                     $secondHalf = $mainProducts->slice($half);
                                 @endphp

                                 <div class="row mx-0">
                                     <div class="col-sm-6 dropdown-menu-col">
                                         <ul class="nav flex-column">
                                             @foreach ($firstHalf as $product)
                                                 <li class="nav__item">
                                                     <a href="{{ route('products.subcategories', $product->slug) }}"
                                                         class="nav__item-link">
                                                         {{ $product->name }}
                                                     </a>
                                                 </li>
                                             @endforeach
                                         </ul>
                                     </div>

                                     <div class="col-sm-6 dropdown-menu-col">
                                         <ul class="nav flex-column">
                                             @foreach ($secondHalf as $product)
                                                 <li class="nav__item">
                                                     <a href="{{ route('products.subcategories', $product->slug) }}"
                                                         class="nav__item-link">
                                                         {{ $product->name }}
                                                     </a>
                                                 </li>
                                             @endforeach
                                         </ul>
                                     </div>

                                 </div><!-- /.row -->
                             </li><!-- /.nav-item -->
                         </ul><!-- /.dropdown-menu -->
                     </li><!-- /.nav-item -->
                     <li class="nav__item">
                         <a href="#" class="nav__item-link">About Us</a>
                     </li><!-- /.nav-item -->
                     <li class="nav__item">
                         <a href="#" class="nav__item-link">Contacts</a>
                     </li><!-- /.nav-item -->
                 </ul><!-- /.navbar-nav -->
             </div><!-- /.navbar-collapse -->
             <div class="navbar-modules">
                 <ul class="list-unstyled d-flex align-items-center modules__btns-list">
                     <li><a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a></li>
                     <li class="d-none d-lg-block">
                         <div class="module__btn module__btn-phone d-flex align-items-center">
                             <i class="icon-phone mr-2"></i>
                             <a class="phone__link d-block" href="tel:+966126576896">966 12 657 6896</a>
                             <i class="fa fa-envelope ml-3 mr-2"></i>
                             <a class="email__link d-block" href="mailto:info@masararabia.com">info@masararabia.com</a>
                         </div>

                     </li>
                 </ul><!-- /.modules-wrapper -->
             </div><!-- /.navbar-modules -->
         </div><!-- /.container -->
     </nav><!-- /.navabr -->
 </header><!-- /.Header -->
