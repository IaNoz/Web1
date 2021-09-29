<?php /* Template Name: Manifesto */

if (isset($_GET['lang'])){ // get language variable if passed on URL
    $lang = $_GET['lang'];
}
else { // go to DEFAULT Language eng
    $lang = 'eng';
}
get_header();
?>
    <?php $manifesto = get_field('section 1');?>
<section id="manifesto">
    <?php 
        if ( $lang === 'eng' ){
            echo get_template_part('template-parts/manifesto/countdown', 'eng');
        }
        else if( $lang === 'esp' ){
            echo get_template_part('template-parts/manifesto/countdown', 'esp');
        }
        else {
            echo get_template_part('template-parts/manifesto/countdown', 'eng');
        }
    ?>
    <!-- <div id="test-scroll"></div> -->
    <div class="def-main-grid">
    <?php if( $manifesto['title'] ) { ?>
        <div class="fullrow text">
            <h1><?php echo $manifesto['title'];?></h1>
            <p><?php echo $manifesto['paragraph'];?></p>
        </div>
    <?php };?>

    <?php if( $manifesto['title_1'] ) { ?>
        <div class='right exp-img-wrp'>
                <?php echo wp_get_attachment_image( $manifesto['image_1'], 'full' );?>
        </div>

        <div class="left text">
            <h1><?php echo $manifesto['title_1'];?></h1>
            <?php echo $manifesto['paragraph_1'];?>
        </div>
    <?php };?>
    
    <?php if( $manifesto['title_2'] ) { ?>
        <div class='left exp-img-wrp'>
                <?php echo wp_get_attachment_image( $manifesto['image_2'], 'full' );?>
        </div>
        <div class="right text">
            <h1><?php echo $manifesto['title_2'];?></h1>
            <?php echo $manifesto['paragraph_2'];?>
        </div>
    <?php };?>
    
    <?php if( $manifesto['title_3'] ) { ?>
        <div class="fullrow text">
            <h1><?php echo $manifesto['title_3'];?></h1>
            <?php echo $manifesto['paragraph_3'];?>
        </div>
    <?php };?>
    
    <?php if( $manifesto['title_4'] ) { ?>
        <div class='right exp-img-wrp'>
                <?php echo wp_get_attachment_image( $manifesto['image_4'], 'full' );?>
        </div>
        <div class="left text">
            <h1><?php echo $manifesto['title_4'];?></h1>
            <?php echo $manifesto['paragraph_4'];?>
        </div>
    <?php };?>
    
    <?php if( $manifesto['title_5'] ) { ?>
        <div class='left exp-img-wrp'>
                <?php echo wp_get_attachment_image( $manifesto['image_5'], 'full' );?>
        </div>
        <div class="right text">
            <h1><?php echo $manifesto['title_5'];?></h1>
            <?php echo $manifesto['paragraph_5'];?>
        </div>
    <?php };?>
    
    </div>
    
<?php 

$manifesto_end = get_field('end_banner');

if( $manifesto_end['banner_1'] ) { ?>
    <div class="horizon-banner closing-banner"><?php $manifesto_end['banner_1'];?></div>
<?php };?>

<?php if( $manifesto_end['banner_2'] ) { ?>
    <div class="horizon-banner closing-banner"><?php echo $manifesto_end['banner_2'];?></div>
<?php };?>
</section>
</main>

<?php get_footer();?>

<style>
    #test-scroll{
        width: 100%;
        height: 5em;
        background-color: blue;
    }
    .scrolled{
        height: 10em!important;
        background-color: red!important;
    }
</style>
<script>
    countdown();

    let element = document.getElementById('test-scroll');
    element.addEventListener('swiped-right', scrollMeThis);
    element.addEventListener('swiped-left', scrollMeThis);
    function scrollMeThis(){
        console.log("SCROLLLLLED ");
        this.classList.add('scrolled');
    }
</script>