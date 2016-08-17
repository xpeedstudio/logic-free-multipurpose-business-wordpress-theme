<?php
if (!defined('FW')) {
    die('Forbidden');
}

if ($atts['divider_size']['size'] == 'custom') {
    $size = '';
    $custom_spacing = 'padding-top:' . (int) $atts['divider_size']['custom']['margin_top'] . 'px;' . ' margin-bottom:' . (int) $atts['divider_size']['custom']['margin_bottom'] . 'px;';
} else {
    $size = $atts['divider_size']['size'];
    $custom_spacing = '';
}


$bg_color = $link_id = $border_class = '';

$divider_color = $atts['bg_color'];
if ($divider_color != '') {
    $bg_color = 'border-color:' . $divider_color . ';';
}

if ($atts['link_id'] != '') {
    $link_id = 'id="' . $atts['link_id'] . '"';
}

if ($atts['special_divider']['selected_value'] == 'text' || $atts['special_divider']['selected_value'] == 'icon') :
    ?>
    <?php
    if ($atts['width'] == '100') {
        $atts['width'] = 'auto';
        if ($atts['type'] != 'fw-divider-space') {
            $atts['class'] .= ' fw-divider-full-width';
        }
    }
    $special_bg_color = $divider_icon_class = $divider_bg_class = $text_icon_color = $divider_inner_class = $divider_title_class = '';
    $type = $atts['special_divider']['selected_value'];
    $divider_size = $atts['special_divider'][$type]['divider_size'];
    $position = $atts['special_divider'][$type]['position'];
    $icon_text_color = $atts['special_divider'][$type]['color'];
    //fw_print($show_bg);


    if ($type == 'icon') {
        $divider_icon_class = 'fw-divider-icon';
    }

    if ($icon_text_color != '') {
        $text_icon_color = 'color:' . $icon_text_color . ';';
    }
    ?>
    <div <?php echo esc_attr($link_id); ?> class="fw-divider-special <?php echo esc_attr($atts['class']); ?> <?php echo esc_attr($atts['type']); ?> <?php echo esc_attr($size); ?> <?php echo esc_attr($position); ?> <?php echo esc_attr($divider_size); ?> <?php echo  $divider_bg_class; ?> <?php echo  $divider_icon_class; ?>" <?php echo 'style="width:' . esc_attr($atts['width']) . '%; ' . $custom_spacing . '"'; ?> >
        <div class="fw-divider-inner <?php echo esc_attr($divider_inner_class); ?>" style="<?php echo  $special_bg_color; ?>">
            <span class="fw-divider-holder fw-divider-left <?php echo esc_attr($border_class); ?>" style="<?php echo  $bg_color; ?>"></span>
            <span class="fw-divider-title <?php echo esc_attr($divider_title_class); ?>" style="<?php echo  $text_icon_color; ?>">
                <?php if ($type == 'icon') : ?>
                    <i class="<?php echo  $atts['special_divider']['icon']['icon_class']; ?>"></i>
                <?php else : ?>
                    <?php echo logic_theme_translate(esc_attr($atts['special_divider']['text']['title_text'])); ?>
                <?php endif; ?>
            </span>
            <span class="fw-divider-holder fw-divider-right <?php echo esc_attr($border_class); ?>" style="<?php echo  $bg_color; ?>"></span>
        </div>
    </div>
    <?php
else:
    if ($atts['width'] == '100') {
        $atts['width'] = 'auto';
        $atts['class'] .= ' fw-divider-full-width';
    }

    if ($atts['type'] == 'fw-divider-space') {
        $line_class = '';
    } else {
        $line_class = 'fw-divider-line';
    }
    ?>
    <div <?php echo esc_attr($link_id); ?> class="<?php echo esc_attr($atts['class']); ?> <?php echo esc_attr($atts['type']); ?> <?php echo esc_attr($line_class); ?> <?php echo esc_attr($size); ?> <?php echo esc_attr($border_class); ?>" <?php echo 'style="width:' . esc_attr($atts['width']) . '%; ' . esc_attr($custom_spacing) . ' ' . $bg_color . '"'; ?> ></div>
<?php endif; ?>