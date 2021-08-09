<?php

/**
 * Plugin Name: Thank You Page by SadekurRahma225
 * Plugin URI: https://www.fiverr.com/users/sadekurrahma225/
 *Description: Custom Thank You Page
 *Version: 1.0
 *Author: Sadekur Rahman
 *Author URI: https://www.linkedin.com/in/sadekur-rahman-a9b149143/
 *Text Domain: sadekurrahma225
 */


if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

add_action('init', 'sadek_shortcode_function');

function sadek_shortcode_function()
{
    add_shortcode('sadek_client_data', 'sadek_function');
}

function sadek_function()
{
    

    $html = '';

    return
        $html;
}

add_action('wp_enqueue_scripts', 'custom_js');

function custom_js()
{
    wp_enqueue_script('custom_js', plugin_dir_url(__FILE__) . 'assets/js/custom_sadekurrahma225.js');
    wp_enqueue_style('custom_css', plugin_dir_url(__FILE__) . 'assets/css/custom_sadekurrahma225.css');
    wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    //  wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather&display=swap', false);
    wp_enqueue_style('wpb-google-fonts-button', 'https://fonts.googleapis.com/css2?family=Spinnaker&display=swap', false);
    wp_enqueue_style('wpb-google-fonts-checkin', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap', false);

    //links for bootstrap to work

    wp_enqueue_style('bootstrap_datepicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css');
    wp_enqueue_style('bootstrap_min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-datepicker_js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js');

    //links for bootstrap for responsive form
    wp_enqueue_style('bootstrap_theme_min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css');
}


