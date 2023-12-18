<!-- about section -->
<section class="section pt-0" id="about">
    <!-- container -->
    <div class="container text-center">
        <!-- about wrapper -->
        <div class="about">
            <div class="about-img-holder">
                <img src="assets/imgs/man.png" class="about-img" alt="Profile Image">
            </div>
            <div class="about-caption">
                <p class="section-subtitle">{{ optional($aboutData)->subtitle }}</p>
                <h2 class="section-title mb-3">{{ optional($aboutData)->title }}</h2>
                <p>
                    {{ optional($aboutData)->content }}
                </p>
            </div>
            <button type="button" class="btn btn-primary m-2" data-toggle="modal"
                data-target="#customModal">EDIT</button>
        </div><!-- end of about wrapper -->
    </div><!-- end of container -->

    <!-- Custom Modal Start-->
    <div class="modal fade" id="customModal" tabindex="-1" role="dialog" aria-labelledby="customModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customModalLabel">Edit About Me</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="image">Profile Picture</label>
                        <input type="file" name="image" class="form-control">
                        <label for="content">Content:</label>
                        <textarea class="form-control" name="content" id="content">{{ optional($aboutData)->content }}</textarea> <br>
                        <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Custom Modal End-->
</section> <!-- end of about section -->
