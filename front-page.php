<?php /* Template Name: Home */
if (isset($_GET['lang'])){ // get language variable if passed on URL
    $lang = $_GET['lang'];
}
else { // go to DEFAULT Language eng
    $lang = 'eng';
} // all this is not really needed in front page as is always eng
get_header();
?>


<div class="horizon-banner">
    <div>
        <?php
            $search = get_field('search');
            if ($search){
                do_shortcode($search['bar']);
            }
        ?>
<?php
    $home = get_field('intro');
?>
    </div>
    <?php if ($home['title']){
            echo '<h1>'.$home['title'].'</h1>';
            echo '<div class="separator"></div>';
        };
        if ($home['subtitle']){
            echo '<h3>'.$home['subtitle'].'</h3>';
        };
        if ($home['title']){
            echo '<p>'.$home['paragraph'].'</p>';
        }; ?>
    </div>
<!--/**********************  MANIFESTO  ********************************/-->
<?php
    if ( $lang === 'esp'){
        $page_id = 717;
    }
    else {
        $page_id = 20;
    }
    $manifesto = get_field('section 1', $page_id);
?>
<section class="preview" id="manifesto">
    <div class='def-main-grid'>
        <div class='left exp-img-wrp'>
            <a href="<?php echo get_page_link($page_id); ?>">
                <?php echo wp_get_attachment_image( $manifesto['image_1'], 'full' );?>
            </a>
        </div>
        <div class='right text'>
                <h2><?php echo $manifesto['title_1'];?></h2>
                <?php echo $manifesto['paragraph_1'];?>
        </div>
        
        <div class='right exp-img-wrp'>
            <a href="<?php echo get_page_link($page_id); ?>">
                <?php echo wp_get_attachment_image( $manifesto['image_2'], 'full' );?>
            </a>
        </div>
        <div class='left text'>
                <h2><?php echo $manifesto['title_1'];?></h2>
                <?php echo $manifesto['paragraph_1'];?>
                <div class="center_button">
                    <button class="button" onclick="window.location.href='<?php echo get_page_link($page_id);?>';">
                        CLICK HERE TO KNOW MORE
                    </button>
                </div>
        </div>
    </div>
</section>

<!--/*****************************  SERVICES  ********************************/-->
<?php
    if ( $lang === 'esp'){
        $page_id = 719;
    }
    else {
        $page_id=25;
    }
    $events = get_field('intro', $page_id);
?>
<section class="preview" id="services">
    <div class="horizon-banner">
        <h1>CHECK OUT OUR EXCLUSIVE  <a href="<?php echo get_page_link($page_id); ?>"><?php echo get_the_title($page_id);?>!</a></h1>
        <div class="separator"></div>
    </div>
    <div class="page_content">
        <?php echo get_template_part('/template-parts/services/services', 'menu');?>
    </div>
</section>


<!--/******************************  EVENTS  *********************************/-->
<?php
    if ( $lang === 'esp'){
        $page_id = 721;
    }
    else {
        $page_id=211;
    }
    
    $events = get_field('intro', $page_id);
?>
<div class="preview" id="events">
    <div class='def-main-grid'>
        <div class='left exp-img-wrp'>
            <a href="<?php echo get_page_link($page_id); ?>">
                <?php echo wp_get_attachment_image( $events['image'], 'full' );?>
            </a>
        </div>
        <div class='right text'>
            <h2><?php echo get_the_title($page_id);?></h2>
            <?php echo $events['paragraph'];?>
            <div class="button_center">
                <button class="button" onclick="window.location.href='<?php echo get_page_link($page_id); ?>';">READ MORE</button>
            </div>
         </div>
<?php   
    $page_id=119;
    $events = get_field('intro', $page_id);
?>

        <div class='right exp-img-wrp'>
            <a href="<?php echo get_page_link($page_id); ?>">
                <?php echo wp_get_attachment_image( $events['image'], 'full' );?>
            </a>
        </div>
        <div class='left text'>
            <h2><?php echo get_the_title($page_id);?></h2>
            <?php echo $events['paragraph'];?>
            <div class="button_center"><button class="button" onclick="window.location.href='<?php echo get_page_link(27); ?>';">READ MORE</button>
            </div>
        </div>
    </div>
</div>

<!--/*************************************  BLOG  **********************************/-->
<?php
    if ( $lang === 'esp'){
        $page_id = 723;
    }
    else {
        $page_id=29;
    }
    
    $blog = get_field('intro', $page_id);
?>
<div class="preview" id="blog">
    <div class="horizon-banner">
        <div class="page_content"> 
            <h1><?php echo $blog['title'];?></h1>
            <h3><?php echo $blog['subtitle'];?></h3>
            <?php echo $blog['paragraph'];?>
        </div>
    </div>
    <div class="page_content">
        <?php echo get_template_part('/template-parts/blog/blog', 'menu');?>
    </div>
        <?php echo get_template_part('/template-parts/blog/blog', 'dyk');?>
</div>

<!--/******************************************  SHOP  *************************************/-->
<?php
    if ( $lang === 'esp'){
        $page_id = 725;
    }
    else {
        $page_id=33;
    }
    
    $shop = get_field('intro', $page_id);
?>
<div class="preview" id="shop">
    <div id="shop-menu-grid" class='def-main-grid'>
        <div class='left exp-img-wrp '>
            <a href="<?php echo get_page_link(97); ?>"><img src="<?php bloginfo('template_directory');?>/images/WS_WEB_GROUP.png" alt="MANIFESTO_WEB_1.png"></a>
        </div>
        <div class='right text'>
            <h2><?php echo $shop['title'];?></h2>
            <?php echo $shop['paragraph'];?>
        </div>
    </div>
</div>

<!-- ***************************************** END BANNER ********************************************** -->
<div class="horizon-banner closing-banner" style="background:var(--white);">
    <h3 style="margin-left:-7em; ">There is not turning back, the game has started!</h3>
    <h1 style="margin-left:7em; margin-top:1em;">Which is your choice?</h1>
</div>
</main>

<?php get_footer();