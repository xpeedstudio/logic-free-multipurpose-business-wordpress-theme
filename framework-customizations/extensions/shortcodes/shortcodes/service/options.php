<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
   'services' => array(
        'type' => 'addable-popup',
        'label' => __('Service', 'logic'),
        'size' => 'medium',
        'desc' => __('Add Services Item', 'logic'),
        'template' => '{{=category}}',
        'popup-options' => array(
            'category' => array(
                'label' => __('Service Category', 'logic'),
                'type' => 'text',
                'value' => 'Web Design',
                'desc' => __('Input Service Category Title', 'logic'),
            ),
            'content' => array(
                'label' => __('Service Description', 'logic'),
                'type' => 'textarea',
                'desc' => __('Service category wise description text', 'logic'),
            ),
            'image' => array(
                'label' => __('Service Image', 'logic'),
                'type' => 'upload',
                'desc' => __('Upload your service category image', 'logic'),
            ),
            'button_settings' => array(
                'type' => 'addable-popup',
                'label' => 'Button',
                'limit' => '1',
                'desc' => 'Add your button',
                'template' => 'Button : {{- label }}',
                'popup-options' => array(
                    'style' => array(
                        'label' => __('Style', 'logic'),
                        'desc' => __('Choose button style', 'logic'),
                        'type' => 'image-picker',
                        'value' => '',
                        'choices' => array(
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
        ),
    ),

);
