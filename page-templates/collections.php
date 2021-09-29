<?php /* Template Name: Collections */
get_header();?>
    <section id="collections">
        <div class="horizon-banner">
            <h1>Collections</h1>
            <h3>Checkout our collections!!!</h3>
            <p>AS² offers extensive high-quality services for you and yours. With a strong base of project, effort and creativity, we make available to users services that are governed by the standards-based on our MANIFESTO, that is how art and sustainability are guaranteed in any of our work.You can consult us without any commitment and ask for an improvement evaluation for your proposal.</p>
            <h3>Now it’s your turn, what’s your choice?</h3>
        </div>
        <div class="def-main-grid">
            <?php $collections = get_field('intro');?>
            <div class='left exp-img-wrp'>
                    <?php echo wp_get_attachment_image( $collections['image'], 'full' );?>
            </div>
            <div class="right text">
                <h1><?php echo $collections['title'];?></h1>
                <?php echo $collections['paragraph'];?>
            </div>
            <?php $collection_ID = 359;
            $collection = get_field('intro',$collection_ID);?>
            <div class="left text">
                <?php echo $collection['introductive_text'];?>
                <div class="center_button"><button class="button" onclick="window.location.href='<?php echo get_page_link($collection_ID); ?>';">SEE MORE</button></div>
            </div>
            <div class="right">
                <div class="video-wrp"><?php echo $collection['video_url'];?></div>
            </div>
            <?php $collection_ID = 363;
            $collection = get_field('intro',$collection_ID);?>
            <div class="left">
                <div class="video-wrp"><?php echo $collection['video_url'];?></div>
            </div>
            <div class="right text">
                <?php echo $collection['introductive_text'];?>
                <div class="center_button"><button class="button" onclick="window.location.href='<?php echo get_page_link($collection_ID); ?>';">SEE MORE</button></div>
            </div>
            <?php $collection_ID = 349;
            $collection = get_field('intro',$collection_ID);?>
            <div class="left text">
                <?php echo $collection['introductive_text'];?>
                <div class="center_button"><button class="button" onclick="window.location.href='<?php echo get_page_link($collection_ID); ?>';">SEE MORE</button></div>
            </div>
            <div class="right">
                <div class="video-wrp"><?php echo $collection['video_url'];?></div>
            </div>
            <?php $collection_ID = 369;
            $collection = get_field('intro',$collection_ID);?>
            <div class="left">
                <div class="video-wrp"><?php echo $collection['video_url'];?></div>
            </div>
            <div class="right text">
                <?php echo $collection['introductive_text'];?>
                <div class="center_button"><button class="button" onclick="window.location.href='<?php echo get_page_link($collection_ID); ?>';">SEE MORE</button></div>
            </div>
            <?php $collection_ID = 373;
            $collection = get_field('intro',$collection_ID);?>
            <div class="left text">
                <?php echo $collection['introductive_text'];?>
                <div class="center_button">
                    <button class="button" onclick="window.location.href='<?php echo get_page_link($collection_ID); ?>';">
                        SEE MORE
                    </button></div>
            </div>
            <div class="right">
                <div class="video-wrp"><?php echo $collection['video_url'];?></div>
            </div>
        </section>
<div class="horizon-banner closing-banner"><h1>WILL YOU JOIN US?</h1></div>
</main>

<?php get_footer();?>
<style type="text/css">
    #collections .def-main-grid{
        --row_separation: 6;
    }
    #collections .video-wrp{
        position: relative; 
        padding-top: 56%;
        height:100%;
    }
    #collections iframe{
        position: absolute; 
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%;
    }
    #collections .text{
        margin:2em;
    }
</style>
