  <!-- ========================
       page title
    =========================== -->
  <section id="pageTitle" class="page-title page-title-layout2 bg-overlay bg-parallax">
      <div class="bg-img"><img
              src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $mainProduct->banner_image) }}"
              alt="{{ $mainProduct->main_alt }}"></div>
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h1 class="pagetitle__heading">{{ $subSubCategory->name }}</h1>

                  <nav>
                      <ol class="breadcrumb justify-content-start mb-0">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>
                          <li class="breadcrumb-item"><a href="/products">Products</a></li>
                          <li class="breadcrumb-item">
                              <a
                                  href="{{ route('products.subsubcategories', [$mainProduct->slug, $subCategory->slug]) }}">
                                  {{ $subCategory->name }}
                              </a>
                          </li>
                          {{-- <li class="breadcrumb-item active" aria-current="page">{{ $subSubCategory->name }} -
                              {{ $subSubCategory->sku }}</li> --}}
                      </ol>
                  </nav>
              </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.page-title -->
