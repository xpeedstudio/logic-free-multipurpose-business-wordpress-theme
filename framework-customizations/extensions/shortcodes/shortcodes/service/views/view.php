<?php
if (!defined('FW')) {
    die('Forbidden');
}

$id = uniqid('service-');

$services = $atts['services'];
?>

<div class="service">
    <div class="main_service_area">
        <div class="main_service_content">
            <div class="service_tabe">
                <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                    <?php $counter = 1; ?>
                    <?php foreach ($services as $service) : ?>

                        <li <?php echo ($counter == 1) ? 'class="active"' : ''; ?>><a href="#<?php echo $id . '-' . $counter; ?>" data-toggle="tab"><i class="fa fa-map-marker"></i><br /><?php echo logic_theme_translate(esc_attr($service['category'])); ?></a></li>

                        <?php
                        $counter++;
                    endforeach;
                    ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php $cnt = 1; ?>
                    <?php foreach ($services as $service): ?>
                        <div role="tabpanel" class="tab-pane <?php echo ($cnt == 1) ? 'active' : ''; ?>" id="<?php echo $id . '-' . $cnt; ?>">
                            <div class="single_service_tab">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single_tab_content">
                                            <div class="head_title">
                                                <?php if (!empty($service['category'])) { ?>
                                                    <h3><?php echo $service['category']; ?></h3>
                                                <?php } ?>
                                                <div class="separator"></div>
                                            </div>

                                            <?php if (!empty($service['content'])) { ?>
                                                <p><?php echo $service['content']; ?></p>
                                            <?php } ?>

                                            <?php foreach ($service['button_settings'] as $btn): ?>
                                                <a target="<?php echo $btn['target']; ?>" href="<?php echo esc_url($btn['link']); ?>" class="<?php logic_theme_button_class($btn['style']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo wp_kses_post($btn['label']); ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="single_tab_img">
                                            <?php if (!empty($service['image'])) { ?>
                                                <img src="<?php echo $service['image']['url']; ?>" alt="<?php echo $service['category']; ?>" />
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $cnt++;
                    endforeach;
                    ?>
                </div>



            </div>
        </div>
    </div>
</div>

