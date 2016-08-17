<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$funfact_number = $atts['funfact_number'];
$funfact_title = $atts['funfact_title'];
$funfact_icon = $atts['funfact_icon'];
?>

<div class="main_counter_area text-center">

    <div class="single_counter border_right">
        <div class="single_counter_item">
            <h2 class="statistic-counter">
                <?php
                if ($funfact_number) {
                    echo esc_attr($funfact_number);
                }
                ?>
            </h2>
            
            <i class="<?php echo $funfact_icon;?>"></i>
            
            <p class="margin-top-20">
                <?php
                if ($funfact_title) {
                    echo esc_attr($funfact_title);
                }
                ?>
            </p>
        </div>
    </div>

</div>


