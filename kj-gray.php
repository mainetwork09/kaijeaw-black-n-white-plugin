<?php

/*
Plugin Name:  Kaijeaw Black And White
Plugin URI:   https://chonable.com
Description:  Change theme to black and white
Version:      01-oct-2017
Author:       Chonable
Author URI:   https://chonable.com
License:      WTFPL
License URI:  http://www.wtfpl.net/
Text Domain:  kaijeaw-black-n-white
Domain Path:  /languages
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function kjbw_hook_css() {
    ?>
       <style>
       
h1,h2,h3,h4,h5,h6{
    color: #000 !important;
    }
    
    span.badge.number {
        background: #000;
    }
    .post-category-icon,
    .icon-circle, 
    .list-inline, 
    .daily-logo, 
    .footer-logo {
        -moz-filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        filter: gray; /* IE6-9 */
        filter: grayscale(100%);
    }
    
    #banners h2.sec-title{
    background-color: #000 !important;
    color: #fff !important;
    }
    
    #nav-link-ul.nav li a{
    color: #000 !important;
    }
    
    #nav-link-ul.nav li a:hover{
    color: #fff !important;
    background-color: #000 !important;
    }
    
    .breadcrumb li:last-child{
    background-color: #000 !important;
    }
    
    .wp-pagenavi a, .wp-pagenavi span{
        color: #fff !important;
        background: #000 !important;
        border: 1px solid #000 !important;
    }
    
    .wp-pagenavi a:hover, .wp-pagenavi span.current{
        background: #fff !important;
        color: #000 !important;
        border-color: #000 !important;
    }
       </style>
    <?php
}
add_action('wp_head', 'kjbw_hook_css');

?>