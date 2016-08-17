<?php if (!defined('FW')) die('Forbidden');

wp_enqueue_script(
    'fw-mixitup-portfolio',
    fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/portfolio/static/js/jquery.mixitup.min.js'),
    array('jquery'),
    '1.0',
    true
);

wp_enqueue_script(
    'fw-shortcode-portfo',
    fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/portfolio/static/js/portfolio-script.js'),
    array('jquery'),
    '1.0',
    true
);

/*
wp_enqueue_script(
    'fw-shortcode-portfo',
    fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/portfolio/static/js/portfolio-script.js'),
    array('jquery'),
    '1.0',
    true
);*/


