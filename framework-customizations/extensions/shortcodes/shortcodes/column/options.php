<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'default_padding' => array(
        'type' => 'switch',
        'label' => __('Default Spacing', 'logic'),
        'desc' => __('Use default left and right spacing?', 'logic'),
        'help' => __("Default left and right spacings are set to 15px", 'logic'),
        'value' => '',
        'right-choice' => array(
            'value' => '',
            'label' => __('Yes', 'logic'),
        ),
        'left-choice' => array(
            'value' => 'fw-col-no-padding',
            'label' => __('No', 'logic'),
        ),
    ),
    'padding_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Inner Spacing', 'logic'),
                'html' => '',
            ),
            'padding_top' => array(
                'label' => false,
                'desc' => __('top', 'logic'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_right' => array(
                'label' => false,
                'desc' => __('right', 'logic'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'logic'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_left' => array(
                'label' => false,
                'desc' => __('left', 'logic'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'margin_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Outer Spacing', 'logic'),
                'html' => '',
            ),
            'margin_top' => array(
                'label' => false,
                'desc' => __('top', 'logic'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_right' => array(
                'label' => false,
                'desc' => __('right', 'logic'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'logic'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_left' => array(
                'label' => false,
                'desc' => __('left', 'logic'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'height' => array(
        'label' => __('Height', 'logic'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'logic'),
        ),
        'custom' => 'custom_height',
        'help' => __('This option to use your custom height to like just add 500 (dont include with px)', 'logic'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'logic'),
                'desc' => __('Select the background for your column', 'logic'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'logic'),
                    'image' => __('Image', 'logic'),
                    'bgcolor' => __('Color', 'logic'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'logic'),
                    'help' => __('', 'logic'),
                    'desc' => __('Select the background color', 'logic'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'logic'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'repeat' => array(
                    'label' => __('', 'logic'),
                    'desc' => __('Select how will the background repeat', 'logic'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => 'no-repeat',
                    'choices' => array(
                        'no-repeat' => __('No-Repeat', 'logic'),
                        'repeat' => __('Repeat', 'logic'),
                        'repeat-x' => __('Repeat-X', 'logic'),
                        'repeat-y' => __('Repeat-Y', 'logic'),
                    )
                ),
                'bg_position_x' => array(
                    'label' => __('Position', 'logic'),
                    'desc' => __('Select the horizontal background position', 'logic'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'left' => __('Left', 'logic'),
                        'center' => __('Center', 'logic'),
                        'right' => __('Right', 'logic'),
                    )
                ),
                'bg_position_y' => array(
                    'label' => __('', 'logic'),
                    'desc' => __('Select the vertical background position', 'logic'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'top' => __('Top', 'logic'),
                        'center' => __('Center', 'logic'),
                        'bottom' => __('Bottom', 'logic'),
                    )
                ),
                'bg_size' => array(
                    'label' => __('Size', 'logic'),
                    'desc' => __('Select the background size', 'logic'),
                    'help' => __('<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'logic'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'auto' => __('Auto', 'logic'),
                        'cover' => __('Cover', 'logic'),
                        'contain' => __('Contain', 'logic'),
                    )
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'logic'),
                            'desc' => __('Enable image overlay color?', 'logic'),
                            'value' => 'no',
                            'right-choice' => array(
                                'value' => 'yes',
                                'label' => __('Yes', 'logic'),
                            ),
                            'left-choice' => array(
                                'value' => 'no',
                                'label' => __('No', 'logic'),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'logic'),
                                'help' => __('', 'logic'),
                                'desc' => __('Select the overlay color', 'logic'),
                                'type' => 'rgba-color-picker',
                                'value' => 'rgba(0,0,0,0.55)'
                            ),
                        ),
                    ),
                ),
            ),
            'bgcolor' => array(
                'background_color' => array(
                    'label' => __('', 'logic'),
                    'help' => __('', 'logic'),
                    'desc' => __('Select the background color', 'logic'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            )
        ),
        'show_borders' => false,
    ),
    'txtcolor' => array(
        'label' => __('Text Color', 'logic'),
        'type' => 'color-picker',
        'desc' => 'You can change color also',
    ),
    'txt_align' => array(
        'label' => __('Text Alignment', 'logic'),
        'desc' => __('Select the alignment for your column', 'logic'),
        'attr' => array('class' => 'fw-checkbox-float-left'),
        'type' => 'radio',
        'choices' => array(
            'none' => __('None', 'logic'),
            'text-left' => __('Left', 'logic'),
            'text-center' => __('Center', 'logic'),
            'text-right' => __('Right', 'logic'),
        ),
        'value' => 'none'
    ),
    'animation' => array(
        'label' => __('Animation', 'logic'),
        'type' => 'select',
        //'value' => 'c',
        'desc' => __('Add animation when your site fast load on browser.', 'logic'),
        'choices' => array(
            '' => '---',
            array(
                'attr' => array(
                    'label' => __('Attention Effects', 'logic'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'logic'),
                    'bounce' => __('bounce', 'logic'),
                    'flash' => __('flash', 'logic'),
                    'pulse' => __('pulse', 'logic'),
                    'rubberBand' => __('rubberBand', 'logic'),
                    'shake' => __('shake', 'logic'),
                    'swing' => __('swing', 'logic'),
                    'tada' => __('tada', 'logic'),
                    'wobble' => __('wobble', 'logic'),
                    'jello' => __('jello', 'logic'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Bouncing Effects', 'logic'),
                ),
                'choices' => array(
                    'bounceIn' => __('bounceIn', 'logic'),
                    'bounceInDown' => __('bounceInDown', 'logic'),
                    'bounceInLeft' => __('bounceInLeft', 'logic'),
                    'bounceInRight' => __('bounceInRight', 'logic'),
                    'bounceInUp' => __('bounceInUp', 'logic'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Fading Effects', 'logic'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'logic'),
                    'fadeInDown' => __('fadeInDown', 'logic'),
                    'fadeInLeft' => __('fadeInLeft', 'logic'),
                    'fadeInRight' => __('fadeInRight', 'logic'),
                    'fadeInUp' => __('fadeInUp', 'logic'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Flippers', 'logic'),
                ),
                'choices' => array(
                    'flip' => __('flip', 'logic'),
                    'flipInX' => __('flipInX', 'logic'),
                    'flipInY' => __('flipInY', 'logic'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Rotating Effect', 'logic'),
                ),
                'choices' => array(
                    'rotateIn' => __('rotateIn', 'logic'),
                    'rotateInDownLeft' => __('rotateInDownLeft', 'logic'),
                    'rotateInDownRight' => __('rotateInDownRight', 'logic'),
                    'rotateInUpLeft' => __('rotateInUpLeft', 'logic'),
                    'rotateInUpRight' => __('rotateInUpRight', 'logic'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Zoom Effect', 'logic'),
                ),
                'choices' => array(
                    'zoomIn' => __('zoomIn', 'logic'),
                    'zoomInDown' => __('zoomInDown', 'logic'),
                    'zoomInLeft' => __('zoomInLeft', 'logic'),
                    'zoomInRight' => __('zoomInRight', 'logic'),
                    'zoomInUp' => __('zoomInUp', 'logic'),
                    'hinge' => __('hinge', 'logic'),
                    'rollIn' => __('rollIn', 'logic'),
                ),
            ),
        ),
    ),
    'tablet' => array(
        'label' => __('Responsive Layout for Tablet', 'logic'),
        'desc' => __('Choose the responsive tablet display for this column', 'logic'),
        'help' => __('Use this option in order to control how this column behaves on tablets (and devices with the resoution between 768px - 990px). Note that on phones all the columns are 1/1 by default.', 'logic'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Automatically inherit default layout', 'logic'),
            'fw-col-sm-2' => __('Make it a 1/6 column', 'logic'),
            'fw-col-sm-3' => __('Make it a 1/4 column', 'logic'),
            'fw-col-sm-4' => __('Make it a 1/3 column', 'logic'),
            'fw-col-sm-6' => __('Make it a 1/2 column', 'logic'),
            'fw-col-sm-8' => __('Make it a 2/3 column', 'logic'),
            'fw-col-sm-9' => __('Make it a 3/4 column', 'logic'),
            'fw-col-sm-12' => __('Make it a 1/1 column', 'logic'),
        )
    ),
    'offset' => array(
        'label' => __('Layout Offset', 'logic'),
        'desc' => __('Move columns to the right using .fw-col-md-offset-* classes ', 'logic'),
        'help' => __('These classes increase the left margin of a column by * columns. For example, .fw-col-md-offset-4 moves .fw-col-md-4 over four columns.', 'logic'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Nothing', 'logic'),
            'fw-col-sm-offset-1' => __('moves 1 column', 'logic'),
            'fw-col-sm-offset-2' => __('moves 2 column', 'logic'),
            'fw-col-sm-offset-3' => __('moves 3 column', 'logic'),
            'fw-col-sm-offset-4' => __('moves 4 column', 'logic'),
            'fw-col-sm-offset-5' => __('moves 5 column', 'logic'),
            'fw-col-sm-offset-6' => __('moves 6 column', 'logic'),
        )
    ),
    'class' => array(
        'label' => __('Custom Class', 'logic'),
        'desc' => __('Enter custom CSS class', 'logic'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'logic'),
        'type' => 'text',
        'value' => '',
    ),
);
