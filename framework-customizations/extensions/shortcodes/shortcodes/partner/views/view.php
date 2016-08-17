<?php
if (!defined('FW'))
    die('Forbidden');

$partner_gallery = $atts['partner_gallery'];
?>

<div class="main_clogo text-center">
    <?php foreach ($partner_gallery as $image): ?>
        <?php if ($image) { ?>
            <div class="col-sm-2 col-xs-6">
                <?php if (!empty($image['partner_image'])): ?>
                <a href="<?php echo esc_url($image['link']); ?>"><img src="<?php echo esc_url($image['partner_image']['url']); ?>" class="img-responsive" alt="<?php echo esc_attr($image['title']); ?>"></a>
                <?php endif; ?>
            </div>
        <?php } ?>
    <?php endforeach; ?>
</div>



