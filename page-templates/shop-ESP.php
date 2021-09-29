<?php /* Template Name: Shop-ESP */
setLanguage('esp');
get_header();?>
<?php
$nav = array(
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $post->ID
);

$child_pages = get_posts($nav);
?>

<section id="shop">
    <div class="horizon-banner">
        <h1></h1>
    </div>
    <div id="shop-intro-banner" class="def-main-grid">
        <div id="shop-intro-banner-text" class="right text">
            <h2></h2>
        </div>
        <div class='left exp-img-wrp'>
            <?php echo get_the_post_thumbnail();?>
        </div>
    </div>

    <?php foreach ($child_pages as $child_page) :
        $page_id = $child_page->ID;
        get_template_part('/template-parts/shop/shop-single','collection');
    endforeach; ?>
</section>
    <div class="horizon-banner closing-banner">
        <h1></h1>
    </div>
</main>

<?php get_footer();?>