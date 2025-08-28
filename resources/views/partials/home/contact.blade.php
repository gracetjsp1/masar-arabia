<!-- ==========================
        contact layout 2
    =========================== -->
<section id="contactLayout2" class="contact contact-layout2 pt-0   bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="contact__panel">
                    <div class="contact__panel-banner">
                        <img src="{{ asset('assets/images/about/get-in-touch.png') }}" alt="banner img">
                        <div class="cta__banner">
                            <p class="cta__desc"><strong>We will get back to you within 24 hours, or you can call us
                                    everyday,
                                    09:00 AM - 12:00 PM</strong></p>
                            <div class="contact__number d-flex align-items-center">
                                <i class="icon-phone"></i>
                                <a href="tel:+966126576896">
                                    966 12 657 6896</a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('contact.submit') }}" id="contactForm" 
                        class="contact__form-panel">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 contact__form-panel-header">
                                <h4>Get In Touch</h4>
                                <p>Complete control over products allows us to ensure our customers receive the best
                                    quality,
                                    prices and service.</p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                        name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" id="contact-phone"
                                        name="phone" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                        name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Additional Details!" id="contact-message" name="message" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn__secondary btn__block">
                                    <span>Submit Request</span><i class="icon-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    {{-- flash success --}}
                    @if (session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif
                </div><!-- /.contact__panel -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 1 -->
