<!-- service section -->
<section class="section" id="service">
    <div class="container text-center">
        <p class="section-subtitle">What I Can Do ?</p>
        <h6 class="section-title mb-6">Skills</h6>
        <!-- row -->
        <div class="row">
            @foreach($skillData as $skill)
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ optional($skill)->icon }}" alt="skill.png" class="icon">
                            <h6 class="title">{{ $skill->title }}</h6>
                            <p class="subtitle">{{ $skill->subtitle }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- end of row -->
    </div>
</section><!-- end of service section -->