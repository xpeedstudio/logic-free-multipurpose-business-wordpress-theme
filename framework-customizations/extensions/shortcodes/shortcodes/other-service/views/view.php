<?php
if (!defined('FW')) {
    die('Forbidden');
}

$title = $atts['title'];
$content = $atts['content'];
$icon = $atts['icon'];
?>

<div class="main_othersservice_area">

    <div class="main_othersservice_content">

        <div class="single_othersservice">
            <div class="single_othersservice_icon">
                <h4><span><i class="<?php echo $icon; ?>"></i></span>

                    <?php
                    if($title){
                    echo wp_kses_post($title);

                    }
                    ?>
                </h4>
            </div>
            <div class="single_othersservice_content">
                <?php if($content){?>
                <p><?php echo $content; ?></p>
                <?php }?>
            </div>
        </div>
    </div>

</div>