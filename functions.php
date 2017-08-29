<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 300, 300, array('center', 'top') ); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('featured-icon', 500, 500, true ); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');



    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}



/*  */


add_filter( 'the_title', 'wpse_trim_words' );

function wpse_trim_words($title) {
	return wp_trim_words( $title, 20 );
}

/*------------------------------------*\
	Browser Body Class
\*------------------------------------*/

function mv_browser_body_class($classes) {
        global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
        if($is_lynx) $classes[] = 'lynx';
        elseif($is_gecko) $classes[] = 'gecko';
        elseif($is_opera) $classes[] = 'opera';
        elseif($is_NS4) $classes[] = 'ns4';
        elseif($is_safari) $classes[] = 'safari';
        elseif($is_chrome) $classes[] = 'chrome';
        elseif($is_IE) {
                $classes[] = 'ie';
                if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
                $classes[] = 'ie'.$browser_version[1];
        } else $classes[] = 'unknown';
        if($is_iphone) $classes[] = 'iphone';
        if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
                 $classes[] = 'osx';
           } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
                 $classes[] = 'linux';
           } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
                 $classes[] = 'windows';
           }
        return $classes;
}
add_filter('body_class','mv_browser_body_class');



/*------------------------------------*\
	Functions
\*------------------------------------*/


// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

//Register Navigations
add_action( 'init', 'my_custom_menus' );
function my_custom_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'secondary-menu' => __( 'Secondary Menu' ),
            'footer-menu' => __('Footer Menu')
        )
    );
}




// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {



    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0', true); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1', true); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!

		wp_register_script('rrsb-scripts', get_template_directory_uri() . '/js/rrssb.min.js', array('jquery'), '1.0.0', true); // Custom scripts
        wp_enqueue_script('rrsb-scripts'); // Enqueue it!

		wp_register_script('slick-scripts', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0.0', true); // Custom scripts
        wp_enqueue_script('slick-scripts'); // Enqueue it!

        wp_register_script('we-are-select', get_template_directory_uri() . '/js/we-are-select.js', array('jquery'), '1.0.0', true); // Custom scripts
            wp_enqueue_script('we-are-select'); // Enqueue it!

		wp_register_script( 'fancybox', get_template_directory_uri() . '/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
		wp_enqueue_script('fancybox');

	    wp_register_script( 'lightbox', get_template_directory_uri() . '/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true );
		wp_enqueue_script('lightbox');

	    wp_register_script( 'custom-scrolling', get_template_directory_uri() . '/js/smooth-scroll.js', array( 'jquery' ), '', true  );
	    wp_enqueue_script( 'custom-scrolling' );

		wp_register_script( 'viewport-check', get_template_directory_uri() . '/js/viewport_checker.js', array('jquery'), '', true );
		wp_enqueue_script( 'viewport-check' );

		wp_register_script( 'viewport-animation', get_template_directory_uri() . '/js/view_animate.js', array('jquery'), '', true );
		wp_enqueue_script( 'viewport-animation' );

		wp_register_script( 'sticky-head-menu', get_template_directory_uri() . '/js/header_sticky.js', array('jquery'), '', true );
		wp_enqueue_script( 'sticky-head-menu' );

        wp_register_script( 'toggle-slide', get_template_directory_uri() . '/js/toggle-slide.js', array('jquery'), '', true );
        wp_enqueue_script( 'toggle-slide' );

        wp_register_script( 'toggle-arrow', get_template_directory_uri() . '/js/toggle-arrow.js', array('jquery'), '', true );
        wp_enqueue_script( 'toggle-arrow' );

        wp_register_script( 'mobile-nav', get_template_directory_uri() . '/js/mobile-nav.js', array('jquery'), '', true );
        wp_enqueue_script( 'mobile-nav' );



    }
}



// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), '1.3', 'all');
    wp_enqueue_style('styles'); // Enqueue it!

	wp_register_style( 'rrsb-style', get_stylesheet_directory_uri() . '/rrssb.css'  );
	wp_enqueue_style( 'rrsb-style' );


	wp_register_style('less-styles', get_template_directory_uri() . '/css/min-style.css', array(), '1.3', 'all');
    wp_enqueue_style('less-styles'); // Enqueue it!

	wp_register_style( 'animate-style', get_stylesheet_directory_uri() . '/animate.css'  );
	wp_enqueue_style( 'animate-style' );

	wp_register_style( 'lightbox-style', get_template_directory_uri() . '/inc/lightbox/css/jquery.fancybox.css' );
	wp_enqueue_style( 'lightbox-style' );

}

//Improve the Visual Editors capabilities

add_action( 'after_setup_theme', 'wptuts_theme_setup' );
function wptuts_theme_setup() {
	set_user_setting( 'dfw_width', 1000 );
	add_editor_style( array( 'styles.css', 'css/min-style.css' ) );
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}



// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_bio_excerpt($length)
{
    return 60;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <br/><a class="view-article fast" href="' . get_permalink($post->ID) . '">Read More <span class="icon-chevron-right"></span></a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}




//Add Custom Post Types to Taxonomy page

function add_custom_types_to_tax( $query ) {
if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

// Get all your post types
$post_types = get_post_types();

$query->set( 'post_type', $post_types );
return $query;
}
}
add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]


// Custom Login Logo

function custom_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/img/delia_logo_web.jpg);
            padding-bottom: 30px;
			background-size: contain;
		    color: #999;
		    display: block;
		    font-size: 20px;
		    font-weight: 400;
		    line-height: 1.3em;
		    margin: 0 auto 2em;
		    outline: 0 none;
		    overflow: hidden;
		    padding: 0;
		    text-decoration: none;
		    text-indent: -9999px;
		    width: 100%;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'custom_login_logo' );




/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/


//Custom Post Type For Portfolio Page

function create_Portfolio_type() {
		$labels = array (

			'name' => 'Portfolios',
			'singular_name' => 'Portfolio',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Portfolio',
			'edit_item' => 'Edit Portfolio',
			'new_item' => 'New Portfolio',
			'all_items' => 'All Portfolios',
			'view_item' => 'View Portfolio',
			'search_item' => 'Search Portfolios',
			'not_found' => 'No Portfolios Found',
			'not_found_in_trash' => 'No Portfolios found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Portfolio'
		);

		$args = array (

			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'work' ),
			'capability_type' => 'post',
			'taxonomies' => array(
	            'post_tag',
	            'category'
	        	), // Add Category and Post Tags support
			'has_archive' => true,
			'hierarchical' => false,
		 	'menu_icon' => 'dashicons-tag',
			'menu_position' => null,
			'can_export' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )

		);

		register_post_type( 'Portfolios', $args );
}

add_action('init', 'create_Portfolio_type');

function create_Team_type() {
        $labels = array (

            'name' => 'Team',
            'singular_name' => 'Team',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Teammate',
            'edit_item' => 'Edit Teammate',
            'new_item' => 'New Teammate',
            'all_items' => 'All Teammates',
            'view_item' => 'View Teammate',
            'search_item' => 'Search Teammates',
            'not_found' => 'No Teammates Found',
            'not_found_in_trash' => 'No Teammates found in Trash',
            'parent_item_colon' => '',
            'menu_name' => 'Team'
        );

        $args = array (

            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'team' ),
            'capability_type' => 'post',
            'taxonomies' => array(
                'post_tag',
                'category'
                ), // Add Category and Post Tags support
            'has_archive' => true,
            'hierarchical' => false,
            'menu_icon' => 'dashicons-tag',
            'menu_position' => null,
            'can_export' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )

        );

        register_post_type( 'Teams', $args );
}

add_action('init', 'create_Team_type');




/*------------------------------------*\
	CUSTOM META BOXES
\*------------------------------------*/



/**
 * Adds a meta box to the post editing screen
 */
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'Hero Image', 'prfx-textdomain' ), 'prfx_meta_callback', 'Portfolios', 'normal', 'high');
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );


/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    ?>

    <p>
        <label for="hero_image" class="prfx-row-title"><?php _e( 'Hero Image:', 'prfx-textdomain' )?></label>
        <input type="text" name="hero_image" id="hero_image" value="<?php if ( isset ( $prfx_stored_meta['hero_image'] ) ) echo $prfx_stored_meta['hero_image'][0]; ?>" />
    </p>


    <?php
}

/**
 * Saves the custom meta input
 */
function prfx_meta_save( $post_id ) {

    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'hero_image' ] ) ) {
        update_post_meta( $post_id, 'hero_image', sanitize_text_field( $_POST[ 'hero_image' ] ) );
    }

	// Checks for input and saves if needed
	if( isset( $_POST[ 'meta-image' ] ) ) {
	    update_post_meta( $post_id, 'meta-image', $_POST[ 'meta-image' ] );
	}

}
add_action( 'save_post', 'prfx_meta_save' );




// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
//Page Slug Body Class

function add_slug_body_class( $classes ) {
		global $post;

		if ( isset( $post ) ) {
			$classes[] = $post->post_type . '-' . $post->post_name;
}
	return $classes;
}

	add_filter( 'body_class', 'add_slug_body_class' );



	function number_of_posts_on_archive($query){
	    if ($query->is_archive) {
	            $query->set('posts_per_page', 25);
	   }
	    return $query;
	}

	add_filter('pre_get_posts', 'number_of_posts_on_archive');

/*------------------------------------*\
    Force Wordpress to keep span tags
\*------------------------------------*/

    function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[id|name|class|style]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}

add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );

/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);


/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

//Column ShortCodes

function column_half( $atts, $content = null ) {
	return '<div class="column half" ><p>' . $content . '</p></div>' ;
}

add_shortcode( 'column_half', 'column_half' );

function column_third( $atts, $content = null ) {
	return '<div class="column third" ><p>' . $content . '</p></div>' ;
}

add_shortcode( 'column_third', 'column_third' );

?>
