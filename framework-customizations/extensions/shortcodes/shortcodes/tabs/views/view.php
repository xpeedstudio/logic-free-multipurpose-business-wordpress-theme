<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$id = uniqid( 'tab-cont-' );
if ( empty( $atts['tabs'] ) ) {
	return;
}
// tabs picker
$tabs_picker = $atts['tabs_position_picker'];

switch($tabs_picker['tabs_type'])
{
    case 'two' : $type =  ' fw-tabs-left'; break;
    case 'three' : $type =  'fw-tabs-minimal fw-tabs-top'; break;
    case 'four' : $type =  'fw-tabs-minimal fw-tabs-left'; break;
    default : $type = ' fw-tabs-top'; break;
}
$justified_tabs = ($tabs_picker['tabs_type'] == 'one' || $tabs_picker['tabs_type'] == 'three') ? $tabs_picker[$tabs_picker['tabs_type']]['tabs_justified'] : '';
?>
<div class="xs-tab <?php echo esc_attr($type) . ' ' .esc_attr($atts['class']); ?>">
    <ul class="nav nav-tabs <?php echo  $justified_tabs;?>">
        <?php $counter = 1;
        foreach ( $atts['tabs'] as $tab ) : ?>
            <li <?php echo ($counter == 1) ? 'class="active"' : '';?>>
                <a href="#<?php echo  $id.'-'.$counter;?>" data-toggle="tab">
                    <?php if(!empty($tab['tab_icon'])):?>
                        <i class="<?php echo  $tab['tab_icon'];?>"></i>
                    <?php endif;?>
                    <?php echo logic_theme_translate(esc_attr($tab['tab_title'])); ?>
                </a>
            </li>
				<?php $counter++;
			endforeach; ?>
    </ul>

    <div class="tab-content clearfix">
        <?php $cnt = 1;
        foreach ( $atts['tabs'] as $tab ) : ?>
            <div id="<?php echo  $id.'-'.$cnt;?>" class="tab-pane fade <?php echo ($cnt == 1) ? 'in active' : '';?>">
                <?php if(!empty($tab['tab_content_title'])):?>
                    <strong><?php echo logic_theme_translate(esc_attr($tab['tab_content_title'])); ?></strong>
                <?php endif;?>

                <?php if(!empty($tab['tab_content'])):?>
                    <?php echo logic_theme_translate(esc_textarea(do_shortcode($tab['tab_content']) ));?>
                <?php endif;?>
            </div>
        <?php $cnt++; endforeach; ?>
    </div>
</div>