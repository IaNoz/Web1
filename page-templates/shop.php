<?php /* Template Name: Shop */

get_header();?>
<?php
$nav = array(
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $post->ID
);

$child_pages = get_posts($nav);
$shop_intro = get_field('intro');
$shop_end = get_field('end_banner');
?>

    <section id="shop">
        <div class="horizon-banner">
            <h1><?php echo $shop_intro['title']; ?></h1>
        </div>
        <div id="shop-intro-banner" class="def-main-grid">
            <div id="shop-intro-banner-text" class="right text">
                <h2><?php echo $shop_intro['subtitle']; ?></h2>
                <?php echo $shop_intro['paragraph']; ?>
            </div>
            <div id="shop-intro-img" class='left exp-img-wrp'>
                <?php echo get_the_post_thumbnail();?>
            </div>
        </div>

        <?php foreach ($child_pages as $child_page) :
            global $page_id;
            $page_id = $child_page->ID;
            get_template_part('/template-parts/shop/shop-single','collection');
        endforeach; ?>
    </section>

    <div class="horizon-banner closing-banner">
        <?php echo $shop_end['banner_1']; ?>
    </div>
</main>

<?php get_footer();?>