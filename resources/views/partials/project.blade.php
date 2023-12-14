<!-- project section -->
<section class="section" id="portfolio">
    <div class="container text-center">
        <p class="section-subtitle">What I'm Doing ?</p>
        <h6 class="section-title mb-6">Current Projects</h6>
        <!-- row -->
        <div class="row">
            @foreach($projectData as $project)
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="{{ optional($project)->image }}" class="portfolio-card-img" alt="{{ optional($project)->title }}">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>{{ optional($project)->title }}</h4>
                                <p class="font-weight-normal">Category: {{ optional($project)->category }}</p>
                            </span>
                        </span>
                    </a>
                </div>
            @endforeach
        </div><!-- end of row -->
    </div><!-- end of container -->
</section> <!-- end of project section -->