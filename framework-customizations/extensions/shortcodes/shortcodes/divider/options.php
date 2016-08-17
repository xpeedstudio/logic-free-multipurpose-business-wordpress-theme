<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => __('Type', 'logic'),
        'desc' => __('Select divider type', 'logic'),
        'type' => 'image-picker',
        'value' => 'fw-line-solid',
        'choices' => array(
            'fw-line-solid' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/solid.jpg',
                    'title' => __('Solid Line', 'logic')
                ),
            ),
            'fw-line-dashed' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/dashed.jpg',
                    'title' => __('Dashed Line', 'logic')
                ),
            ),
            'fw-line-dotted' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/dotted.jpg',
                    'title' => __('Dotted Line', 'logic')
                ),
            ),
            'fw-line-double' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/double.jpg',
                    'title' => __('Double Line', 'logic')
                ),
            ),
            'fw-line-thick' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/thick.jpg',
                    'title' => __('Thick Line', 'logic')
                ),
            ),
            'fw-divider-space' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/space_gap.jpg',
                    'title' => __('Space', 'logic')
                ),
            ),
        ),
    ),
    'divider_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'size' => array(
                'label' => __('Height', 'logic'),
                'desc' => __('Select the top and bottom margin in px', 'logic'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'space-sm' => __('Small', 'logic'),
                    'space-md' => __('Medium', 'logic'),
                    'space-lg' => __('Large', 'logic'),
                    'custom' => __('Custom', 'logic'),
                ),
                'value' => 'space-md'
            ),
        ),
        'choices' => array(
            'custom' => array(
                'margin_top' => array(
                    'label' => __('Margin Top', 'logic'),
                    'desc' => __('Enter margin-top in px', 'logic'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'type' => 'short-text',
                    'value' => ''
                ),
                'margin_bottom' => array(
                    'label' => __('Margin Bottom', 'logic'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'desc' => __('Enter margin-bottom in px', 'logic'),
                    'type' => 'short-text',
                    'value' => ''
                ),
            ),
            'no' => array(),
        ),
        'show_borders' => false,
    ),
    'width' => array(
        'label' => __('Width', 'logic'),
        'desc' => __('Select the width size in %', 'logic'),
        'type' => 'radio-text',
        'choices' => array(
            '25' => __('25%', 'logic'),
            '50' => __('50%', 'logic'),
            '100' => __('100%', 'logic'),
        ),
        'custom' => 'custom_width',
        'value' => '100'
    ),
    'bg_color' => array(
        'label' => __('Color', 'logic'),
        'desc' => __('Select divider color', 'logic'),
        'value' => '',
        'type' => 'color-picker'
    ),
    'special_divider' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'logic'),
                'desc' => __('Make a special divider by adding an icon or text to it', 'logic'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'none',
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'logic'),
                    'text' => __('Text', 'logic'),
                    'icon' => __('Icon', 'logic'),
                ),
            )
        ),
        'choices' => array(
            'text' => array(
                'title_text' => array(
                    'label' => __('', 'logic'),
                    'desc' => __('This text will be displayed on the divider', 'logic'),
                    'type' => 'text',
                    'value' => '',
                ),
                'color' => array(
                    'label' => __('Text Color', 'logic'),
                    'desc' => __('Select the text color', 'logic'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'show_bg' => array(
                    'type' => 'switch',
                    'label' => __('Background', 'logic'),
                    'desc' => __('Add a background to your text?', 'logic'),
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
                'position' => array(
                    'label' => __('Position', 'logic'),
                    'desc' => __('Select text position', 'logic'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'logic')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'logic')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'logic')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'logic'),
                    'desc' => __('Select divider size', 'logic'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'logic'),
                        'fw-divider-size-md' => __('Medium', 'logic'),
                        'fw-divider-size-lg' => __('Large', 'logic'),
                    ),
                ),
            ),
            'icon' => array(
                'icon_class' => array(
                    'type' => 'icon',
                    'label' => __('', 'logic')
                ),
                'color' => array(
                    'label' => __('Icon Color', 'logic'),
                    'desc' => __('Select the icon color', 'logic'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'position' => array(
                    'label' => __('Position', 'logic'),
                    'desc' => __('Select icon position', 'logic'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'logic')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'logic')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'logic')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'logic'),
                    'desc' => __('Select divider size', 'logic'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'logic'),
                        'fw-divider-size-md' => __('Medium', 'logic'),
                        'fw-divider-size-lg' => __('Large', 'logic'),
                    ),
                ),
            ),
            'none' => array(),
        ),
        'show_borders' => false,
    ),
    'link_id' => array(
        'type' => 'text',
        'label' => __('Link ID', 'logic'),
        'desc' => __('Enter a custom CSS id for this divider', 'logic'),
        'help' => sprintf("%s", __('Use this ID in any URL link in the page in order to anchor link to this divider', 'logic')),
        'value' => '',
    ),
    'class' => array(
        'label' => __('Custom Class', 'logic'),
        'desc' => __('Enter custom CSS class', 'logic'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'logic'),
        'type' => 'text',
        'value' => '',
    ),
);
