<?php /* Template Name: Single Collection */

global $page_id;
$category=0;

switch ($page_id) {
    case 359:
    case 783:
        $category=35;
        break;
    case 363:
    case 786:
        $category=36;
        break;
    case 349:
    case 795:
        $category=32;
        break;
    case 369:
    case 787:
        $category=33;
        break;
    case 373:
    case 790:
        $category=34;
        break;
}?>


<?php $collection = get_field('intro', $page_id);?>

<div id="collection-background-<?php echo $page_id;?>" class="collection-background">

    <div class="image-slider">

        <div id="collection-intro">
            <?php echo $collection['introductive_text'];?>
        </div>

        <div id="background-image-<?php echo $page_id;?>" class="background-image">
            
        </div>

        <div id="pics-buttons-<?php echo $page_id;?>" class="pics-buttons">
            <button onclick="collection_<?php echo $page_id;?>.previousPicture()"><i class="fas fa-chevron-left"></i></button>
            <button class="stop" onclick="collection_<?php echo $page_id;?>.stopSlider()"><i class="fas fa-pause"></i></button>
            <button onclick="collection_<?php echo $page_id;?>.nextPicture()"><i class="fas fa-chevron-right"></i></button>
        </div>
        
            <ul class="products-preview">
            <?php
                    $args = array(
        'post_type'             => 'product',
        'post_status'           => 'publish',
        'ignore_sticky_posts'   => 1,
        'posts_per_page'        => '12',
        'tax_query'             => array(
            array(
                'taxonomy'      => 'product_cat',
                'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                'terms'         => $category,
                'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
            ),
            array(
                'taxonomy'      => 'product_visibility',
                'field'         => 'slug',
                'terms'         => 'exclude-from-catalog', // Possibly 'exclude-from-search' too
                'operator'      => 'NOT IN'
            )
        )
    );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
            global $product;
            ?>
            <li <?php wc_product_class( '', $product ); ?>>
                <div class='image-wrp'>
                    <div class='product-options-wrp'>
                        <div class='button-wrp'>
                            <a href="<?php echo get_permalink($product->get_id());?>">Details</a>
                            <span> / </span>
                            <a href="?add-to-cart=<?php echo $product->get_id()?>" 
                               data-quantity="1" 
                               class="add_to_cart_button ajax_add_to_cart" 
                               data-product_id="<?php echo $product->get_id()?>" 
                               data-product_sku="" 
                               aria-label="Add “<?php echo $product->get_title();?>” to your basket" 
                               rel="nofollow">Add to basket</a>                    
                        </div>
                    </div><?php   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->get_id() ), 'single-post-thumbnail' );?>
                    <img src="<?php echo $image[0]; ?>" data-id="<?php echo $product->get_id(); ?>" width="200px" height="200px">
                </div>
                <a href="<?php echo get_permalink($product->get_id());?>">
                    <div class='info'>
                        <div class='item-title'>  
                            <h2><?php echo $product->get_title();?></h2>
                        </div>
                        <div class='price-wrp'>
                            <span><?php echo get_woocommerce_currency_symbol();?></span>
                            <span><?php echo $product->get_price();?></span>
                        </div>
                    </div>
                </a>
            </li>
        <?php endwhile;
        } else {
            echo __( 'No products found' );
        }
        wp_reset_postdata();
            ?>
    </ul><!–/.products-preview–>
    </div>
</div>
<div id="separator-<?php echo $page_id;?>" class="gr-separator">
</div>
<?php wp_footer(); ?>
<script>
    var collection_<?php echo $page_id;?> = new collection(<?php echo $page_id;?>, '<?php echo get_template_directory_uri();?>');
    var collection_img_<?php echo $page_id;?> = document.getElementById("background-image-<?php echo $page_id;?>");

    collection_img_<?php echo $page_id;?>.addEventListener('swiped-right', collection_<?php echo $page_id;?>.nextPicture.bind(collection_<?php echo $page_id;?>));

    collection_img_<?php echo $page_id;?>.addEventListener('swiped-left', collection_<?php echo $page_id;?>.previousPicture.bind(collection_<?php echo $page_id;?>));

    collection_img_<?php echo $page_id;?>.addEventListener('click', collection_<?php echo $page_id;?>.clickOnImg.bind(collection_<?php echo $page_id;?>));
    
    collection_<?php echo $page_id;?>.showBackground();
//    console.log(collection_359.pics_file);
</script>
