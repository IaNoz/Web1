<?php wp_head('noBanner'); ?>
<?php /* Template Name: My Account */
get_header();?>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_title();echo"<br>";?>
<?php the_date();echo"<br>";?>
<?php the_time();echo"<br>";?>
<?php the_category;echo"<br>";?>
<?php the_content();echo"<br>";?>
<?php extra_tags();echo"<br>";?>
/* grab the url for the full size featured image */
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
  
        /* link thumbnail to full size image for use with lightbox*/
        echo '<a href="'.esc_url($featured_img_url).'" rel="lightbox">'; 
            the_post_thumbnail('thumbnail');
        echo '</a>';
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>
    <?php get_footer(); 