<?php get_header(); ?>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="boxhead1">
                    <span>Contact</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>You want contact us, please write.</p>
            </div>
            <div class="col-lg-12">
                <?= do_shortcode('[contact-form-7 id="236" title="Untitled"]') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4310.3018421499855!2d19.937287163329533!3d50.03157968780645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2spl!4v1503407902108" width="1180" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
