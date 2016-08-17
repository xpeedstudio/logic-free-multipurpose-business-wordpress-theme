<?php
/**
 * blog Header
 *
 */
$heading = '';
if (defined('FW')) {
    $hero_heading = fw_get_db_settings_option('general_page_header');
    $settings_heading = $hero_heading['header_title'];

    $page_sections = fw_get_db_post_option($post->ID, 'page_sections');
    $page_heading = $page_sections['no']['header_title'];

    $heading = '';

    if ($page_heading == '') {
        $heading = $settings_heading;
    } else {
        $heading = $page_heading;
    }
}
?>

<div class="page-hero-bg">
    <div class="blog-hero page-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1 class="text-center  whitetext margin-top-80"><?php echo esc_attr($heading); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>