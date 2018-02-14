<<<<<<< HEAD
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
=======
<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
>>>>>>> 8f6bc19b9fc64c200ab10c52d339095602324842
