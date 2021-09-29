<?php /* Template Name: Events */
 // global $lang; // $lang defined and is set in header (select-lang.php) from the slug 
get_header();

global $post;

$event_page_intro = get_field('intro');
?>
<section id="events">
    <div class="horizon-banner">
        <div class="page_content">
            <h3><?php echo $event_page_intro['title'];?></h3>
        </div>
    </div>
        <div class="def-main-grid" >
            <div class="fullrow text">
                   <p><?php echo $event_page_intro['paragraph'];?></p>
            </div>
            <?php
            // Showing the list of child pages
            // Check if current page has children pages
            $children = get_pages('child_of='.$post->ID.'&parent='.$post->ID);

            // if current page got children pages :
            if (sizeof($children) > 0):                 
                $args = array(
                    'post_status'       => ' publish',
                    'post_type'         => 'page',
                    'posts_per_page'    => -1,
                    'post_parent'       => $post->ID,
                    'order'             => 'ASC',
                    'orderby'           => 'menu_order',
                );

                $parent = new WP_Query( $args );

                // Showing a list in the template
                if ( $parent->have_posts() ) : ?>

                    
                    <?php 

                    $odd = true;

                    while ( $parent->have_posts() ) : $parent->the_post(); 

                        $event = get_field('intro', $post->ID);

                        ?>
                        <div class='<?php echo ($odd) ? "right exp-img-wrp" : "left exp-img-wrp";?>'>
                            <?php if( get_field('content')['text_1'] ) { ?>
                            <a class='item-from-list' href='<?php the_permalink(); ?>?lang=esp' title='<?php the_title_attribute(); ?>'>
                            <?php };?>
                            <?php echo wp_get_attachment_image( $event['image'], 'full' );?>
                        <?php if( get_field('content')['text_1'] ) { ?>
                            </a>
                            <?php };?>
                        </div>

                        <div class='<?php echo ($odd)?"left text" : "right text";?>'>
                            <?php if( get_field('content')['text_1'] ) { ?>
                            <a class='item-from-list' href='<?php the_permalink(); ?>?lang=esp' title='<?php the_title_attribute(); ?>'>
                            <?php };?>
                                <h1><?php the_title();?></h1>
                            <?php if( get_field('content')['text_1'] ) { ?>
                            </a>
                            <?php };?>
                            <?php echo $event['paragraph'];?>

                        <?php if( get_field('content')['text_1'] ) { ?>
                            
                            <div class="center_button">
                                <button class="button" onclick="window.location.href='<?php the_permalink(); ?>';">
                                    <?php echo ($lang === 'eng') ? 'READ MORE' : 'LEER MÁS';?>
                                        
                                </button>
                            </div>
                        
                        <?php };?>
                        
                        </div>

                <?php 

                    $odd = !$odd;

                    endwhile; ?>

                <?php endif; wp_reset_query(); ?>

            <?php endif;// end if sizeof($children) ?>

        </div>
        <div class="horizon-banner closing-banner">
            <?php 
            $event_page_end = get_field('end_banner');
            echo $event_page_end;?>
        </div>
    </section>
</main>
<?php get_footer();