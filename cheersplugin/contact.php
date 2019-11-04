<?php
/*
* Plugin Name: WordPress News Plugin
* Plugin URI: https://www.christinabollinger.dk/cheers
* Description: This is a WordPress Newsletter Plugin based on HTML5, CSS, JS and PHP
* Version: 0.9.7
* Author: group8 
* Author: https://www.christinabollinger.dk/cheers
* License: GPL2
*/

function contact_form()


{

    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("cheers/img/bog-billede.png").' " ';
    $content .= 'alt="login-face"></div>';
    $content .= '<div iad="promotion-header">';
    $content .= '<h1 id="promotion-header-title">Contact <span>us</span></h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="name" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="your mail" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="send">';
    $content .= '</div>';
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text">Lorem ipsum</p>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #self chosen name for the plugin
    #if writing it in Elementor shortcode part, then you have to write these names
    add_shortcode('show_contact','contact_form');

    # here we register our stylesheet
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');
        
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('/cheers/css/style.css'));
        
        # line 66 & 68 makes the popup animations happen
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('/cheers/js/script.js'), array('jquery'), null, true);
    }













