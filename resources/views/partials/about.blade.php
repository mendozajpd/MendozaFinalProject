<!-- about section -->
<section class="section pt-0" id="about">
    <!-- container -->
    <div class="container text-center">
        <!-- about wrapper -->
        <div class="about">
            <div class="about-img-holder">
                <img src="assets/imgs/man.png" class="about-img"
                    alt="Profile Image">
            </div>
            <div class="about-caption">
                <p class="section-subtitle">{{ optional($aboutData)->subtitle }}</p>
                <h2 class="section-title mb-3">{{ optional($aboutData)->title }}</h2>
                <p>
                    {{ optional($aboutData)->content }}
                </p>
                {{-- <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button> --}}
            </div>
        </div><!-- end of about wrapper -->
    </div><!-- end of container -->
</section> <!-- end of about section -->
