<?php /* Template Name: Services */
setLanguage('eng');
get_header();

$services = get_field('intro');
?>
    <div id="services" class="page">
        <div class="horizon-banner">
            <div class="page_content">
                <h1><?php echo $services['title'];?></h1>
                <div class="separator"></div>
                <?php echo $services['paragraph'];?>
            </div>
        </div>
        <div class="page_content">
            <?php get_template_part('/template-parts/services/services','menu');?>
        </div>
    </div>
    <div class="horizon-banner closing-banner services-contact-form">
        <h1>Need some help? Get in touch with us!</h1>
        <?php echo do_shortcode('[wpforms id="397"]');?>
    </div>
</main>

<?php get_footer();