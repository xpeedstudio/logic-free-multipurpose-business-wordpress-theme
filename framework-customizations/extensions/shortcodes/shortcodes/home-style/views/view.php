<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$sliders = $atts['sliders'];
?>

<div class="main_home_slider text-center">
    <?php foreach ($sliders as $slider): ?>
        <div class="single_home_slider">
            <div class="main_home wow fadeInUp" data-wow-duration="700ms">

                <?php if ($slider['title']) { ?>
                    <h1><?php echo wp_kses_post($slider['title']);?></h1>
                <?php } ?>

                <?php if ($slider['subtitle']) { ?>
                    <p><?php echo esc_attr($slider['subtitle']); ?></p>
                <?php } ?>

                <div class="home_btn">
                    <?php foreach ($slider['button_settings'] as $btn): ?>
                        <a target="<?php echo $btn['target']; ?>" href="<?php echo esc_url($btn['link']); ?>" class="<?php logic_theme_button_class($btn['style']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo wp_kses_post($btn['label']); ?></a>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    <?php endforeach; ?>

</div>
