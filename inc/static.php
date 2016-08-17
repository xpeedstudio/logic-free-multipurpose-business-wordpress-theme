<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Enqueue all theme scripts and styles
 *

  /** --------------------------------------
 * ** REGISTERING THEME ASSETS
 * ** ------------------------------------ */
/**
 * Enqueue styles.
 */
if (!is_admin()) {


    //Framework CSS Essectial files
    wp_enqueue_style('blog.css', LOGIC_CSS . '/blog.css', null, LOGIC_VERSION);
    wp_enqueue_style('main.css', LOGIC_CSS . '/xs_main.css', null, LOGIC_VERSION);


    wp_enqueue_style('lg-iconfont', LOGIC_CSS . '/iconfont.css', null, LOGIC_VERSION);
    wp_enqueue_style('lg-stylesheet', LOGIC_CSS . '/stylesheet.css', null, LOGIC_VERSION);
    wp_enqueue_style('lg-font-awesome.min', LOGIC_CSS . '/font-awesome.min.css', null, LOGIC_VERSION);
    wp_enqueue_style('lg-bootstrap.min.css', LOGIC_CSS . '/bootstrap.min.css', null, LOGIC_VERSION);

    wp_enqueue_style('lg-plugin', LOGIC_CSS . '/plugins.css', null, LOGIC_VERSION);
    wp_enqueue_style('lg-instagram', LOGIC_CSS . '/instagram.css', null, LOGIC_VERSION);
    wp_enqueue_style('lg-fancybox', LOGIC_CSS . '/jquery.fancybox.css', null, LOGIC_VERSION);
    wp_enqueue_style('lg-magnific-popup', LOGIC_CSS . '/magnific-popup.css', null, LOGIC_VERSION);

    wp_enqueue_style('lg-style', LOGIC_CSS . '/style.css', null, LOGIC_VERSION);
    
    wp_enqueue_style('lg-responsive', LOGIC_CSS . '/responsive.css', null, LOGIC_VERSION);
}




/**
 * Enqueue scripts.
 */
if (!is_admin()) {
    wp_enqueue_script('lg-bootstrap.min.js', LOGIC_SCRIPTS . '/vendor/bootstrap.min.js', array('jquery'), LOGIC_VERSION, true);
    wp_enqueue_script('lg-plugin', LOGIC_SCRIPTS . '/plugins.js', array('jquery'), LOGIC_VERSION, true);
    wp_enqueue_script('lg-jquery.easing', LOGIC_SCRIPTS . '/jquery.easing.1.3.js', array('jquery'), LOGIC_VERSION, true);
    wp_enqueue_script('lg-gmaps', LOGIC_SCRIPTS . '/gmaps.min.js', array('jquery'), LOGIC_VERSION, true);
    wp_enqueue_script('lg-fancybox', LOGIC_SCRIPTS . '/jquery.fancybox.pack.js', array('jquery'), LOGIC_VERSION, true);
    wp_enqueue_script('lg-masonry', LOGIC_SCRIPTS . '/jquery.masonry.min.js', array('jquery'), LOGIC_VERSION, true);
    wp_enqueue_script('lg-magnific-popup', LOGIC_SCRIPTS . '/jquery.magnific-popup.js', array('jquery'), LOGIC_VERSION, true);
    wp_enqueue_script('lg-mixitup', LOGIC_SCRIPTS . '/jquery.mixitup.min.js', array('jquery'), LOGIC_VERSION, true);
    wp_enqueue_script('lg-fw-form-helpers', LOGIC_SCRIPTS . '/fw-form-helpers.js', array('jquery'), LOGIC_VERSION, true);
    wp_enqueue_script('lg-main', LOGIC_SCRIPTS . '/main.js', array('jquery'), LOGIC_VERSION, true);

    // Load Wordpress Comment js
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


