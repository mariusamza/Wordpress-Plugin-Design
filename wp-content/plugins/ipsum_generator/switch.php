<?php 

switch($a) {
        case 'text':
            
                if(empty($atts['paragrafe'])) {
                    $paragrafe = 2;
                } else {
                    $paragrafe = $atts['paragrafe']; 
                }

                if(empty($atts['lungime'])) {
                    $lungime = 'medium';
                } else {
                    $lungime = $atts['lungime']; 
                }
            
                $ipsum = file_get_contents('https://loripsum.net/api/'.$paragrafe.'/'.$lungime);

                echo $ipsum;
            
            break;
        case 'img':
            
                if(empty($atts['lungime'])) {
                    $lungime = 350;
                } else {
                    $lungime = $atts['lungime']; 
                }

                if(empty($atts['latime'])) {
                    $latime = 50;
                } else {
                    $latime = $atts['latime']; 
                }

                echo '<img src="http://placehold.it/'.$lungime.'x'.$latime.'">';
            
            break;     
    }