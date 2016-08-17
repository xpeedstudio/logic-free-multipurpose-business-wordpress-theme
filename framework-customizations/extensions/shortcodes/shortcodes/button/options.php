<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'button_settings' => array(
        'type' => 'addable-popup',
        'label' => 'Button',
        'desc' => 'Add your button',
        'template' => 'Button : {{- label }}',
        'popup-options' => array(
            'style' => array(
                'label' => __('Style', 'logic'),
                'desc' => __('Choose button style', 'logic'),
                'type' => 'image-picker',
                'value' => '',
                'choices' => array(
                    'default' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => LOGIC_IMAGES . '/image-picker/button-style-1.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => LOGIC_IMAGES . '/image-picker/button-style-1.png'
                        ),
                    ),
                    'primary' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => LOGIC_IMAGES . '/image-picker/button-style-2.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => LOGIC_IMAGES . '/image-picker/button-style-2.png'
                        ),
                    ),
                ),
            ),
            'label' => array(
                'label' => __('Button Label', 'logic'),
                'desc' => __('This is the text that appears on your button', 'logic'),
                'type' => 'text',
                'value' => 'Read More'
            ),
            'link' => array(
                'label' => __('Button Link', 'logic'),
                'desc' => __('Where should your button link to', 'logic'),
                'type' => 'text',
                'value' => '#'
            ),
            'target' => array(
                'type' => 'switch',
                'label' => __('Open Link in New Window', 'logic'),
                'desc' => __('Select here if you want to open the linked page in a new window', 'logic'),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', 'logic'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', 'logic'),
                ),
            ),
            'letter_case' => array(
                'label' => __('Letter Case', 'logic'),
                'desc' => __('Choose a lettercase for your button text', 'logic'),
                'type' => 'select',
                'choices' => array(
                    'uppercase' => __('Uppercase', 'logic'),
                    'capitalize' => __('Capitalize', 'logic'),
                    'lowercase' => __('Lowercase', 'logic'),
                )
            ),
        )
    ),
    'btn_alignment' => array(
        'label' => __('Alignment', 'logic'),
        'desc' => __('Choose button or image alignment', 'logic'),
        'type' => 'image-picker',
        'value' => '',
        'choices' => array(
            '' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/no-align.jpg',
                    'title' => __('None', 'logic')
                ),
            ),
            'text-left' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/left-position.jpg',
                    'title' => __('Left', 'logic')
                ),
            ),
            'text-center' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/center-position.jpg',
                    'title' => __('Center', 'logic')
                ),
            ),
            'text-right' => array(
                'small' => array(
                    'height' => 50,
                    'src' => LOGIC_IMAGES . '/image-picker/right-position.jpg',
                    'title' => __('Right', 'logic')
                ),
            ),
        ),
    ),
    'class' => array(
        'label' => __('Custom Class', 'logic'),
        'desc' => __('Enter custom CSS class', 'logic'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'logic'),
        'type' => 'text',
        'value' => '',
    ),
);
