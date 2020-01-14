<?php 
/**
 * Plugin Name: Page Identifier
 * Description: Identify pages with this plugin
 * Author: Samuel Riopelle
 * Version: 1.0
 */

function filter_thisispage( $content ){

    if ( is_page() ){
        $content .= '<p> Ceci est une page. </p>';
    }

    return $content;
}
add_filter( 'the_content', 'filter_thisispage' );