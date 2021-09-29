<?php /* Template Name: Service Single */
get_header();
$service = get_field('service_group');?>
    <div class="horizon-banner">
        <h1><?php the_title();?></h1>
        <div class="separator"></div>
        <?php echo $service['service_intro'];?>
   </div>
   <div id="service"class="def-main-grid">
        <div class="left text">
            <?php echo $service['description'];?>
        </div>
        <div class='right exp-img-wrp'>
            <?php echo wp_get_attachment_image( $service['description_img'], 'full' );?>
        </div>
        <div class="right text">
            <?php echo $service['sustainability'];?>
        </div>
        <div class='left exp-img-wrp'>
            <?php echo wp_get_attachment_image( $service['sustainability_img'], 'full' );?>
        </div>
        <div class="left text">
            <?php echo $service['budget'];?>
        </div>
        <div class='right exp-img-wrp'>
            <?php echo wp_get_attachment_image( $service['budget_img'], 'full' );?>
        </div>
    </div>
    <div class="horizon-banner closing-banner services-contact-form">
    <?php 
        if ($lang === 'esp') {?>

            <h1>¡Contacta con nosotros!</h1>

            <?php echo do_shortcode('[wpforms id="933"]');?>
    <?php
        } else if ($lang === 'eng'){ ?>

            <h1>Need some help? Get in touch with us!</h1>

            <?php echo do_shortcode('[wpforms id="397"]');?>
    <?php }?>
        
    </div>
</main>
<?php get_footer();