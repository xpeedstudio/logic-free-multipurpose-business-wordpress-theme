<?php
if (!defined('FW')) {
    die('Forbidden');
}

if (empty($atts['tabs'])) {
    return;
}
$id = uniqid('accordion-');
$count = 0;
$active_tab = false;
?>
<div class="main_choose single_choose single_choose_acording">
    <div class="single_choose">
        <div class="single_choose_acording">
            <div class="panel-group <?php echo esc_attr($atts['class']); ?>" id="<?php echo $id; ?>" role="tablist" aria-multiselectable="true">
                <?php foreach ($atts['tabs'] as $tab) : $count++; ?>
                    <?php
                    $panel_class = $icon = '';
                    $collapsed = 'class="collapsed"';
                    $aria_expanded = 'false';
                    if ($tab['opened'] == 'opened' && !$active_tab) {
                        $panel_class = 'in';
                        $collapsed = '';
                        $aria_expanded = 'true';
                        $active_tab = true;
                    }

                    if ($tab['icon'] != '') {
                        $icon = '<i class="' . $tab['icon'] . '"></i>';
                    }
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="acc-heading-<?php echo $count; ?>">
                            <h4 class="panel-title">
                                <a <?php echo $collapsed; ?> data-toggle="collapse" data-parent="#<?php echo $id; ?>" href="#acc-tab-<?php echo $id . '-' . $count; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="acc-tab-<?php echo $id . '-' . $count; ?>"><?php echo $icon; ?> <?php echo logic_theme_translate(esc_html($tab['title'])); ?></a>
                            </h4>
                        </div>
                        <div id="acc-tab-<?php echo $id . '-' . $count; ?>" class="panel-collapse collapse <?php echo $panel_class; ?>" role="tabpanel" aria-labelledby="acc-heading-<?php echo $count; ?>">
                            <div class="panel-body"><?php echo do_shortcode(logic_theme_translate(esc_textarea($tab['content']))); ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>