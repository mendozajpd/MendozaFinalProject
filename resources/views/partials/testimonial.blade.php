<!-- testimonial section -->
<section class="section" id="testmonial">
    <div class="container text-center">
        <p class="section-subtitle">What Do Clients Say About Me?</p>
        <h6 class="section-title mb-6">Testimonials</h6>

        <!-- row -->
        <div class="row">
            @foreach($testimonialData as $testimonial)
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="{{ $testimonial->image }}" class="testimonial-card-img" alt="Client Avatar">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">{{ $testimonial->content }}</p>
                            <h6 class="testimonial-card-title">{{ $testimonial->name }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> <!-- end of container -->
</section> <!-- end of testimonial section -->