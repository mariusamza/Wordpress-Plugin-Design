<?php
/*
    Plugin Name: Text Widget   
    Plugin URI: https://swissacademy.eu
    Author: HaHaHa Programmer
    Author URI: https://swissacademy.eu
*/

add_action('widgets_init', 'register_text_widget');

function register_text_widget() {
    register_widget('Text_ipsum');
}

class Text_ipsum extends WP_Widget {
    
    public function __construct() {
        parent::__construct(
            'text_ipsum',   // ID
            'Lore Ipsum Widget',   // Name
            array('description' => 'This is a fun widget!')
        );
    }
    
    public function widget() {
        // ce apare aici afiseaza pe site
    }
    
    public function form() {
        // ce apare aici afiseaza in back-end
    }
    
    public function update() {
        
    }
    
}