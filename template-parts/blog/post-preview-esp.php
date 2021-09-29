<?php
$link_to_post = esc_html(get_the_permalink());

$title = esc_html( get_the_title() );
$publication_date = esc_html(get_the_date());
$categories = get_the_category_list(', ');
$author = esc_html(get_the_author());
// wp_get_attachment_image( $post['img'], 'full' );
?>
<div class="def-main-grid" id="posts-preview">
    <div class="left text">
        <a href="<?php echo $link_to_post ?>">
            <h2><?php echo $title; ?></h2>
        </a>
        <div class="post-meta-data">
            <div id="date"><?php echo $publication_date;?> | </div>
            <div id="categories">Categories: <?php echo $categories;?> | </div>
            <div id="author">By <?php echo $author; ?></div>
        </div>
        <div id="intro">
            <?php the_excerpt();?>
        </div>
    </div>
    <div class="right exp-img-wrp" >
        <a href="<?php echo $link_to_post; ?>" rel="lightbox">
            <?php the_post_thumbnail('Full Size');?>
        </a>
    </div>
    <div class="fullrow text">
            <div class="separator"></div>
    </div>
</div>