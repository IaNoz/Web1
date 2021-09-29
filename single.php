<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

$link_to_post = esc_html(get_the_permalink());

?>
    <div id="single-post" class="content-area">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();?>
            <h1><?php echo esc_html(get_the_title());?></h1>
            <div id="post-body">
                <h2><?php the_field('subtitle'); ?></h2>
                 <div class="post-meta-data">
                    <div id="date"><?php echo esc_html(get_the_date());?> | </div>
                    <div id="categories">Categories: <?php echo get_the_category_list(', ');?> | </div>
                   <div id="author">Written By <?php echo get_the_author(); ?></div>
                </div>
                <div class="the-content"><?php echo get_the_content();?></div>
            </div>
         <?php   
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
  
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
  
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
  
        // End the loop.
        endwhile;
        ?>
  
    </div><!-- .content-area -->
  
<?php get_footer(); ?>