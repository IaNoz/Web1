<?php
/*
Template Name: Search Page
*/
get_header();
?>
<h1 class="search-title">
<?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
</h1>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endwhile;?>
<?php endif; ?>

    <?php get_footer();?>