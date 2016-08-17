<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$before_btn = $after_btn = '';
$btn = $atts['btn_alignment'];
$class = $atts['class'];

if (isset($btn) && $btn != '') {
    $before_btn = '<div class="' . $btn . ' ' . $class . '">';
    $after_btn = '</div>';
}
?>

<?php echo $before_btn; ?> 

<?php foreach ($atts['button_settings'] as $btn): ?>
    <a target="<?php echo $btn['target']; ?>" href="<?php echo esc_url($btn['link']); ?>" class="<?php logic_theme_button_class($btn['style']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo wp_kses_post($btn['label']); ?></a>
<?php endforeach; ?>

<?php echo $after_btn; ?>


