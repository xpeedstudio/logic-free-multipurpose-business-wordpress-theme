<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
$class_width = 'fw-col-md-' . ceil(12 / count($atts['table']['cols']));
?>
<div class="pricing">

    <?php foreach ($atts['table']['cols'] as $col_key => $col): ?>
        <div class="<?php echo $class_width . ' ' . $col['name']; ?> ">
            <div class="pricing-table-container text-center">
                <?php foreach ($atts['table']['rows'] as $row_key => $row): ?>
                    <?php if ($row['name'] === 'heading-row'): ?>
                        <?php $heading = esc_html($atts['table']['content'][$row_key][$col_key]['heading']); ?>
                        <?php $sub_heading = esc_html($atts['table']['content'][$row_key][$col_key]['sub_heading']); ?>
                        <div class="plan-type">
                            <h4><?php echo (empty($heading) && $col['name'] === 'desc-col') ? '&nbps;' : $heading; ?></h4> <small><?php echo (empty($sub_heading) && $col['name'] === 'desc-col') ? '&nbps;' : $sub_heading; ?></small>
                        </div>


                    <?php elseif ($row['name'] == 'switch-row') : ?>
                        <?php $button_text = esc_html($atts['table']['content'][$row_key][$col_key]['button_text']); ?>
                        <div class="offer-action">
                            <button class="btn btn-lg show-appointment-modal" data-service=""><?php echo (empty($button_text) && $col['name'] === 'desc-col') ? '&nbps;' : $button_text; ?></button>
                        </div>


                    <?php elseif ($row['name'] == 'button-row') : ?>
                        <?php $button = fw_ext('shortcodes')->get_shortcode('button'); ?>
                        <div class="plan-cta">
                            <?php if (false === empty($atts['table']['content'][$row_key][$col_key]['button']) and false === empty($button)) : ?>
                                <?php echo $button->render($atts['table']['content'][$row_key][$col_key]['button']); ?>
                            <?php else : ?>
                                <span>&nbsp;</span>
                            <?php endif; ?>
                        </div>


                    <?php elseif ($row['name'] == 'pricing-row') : ?>
                        <?php $currency = esc_html($atts['table']['content'][$row_key][$col_key]['currency']); ?>
                        <?php $amount = esc_html($atts['table']['content'][$row_key][$col_key]['amount']); ?>
                        <?php $description = esc_html($atts['table']['content'][$row_key][$col_key]['description']); ?>
                        <div class="plan-price">
                            <h5>
                                <span class="plan-currency"><?php echo (empty($currency) && $col['name'] === 'desc-col') ? '&nbps;' : $currency; ?></span>
                                <?php echo (empty($amount) && $col['name'] === 'desc-col') ? '&nbps;' : $amount; ?>
                                <span class="plan-duration"><?php echo (empty($description) && $col['name'] === 'desc-col') ? '&nbps;' : $description; ?></span>
                            </h5>
                        </div>


                    <?php elseif ($row['name'] === 'default-row') : ?>
                        <div class="plan-details">
                            <ul>
                            <?php $value = $atts['table']['content'][$row_key][$col_key]['textarea']; ?>
                           
                                <li><?php echo wp_kses_post($value) ?></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="clearfix"></div>
</div>