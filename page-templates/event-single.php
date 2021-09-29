<?php /* Template Name: Events-Single  */

get_header();
?>

<?php $event_content = get_field('content');?>

<?php $event_intro = get_field('intro');?>

    <div id="event" class="def-main-grid">
        <div class="fullrow text">
            <h1><?php the_title();?></h1>
            <?php echo $event_content['text_1'];?>
        </div>
    <?php if ($event_content['text_2']){ ?>
        <div class="left text">
            <?php echo $event_content['text_2'];?>
        </div>
    <?php };?>
    <?php if ($event_content['img_1']){ ?>
        <div class='right exp-img-wrp'>
            <?php echo wp_get_attachment_image( $event_content['img_1'], 'full' );?>
        </div>
    <?php };?>
    <?php if ($event_content['text_3']){ ?>
        <div class="right text">
            <?php echo $event_content['text_3'];?>
        </div>
    <?php };?>
    <?php if ($event_content['img_2']){ ?>
        <div class='left exp-img-wrp'>
                <?php echo wp_get_attachment_image( $event_content['img_2'], 'full' );?>
        </div>
    <?php };?>
    <?php if ($event_content['text_4']){ ?>
        <div class="fullrow text">
            <?php echo $event_content['text_4'];?>
        </div>
    <?php };?>
    <?php if ($event_content['text_5']){ ?>
        <div class="left text">
            <?php echo $event_content['text_5'];?>
        </div>
    <?php };?>
    <?php if ($event_content['img_3']){ ?>
        <div class='right exp-img-wrp'>
                <?php echo wp_get_attachment_image( $event_content['img_3'], 'full' );?>
        </div>
    <?php };?>
    <?php if ($event_content['text_6']){ ?>
        <div class="right text">
            <?php echo $event_content['text_6'];?>
        </div>
    <?php };?>
    <?php if ($event_content['img_4']){ ?>
        <div class='left exp-img-wrp'>
                <?php echo wp_get_attachment_image( $event_content['img_4'], 'full' );?>
        </div>
    <?php };?>
    <?php if ($event_content['text_7']){ ?>
        <div class="fullrow text">
            <?php echo $event_content['text_7'];?>
        </div>
    <?php };?>

    </div>

    <?php $end_banner = get_field('end_banner'); ?>
    <div style="background:white; font-size:1.3em; text-align:center; padding:2.7em;">
        <div class="page_content">
            <?php if ($end_banner['banner_1']) {
                echo $end_banner['banner_1'];
            };?>
        </div>
    </div>
    <div class="horizon-banner closing-banner">
        <div class="page_content">
            <?php if ($end_banner['banner_2']){
                echo $end_banner['banner_2'];
            };?>        
        </div>
    </div>
</main>
<?php get_footer();