<?php
if (!defined('FW')) {
    die('Forbidden');
}
$image = $atts['image'];
$name = $atts['name'];
$title = $atts['title'];
$socials = $atts['socials'];
?>

<div class="main_team">
    <div class="single_team_content">
        <div class="single_team_img">
            <?php if ($image) { ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $title; ?>" />
            <?php } ?>
        </div>
        <div class="single_team_text_overlay">
            <?php if ($name) { ?>
            <h4><?php echo wp_kses_post($name); ?></h4>
            <?php } ?>
            
            <?php if ($title) { ?>
            <p><?php echo wp_kses_post($title); ?></p>
            <?php } ?>
            
            <div class="team_overlay_socail">
                <?php foreach ($socials as $social): ?>
                    <a target="_blank" href="<?php echo esc_url($social['link']); ?>"><i class="<?php echo esc_attr($social['icon']); ?>"></i></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>



