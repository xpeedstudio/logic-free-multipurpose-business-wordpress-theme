<?php
if (!defined('FW')) {
    die('Forbidden');
}

$abouts = $atts['abouts'];
?>

<div class="main_about_content">
    <div class="single_about_right_content">
        <?php foreach ($abouts as $about): ?>
            <div class="single_about">
                <div class="single_ab_icon">
                    <div class="ab_border_right"></div>
                    <i class="<?php echo esc_attr($about['icon']); ?>"></i>
                </div>
                <div class="single_ab_text">

                    <?php if (!empty($about['title'])) { ?>
                        <h3><?php echo wp_kses_post($about['title']); ?></h3>
                    <?php } ?>

                    <?php if (!empty($about['content'])) { ?>
                        <p><?php echo esc_attr($about['content']); ?></p>
                    <?php } ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

