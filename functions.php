<?php

//*******************   LANGUAGE  *****************************************************
//set up the variables to control language content via php 
global $lang;
// $LANG = 'ENG';// default language is english (this var has to change in every file using others languages)

function setLanguage($new_lang){
    global $lang;
    $lang = $new_lang;
}
//************************************************************************************
function load_stylesheets(){// Register stylesheets *********************************************************
    
    wp_register_style('effects_style', get_template_directory_uri() . '/css/effects.css', array(), 1, 'all');
    wp_enqueue_style('effects_style');
    
    wp_register_style('main_layout_style', get_template_directory_uri() . '/css/layout.css', array(), 1, 'all');
    wp_enqueue_style('main_layout_style');
    
    wp_register_style('services_style', get_template_directory_uri() . '/css/style_3.css', array(), 1, 'all');
    wp_enqueue_style('services_style');
    
    wp_register_style('shop_style', get_template_directory_uri() . '/css/custom_woocommerce.css', array(), 1, 'all');
    wp_enqueue_style('shop_style');
    
    wp_register_style('mobile_style', get_template_directory_uri() . '/css/mobile.css', array(), 1, 'all');
    wp_enqueue_style('mobile_style');
    
    wp_register_style('all', get_template_directory_uri() . '/css/all.css', array(), 1, 'all');
    wp_enqueue_style('all');
    
    // wp_enqueue_style( 'prefix-font-awesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css', array(), '4.2.0' );
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function addjs(){// Register stylesheets ********************************************************************
    wp_register_script('custom', get_template_directory_uri() . '/scripts/script.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');

    wp_register_script('swiped-events', get_template_directory_uri() . '/js/swiped-events.js', array(), 1, 1, 1);
    wp_enqueue_script('swiped-events');

    wp_register_script('shop-functions', get_template_directory_uri() . '/scripts/shop.js', array(), 1, 1, 1);
    wp_enqueue_script('shop-functions');
}
add_action('wp_enqueue_scripts', 'addjs');


add_theme_support( 'custom-background' );
add_theme_support('post-thumbnails');


//remove_all_filters( 'wp_nav_menu_args' );


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
            height:65px;
            width:320px;
            background-size: 80px 80px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertext', 'my_login_logo_url_title' );

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

// add more menus -------------------------------------------
// ADD MENU SUPPORT TO THE THEME
add_theme_support('menus'); //menus support
// CREATE THE MENUS LOCATIONS (NEEDED WHEN CREATING MENUS ON WP B-END)
// check others menu setting on menus declaration in theme heder.
function register_my_menus() {
  register_nav_menus(
    array(
        'pc-top-menu-eng' => __('pc-top-menu-eng', 'theme'),
        'mb-top-menu-eng' => __( 'mb-top-menu-eng' ),
        'pc-top-menu-esp' => __( 'pc-top-menu-esp' ),
        'mb-top-menu-esp' => __( 'mb-top-menu-esp' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**WooCommerce hooks set up ref:https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/**/ 

// unhook default wrapper
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

////hook desired wrapper for wc 
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="shop_main">';
}
function my_theme_wrapper_end() {
    echo '</section>';
}

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 400,
        'gallery_thumbnail_image_width' => 300,
        'single_image_width' => 500,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 1,
            'max_columns'     => 5,
        ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//  gallery default effects 
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
//add_filter( 'woocommerce_enqueue_styles', '__return_false' );



//woocomerce custom filters and actions

//show only grouped products on main loop
//add_filter( 'woocommerce_product_query_tax_query', 'only_grouped_products', 20, 1 );
//function only_grouped_products( $tax_query ){
//    $tax_query[] = array(
//        'taxonomy'  => 'product_type',
//        'field'     => 'name',
//        'terms'     => array('grouped'),
//    );
//    return $tax_query;
//}

//show image for single products in the group product (collection) single page
add_action( 'woocommerce_grouped_product_list_before_quantity', 'bc_woocommerce_grouped_product_thumbnail' ); 
function bc_woocommerce_grouped_product_thumbnail( $product ) { 
    $attachment_url = wp_get_attachment_image_src(
            $product->get_image_id(),
            'thumbnail',
            false)[0]; ?> 
    <td class="label"> 
        <img src="<?php echo $attachment_url; ?>" /> 
    </td> 
<?php }

//add_action( 'woocommerce_product_query', 'only_grouped_products_query' );
//function only_grouped_products_query( $q ) {
//
//    //get current loop query
//   $taxonomy_query = $q->get('tax_query') ;
//
//   //appends the grouped products condition
//   $taxonomy_query['relation'] = 'AND';
//   $taxonomy_query[] = array(
//           'taxonomy' => 'product_type',
//           'field' => 'slug',
//           'terms' => 'grouped'
//   );
//
//
//   $q->set( 'tax_query', $taxonomy_query );
//}




/* How to Add a Quantity Field to Shop Pages in WooCommerce by Thembay */
add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_loop_ajax_add_to_cart', 10, 2 );
function quantity_inputs_for_loop_ajax_add_to_cart( $html, $product ) {
    if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
        // Get the necessary classes
        $class = implode( ' ', array_filter( array(
            'button',
            'product_type_' . $product->get_type(),
            $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
            $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
        ) ) );

        // Embedding the quantity field to Ajax add to cart button
        $html = sprintf( '%s<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
            woocommerce_quantity_input( array(), $product, false ),
            esc_url( $product->add_to_cart_url() ),
            esc_attr( isset( $quantity ) ? $quantity : 1 ),
            esc_attr( $product->get_id() ),
            esc_attr( $product->get_sku() ),
            esc_attr( isset( $class ) ? $class : 'button' ),
            esc_html( $product->add_to_cart_text() )
        );
    }
    return $html;
}
add_filter( 'woocommerce_loop_add_to_cart_link', 'ts_replace_add_to_cart_button', 10, 2 );
function ts_replace_add_to_cart_button( $button, $product ) {
if (is_product_category() || is_shop()) {
$button_text = __("View Product", "woocommerce");
$button_link = $product->get_permalink();
$button = '<a class="button" href="' . $button_link . '">' . $button_text . '</a>';
return $button;
}
}


// update product quantity add quantity field in (when add to cart is pressed the correct qty is added to the basket) 
add_action( 'wp_footer' , 'archives_quantity_fields_script' );
function archives_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
        jQuery(function($){
            // Update data-quantity
            $(document.body).on('click input', 'input.qty', function() {
                $(this).parent().parent().find('a.ajax_add_to_cart').attr('data-quantity', $(this).val());

                // (optional) Removing other previous "view cart" buttons
                $(".added_to_cart").remove();
            });
        });
    </script>
    <?php
}

/*  search bar  */
 function searchbar( $form ) {

$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
<div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
<input type="text" value="' . get_search_query() . '" name="s" id="s" />
<input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
</div>
</form>';

return $form;
}

add_shortcode('searchbar', 'searchbar');


// woocommerce remove side bar
add_action( 'wp', 'custom_remove_sidebar_product_pages' );
 
function  custom_remove_sidebar_product_pages() {
 
    if ( is_product() ) {
 
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
 
   }
 
}

/*  TRANSLATIONS: Load text domain -> my-tdomain(as in header(style.css))*/
load_theme_textdomain( 'mytdomain', get_template_directory() . '/languages' );

/* register them */
add_action( 'after_setup_theme', 'my_tdomain_setup' );
function my_tdomain_setup() {
    load_theme_textdomain( 'mytdomain', get_template_directory() . '/languages' );
}

// BACK TO THE TOP OF PAGE BUTTON  
function my_scripts_method() {
     wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/js/topbutton.js',array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

// get page ID from page SLUG
function get_id_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
} 