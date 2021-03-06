<?php
/*
    Plugin Name: Kill Wordpress Plugin
    Plugin URI: https://swissacademy.eu
    Author: Killer Bunny
    Author URI: https://swissacademy.eu
    Description: Ana are mere si pere. Plugin-ul asta sigur nu strica site-ul. Hamsterul e de vina.
    
*/
add_shortcode('afisare_banner','kwp_random_banner');
add_shortcode('afisare_text','kwp_afisare_text');
add_filter('the_title','kwp_change_title');
add_filter('the_content','kwp_facebook_like');

add_action('admin_notices','kwp_notification');


function kwp_afisare_text() {    
    echo '<img src="http://placehold.it/350x150">';
}

function kwp_change_title($titlu) {
    echo $titlu.' :)';
}

function kwp_facebook_like($content) {
    echo do_shortcode($content);
    
    echo '<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSwissWebAcademy%2F&width=450&layout=standard&action=like&size=large&show_faces=true&share=true&height=80&appId=1732618140394972" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
}

function kwp_notification() {
    echo '<div class="notice notice-info is-dismissible">';
    echo '<p>Please don\'t pirate my plugin! Please donate to ... </p>';
    echo '</div>';
}


function kwp_random_banner() {
    $images = array(
        'http://placehold.it/350x150/FF0000',
        'http://placehold.it/350x150/00FF00',
        'http://placehold.it/350x150/FF00FF',
    );

    echo '<img src="'.$images[rand(0,2)].'">';  
    
}


