<?php 

function fn_theme_scripts(){
/**include style files */
//adding font awesome icons file

//script files
wp_enqueue_script('bootstrap-file', get_template_directory_uri() . '/boots/bootstrap.min.js', array(), '1.0', true);
wp_enqueue_script('jquery-file', get_theme_file_uri('/javascript/jquery-3.6.4.min.js'), array(), '1.0', true);
wp_enqueue_script('carousel-file', get_template_directory_uri() . './javascript/owl.carousel.min.js', array(), '1.0', true);
wp_enqueue_script('js-file', get_template_directory_uri() . '/javascript/js.js', array(), '1.0', true);

// Enqueue OwlCarousel2 JS
wp_enqueue_script( 'owl-carousel2', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );

//stylesheets
wp_enqueue_style('bootstrap', get_template_directory_uri().'/boots/bootstrap.min.css');
wp_enqueue_style('fontawesome', get_template_directory_uri().'/Font_6/css/all.min.css');
wp_enqueue_style('bootstrap', get_template_directory_uri().'/boots/animate.min.css');
wp_enqueue_style('owl', get_template_directory_uri().'/css/owl.carousel.min.css');
wp_enqueue_style('aos', get_template_directory_uri().'/boots/aos.css');
wp_enqueue_style('media_responsive', '//fonts.googleapis.com/css2?family=Poppins&family=Ubuntu:ital,wght@0,500;1,300;1,400;1,500;1,700&display=swap');

// custom stylesheet
wp_enqueue_style('custom-style', get_stylesheet_uri());

//@media query responsive css file
wp_enqueue_style('media_responsive', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');

// Enqueue OwlCarousel2 CSS
wp_enqueue_style( 'owl-carousel2-theme-default', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), '2.3.4' );

}

add_action('wp_enqueue_scripts', 'fn_theme_scripts');


//adding new features to wordpress theme
function fn_theme_supports(){
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'fn_theme_supports');


function fn_nav_menu() {
    register_nav_menus( array(
        'primary-menu' => esc_html__( 'Primary Menu', 'text-domain' ),
        'footer-menu' => esc_html__( 'Footer Menu', 'text-domain' )
    ) );
}

add_action( 'init', 'fn_nav_menu' );

function fn_custom_excerpt_length($length){
    return 15;
}

add_filter('excerpt_length', 'fn_custom_excerpt_length')


?>