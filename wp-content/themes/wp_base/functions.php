<?php

/*
 * Functions themes wp_base
 * @Sebastian Stolarski - sebastolarski@gmail.com
 */

 // register menu location
 register_nav_menus( array(
      // put name menu which you have to register
      // 'id' => 'name_menu'
 ) );

// add images sizes
add_image_size("large_image", 1920, 1800);
add_image_size("medium_image", 960, 480);
add_image_size("small_image", 480, 300);
//add_image_size( 'name-your-image', 220, 180, true );


// add thumbnails theme support
add_theme_support( 'post-thumbnails' );


// [fx-page name="name_file"]
function get_static_page ($name_file) {

	$file = dirname( __FILE__ ) . "/pages/" . $name_file['name'] . ".php";
	ob_start();
	include $file;
	$template = ob_get_contents();
	ob_end_clean();

	return $template;
}
add_shortcode("get-page", "get_static_page");


// [get-link id="id_page"]
function np_get_page_link ($id_page) {

	$id_page = intval($id_page['id']);

	$link = get_permalink($id_page);

	return $link;
}
add_shortcode("get-link", "np_get_page_link");


// [get-thumbnail]
function get_post_thumbnail () {

	$thumbnail_id = get_post_thumbnail_id();

	$thumbnail_url = wp_get_attachment_url($thumbnail_id);

	return $thumbnail_url;

}
add_shortcode("get-thumbnail", "get_post_thumbnail");


// [get-attachment id="id-attachment"]
function np_get_attachment_link ($id_attachment) {

	$id_attachment = intval($id_attachment['id']);

	$attachment_url = wp_get_attachment_url($id_attachment);

	return $attachment_url;
}
add_shortcode("get-attachment", 'np_get_attachment_link');

// change <img> tag to <picture>
add_filter('get_image_tag', 'image_tag_class', 10, 3);
function image_tag_class($html, $id, $titile) {

	$full = wp_get_attachment_image_url($id, "large_image");
	$tablet = wp_get_attachment_image_url($id, "medium_image");
	$phone = wp_get_attachment_image_url($id, "small_image");

	$picture = "<picture>";
	$picture .= "<source srcset=\"".$full."\" media=\"(min-width: 1170px)\">";
	$picture .= "<source srcset=\"".$tablet."\" media=\"(min-width: 768px)\">";
	$picture .= "<source srcset=\"".$tablet." 2x\" media=\"(min-width: 480px)\">";
	$picture .= "<source srcset=\"".$phone."\" media=\"(min-width: 480px)\">";
	$picture .= $html;

	if ($titile) {
		$picture = "<span>" . $titile . "</span>";
	}

	$picture .= "</picture>";

	$html = $picture;

	return $html;
}


// function register, enque styles
function get_stylescheets () {

    $dirCss = new DirectoryIterator(get_stylesheet_directory() . '/assets/css');

    foreach ($dirCss as $file) {
	    if ( pathinfo( $file, PATHINFO_EXTENSION ) == 'css' ) {
		    $name_stylesheets = basename( $file );
	    }
    }
    if ( isset($name_stylesheets) ) {
        wp_register_style("wp_style", WP_CONTENT_URL . '/themes/wp_base/assets/css/' . $name_stylesheets);
        wp_enqueue_style("wp_style");
    }
}
add_action('wp_enqueue_scripts', 'get_stylescheets');


/*
 *
 * @Sebastian Stolarski - sebastolarski@gmail.com
 *
 * Function to add async script to website
 * First script read the /assets/js folder and add all files to array
 * Second load ONLY app.js file and init themeToolsInit() class
 * Third pass into loadScriptTheme() method array with enque scripts and JS async load this into HTML
 *
 */

function get_script () {

	$dirCss = new DirectoryIterator(get_stylesheet_directory() . '/assets/js');
	$arrScript = [];

	foreach ($dirCss as $file) {
		if ( pathinfo( $file, PATHINFO_EXTENSION ) == 'js' && $file->getFilename() != 'app.js' ) {
            $arrScript[] = $_SERVER['REQUEST_URI'] . get_template_directory_uri() . '/assets/js/' . basename( $file );
		}
	}

    $arrScript = json_encode($arrScript);
    ?>
        <script>
            (function () {
                var netScript = document.createElement("script");
                netScript.src = '<?= get_template_directory_uri() ?>/assets/js/app.js';

                document.body.appendChild(netScript);
            }());

            var interval = setInterval(function () {
                if (window.loadedNetApp) {
                    clearInterval(interval);
                    window.toolsTheme = new themeToolsInit();
                    window.toolsTheme.loadScriptTheme(<?= $arrScript ?>);
                }
            })
        </script>
    <?php

}
add_action('wp_footer', 'get_script');


// Remove VER argument from styles/script WP
add_filter( 'style_loader_src', 'remove_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'remove_ver_css_js', 9999 );

function remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

// remove unnecessary script and styles WP
add_action('wp_print_scripts', function () {
	wp_deregister_script('wp-embed');
	wp_deregister_script('wp-emoji');
}, 100);

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


// allow upload svg filles
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// register sidebar area

//function sidebar_widget_init () {
//    register_sidebar( array(
//        // sidebar data
//        // 'name' => 'Right sidebar',
//        // 'id' => 'right_sidebar',
//        // 'before_widget' => '<div class="widget-item">',
//        // 'after_widget' => '</div>',
//        // 'before_title' => '<h2 class="boxhead">',
//        // 'after_title' => '</h2>'
//    ) );
//}
//add_action("widgets_init", "sidebar_widget_init");
