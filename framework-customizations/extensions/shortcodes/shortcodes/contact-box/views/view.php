<?php
if (!defined('FW'))
    die('Forbidden');

$informations = $atts['informations'];
?>

<div class="contact_contant">

    <div class="main_contact_info">
        <div class="contact_info_content">
            <?php foreach ($informations as $info) { ?>
                <div class="single_contact_info">
                    <div class="single_info_icon">
                        <i class="<?php echo $info['icon']; ?>"></i>
                    </div>
                    <div class="single_info_text">

                        <?php if (!empty($info['title'])) { ?>
                        <h3><?php echo wp_kses_post($info['title']);?></h3>
                        <?php } ?>

                        <?php if (!empty($info['info'])) { ?>
                            <p><?php echo wp_kses_post($info['info']); ?></p>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</div>

