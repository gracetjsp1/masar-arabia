<!-- ========================
       page title 
    =========================== -->
    <section id="pageTitle" class="page-title page-title-layout10 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{ asset('uploads/products/' .  $mainProduct->slug . '/' .$mainProduct->banner_image) }}"
                                alt="{{  $mainProduct->main_alt }}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <h1 class="pagetitle__heading">{{ $mainProduct->name }} </h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-start">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/products">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $mainProduct->name }}</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->