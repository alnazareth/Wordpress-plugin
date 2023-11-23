<?php
/*
Plugin Name: Custom Username Color generate
Description: Change the color of the username.
Version: 1.0
Author: Alfredo salazar
*/


function custom_username_color_styles() {
 
    $current_user = wp_get_current_user();
    $username = $current_user->user_login;

    // you're free to add more colore here
    $colors = array('red', 'blue', 'green', 'purple', 'orange');
    $random_color = $colors[array_rand($colors)];

    
    echo '<style>#user-display-name { color: ' . $random_color . '; }</style>';
}


add_action('wp_head', 'custom_username_color_styles');
