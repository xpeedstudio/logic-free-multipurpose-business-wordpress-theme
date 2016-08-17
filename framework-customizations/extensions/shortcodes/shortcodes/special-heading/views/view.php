<?php
if (!defined('FW'))
    die('Forbidden');
/**
 * @var $atts
 */
$sep = $atts['separator'];
?>

<div class="fw-heading heading head_title fw-heading-<?php echo esc_attr($atts['heading']); ?> <?php echo!empty($atts['centered']) ? 'fw-heading-center' : ''; ?>  <?php echo esc_attr($atts['class']); ?> wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s" style=" color:<?php echo esc_attr($atts['color']); ?>">
    <?php
    $title = "<{$atts['heading']} class='fw-special-title'>{$atts['title']}</{$atts['heading']}>";
    $heading = $atts['title'] ? $title : '';
    ?>
    <div class="<?php echo empty($atts['centered']) ? 'fw-special-title-half' : ''; ?>"><?php echo $heading; ?></div>

    <?php if (!empty($atts['subtitle'])): ?>
        <?php $subheading = "<{$atts['subheading']} class='fw-special-subtitle sub_title'>{$atts['subtitle']}</{$atts['subheading']}>"; ?>
        <div class="<?php echo empty($atts['centered']) ? 'fw-special-subtitle-half' : ''; ?>"><?php echo $subheading; ?></div>
    <?php endif; ?>

    <?php
    if ($sep['show_separator'] == 'yes') :
        ?>
        <div class="separator_wrap<?php echo empty($atts['centered']) ? '-left' : ''; ?>"> <div class="separator"></div></div>
        <?php endif; ?>


</div>