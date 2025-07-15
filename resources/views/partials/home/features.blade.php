<!-- =====================
        Features numberd 
      ======================== -->
    <section id="featuresNumberd" class="features-numberd pt-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-dots" data-slide="6" data-slide-md="4" data-slide-sm="1"
              data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="700">
               @foreach ($mainProducts as $product)
              <a href="{{ route('products.subcategories', $product->slug) }}">
                <div class="feature-numberd-item">
                  <div class="feature__numberd-item-icon">
                    <img src="{{ asset('uploads/products/' . $product->slug . '/' . $product->icon_image) }}" class="img-fluid">
                  </div>
                  
                  <h4 class="feature__numberd-item-title">{{ $product->name }}</h4>
                </div>
              </a>
              @endforeach
            </div> 
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features-numberd -->
