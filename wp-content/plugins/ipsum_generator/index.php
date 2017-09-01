<?php
/*
    Plugin Name: Ipsum Generator   
    Plugin URI: https://swissacademy.eu
    Author: HaHaHa Programmer
    Author URI: https://swissacademy.eu
    Description: Generates a custom lore ispum text. Sooooo original. Shortcode example [ipsum paragrafe=5 lungime=short|medium|long|verylong]
*/

add_shortcode('ipsum','generate_ipsum');


function generate_ipsum( $atts ) {
    
    if(empty($atts['tip'])) {
        $tip = 'text';
    } else {
        $tip = $atts['tip']; 
    }
    
    $tip = explode(',', $tip);
   
    
    if(is_array($tip)) {
        foreach($tip as $a) {
            include(plugin_dir_path( __FILE__ ).'switch.php');
        } 
    
    } else {
        $a = $tip;
        include(plugin_dir_path( __FILE__ ).'switch.php');   
    }

}