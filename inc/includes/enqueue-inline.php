<?php

add_action('wp_head', '_action_xs_hook_css', 100);

function _action_xs_hook_css() {
    if (defined('FW')) {
        
        $hero_heading = logic_get_option('general_posts_header');
        $hero_overlay = $hero_heading['header_overlay_color'];

        $page_heading = fw_get_db_settings_option('general_page_header');
        $page_hero_image = $page_heading['header_image'];

        $page_sections = fw_get_db_post_option(get_the_ID(), 'page_sections');
        $page_image = $page_sections['no']['header_image'];
        $page_hero_overlay = $page_sections['no']['header_overlay_color'];


        $blog_hero = $hero_heading['header_image'] != '' ? $hero_heading['header_image']['url'] : LOGIC_IMAGES . '/exman.jpg';
        $page_hero = '';

        if ($page_image == '') {
            $page_hero = $page_hero_image['url'];
        } else {
            $page_hero = $page_image['url'];
        }
        
        $custom_css = logic_get_option('custom_css');
        $output = "<style type='text/css'>"
                . ".blog-hero-bg {background: url($blog_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".page-hero-bg {background: url($page_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".blog-hero {background: $hero_overlay;width: 100%;} .page-hero {background: $page_hero_overlay;width: 100%;} .colorsbg, .separator, .separator-left, .separator {background: $main_color;}"
                . "$custom_css"
                . "</style>";
        echo $output;
    }
}
