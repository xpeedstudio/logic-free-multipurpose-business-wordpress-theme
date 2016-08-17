<?php
if (!defined('FW'))
    die('Forbidden');

$feature = $atts['features'];
?>

<div class="main_features_content">
    <div class="single_features_slide">
        <?php foreach ($feature as $feature): ?>
            <div class="single_ft_s_item">
                <?php if ($feature['image']) { ?>
                    <img src="<?php echo esc_url($feature['image']['url']); ?>" alt="" />
                <?php } ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>


