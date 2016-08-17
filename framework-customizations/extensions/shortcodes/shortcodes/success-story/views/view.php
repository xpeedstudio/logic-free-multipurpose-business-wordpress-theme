<?php
if (!defined('FW')) {
    die('Forbidden');
}

$id = uniqid('stories-');
$stories = $atts['stories'];
?>

<div class="about_skill_area">
    <div class="about_tabe">

        <!-- Nav tabs -->
        <ul class="about_tabe_menu" role="tablist">
            <?php $counter = 1; ?>
            <?php foreach ($stories as $story) : ?>
                <li <?php echo ($counter == 1) ? 'class="active"' : ''; ?>><a href="#<?php echo $id . '-' . $counter; ?>" data-toggle="tab"><?php echo logic_theme_translate(esc_attr($story['title'])); ?></a></li>
                <?php
                $counter++;
            endforeach;
            ?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <?php $cnt = 1; ?>
            <?php foreach ($stories as $story): ?>
                <div role="tabpanel" class="tab-pane <?php echo ($cnt == 1) ? 'active' : ''; ?>" id="<?php echo $id . '-' . $cnt; ?>">
                    <div class="single_about_tab">
                        <?php if ($story['content']) { ?>
                            <p><?php echo esc_attr($story['content']); ?></p>
                        <?php } ?>

                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="single_ab_mision">
                                    <?php foreach ($story['left'] as $left): ?>
                                        <li><i class="fa fa-check-square"></i><?php echo esc_attr($left); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="single_ab_mision">
                                    <?php foreach ($story['right'] as $right): ?>
                                        <li><i class="fa fa-check-square"></i><?php echo esc_attr($right); ?></li>
                                        <?php endforeach; ?>
                                </ul>
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

