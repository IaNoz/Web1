<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

<?php /* Template Name: Blog */
get_header();
$blog_content = get_field('content');
$blog_end = get_field('end_banner');
?>
    <div id="blog" class="page">
        <div class="horizon-banner">
            <?php echo $blog_content['topics_introduction'];?>
        </div>
        <div class="page_content">
            <?php 
                if ($lang === 'esp'){
                    get_template_part('/template-parts/blog/blog','menu-esp');
                }
                else {
                    get_template_part('/template-parts/blog/blog','menu');
                }
            ?>
        </div>
    </div>s
    <div class="horizon-banner closing-banner">
        <?php echo $blog_end['banner_1'];?>
    </div>
</main>
<?php get_footer();