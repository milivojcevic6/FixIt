</div>
<br><br>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
<footer class="small bg-light">
    <div class="container py-3 py-sm-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <h6>Quick links</h6>
                <ul class="list-unstyled">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>posts">Latest Posts</a></li>
                    <li><a href="<?php echo base_url(); ?>categories">Post Categories</a></li>
                    <?php if(!$this->session->userdata('logged_in')) : ?>
                        <li><a href="<?php echo base_url(); ?>users/login">Log in</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <h6>Information</h6>
                <ul class="list-unstyled">
                    <li><a href="<?php echo base_url(); ?>about">About us</a></li>
                    <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <h6>Follow us</h6>
                <ul class="list-unstyled">
                    <li><a href="https://www.instagram.com/milivojcevic6/">Instagram</a></li>
                    <li><a href="https://www.linkedin.com/in/milivojcevic6">LinkedIn</a></li>
                    <li><a href="https://github.com/milivojcevic6">GitHub</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <address>
                    <strong>Milan Milivojčević</strong><br />
                    Trg Brolo 10<br />
                    Koper, Slovenia<br />
                    <abbr title="Telephone">T:</abbr
                    ><a href="tel:+919876543210"> (+386) 123 1234</a><br />
                    <abbr title="Mail">M:</abbr
                    ><a href="mailto:info@domain.com"> info@famnit.si</a>
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-9">
                <ul class="list-inline">
                    <li class="list-inline-item">&copy; 2021 @milivojcevic6</li>
                    <li class="list-inline-item">All rights reserved.</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"
></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"
></script>
<script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"
></script>
</body>
</html>