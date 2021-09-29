<?php /* Template Name: Blog Topic*/

$category = $_REQUEST['category'];// category passed on URL

get_header('topic', ['category' => $category]); // category is passed to set up the translation link("read it in...")

get_template_part('template-parts/blog/topic', 'intro', ['category' => $category]);

$page_slug = $post->post_name;

if(strpos($page_slug, '-esp') !== false ){
    get_template_part('template-parts/blog/blog-dyk', 'esp', ['category' => $category]);
}
else {
    get_template_part('template-parts/blog/blog', 'dyk', ['category' => $category]);
}

$catquery = new WP_Query( "cat=$category&posts_per_page=5" );
if ( $catquery->have_posts() ):?>

<!--   other posts found   -->
    <div id="posts_preview">

<?php   while ( $catquery->have_posts() ) : $catquery->the_post();
            
            if(strpos($page_slug, '-esp') !== false ){
                get_template_part('template-parts/blog/post', 'preview');
            }
            else {
                    get_template_part('template-parts/blog/post-preview', 'esp');
            }

        endwhile; // end of the loop

        wp_reset_postdata();

else : ?>
    
        <div class="horizon-banner closing-banner">
            <h3>
                <?php if(strpos($page_slug, '-esp') !== false ){
                    _e( 'Lo sentimos, no hay publicaciones disponibles en esta tematica.' );
                    }
                else {
                    _e( 'Sorry, no posts to show under this category.' );
                    }?>
            </h3>
        </div>

<?php endif; ?>
    
    </div>

</main>
<?php get_footer();