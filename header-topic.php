<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$menus = '/template-parts/header/menus/';
$banners = '/template-parts/header/banners/';
$languages = '/template-parts/header/languages/';

$page_slug = $post->post_name;

$title = get_the_title($post->ID);

$category_id = $args['category'];

?>
<html>
    <head>
        <title>AS2 Studio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <?php 
            wp_head(); // wordpress includes calls 
            global $lang;// Get language variable
        ?>
    </head>

    <body <?php body_class(); // insert wordpress body classes?>>
        <header>
            <?php
                // get menu according to language
            
            if (strpos($page_slug, '-esp') !== false){
                get_template_part($menus.'top-menu-pc','esp');
                // get menu for mobile
                get_template_part($menus.'top-menu-mb','esp');
            }
            else {

                get_template_part($menus.'top-menu-pc', 'eng');
                // get menu for mobile
                get_template_part($menus.'top-menu-mb','eng');
            }

                // add background image + pink transparence block infront
                if ($title == "FOOD" ||
                    $title == "COMIDA") {

                    get_template_part($banners.'top-banner','food');

                }
    
                // NO BANNER
                if ($title == "SHOP" ||
                    $title == "TIENDA") {

                    get_template_part($banners.'top-banner','none');

                }
    
                // MAIN DEFULT BANNER
                else{
                    $is_esp = (strpos($page_slug, '-esp') !== false);
                    get_template_part($banners.'top-banner','main', ['is_esp' => $is_esp]);
                }

                //Change language option menu--> 
                if( $title != "FOOD"   &&
                    $title != "COMIDA" &&
                    $title != "SHOP"   &&
                    $title != "TIENDA" ){

                    get_template_part($languages.'select-lang','topic', ['category' => $category_id]);

                };
            ?>



<!-- this code adds logo + ivory search on a separate nav element (used for mobile template)
            <nav id="top-logo-search-cart">
                <div id="mb-logo">
                    <img src="http://localhost/wp-content/themes/base/images/YADEYA.png" alt="" style="width:50px;height:50px;">
                </div>
              
                <div id="mb-search-bar-lens"><?php //echo do_shortcode('[ivory-search id="560" title="Default Search Form"]');?>
                </div>
                <div id="mb-cart"><i class="fas fa-shopping-cart"></i></div>
            </nav> -->