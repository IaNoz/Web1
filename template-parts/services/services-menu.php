<?php 
    global $lang;
    if ($lang === 'esp'){
        get_template_part('template-parts/services/services', 'menu-esp');
    }
    else if ($lang === 'eng'){
        get_template_part('template-parts/services/services', 'menu-eng');
    }
?>
