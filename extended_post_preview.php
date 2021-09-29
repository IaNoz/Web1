<?php
$link_to_post = get_the_permalink();
$title = get_the_title();
$publiction_date = get_the_date();
$categories = get_the_category_list(', ');
$author = get_the_author();

$image = get_the_post_thumbnail('');
$post = get_field( "intro");
?>

<div id="art-prev-main">
    <div id="title-wrp">
        <a href="<?php echo $link_to_post; ?>">
                <h1><?php echo $title; ?></h1>
        </a>
    </div>
    <div id="metadata">
        <div id="date"><?php echo $publiction_date;?></div>
        <div id="categories">Categories: <?php echo $categories;?></div>
        <div id="author">By <?php echo $author;?></div>
    </div>
    <div class="art-prev-img" >
        <a href="<?php echo $link_to_post;?>" rel="lightbox">
            <?php echo $image;?>
        </a>
    </div>
    <div class="item text" id="intro">
        <?php echo $post['introductive_text'];?>
        <div class="center_button">
            <button class="button" onclick="window.location.href='<?php echo $link_to_post; ?>';">READ MORE</button>
        </div>
    </div>
    
</div>
<style>
    #extended_post_preview{
        grid-template-columns: 1fr;
        width:80%;
        margin: 5% auto;
    }
    #extended_post_preview .item{}
    #extended_post_preview .title-wrp{}
    #extended_post_preview #metadata{
        
    }
    #extended_post_preview #metadata div{
      
    }
    #extended_post_preview #metadata div:after {
        content: " | "
    }
    
    #extended_post_preview .img{
        width:100%;
    }
    #extended_post_preview #intro{
        margin:5%;
    }
</style>