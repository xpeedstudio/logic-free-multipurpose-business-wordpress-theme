<?php
if (!defined('FW')) {
    die('Forbidden');
}
$video = $atts['video'];
$title = $atts['title'];
$class = $atts['class'];
?>

<div class="main_video <?php echo esc_attr($class); ?> text-center wow fadeIn" data-wow-duration="2s" data-wow-dealy="1.5s">
        <div class="icon">
            <?php if (!empty($video)) { ?>
            <a href="<?php echo esc_attr($video); ?>" class="youtube-media"><i class="fa fa-play"></i></a>
                <?php } ?>

            <?php if (!empty($title)) { ?>
                <h3><?php echo wp_kses_post($title); ?></h3>
            <?php } ?>
        </div>
</div>
