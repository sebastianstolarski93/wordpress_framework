<?php
/*
*
* Template Name: What we do - template
*
*/ get_header();
?>

<?php if (have_rows("flexible_templates")): ?>

    <?php while (have_rows("flexible_templates")): the_row(); ?>

        <?php if( get_row_layout() == 'slider_template' ): ?>

            <?php get_template_part("partials/slider", "section"); ?>

        <?php elseif (get_row_layout() == 'baner'): ?>

            <?php get_template_part("partials/baner", "fullwidth"); ?>

        <?php elseif (get_row_layout() == 'photo_right'): ?>

            <?php get_template_part("partials/photo", "right"); ?>

        <?php elseif (get_row_layout() == 'photo_left'): ?>

            <?php get_template_part("partials/photo", "left"); ?>

        <?php elseif (get_row_layout() == 'full_width_text'): ?>

            <?php get_template_part("partials/text", "full"); ?>

        <?php elseif (get_row_layout() == "reviews"): ?>

            <?php get_template_part("partials/list", "reviews"); ?>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
